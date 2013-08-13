<h2>Adding layers</h2>

<h3>Adding layers</h3>

<p>The <code>addLayer()</code> method adds a layer to the canvas in the form of an object or a function. The layer is <em>not</em> drawn after calling this method.</p>

<p>If the input is an object, you must specify the <code>method</code> property (i.e. the name of the method associated with the properties you specify). </p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Create a rectangle layer
$("canvas").addLayer({
  type: "rectangle",
  fillStyle: "#585",
  x: 100, y: 100,
  width: 100, height: 50
})
.drawLayers();
</pre>
</div>

<p>You can also add a layer using the <code>layer</code> property with any method.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Create and draw a rectangle layer
$("canvas").drawRect({
  layer: true,
  fillStyle: "#585",
  x: 100, y: 100,
  width: 100, height: 50
});
</pre>
</div>

<p>Because we are creating a layer and calling the <code>drawRect()</code> method simultaneously, this will also draw the layer.</p>

<h3>Naming layers</h3>

<p>To name a layer, use the <code>name</code> property. This name can be used later to retrieve, remove, or animate the layer. If the layer is a function, simply give the function a name when defining it (as shown above).</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Create a named layer
$("canvas").drawRect({
  layer: true,
  name: "myBox",
  fillStyle: "#585",
  x: 100, y: 100,
  width: 100, height: 50
});
</pre>
</div>

<p>Note that the layer <code>name</code> must be unique (that is, no two layers on the canvas can have the same name).</p>

<h3>Grouping layers</h3>

<p>To assign the layer a group, use the <code>group</code> property. Doing so will not change the order in which the layer will be drawn. The property is merely for categorization purposes.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawRect({
  layer: true,
  group: "myBoxes",
  fillStyle: "#585",
  x: 100, y: 100,
  width: 100, height: 50
});
</pre>
</div>

<h3>Hiding layers</h3>

<p>To temporarily hide a layer, set its <code>visible</code> property to <code>false</code>. This also will prevent any of the layer's events from triggering.</p>

<p>To show the layer again, set its <code>visible</code> property to <code>true</code>.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// This layer should be invisible
$("canvas").drawRect({
  layer: true,
  visible: false,
  fillStyle: "#585",
  x: 100, y: 100,
  width: 100, height: 50
});
</pre>
</div>

<h3>Function layers</h3>

<p>Instead of an object, the <code>addLayer()</code> method accepts a function using the <code>fn</code> property (this function will run when the layer is drawn). The function also accepts one parameter: the canvas context.</p>

<p>jCanvas refers to these types of layers as <dfn>function layers</dfn></p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Create a named function layer
$("canvas").addLayer({
  type: "function",
  name: "myBox",
  fn: function(ctx) {
    ctx.fillStyle = "#36c";
    ctx.fillRect(50, 50, 100, 50);
  }
})
.drawLayers();
</pre>
</div>

<p>This also works when using the <code>draw()</code> method and the <code>layer</code> property.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Create and draw a named function layer
$("canvas").draw({
  layer: true,
  name: "myBox",
  fn: function(ctx) {
    ctx.fillStyle = "#36c";
    ctx.fillRect(50, 50, 100, 50);
  }
});
</pre>
</div>

<h3>Setting a layer's index</h3>

<p>You can also set a layer's index (in the current layers array) using the <code>index</code> property.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas")
// Define properties for all rectangles
.jCanvas({
  type: 'rectangle',
  width: 100, height: 100
})
.addLayer({
  name: "redBox",
  fillStyle: "#c33",
  x: 180, y: 150,
})
.addLayer({
  name: "greenBox",
  fillStyle: "#585",
  x: 150, y: 200,
})
// Normally on top, but moved to the bottom
.addLayer({
  name: "blueBox",
  index: 0,
  fillStyle: "#36b",
  x: 230, y: 180,
})
.drawLayers();
</pre>
</div>

<p>Keep in mind that a layer's index cannot be greater than the current number of layers. Therefore, you couldn't assign the first layer an index, because there are no other existing layers at that moment.</p>

<h3>Storing Data</h3>

<p>You can also store arbitrary data on any jCanvas layer using the <code>data</code> property.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Create and draw a rectangle layer
$("canvas").drawRect({
  layer: true,
  data: {
    something: true
  },
  fillStyle: "#585",
  x: 100, y: 100,
  width: 100, height: 50
});
</pre>
</div>