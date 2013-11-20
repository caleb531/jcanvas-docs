<h2>Scaling the canvas</h2>

<h3>Scaling the canvas context</h3>

<p>The <code>scaleCanvas()</code> method scales the canvas from the included point.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").scaleCanvas({
  x: 100, y: 100,
  scaleX: 1.5, scaleY: 3
})
.drawArc({
  fillStyle: "#000",
  x: 100, y: 100,
  radius: 20
})
.restoreCanvas();
</pre>
</div>

<h3>The <code>scale</code> property</h3>

<p>You can also set both the <code>scaleX</code> and <code>scaleY</code> properties using the <code>scale</code> property.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").scaleCanvas({
  scale: 2
})
.drawRect({
  fillStyle: "#000",
  x: 100, y: 100,
  width: 100, height: 50
})
.restoreCanvas();
</pre>
</div>


<h3>Scaling an individual shape</h3>

<p>Rather than scaling the entire canvas, you can scale an individual shape using any of these three properties: <code>scale</code>, <code>scaleX</code>, or <code>scaleY</code>.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// This square is scaled to be a rectangle
$("canvas").drawRect({
  fillStyle: "#36c",
  x: 200, y: 100,
  width: 100, height: 100,
  scaleX: 3
});
</pre>
</div>

<h3>Notes</h3>

<p>The <code>scaleX</code> and <code>scaleY</code> values are multiples of the canvas's current width/height (i.e. <code>1</code> is the baseline).</p>

<p>To revert to the canvas's previous state, call the <code><a href='/projects/jcanvas/docs/restoreCanvas/'>restoreCanvas()</a></code> method. However, you do not need to call this method when scaling an individual shape.</p>