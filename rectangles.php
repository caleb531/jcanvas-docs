<h2>Rectangles</h2>

<p>Rectangles are drawn using the <code>x</code>, <code>y</code>, <code>width</code>, and <code>height</code> properties.</p>

<pre class="prettyprint lang-js demo">
$("canvas").drawRect({
  fillStyle: "#000",
  x: 50, y: 50,
  width: 200,
  height: 100,
  fromCenter: false
});
</pre>

<p>The <code>fromCenter</code> property determines if the <code>x</code> and <code>y</code> properties define the center point of the rectangle (this property works for other shapes, as well).</p>

<h3>Rounded Corners</h3>

<p>You may round the corners of a rectangle using the <code>cornerRadius</code> property.</p>

<pre class="prettyprint lang-js demo">
$("canvas").drawRect({
  strokeStyle: "#36a",
  strokeWidth: 3,
  x: 150, y: 100,
  width: 200,
  height: 100,
  cornerRadius: 10,
});
</pre>