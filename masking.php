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
  fillStyle: "#36b",
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
// Restore mask from initial redraw
.restoreCanvas();
</pre>

<p>Because the mask must be restored after drawing initially, we can use the <code>restoreCanvas()</code> method.</p>

<h3>Notes</h3>

<p>As of version 13.04.05, jCanvas will automatically restore any masks after redrawing the canvas (if necessary).</p>