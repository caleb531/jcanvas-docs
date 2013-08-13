<h2>Shadows</h2>

<p>To create a generic shadow, use the <code>shadowColor</code> and <code>shadowBlur</code> properties:</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawArc({
  fillStyle: "#58d",
  shadowColor: "#000",
  shadowBlur: 10,
  x: 50, y: 50,
  radius: 30
});
</pre>
</div>

<h3>Offset Position</h3>

<p>The shadow can be offset relative to itself using the <code>shadowX</code> and <code>shadowY</code> properties:</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawArc({
  fillStyle: "#58d",
  strokeStyle: '#8e3',
  strokeWidth: 4,
  shadowColor: "#000",
  shadowBlur: 5,
  shadowX: -5, shadowY: 5,
  x: 50, y: 50,
  radius: 30
});
</pre>
</div>