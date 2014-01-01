<h2 class='menu'>Rectangles</h2>

<p>A rectangle in jCanvas is, essentially, a rectangle of any width or height.</p>

<h3>Basic Usage</h3>

<p>You can draw a rectangle using the <code>drawRect()</code> method. The size of a rectangle is determined by its <code>width</code> and <code>height</code> properties.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawRect({
  fillStyle: '#000',
  x: 150, y: 100,
  width: 200,
  height: 100
});
</pre>
</div>

<h3>Positioning</h3>

<p>The <code>fromCenter</code> property (used above) determines if a rectangle's <code>x</code> and <code>y</code> properties lie at its center (as opposed to its top-left corner). This property is <code>true</code> by default.</p>

<p>For example, consider the following rectangles. They both have the same <code>x</code> and <code>y</code> property values, but only one has its <code>fromCenter</code> property set to <code>false</code>.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawRect({
  fillStyle: '#c33',
  x: 100, y: 60,
  width: 100,
  height: 80
});
$('canvas').drawRect({
  fillStyle: '#6a6',
  x: 100, y: 60,
  width: 100,
  height: 80,
  fromCenter: false
});
</pre>
</div>

<h3>Rounded Corners</h3>

<p>You may round the corners of a rectangle using the <code>cornerRadius</code> property.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawRect({
  fillStyle: '#36c',
  x: 150, y: 100,
  width: 200,
  height: 100,
  cornerRadius: 10
});
</pre>
</div>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawRect({
  strokeStyle: '#c33',
  strokeWidth: 4,
  x: 150, y: 100,
  width: 200,
  height: 100,
  cornerRadius: 10
});
</pre>
</div>