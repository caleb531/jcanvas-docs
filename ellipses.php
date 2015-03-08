<h2 class='menu'>Ellipses</h2>

<p>An ellipse in jCanvas is, essentially, an elongated circle. The size of an ellipse is determined by its <code>width</code> and <code>height</code> properties.</p>

<h3>Basic Usage</h3>

<p>You can draw an ellipse using the <code>drawEllipse()</code> method.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawEllipse({
  fillStyle: '#c33',
  x: 150, y: 100,
  width: 200, height: 100
});
</pre>
</div>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawEllipse({
  strokeStyle: '#36c',
  strokeWidth: 4,
  x: 150, y: 100,
  width: 200, height: 100
});
</pre>
</div>
