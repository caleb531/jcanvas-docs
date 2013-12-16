<h2>Arrows</h2>

<p>You can draw arrows in the same way you draw lines or curves, except that you must provide some arrow-specific properties.</p>

<h3>Basic Usage</h3>

<p>There are four basic properties which you can use to add an arrow to an existing path:</p>

<ul>
	<li><dfn>startArrow</dfn>: A boolean indicating if an arrow is drawn at the start point of the path</li>
	<li><dfn>endArrow</dfn>: A boolean indicating if an arrow is drawn at the end point of the path</li>
	<li><dfn>arrowAngle</dfn>: The angle between each tip of the angle and the path itself (optional; defaults to <code>45</code>)</li>
	<li><dfn>arrowRadius</dfn>: A number indicating the length of each tip of the arrow (required)</li>
</ul>

<p>Note that you are not <em>required</em> to specify both the <code>startArrow</code> and <code>endArrow</code> properties. However, you <em>must</em> specify one or the other, and you <em>may</em> specify both.</p>

<h3>Lines</h3>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawLine({
  strokeStyle: "#000",
  strokeWidth: 4,
  rounded: true,
  startArrow: true,
  arrowRadius: 15,
  arrowAngle: 90,
  x1: 100, y1: 100,
  x2: 150, y2: 125,
  x3: 200, y3: 75
});
</pre>
</div>

<h3>Vectors</h3>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawVector({
  strokeStyle: "#000",
  strokeWidth: 4,
  rounded: true,
  endArrow: true,
  arrowRadius: 15,
  arrowAngle: 90,
  x: 50, y: 50,
  a1: 180, l1: 100,
  a2: 90, l2: 100
});
</pre>
</div>

<h3>Quadratic Curves</h3>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawQuadratic({
  strokeStyle: "#396",
  strokeWidth: 4,
  rounded: true,
  endArrow: true,
  arrowRadius: 15,
  arrowAngle: 60,
  x1: 50, y1: 50,
  cx1: 200, cy1: 50,
  x2: 250, y2: 200
})
</pre>
</div>

<h3>Bézier Curves</h3>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawBezier({
  strokeStyle: "#c33",
  strokeWidth: 4,
  rounded: true,
  startArrow: true,
  endArrow: true,
  arrowRadius: 15,
  arrowAngle: 90,
  x1: 100, y1: 100,
  cx1: 150, cy1: 100,
  cx2: 100, cy2: 200,
  x2: 150, y2: 200,
  cx3: 250, cy3: 200,
  cx4: 100, cy4: 50,
  x3: 250, y3: 100
})
</pre>
</div>

<h3>Arcs</h3>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawArc({
  strokeStyle: "#36c",
  strokeWidth: 4,
  rounded: true,
  endArrow: true,
  arrowRadius: 15,
  arrowAngle: 90,
  x: 160, y: 120,
  start: 90,
  end: 360,
  radius: 50
});
</pre>
</div>