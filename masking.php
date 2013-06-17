<h2>Masking</h2>

<p>To create a shape which masks other shapes, use the <code>mask</code> property.</p>

<pre class="prettyprint lang-js demo">
$("canvas").drawArc({
  fillStyle: "#36b",
  x: 150, y: 150,
  radius: 50,
  mask: true
})
.drawRect({
  fillStyle: "#6c1",
  x: 100, y: 120,
  width: 100, height: 100
})
.restoreCanvas();
</pre>

<p>To prevent masking of future shapes, call the <code>restoreCanvas()</code> method.</p>

<h3>Masking draggable shapes</h3>

<p>You can also use masking with draggable shapes.</p>

<p>In this example, move the blue square to change the position of the mask. Move the green square to see how the mask affects it.</p>

<pre class='prettyprint lang-js demo'>
$("canvas").drawRect({
  layer: true,
  draggable: true,
  mask: true,
  fillStyle: "#36c",
  x: 150, y: 150,
  width: 150, height: 150
})
.drawArc({
  layer: true,
  draggable: true,
  fillStyle: "#6c1",
  x: 200, y: 200,
  radius: 50
})
// Restore mask after each redrawing of layers
.restoreCanvasOnRedraw();
</pre>

<p>Because the mask must be restored after each redrawing of layers, we must use the <code>restoreCanvasOnRedraw()</code> method.

<p>You can also use this method whenever you wish to restore a layer mask. Consider the following example, in which the mask is restored before it is able to mask the second layer:</p>

<pre class='prettyprint lang-js demo'>
$("canvas").drawRect({
  layer: true,
  draggable: true,
  mask: true,
  fillStyle: "#36c",
  x: 150, y: 150,
  width: 150, height: 150
})
.restoreCanvasOnRedraw()
.drawArc({
  layer: true,
  draggable: true,
  fillStyle: "#6c1",
  x: 200, y: 200,
  radius: 50
})
</pre>