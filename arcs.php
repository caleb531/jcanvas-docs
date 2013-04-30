<h2>Arcs</h2>

<pre class="prettyprint lang-js demo">
// Draw a 90&deg; arc
$("canvas").drawArc({
  strokeStyle: "#000",
  strokeWidth: 5,
  x: 100, y: 100,
  radius: 50,
  start: 90, end: 180
});
</pre>

<p>If you omit the <code>start</code> and <code>end</code> properties, the arc defaults to a full circle.</p>

<pre class="prettyprint lang-js demo">
// Draw a full circle
$("canvas").drawArc({
  strokeStyle: "#000",
  strokeWidth: 5,
  x: 100, y: 100,
  radius: 50
});
</pre>

<h3>Radian values</h3>

<p>The <code>start</code> and <code>end</code> values are measured in degrees by default. If you'd prefer to use radians, include the <code>inDegrees</code> property with a value of <code>false</code>.</p>

<pre class="prettyprint lang-js demo">
// Draw a black semicircle
$("canvas").drawArc({
  fillStyle: "black",
  x: 100, y: 100,
  radius: 50,
  start: 0, end: Math.PI,
  ccw: true,
  inDegrees: false
});
</pre>

<h3>Closed Arc</h3>

<p>Using the <code>closed</code> property, you can also close an arc, which connects the start and end points.</p>

<pre class="prettyprint lang-js demo">
// Draw a closed red arc
$("canvas").drawArc({
  strokeStyle: "#c33",
  strokeWidth: 5,
  x: 100, y: 100,
  radius: 50,
  start: 30, end: 165,
  closed: true
});
</pre>

<h3>Notes</h3>

<p>Zero degrees is measured from the top of the arc</p>