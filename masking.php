<h2>Masking</h2>

<h3>Basic Masking</h3>

<p>To create a shape that masks other shapes, set the <code>mask</code> property to <code>true</code>.</p>

<pre class="prettyprint lang-js demo">
// This shape is a mask
$("canvas").drawArc({
  fillStyle: "#36b",
  x: 150, y: 150,
  radius: 50,
  mask: true
})
// This shape is being masked
.drawRect({
  fillStyle: "#6c1",
  x: 100, y: 120,
  width: 100, height: 100
})
// Restore mask
.restoreCanvas();
</pre>

<p>To restore the mask and prevent masking of future shapes, call the <code>restoreCanvas()</code> method.</p>

<h3>Layer masks</h3>

<p>You can also create layers that mask other layers by using the <code>mask</code> property. A layer that is a mask is generally referred to as a "layer mask".</p>

<pre class="prettyprint lang-js demo">
// This layer is a mask
$("canvas").drawArc({
  layer: true,
  fillStyle: "#36b",
  x: 150, y: 150,
  radius: 50,
  mask: true
})
// This layer is being masked
.drawRect({
  layer: true,
  fillStyle: "#6c1",
  x: 100, y: 120,
  width: 100, height: 100
})
// Restore layer mask
.restoreCanvas({
  layer: true
});
</pre>

<p>However, when creating layer masks, the <code>restoreCanvas()</code> method must be made into a layer using the <code>layer</code> property, as demonstrated above. For more information, see the <a href='/projects/jcanvas/docs/restoreCanvas/'>Restore Canvas</a> section.</p>

<h3>Masking draggable layers</h3>

<p>In this example, move the shapes to see how layer masks affects the draggability of other shapes.</p>

<pre class='prettyprint lang-js demo'>
// Draw blue square
$("canvas").drawRect({
  layer: true,
  draggable: true,
  mask: true,
  name: 'blue',
  fillStyle: '#36c',
  x: 150, y: 150,
  width: 150, height: 150
})
// Draw orange rectangle
.drawRect({
  layer: true,
  draggable: true,
  name: 'orange',
  fillStyle: '#f63',
  x: 80, y: 120,
  width: 80, height: 30
})
// Restore blue mask
.restoreCanvas({
  layer: true
})
// Draw green circle
.drawArc({
  layer: true,
  mask: true,
  draggable: true,
  name: 'green',
  fillStyle: '#6c1',
  x: 200, y: 200,
  radius: 50
})
// Draw red rectangle
.drawRect({
  layer: true,
  draggable: true,
  name: 'red',
  fillStyle: '#c33',
  x: 180, y: 180,
  width: 50, height: 30
})
// Restore green mask
.restoreCanvas({
  layer: true
})
</pre>