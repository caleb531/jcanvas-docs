<h2 class="menu">Draggable Layers</h2>

<h3>Basic Usage</h3>

<p>Layers can be made draggable using the <code>draggable</code> property.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
$('canvas')
.drawArc({
  layer: true,
  draggable: true,
  fillStyle: '#36c',
  x: 150, y: 150,
  radius: 50
})
.drawRect({
  layer: true,
  draggable: true,
  fillStyle: '#6c1',
  x: 100, y: 100,
  width: 100, height: 100
});
</pre>
</div>

<p>By default, draggable shapes will <em>not</em> move to the front when dragged. To change this behavior, set the <code>bringToFront</code> property to <code>true</code>.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
$('canvas')
.drawArc({
  layer: true,
  draggable: true,
  bringToFront: true,
  fillStyle: '#36c',
  x: 150, y: 150,
  radius: 50
})
.drawRect({
  layer: true,
  draggable: true,
  bringToFront: true,
  fillStyle: '#6c1',
  x: 100, y: 100,
  width: 100, height: 100
});
</pre>
</div>

<h3>Drag Events</h3>

<p>You can provide callbacks for when any drag event occurs by defining <code>dragstart</code>, <code>drag</code>, <code>dragstop</code>, and <code>dragcancel</code> callbacks.</p>

<ul>
	<li><dfn>dragstart</dfn>: Triggers when you start dragging a layer</li>
	<li><dfn>drag</dfn>: Triggers as you drag a layer</li>
	<li><dfn>dragstop</dfn>: Triggers when you stop dragging a layer</li>
	<li><dfn>dragcancel</dfn>: Triggers when you drag a layer off the edge of the canvas</li>
</ul>

<div class="code">
<pre class="prettyprint lang-js">
$('canvas')
.drawArc({
  layer: true,
  draggable: true,
  bringToFront: true,
  fillStyle: '#36c',
  x: 150, y: 150,
  radius: 50,
  dragstart: function() {
    // code to run when dragging starts
  },
  drag: function(layer) {
    // code to run as layer is being dragged
  },
  dragstop: function(layer) {
   // code to run when dragging stops
  }
});
</pre>
</div>

<h3>The <code>dragging</code> property</h3>

<p>At any time, you can determine if a layer is currently being dragged by checking its <code>dragging</code> property. When the layer is being dragged, its value is <code>true</code>. Otherwise, its value is <code>false</code>.</p>

<h3>Drag groups</h3>

<p>jCanvas allows you to assign a drag group to a layer. This means that when the layer is dragged, all other layers in the same layer <code>group</code> will also be dragged.</p>

<p>This draggable grouping is achieved when you add the <code>dragGroups</code> property to any (typically all) layers in the same layer group.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
// Both layers will be dragged together
$('canvas')
.drawArc({
  layer: true,
  draggable: true,
  groups: ['shapes'],
  dragGroups: ['shapes'],
  fillStyle: '#36c',
  x: 150, y: 150,
  radius: 50
})
.drawRect({
  layer: true,
  draggable: true,
  groups: ['shapes'],
  dragGroups: ['shapes'],
  fillStyle: '#6c1',
  x: 100, y: 100,
  width: 100, height: 100
});
</pre>
</div>

<h3>Restricting dragging to an axis</h3>

<p>You can restrict the dragging of any layer to either the <var>x</var> or <var>y</var> axis using the <code>restrictDragToAxis</code> property.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
$('canvas')
.drawArc({
  layer: true,
  draggable: true,
  fillStyle: '#36c',
  x: 150, y: 150,
  radius: 50,
  restrictDragToAxis: 'x'
})
.drawRect({
  layer: true,
  draggable: true,
  fillStyle: '#6c1',
  x: 100, y: 100,
  width: 100, height: 100,
  restrictDragToAxis: 'y'
});
</pre>
</div>

<p>Please note that if a layer in a drag group has restricted draggability, then all the draggability of all other layers in that drag group will also be restricted <em>only when the original layer is dragged</em>.</p>
