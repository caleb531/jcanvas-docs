<h2>Clear Canvas</h2>

<h3>Basic Usage</h3>

<p>This <code>clearCanvas()</code> clears all or any part of the canvas.</p>
<h3>Clear Entire Canvas</h3>
<p>If nothing is passed, the entire canvas is cleared.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$("canvas").clearCanvas();</pre>
</div>

<h3>Clear a Section</h3>

<p>Clearing a section works in the same way as <a href="/projects/jcanvas/docs/rectangles/">drawing a rectangle</a>, with the rectangle being drawn from its center (by default).</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas")
.drawEllipse({
    fillStyle: "#000",
    x: 200, y: 100,
    width: 200, height: 100,
})
.clearCanvas({
    x: 200, y: 100,
    width: 50,
    height: 50
});
</pre>
</div>