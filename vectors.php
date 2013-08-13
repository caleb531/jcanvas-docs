<h2>Vectors</h2>

<p>Besides using the <code>drawLine()</code> method for drawing line segments on the canvas, you can also use the <code>drawVector()</code> method, which works differently, but produces the same result (contiguous lines).</p>

<p>Using the <code>drawVector()</code> method, each line segment is created from an angle and a length. These segments are defined using <code>a1</code>, <code>l1</code>, <code>a2</code>, <code>l2</code>, and so on.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw a line that is 100px long at 45deg from the north
$("canvas").drawVector({
  strokeStyle: "#000",
  strokeWidth: 4,
  a1: 135, l1: 100
});
</pre>
</div>

<h3>Defining a starting point</h3>

<p>Additionally, you can specify a starting point for your vector using the <code>x</code> and <code>y</code> properties.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawVector({
  strokeStyle: "#000",
  strokeWidth: 4,
  x: 50, y: 50,
  a1: 120, l1: 100
});
</pre>
</div>

<h3>Combining vectors</h3>

<p>Of course, you can create multiple vectors. Keep in mind that no matter where any vector is positioned, its angle is always relative to the north (or 12:00 according to any analog clock).</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw a straight line that is 200px long
$("canvas").drawVector({
  strokeStyle: "#000",
  strokeWidth: 4,
  x: 50, y: 50,
  a1: 135, l1: 100,
  a2: 135, l1: 100
});
</pre>
</div>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw a bent path
$("canvas").drawVector({
  strokeStyle: "#000",
  strokeWidth: 4,
  x: 50, y: 150,
  a1: 45, l1: 100,
  a2: 135, l2: 220
});
</pre>
</div>

<h3>Using line properties</h3>

<p>Because the <code>drawVector()</code> method creates line segments just like the <code>drawLine()</code> method, the <code>drawVector()</code> method  . These properties include (but are not limited to) <code>closed</code> and <code>rounded</code>.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw a closed path (making a triangle)
$("canvas").drawVector({
  strokeStyle: "#000",
  strokeWidth: 4,
  rounded: true,
  closed: true,
  x: 50, y: 150,
  a1: 45, l1: 100,
  a2: 135, l2: 220
});
</pre>
</div>

<p>Details on the usage of these properties can be found in the <a href='/projects/jcanvas/docs/lines/'>Lines</a> section.</p>

<h3>Notes</h3>

<p>Angles are specified in degrees by default. However, if you wish you specify your angles in radians, set the <code>inDegrees</code> property to <code>false</code>.</p>