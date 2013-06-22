<h2>Rotating the canvas</h2>

<h3>Rotating the canvas context</h3>

<p>The <code>rotateCanvas()</code> method rotates the canvas from the included point.</p>

<p>The <code>x</code> and <code>y</code> properties define the center of rotation.</p>

<pre class="prettyprint lang-js demo">
$("canvas").rotateCanvas({
  rotate: 45,
  x: 100, y: 100
})
.drawRect({
  fillStyle: "#000",
  x: 100, y: 100,
  width: 100, height: 50
})
.restoreCanvas();
</pre>

<h3>Rotating an individual shape</h3>

<p>Rather than rotating the entire canvas, you can rotate an individual shape using the <code>rotate</code> properties.</p>

<pre class="prettyprint lang-js demo">
// Rotate this rectangle by 30 degrees
$("canvas").drawRect({
  fillStyle: "#c33",
  x: 200, y: 100,
  width: 150, height: 80,
  rotate: 30
});
</pre>

<h3>Notes</h3>

<p>To revert to the canvas's previous state, call the <code><a href='/projects/jcanvas/docs/restoreCanvas/'>restoreCanvas()</a></code> method. However, you do not need to call this method when rotating an individual shape.</p>