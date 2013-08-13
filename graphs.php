<h2>Graphs</h2>

<p>jCanvas also allows for flexible graphing of mathematical functions, using the <code>drawGraph()</code> method. The method accepts a few required arguments, and a number of optional arguments</p>

<h3>Basic graphs</h3>

<p>By default, graphs are interpreted as standard Cartesian graphs in the form <code>y&nbsp;=&nbsp;f(x)</code>. You can set the type of graph using the <code>graph</code> property. Other types of graphs will be detailed later.</p>

<p>Additionally, you can define the origin (center) of your graph using the <code>x</code> and <code>y</code> properties.</p>

<p>For example, the code below will draw a graph equivalent to the function <code>y&nbsp;=&nbsp;x&sup2;</code></p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawGraph({
  strokeStyle: "#c33",
  strokeWidth: 4,
  graph: 'y',
  // The vertex of this parabola is at this point
  x: 150, y: 20,
  fn: function(x) {
    return Math.pow(x/5, 2);
  }
});
</pre>
</div>

<h3>Inverse graphs</h3>

<p>You can also draw inverse Cartesian graphs in the form <code>x = f(y)</code>.</p>

<p></p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawGraph({
  strokeStyle: "#000",
  strokeWidth: 4,
  graph: 'x',
  x: 150, y: 100,
  fn: function(y) {
    return Math.pow(y/10, 3);
  }
});
</pre>
</div>

<h3>Polar graphs</h3>

<p>You can also draw polar graphs in the form <code>r = f(&theta;)</code> or <code>r = f(t)</code>. In this case, <code>r</code> is the radius at each point, which is determined by the angle <code>&theta;</code> (or <code>t</code>). </p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawGraph({
  strokeStyle: "#36c",
  strokeWidth: 4,
  graph: 'r',
  x: 150, y: 100,
  fn: function(t) {
    return 100 * Math.sin(2 * t);
  }
});
</pre>
</div>

<h3>Domain and range</h3>

<p>Because graphs occupy the entire canvas by default, you may wish to constrain your graph at some point. You can do so using the <code>domain</code> and <code>range</code> properties.</p>

<p>Both properties accept a single list for a value, and both represent the rectangular constraints of the graph. For instance, the value of the domain property is a list consisting of two numbers (<var>a</var>, <var>b</var>) such that the graph's domain is never less than <var>a</var>, and is never greater than <var>b</var>.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawGraph({
  strokeStyle: "#c33",
  strokeWidth: 4,
  graph: 'y',
  x: 150, y: 20,
  domain: [20, 220],
  range: [0, 100],
  fn: function(x) {
    return Math.pow((x / 10), 2);
  }
});
</pre>
</div>

<p>A value of <code>null</code> for either part of the <code>domain</code> or <code>range</code> signifies that the domain/range continues up to the boundaries of the canvas in that direction.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawGraph({
  strokeStyle: "#36c",
  strokeWidth: 4,
  graph: 'r',
  x: 150, y: 100,
  // The domain starts at 150px and continues to the end of the canvas
  domain: [150, null],
  // This range starts at the left side of the canvas and continues to 100px
  range: [null, 100],
  fn: function(t) {
    return 100 * Math.sin(2 * t);
  }
});
</pre>
</div>

<h3>Using properties as variables</h3>

<p>jCanvas enables any graph's function to use any other given jCanvas properties (for the purpose of manipulation). To utilize these properties, jCanvas passes a parameters object as a second argument to your function.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawGraph({
  layer: true,
  strokeStyle: "#36c",
  strokeWidth: 4,
  graph: 'r',
  x: 150, y: 100,
  // The radius is initially zero
  radius: 0,
  fn: function(t, params) {
    // The graph's size is relative to the given radius
    return params.radius * Math.sin(2 * t);
  }
});
// Grow the graph by increasing its radius
$('canvas').animateLayer(0, {
  radius: 100
}, 1000);
</pre>
</div>

<h3>Draggable graphs</h3>

<p>Because jCanvas calculates only the visible points on a graph, dragging a graph will change the region where it can be dragged.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Try dragging this parabola
$("canvas").drawGraph({
  layer: true,
  draggable: true,
  // Anywhere in the yellow area is draggable
  fillStyle: "#ffc",
  strokeStyle: "#c33",
  strokeWidth: 4,
  graph: 'y',
  x: 150, y: 20,
  fn: function(x) {
    return Math.pow(x/10, 2);
  }
});
</pre>
</div>

<p>Despite this behavior, the <code>drawGraph()</code> function still proves useful when drawing closed shapes, such as the polar clover below.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawGraph({
  layer: true,
  draggable: true,
  // Anywhere in the yellow area is draggable
  fillStyle: "#ffc",
  strokeStyle: "#36c",
  strokeWidth: 4,
  graph: 'r',
  x: 150, y: 100,
  fn: function(t) {
    return 100 * Math.sin(2 * t);
  }
});
</pre>
</div>

<h3>Notes</h3>

<p>Because in a canvas coordinate grid system, <var>y</var> increases going down, rather than up like most Cartesian coordinate grid systems. However, this is easily fixable using the below code.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").scaleCanvas({
  scaleY: -1
});
$("canvas").translateCanvas({
  translateY: -$("canvas").height()
});
</pre>
</div>

<h3>Resources</h3>

<ul>
	<li><a href='http://en.wikipedia.org/wiki/Domain_of_a_function' target='_blank'>Domain of a function</a></li>
	<li><a href='http://en.wikipedia.org/wiki/Range_of_a_function' target='_blank'>Range of a function</a></li>
</ul>