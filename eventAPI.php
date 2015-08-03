<h2 class="menu">Event API</h2>

<p>jCanvas supports mouse and touch events for most drawings through the included Event API. Events are used in conjunction with the <a href="/jcanvas/docs/layerAPI/">Layer API</a>.</p>

<h3>Binding Events</h3>

<p>Any number of jCanvas events can be bound to any jCanvas layer.</p>

<p>The event property's name is always the name of the event itself (<code>click</code>, <code>mousedown</code>, <em>etc.</em>). These properties should be defined in the object passed to the <code>addLayer()</code> method.</p>

<p>The value of this event property must be a function. This callback function also accepts one argument, which is the layer's object of properties, as used below. Additionally, the <code>this</code> keyword refers to the canvas DOM element.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
// Draw a green rectangle
$('canvas').drawRect({
  layer: true,
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 80,
  click: function(layer) {
    // code to run when square is clicked
  }
});
</pre>
</div>

<h3>Trigger an event</h3>

<p>You can also manually trigger an existing event or trigger a nonexisting event to create your own. To do so, use the <code>triggerLayerEvent()</code> method.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
$('canvas').triggerLayerEvent('myLayer', 'click');
</pre>
</div>

<div class="code demo">
<pre class="prettyprint lang-js">
$('canvas').triggerLayerEvent('myLayer', 'resize');
</pre>
</div>

<p>Note that the <code>triggerLayerEvent()</code> method will trigger all defined event callbacks and event hooks for the given event.</p>

<div class="column">
<h3>Supported Methods</h3>
<ul>
	<li><code>drawRect()</code></li>
	<li><code>drawArc()</code></li>
	<li><code>drawEllipse()</code></li>
	<li><code>drawLine()</code></li>
	<li><code>drawQuadratic()</code></li>
	<li><code>drawBezier()</code></li>
	<li><code>drawVector()</code></li>
	<li><code>drawGraph()</code></li>
	<li><code>drawPolygon()</code></li>
	<li><code>drawImage()</code></li>
	<li><code>drawText()</code></li>
</ul>
</div>

<div class="column">
<h3>Supported Events</h3>
<ul>
	<li><code>click</code></li>
	<li><code>dblclick</code></li>
	<li><code>mousedown</code></li>
	<li><code>mouseup</code></li>
	<li><code>mousemove</code></li>
	<li><code>mouseover</code></li>
	<li><code>mouseout</code></li>
	<li><code>dragstart</code></li>
	<li><code>drag</code></li>
	<li><code>dragstop</code></li>
	<li><code>touchstart</code></li>
	<li><code>touchend</code></li>
	<li><code>touchmove</code></li>
</ul>
</div>

<div class="clearfix"></div>
