<h2 class="menu">Event Properties</h2>

<p>jCanvas supports a number of event-related properties which make the Event API more powerful and flexible.</p>

<h3>The <code>eventX</code> and <code>eventY</code> properties</h3>

<p>In any event callback, you have access to the layer's <code>eventX</code> and <code>eventY</code> properties. These are the coordinates of the pointer (either mouse or finger) when the event fired.</p>

<p>In the following example, the closer you hover to the circle's center, the more transparent it will become.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
$('canvas').drawArc({
  layer: true,
  fillStyle: '#c33',
  x: 160, y: 200,
  radius: 100,
  mousemove: function(layer) {
    var distX, distY, dist;
    distX = layer.eventX - layer.x;
    distY = layer.eventY - layer.y;
    // the distance from the circle's center
    dist = Math.sqrt(Math.pow(distX, 2) + Math.pow(distY, 2));
    layer.opacity = dist / layer.radius;
  }
});
</pre>
</div>

<h3>The <code>dx</code> and <code>dy</code> properties.</h3>

<p>In any drag-related event callback for a draggable layer, you have access to the layer's <code>dx</code> and <code>dy</code> properties. These properties represent the change in the layer's position when dragging.</p>

<p>That is, the larger the values are, the faster you are dragging the layer. Conversely, the smaller the values, the slower you are dragging. Also note that these values can be positive or negative depending on the direction of the drag.</p>

<p>In the following example, the opacity of the circle is determined by the speed at which you drag it; that is, the circle will become more faded the faster you drag it.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
$('canvas').drawArc({
  layer: true,
  draggable: true,
  fillStyle: '#c33',
  x: 160, y: 160,
  radius: 50,
  mousemove: function(layer) {
    var delta = Math.sqrt(Math.pow(layer.dx, 2) + Math.pow(layer.dy, 2));
    if (delta !== 0) {
      layer.opacity = 1 / delta;
    }
  }
});
</pre>
</div>

<h3>The <code>cursors</code> property</h3>

<p>The <code>cursors</code> property is used to display a specific cursor when a particular layer event fires. For instance, a draggable</p>

<div class="code demo">
<pre class="prettyprint lang-js">
$('canvas').drawText({
  layer: true,
  draggable: true,
  fillStyle: '#9cf',
  strokeStyle: '#000',
  strokeWidth: 2,
  x: 180, y: 100,
  text: 'Click here',
  fontFamily: 'Trebuchet MS',
  fontSize: 64,
  // Show pointer cursor on hover
  cursors: {
    // Show pointer on hover
  	mouseover: 'pointer',
  	// Show 'move' cursor on mousedown
  	mousedown: 'move',
  	// Revert cursor on mouseup
  	mouseup: 'pointer'
  }
});
</pre>
</div>

<p>jCanvas also adds the correct vendor prefix to a select few CSS3 cursors that require a vendor prefix. These cursor values include <code>grab</code>, <code>grabbing</code>, <code>zoom-in</code>, and <code>zoom-out</code>.</p>

<p>Please note that the cursor always reverts to its previous state when you mouse off the layer.</p>

<h3>The <code>intangible</code> property</h3>

<p>The <code>intangible</code> property essentially allows you to "click through" a layer as if it didn't exist.</p>

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
  // Slight transparency, just for fun
  opacity: 0.5,
  intangible: true,
  fillStyle: '#6c1',
  x: 100, y: 100,
  width: 100, height: 100
});
</pre>
</div>
