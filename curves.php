<h2 class='menu'>Curves</h2>

<h3>Quadratic Curves</h3>

<p>A quadratic curve consists of three components:</p>

<ul>
	<li>A start point (<var>x</var>, <var>y</var>)</li>
	<li>A control point to make the curve (<var>cx</var>, <var>cy</var>)</li>
	<li>An end point which becomes the next start point (<var>x</var>, <var>y</var>)</li>
</ul>

<p>You can draw one or more contiguous quadratic curves using the <code>drawQuadratic()</code> method.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawQuadratic({
  strokeStyle: '#000',
  strokeWidth: 5,
  x1: 50, y1: 50, // Start point
  cx1: 200, cy1: 50, // Control point
  x2: 200, y2: 200 // End point
});
</pre>
</div>

<h3>Bézier Curves</h3>

<p>A Beziér curve consists of four components:</p>

<ul>
	<li>A start point (<var>x</var>, <var>y</var>)</li>
	<li>A first control point (<var>cx</var>, <var>cy</var>)</li>
	<li>A second control point (<var>cx</var>, <var>cy</var>)</li>
	<li>An end point which becomes the next start point (<var>x</var>, <var>y</var>)</li>
</ul>

<p>You can draw one or more contiguous Bézier curves using the <code>drawBezier()</code> method.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawBezier({
  strokeStyle: '#000',
  strokeWidth: 5,
  x1: 25, y1: 50, // Start point
  cx1: 175, cy1: 50, // Control point
  cx2: 25, cy2: 150, // Control point
  x2: 175, y2: 150, // Start/end point
  cx3: 275, cy3: 150, // Control point
  cx4: 125, cy4: 1, // Control point
  x3: 300, y3: 50 // Start/end point
});
</pre>
</div>
