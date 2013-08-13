<h2>Slices</h2>

<p>A slice in jCanvas is, essentially, a slice of a circle (similar to a pizza slice).</p>

<h3>Basic Usage</h3>

<p>You can draw a slice using the <code>drawSlice()</code> method. The size of a slice is determined by its <code>start</code>, <code>end</code>, and <code>radius</code> properties.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw a 60&deg; slice
$("canvas").drawSlice({
  fillStyle: "#f63",
  x: 100, y: 100,
  radius: 150,
  // start and end angles in degrees
  start: 60, end: 120
});
</pre>
</div>

<h3>Creating a pie chart</h3>

<p>You can create a simple pie chart in jCanvas using the <code>drawSlice()</code> method.</p>

<p>In the example below, the <code>spread</code> property determines the spacing between slices. The property's value is a multiple of the slice's radius (from 0 to 1).</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Apply properties to the following drawings
$("canvas").jCanvas({
  layer: true,
  group: "chart",
  x: 180, y: 110,
  radius: 100,
  spread: 1 / 40
})
.drawSlice({
  name: "red-slice",
  fillStyle: "#c33",
  start: -45,
  end: 15
})
.drawSlice({
  name: "green-slice",
  fillStyle: "#6c6",
  start: -135,
  end: -45
})
.drawSlice({
  name: "blue-slice",
  fillStyle: "#36c",
  start: 15,
  end: -135
})
// Reset jCanvas preferences
.jCanvas();
</pre>
</div>

<p>To add a text label to your pie chart, create a text layer using the <code>drawText()</code> method.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Set jCanvas preferences
$("canvas").jCanvas({
  layer: true,
  group: "chart",
  x: 180, y: 110,
  radius: 100,
  spread: 1 / 40
})
.drawSlice({
  name: "red-slice",
  fillStyle: "#c33",
  start: -45,
  end: 15
})
.drawSlice({
  name: "green-slice",
  fillStyle: "#6c6",
  start: -135,
  end: -45
})
.drawSlice({
  name: "blue-slice",
  fillStyle: "#36c",
  start: 15,
  end: -135
})
// Set jCanvas preferences for labels
.jCanvas({
  fillStyle: "#fff",
  fontSize: 20,
  fontFamily: "Ubuntu, sans-serif"
})
.drawText({
  name: "red-label",
  x: 160, y: 50,
  text: "17%",
})
.drawText({
  name: "green-label",
  x: 120, y: 115,
  text: "25%",
})
.drawText({
  name: "blue-label",
  x: 220, y: 150,
  text: "58%",
})
// Reset jCanvas preferences
.jCanvas()
</pre>
</div>