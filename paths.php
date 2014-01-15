<h2 class='menu'>Paths</h2>

<p>A path in jCanvas consists of one or more connected <a href='/projects/jcanvas/docs/lines/'>lines</a>, <a href='/projects/jcanvas/docs/arcs/'>arcs</a>, <a href='/projects/jcanvas/docs/curves/'>curves</a>, or <a href='/projects/jcanvas/docs/vectors/'>vectors</a>.</p>

<h3>Basic usage</h3>

<p>You can draw a path using the <code>drawPath()</code> method. It accepts a variable number of arguments which define the different kinds of subpaths within your path. These arguments are defined using <code>p1</code>, <code>p2</code>, <code>p3</code>, and so on (however many as desired).</p>

<p>Note that for each of these subpath arguments, you must specify the type of the subpath (for instance, <code>type: 'line'</code>).</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw the outline of a cartoon face
$('canvas').drawPath({
  strokeStyle: '#000',
  strokeWidth: 4,
  p1: {
    type: 'line',
    x1: 200, y1: 50,
    x2: 100, y2: 150,
    x3: 200, y3: 150,
    x4: 120, y4: 200
  },
  p2: {
    type: 'quadratic',
    cx1: 175, cy1: 250,
    x2: 225, y2: 200
  }
});
</pre>
</div>

<p>Now, if you were to draw the quadratic curve in the above example using the <code>drawQuadratic()</code> method, you must specify the <code>x1</code> and <code>y1</code> properties. However, using <code>drawPath()</code> the curve continues from the last point on the previous subpath (<code>p1</code>).</p>

<p>If you <em>were</em> to include the <code>x1</code> and <code>y1</code> properties, the curve would no longer be connected to the previous subpath. Consider the following example.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw a face with the jaw disconnected
$('canvas').drawPath({
  strokeStyle: '#000',
  strokeWidth: 4,
  p1: {
    type: 'line',
    x1: 200, y1: 50,
    x2: 100, y2: 150,
    x3: 200, y3: 150,
    x4: 120, y4: 200
  },
  p2: {
    type: 'quadratic',
    x1: 130, y1: 210,
    cx1: 180, cy1: 250,
    x2: 225, y2: 200
  }
});
</pre>
</div>

<h3>Arcs</h3>

<p>You can also use the <code>drawPath()</code> method to create sequences of interconnected arcs.</p>

<p>The following example will create a flower shape using arcs.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas')
.drawPath({
  strokeStyle: '#000',
  strokeWidth: 4,
  closed: true,
  x: 160, y: 150,
  // Top petal
  p1: {
    type: 'arc',
    x: 0, y: -50,
    start: -90, end: 90,
    radius: 50
  },
  // Right petal
  p2: {
    type: 'arc',
    x: 50, y: 0,
    start: 0, end: 180,
    radius: 50
  },
  // Bottom petal
  p3: {
    type: 'arc',
    x: 0, y: 50,
    start: 90, end: 270,
    radius: 50
  },
  // Left petal
  p4: {
    type: 'arc',
    x: -50, y: 0,
    start: 180, end: 360,
    radius: 50
  }
});
</pre>
</div>

<p>Note that the <code>x</code> and <code>y</code> coordinates for each subpath are <em>relative</em> to the <em>x</em> and <em>y</em> coordinates of the entire path.</p>

<p>Also note that the subpath objects inherit default property values from the global jCanvas preferences (which is set through the <code>jCanvas()</code> method.</p>

<h3>Arrows</h3>

<p>Just like every other path type in jCanvas, generic paths support arrows at either end of the path. See <a href='/projects/jcanvas/docs/arrows/'>the section on arrows</a> for descriptions of the arrow properties.</p>

<p>For generic paths, arrow properties must be specified in a subpath object, not the entire path object.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw the outline of a cartoon face
$('canvas').drawPath({
  strokeStyle: '#000',
  strokeWidth: 4,
  p1: {
    type: 'vector',
    startArrow: true,
    arrowAngle: 60,
    arrowRadius: 30,
    x: 200, y: 50,
    a1: 225, l1: 200,
  },
  p2: {
    type: 'quadratic',
    cx1: 150, cy1: 250,
    x2: 225, y2: 200,
    endArrow: true,
    arrowAngle: 60,
    arrowRadius: 30
  }
});
</pre>
</div>