<h2 class="menu">Gradients</h2>

<p>The <code>createGradient()</code> method returns a canvas gradient object, which is used as a fill or stroke style.</p>

<p>Gradient colors are defined using <code>c1</code>, <code>c2</code>, <code>c3</code>, and so on. Optional color stops are defined using <code>s1</code>, <code>s2</code>, <code>s3</code>, and so on (and can be any number from <code>0</code> through <code>1</code>).</p>

<h3>Linear</h3>

<div class="code demo">
<pre class="prettyprint lang-js">
var linear = $('canvas').createGradient({
  x1: 0, y1: 20,
  x2: 0, y2: 80,
  c1: 'rgb(0, 0, 0)',
  c2: '#0f0',
  c3: 'blue'
});
$('canvas').drawArc({
  fillStyle: linear,
  x: 50, y: 50,
  radius: 30
});
</pre>
</div>

<div class="code demo">
<pre class="prettyprint lang-js">
var linear = $('canvas').createGradient({
  x1: 0, y1: 20,
  x2: 0, y2: 80,
  c1: 'rgb(0, 0, 0)',
  c2: '#0f0', s2: 0.2,
  c3: 'blue', s3: 0.5
});
$('canvas').drawArc({
  fillStyle: linear,
  x: 50, y: 50,
  radius: 30
});
</pre>
</div>

<h3>Radial</h3>

<p>Radial gradients are created when the <code>r1</code> or <code>r2</code> properties are defined.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
var radial = $('canvas').createGradient({
  x1: 50, y1: 50,
  x2: 50, y2: 50,
  r1: 10, r2: 30,
  c1: 'rgba(255, 0, 0, 0.75)',
  c2: '#000'
});
$('canvas').drawArc({
  fillStyle: radial,
  x: 50, y: 50,
  radius: 30
});
</pre>
</div>

<h3>Animating Layers with Gradients</h3>

<p>There are cases where you may wish to animate a layer that has a gradient fill/stroke. However, animating the layer's position or size will leave the gradient unaffected, because gradients are relative to the canvas.</p>

<p>To demonstrate this behavior, consider the following example:</p>

<div class="code demo">
<pre class="prettyprint lang-js">
// Create and store a linear gradient
var gradient = $('canvas').createGradient({
  // Gradient is drawn relative to layer position
  x1: 0, y1: 20,
  x2: 0, y2: 140,
  c1: '#36c', c2: '#c33'
});
// Create layer with gradient fill
$('canvas').drawRect({
  layer: true,
  name: 'box',
  fillStyle: gradient,
  x: 100, y: 80,
  width: 100, height: 60
});
// Animate layer
$('canvas').animateLayer('box', {
  x: 220, y: 150
}, 1000);
</pre>
</div>


<p>To solve this problem, by using a function as the layer's fill/stroke style, you can achieve a gradient which moves with its layer. Note that the below example assumes that the gradient's coordinates are relative to the layer's size and position.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
// Create layer with gradient fill
$('canvas').drawRect({
  layer: true,
  name: 'box',
  // Define fill as a function
  fillStyle: function(layer) {
    return $(this).createGradient({
      // Gradient is drawn relative to layer position
      x1: 0, y1: layer.y - layer.height,
      x2: 0, y2: layer.y + layer.height,
      c1: '#36c', c2: '#c33'
    });
  },
  x: 100, y: 80,
  width: 100, height: 60
});
// Animate layer
$('canvas').animateLayer('box', {
  x: 220, y: 150
}, 1000);
</pre>
</div>

<h3>Notes</h3>

<p>Color stops are optional, and are measured from 0 to 1.</p>
