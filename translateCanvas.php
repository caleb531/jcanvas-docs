<h2>Translate Canvas</h2>

<p>The <code>translateCanvas()</code> method translates the canvas from the included point.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").translateCanvas({
  translateX: 200, translateY: 100
})
.drawRect({
  fillStyle: "#000",
  x: 50, y: 50,
  width: 100, height: 50
})
.restoreCanvas();
</pre>
</div>

<h3>The <code>translate</code> property</h3>

<p>You can also set both the <code>translateX</code> and <code>translateY</code> properties using the <code>translate</code> property.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").translateCanvas({
  translate: 100
})
.drawRect({
  fillStyle: "#000",
  x: 100, y: 100,
  width: 100, height: 50
})
.restoreCanvas();
</pre>
</div>

<h3>Translating an individual shape</h3>

<p>Rather than translating the entire canvas, you can translate an individual shape using any of these three properties.</p>

<div class='code demo'>
<pre class="prettyprint lang-js demo">
$("canvas")
.drawRect({
  fillStyle: "#474",
  x: 50, y: 50,
  width: 100, height: 50,
  translateX: 200, translateY: 100
});
</pre>
</div>

<p>Please note that translating a shape does not change its center of rotation.</p>

<h3>Notes</h3>

<p>To revert to the canvas's previous state, call the <code><a href='/projects/jcanvas/docs/restoreCanvas/'>restoreCanvas()</a></code> method. However, you do not need to call this method when translating an individual shape.</p>