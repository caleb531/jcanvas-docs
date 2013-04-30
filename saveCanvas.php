<h2>Save Canvas</h2>

<p>The <code>saveCanvas()</code> method saves the current state of the canvas. This state information typically pertains to how the canvas is currently transformed, as well as how shapes are masked.</p>

<pre class="prettyprint lang-js">
$("canvas").saveCanvas();
</pre>

<p>To revert to the canvas's previous state, call the <code><a href='/projects/jcanvas/docs/restoreCanvas/'>restoreCanvas()</a></code> method.</p>

<pre class="prettyprint lang-js">
$("canvas").restoreCanvas();
</pre>

<h3>Autosaving the Canvas</h3>

<p>Transformation methods (such as <code>rotateCanvas()</code> and <code>scaleCanvas()</code>) automatically call the <code>saveCanvas()</code> method. As a result, calling more than one of these methods requires as many <code>restoreCanvas()</code> calls later.</p>

<pre class="prettyprint lang-js demo">
$("canvas")
// Transform the canvas
.rotateCanvas({
  x: 100, y: 100,
  rotate: 30
})
// Transform the canvas again
.scaleCanvas({
  scale: 2
})
.drawRect({
  fillStyle: "#c33",
  x: 150, y: 100,
  width: 100, height: 100
})
// Undoing both transformations requires two restores
.restoreCanvas()
.restoreCanvas();
</pre>

<p>To reduce the number of repetitive <code>restoreCanvas()</code> calls, set the <code>autosave</code> property to <code>false</code> for each of your transformations. In doing so, you must save the canvas manually before transforming the canvas, which means you only need to restore it once when finished.</p>

<pre class="prettyprint lang-js demo">
$("canvas")
.saveCanvas()
.rotateCanvas({
  x: 100, y: 100,
  rotate: 30,
  autosave: false
})
.scaleCanvas({
  scale: 2,
  autosave: false
})
.drawRect({
  fillStyle: "#c33",
  x: 150, y: 100,
  width: 100, height: 100
})
.restoreCanvas();
</pre>

<p>Furthermore, it may be more convenient to set the <code>autosave</code> property using the <code>jCanvas()</code> method.</p>

<h3>What's Saved?</h3>

<p>The <code>saveCanvas()</code> method does not save what's currently drawn on the canvas. Rather, the method saves the current canvas transformation state (which includes rotation, scaling, translatio, and masks).</p>