<h2 class="menu">Lines</h2>

<p>A line path in jCanvas is, essentially, one or more contiguous line segments.</p>

<h3>Basic Usage</h3>

<p>You can draw a line path using the <code>drawLine()</code> method. Coordinates are defined using <code>x1</code>, <code>y1</code>, <code>x2</code>, <code>y2</code>, and so on (as many as necessary).</p>

<div class="code demo">
<pre class="prettyprint lang-js">
$('canvas').drawLine({
  strokeStyle: '#000',
  strokeWidth: 10,
  x1: 100, y1: 50,
  x2: 100, y2: 150,
  x3: 200, y3: 100,
  x4: 150, y4: 200
});
</pre>
</div>

<h3>Closing a line path</h3>

<p>You can, optionally, close a line path, which will connect its start and end points with an extra line. To do so, use the <code>closed</code> property.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
$('canvas').drawLine({
  strokeStyle: '#000',
  strokeWidth: 10,
  x1: 100, y1: 50,
  x2: 100, y2: 150,
  x3: 200, y3: 100,
  x4: 150, y4: 200,
  closed: true
});
</pre>
</div>

<h3>Rounded Corners</h3>

<p>You can round the corners of a line path using the <code>rounded</code> property.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
$('canvas').drawLine({
  strokeStyle: '#000',
  strokeWidth: 10,
  rounded: true,
  x1: 80, y1: 50,
  x2: 100, y2: 150,
  x3: 200, y3: 100,
  x4: 150, y4: 200
});
</pre>
</div>

<h3>Plotting an array of points</h3>

<p>If you wish to utilize an array containing your points, you can easily construct the <code>drawLine()</code> object using a loop.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
// The .drawLine() object
var obj = {
  strokeStyle: '#000',
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
$('canvas').drawLine(obj);
</pre>
</div>

<h3>Dashed lines</h3>

<p>Browsers began recently adopting the ability to create dashed lines. To do so in jCanvas, specify the <code>strokeDash</code> and <code>strokeDashOffset</code> properties.</p>

<p>The <code>strokeDash</code> property accepts an array of one or two numbers, and the <code>strokeDashOffset</code> property accepts a single number. See the <a href="/jcanvas/docs/properties/">Properties</a> page for specific usage details.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
$('canvas').drawLine({
  strokeStyle: '#000',
  strokeWidth: 3,
  strokeDash: [5],
  strokeDashOffset: 0,
  x1: 100, y1: 50,
  x2: 100, y2: 150,
  x3: 200, y3: 100,
  x4: 150, y4: 200
});
</pre>
</div>

<h3>Vectors</h3>

<p>Instead of the <code>drawLine()</code> method, you can also plot line segments using the <code><a href="/jcanvas/docs/vectors/">drawVector()</a></code> method (which draws lines using vectors rather than (<var>x</var>, <var>y</var>) coordinates).</p>
