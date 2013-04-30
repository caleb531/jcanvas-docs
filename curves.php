<h2>Curves</h2>

<h3>Quadratic Curves</h3>

<p>Ever quadratic curve consists of three components:</p>

<ul>
	<li>A start point (<var>x</var>, <var>y</var>)</li>
	<li>A control point to make the curve (<var>cx</var>, <var>cy</var>)</li>
	<li>An end point which becomes the next start point (<var>x</var>, <var>y</var>)</li>
</ul>

<pre class="prettyprint lang-js demo">
$("canvas").drawQuadratic({
  strokeStyle: "#000",
  strokeWidth: 5,
  x1: 50, y1: 50, // Start point
  cx1: 200, cy1: 50, // Control point
  x2: 200, y2: 200 // End point
});
</pre>

<h3>B&eacute;zier Curves</h3>

<p>Ever Bezi&eacute;r curve consists of four components:</p>

<ul>
	<li>A start point (<var>x</var>, <var>y</var>)</li>
	<li>A first control point (<var>cx</var>, <var>cy</var>)</li>
	<li>A second control point (<var>cx</var>, <var>cy</var>)</li>
	<li>An end point which becomes the next start point (<var>x</var>, <var>y</var>)</li>
</ul>

<pre class="prettyprint lang-js demo">
$("canvas").drawBezier({
  strokeStyle: "#000",
  strokeWidth: 5,
  x1: 50, y1: 50, // Start point
  cx1: 200, cy1: 50, // Control point
  cx2: 50, cy2: 150, // Control point
  x2: 200, y2: 150, // Start/end point
  cx3: 300, cy3: 150, // Control point
  cx4: 150, cy4: 1, // Control point
  x3: 350, y3: 50 // Start/end point
});
</pre>