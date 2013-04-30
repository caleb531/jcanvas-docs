<h2>Lines</h2>

<p>To draw a series of line segments on the canvas, use the <code>drawLine()</code> method. Coordinates are defined using <code>x1</code>, <code>y1</code>, <code>x2</code>, <code>y2</code>, and so on.</p>

<pre class="prettyprint lang-js demo">
$("canvas").drawLine({
  strokeStyle: "#000",
  strokeWidth: 10,
  x1: 100, y1: 50,
  x2: 100, y2: 150,
  x3: 200, y3: 100,
  x4: 150, y4: 200
});
</pre>

<h3>Closing a path</h3>

<p>If you wish to close a path, use the <code>closed</code> property.</p>

<pre class="prettyprint lang-js demo">
$("canvas").drawLine({
  strokeStyle: "#000",
  strokeWidth: 10,
  x1: 100, y1: 50,
  x2: 100, y2: 150,
  x3: 200, y3: 100,
  x4: 150, y4: 200,
  closed: true
});
</pre>


<h3>Rounded Corners</h3>

<p>You can round the corners of a line using the <code>rounded</code> property.</p>

<pre class="prettyprint lang-js demo">
$("canvas").drawLine({
  strokeStyle: "#000",
  strokeWidth: 10,
  rounded: true,
  x1: 80, y1: 50,
  x2: 100, y2: 150,
  x3: 200, y3: 100,
  x4: 150, y4: 200
});
</pre>

<h3>Plotting an array of points</h3>

<p>If you wish to utilize an array containing your points, you can easily construct the <code>drawLine()</code> object using a loop.</p>

<pre class="prettyprint lang-js demo">
// The .drawLine() object
var obj = {
  strokeStyle: "#000",
  strokeWidth: 6,
  rounded: true
};

// Your array of points
var pts = [
  [80, 50],
  [100, 150],
  [200, 100],
  [150, 200]
];

// Add the points from the array to the object
for (var p=0; p&lt;pts.length; p+=1) {
  obj['x'+(p+1)] = pts[p][0];
  obj['y'+(p+1)] = pts[p][1];
}

// Draw the line
$("canvas").drawLine(obj);
</pre>

<h3>Vectors</h3>

<p>Instead of the <code>drawLine()</code> method, you can also plot line segments using the <code><a href='/projects/jcanvas/docs/vectors/'>drawVector()</a></code> method (which draws lines using vectors rather than (x, y) coordinates).</p>