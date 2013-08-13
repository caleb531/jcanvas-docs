<h2>Draw Manually</h2>

<p>With the <code>draw()</code> method, you can draw on the canvas using native canvas methods (or any method, for that matter). To do this, write your code inside a function </p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").draw({
  fn: function(ctx) {
    ctx.fillStyle = "#333";
    ctx.fillRect(50, 50, 100, 100);
  }
});
</pre>
</div>

<h3>Draw Anything</h3>

<p>The <code>draw()</code> method can be used to draw any other jCanvas drawing (although usually this is not necessary).</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").draw({
  type: "rectangle",
  fillStyle: "#c33",
  x: 100, y: 100,
  width: 100, height: 80
});
</pre>
</div>

<p>The above code is equivalent to the following:</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawRect({
  fillStyle: "#c33",
  x: 100, y: 100,
  width: 100, height: 80
});
</pre>
</div>

<h3>Notes</h3>

<p>The <code>this</code> keyword in the callback function refers to the canvas DOM element.</p>