<h2>Gradients</h2>

<p>The <code>createGradient()</code> method returns a canvas gradient object, which is used as a fill or stroke style.</p>

<p>Gradient colors are defined using <code>c1</code>, <code>c2</code>, <code>c3</code>, and so on. Optional color stops are defined using <code>s1</code>, <code>s2</code>, <code>s3</code>, and so on (and can be any number from <code>0</code> through <code>1</code>).</p>

<h3>Linear</h3>

<pre class="prettyprint lang-js demo">
var linear = $("canvas").createGradient({
  x1: 0, y1: 20,
  x2: 0, y2: 80,
  c1: "rgb(0, 0, 0)",
  c2: "#0f0",
  c3: "blue"
});
$("canvas").drawArc({
  fillStyle: linear,
  x: 50, y: 50,
  radius: 30
});
</pre>

<pre class="prettyprint lang-js demo">
var linear = $("canvas").createGradient({
  x1: 0, y1: 20,
  x2: 0, y2: 80,
  c1: "rgb(0, 0, 0)",
  c2: "#0f0", s2: 0.2,
  c3: "blue", s3: 0.5
});
$("canvas").drawArc({
  fillStyle: linear,
  x: 50, y: 50,
  radius: 30
});
</pre>

<h3>Radial</h3>

<p>Radial gradients are created when the <code>r1</code> or <code>r2</code> properties are defined.</p>

<pre class="prettyprint lang-js demo">
var radial = $("canvas").createGradient({
  x1: 50, y1: 50,
  x2: 50, y2: 50,
  r1: 10, r2: 30,
  c1: "rgba(255, 0, 0, 0.75)",
  c2: "#000"
});
$("canvas").drawArc({
  fillStyle: radial,
  x: 50, y: 50,
  radius: 30
});
</pre>

<h3>Notes</h3>
<p>Color stops are optional, and are measured from 0 to 1.</p>