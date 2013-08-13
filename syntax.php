<h2>Syntax</h2>

<p>All jCanvas methods are regular jQuery methods, and are used in the same manner. Calling a jCanvas method will apply to all canvas elements in the jQuery collection.</p>

<h3>Basic Usage</h3>

<p>Most jCanvas methods accept a map of properties, which may be listed in any order.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw a circle on the canvas
$("canvas").drawArc({
  fillStyle: "black",
  x: 100, y: 100,
  radius: 50
});
</pre>
</div>

<h3>Numeric Values</h3>

<p>Most numeric property values are measured in pixels, although some are relative to the values of other properties. The description for any property will usually mention these special cases when necessary.</p>

<h3>Chaining</h3>

<p>Most jCanvas methods support <a href='http://tobiasahlin.com/blog/quick-guide-chaining-in-jquery/' target='_blank'>chaining</a> for cleaner and faster code.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawArc({
  fillStyle: "black",
  x: 100, y: 100,
  radius: 50
})
.drawArc({
  fillStyle: "#36b",
  x: 300, y: 150,
  radius: 50
});
</pre>
</div>

<h3>Multiple Canvases</h3>

<p>As demonstrated in the examples above, jCanvas can draw the same drawing on multiple canvases.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Applies to all canvas elements
$("canvas").drawArc({
  fillStyle: "black",
  x: 100, y: 100,
  radius: 50
});
</pre>
</div>

<div class='code'>
<pre class='prettyprint lang-js'>
// Applies to all canvas elements with a class of 'demo'
$("canvas.demo").drawArc({
  fillStyle: "black",
  x: 100, y: 100,
  radius: 50
});
</pre>
</div>
