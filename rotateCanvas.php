<h2>Rotating the canvas</h2>

<h3>Rotating the canvas context</h3>

<p>The <code>rotateCanvas()</code> method rotates the canvas from the included point.</p>

<p>The <code>x</code> and <code>y</code> properties define the center of rotation.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
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
</div>

<h3>Rotating an individual shape</h3>

<p>Rather than rotating the entire canvas, you can rotate an individual shape using the <code>rotate</code> properties.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Rotate this rectangle by 30 degrees
$("canvas").drawRect({
  fillStyle: "#c33",
  x: 200, y: 100,
  width: 150, height: 80,
  rotate: 30
});
</pre>
</div>

<p>Please note that translating a shape changes its center of transformation (which will affect how the layer is rotated).</p>

<h3>Layers</h3>

<p>Although it may seem slightly counterintuitive, the <code>rotateCanvas()</code> method can actually be drawn as a layer. This allows for applying canvas transformations when drawing layers.</p>

<p>To do this, set the <code>layer</code> property to <code>true</code>, just as you would to make any other shape a layer. In addition, just as you can with any other type of layer, you can give this layer a name using the <code>name</code> property.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$("canvas").rotateCanvas({
  layer: true,
  name: "rotate1"
});
</pre>
</div>

<p>However, whenever you're done rotating the canvas, you must restore the transformation using the <code>restoreCanvas()</code> method.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$("canvas").restoreCanvas({
  layer: true
});
</pre>
</div>

<h3>Notes</h3>

<p>To revert to the canvas's previous state, call the <code><a href='/projects/jcanvas/docs/restoreCanvas/'>restoreCanvas()</a></code> method. However, you do not need to call this method when rotating an individual shape.</p>