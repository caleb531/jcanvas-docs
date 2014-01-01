<h2 class='menu'>Lines</h2>

<p>A line path in jCanvas is, essentially, one or more contiguous line segments.</p>

<h3>Basic Usage</h3>

<p>You can draw a line path using the <code>drawLine()</code> method. Coordinates are defined using <code>x1</code>, <code>y1</code>, <code>x2</code>, <code>y2</code>, and so on (as many as necessary).</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
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

<div class='code demo'>
<pre class='prettyprint lang-js'>
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

<div class='code demo'>
<pre class='prettyprint lang-js'>
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

<div class='code demo'>
<pre class='prettyprint lang-js'>
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

<h3>Draggable joints</h3>

<p>Using <a href='/projects/jcanvas/docs/layers/'>jCanvas layers</a> and <a href='/projects/jcanvas/docs/events/'>events</a>, you can create a line segment which you can manipulate by dragging its joints. See the example below:</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Cache the canvas element for efficiency
var $canvas = $('canvas');

// Draw a Line layer
$canvas.drawLine({
  layer: true,
  name: 'myLine',
  strokeStyle: '#000',
  strokeWidth: 10,
  rounded: true,
  x1: 100, y1: 100,
  x2: 150, y2: 200,
  x3: 200, y3: 150
});
// Retrieve the layer object
var line = $canvas.getLayer('myLine');

// Create 3 joints (increase the value of n as necessary)
var n = 3;
for (var i = 1; i <= n; i += 1) {
  
  // Use a circle as each 'joint' of the line
  $canvas.drawArc({
    layer: true,
    draggable: true,
    data: {
    	jointNumber: i
    },
    fillStyle: '#c33',
    strokeStyle: '#900',
    strokeWidth: 2,
    x: line['x' + i],
    y: line['y' + i],
    radius: line.strokeWidth,
    // Update line when a joint is dragged
    drag: function(joint) {
      // Retrieve joint number from its name
      var j = joint.data.jointNumber;
      
      // Update line coordinates based on joint's position
      line['x' + j] = joint.x;
      line['y' + j] = joint.y;
      
    }
  });
  
}
</pre>
</div>

<h3>Vectors</h3>

<p>Instead of the <code>drawLine()</code> method, you can also plot line segments using the <code><a href='/projects/jcanvas/docs/vectors/'>drawVector()</a></code> method (which draws lines using vectors rather than (x, y) coordinates).</p>