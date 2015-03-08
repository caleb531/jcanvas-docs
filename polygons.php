<h2 class='menu'>Polygons</h2>

<p>The <code>drawPolygon()</code> method creates a regular (equal-angled) polygon.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw a triangle
$('canvas').drawPolygon({
  strokeStyle: 'black',
  strokeWidth: 4,
  x: 200, y: 100,
  radius: 50,
  sides: 3
});
</pre>
</div>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw a polygon
$('canvas').drawPolygon({
  fillStyle: '#589',
  strokeStyle: '#000',
  x: 100, y: 100,
  radius: 50,
  sides: 5,
  rotate: 25
});
</pre>
</div>

<h3>Concave Polygons</h3>

<p>To create concave polygons (polygons that point inward), include the <code>concavity</code> property.</p>
<ul>
	<li>A value greater than <code>0</code> will cause the sides to point inward.</li>
	<li>A value less than <code>0</code> will cause the sides to point outward.</li>
	<li>A value equal to <code>0</code> does not project at all.</li>
	<li>A value of <code>1</code> will render the polygon invisible, because the sides will point in completely.</li>
</ul>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw a star
$('canvas').drawPolygon({
  fillStyle: '#36c',
  x: 100, y: 100,
  radius: 50,
  sides: 5,
  concavity: 0.5
});
</pre>
</div>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw a badge-like shape
$('canvas').drawPolygon({
  fillStyle: '#3c6',
  strokeStyle: '#083',
  x: 100, y: 100,
  radius: 50,
  sides: 50,
  concavity: 0.1
});
</pre>
</div>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw a shield-like shape
$('canvas').drawPolygon({
  fillStyle: '#36c',
  strokeStyle: '#f60',
  strokeWidth: 5,
  x: 100, y: 100,
  radius: 50,
  sides: 3,
  concavity: -0.5,
  rotate: 180
});
</pre>
</div>
