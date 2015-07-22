<h2 class="menu">Manipulating Layers</h2>

<h3>Setting layer properties</h3>

<p>Using the <code>setLayer()</code> method, you can set the properties of a layer. The method's arguments include:</p>

<ol>
	<li>The <code>name</code> or index of the layer, or the layer itself</li>
	<li>The object of properties to set.</li>
</ol>

<p>Note that this method does not automatically redraw the canvas.</p>

<div class="code">
<pre class="prettyprint lang-js">
$('canvas').setLayer('myBox', {
  fillStyle: '#36b',
  rotate: 30,
  x: '+=100',
  y: '-=100'
})
.drawLayers();
</pre>
</div>

<p>Note that the you can use the <code>'+="</code> and <code>"-="</code> strings to increment and decrement numbers, respectively.</p>

<p>You can also set properties on <em>all</em> layers using the <code>setLayers()</code> method.</p>

<div class="code'>
<pre class="prettyprint lang-js">
// Set properties of all layers
$('canvas').setLayers({
  fillStyle: '#36b',
  rotate: 30
})
.drawLayers();
</pre>
</div>

<p>Note that the <code>setLayers()</code> method also accepts a callback function as s second argument, which filters the layers.</p>

<div class="code">
<pre class="prettyprint lang-js">
// Set properties of all draggable layers
$('canvas').setLayers({
  fillStyle: '#36b',
  rotate: 30
}, function(layer) {
  return (layer.draggable === true);
})
.drawLayers();
</pre>
</div>

<h3>Setting layer group properties</h3>

<p>Using the <code>setLayerGroup()</code> method, you can set any properties of all layers in the group. The method accepts the same arguments as <code>setLayer()</code>.</p>

<p>Also note that this method does not automatically redraw the canvas.</p>

<div class="code">
<pre class="prettyprint lang-js">
// Set properties for all layers
// in the group 'myBoxes'
$('canvas').setLayerGroup('myBoxes', {
  fillStyle: '#36b',
  rotate: 30
})
.drawLayers();
</pre>
</div>

<h3>Moving layers</h3>

<p>Using the <code>moveLayer()</code> method, you can move a layer to a new index in the layers array. Please note that the canvas does not change until you redraw it.</p>

<p>The method accepts a layer ID (name, index, or object), and the new index to which the layer is to be moved.</p>

<p>Also note that this method does not automatically redraw the canvas.</p>

<div class="code">
<pre class="prettyprint lang-js">
// Move the layer with the name 'box' to index 1
$('canvas').moveLayer('box', 1);
</pre>
</div>

<h3>Removing layers</h3>

<p>jCanvas provides a <code>removeLayer()</code> method for removing one layer from the jCanvas layers array.</p>

<p>Also note that this method does not automatically redraw the canvas.</p>

<div class="code">
<pre class="prettyprint lang-js">
// Removes the layer at index 0
$('canvas').removeLayer(0);
</pre>
</div>

<div class="code">
<pre class="prettyprint lang-js">
// Removes the layer with the name 'myBox'
$('canvas').removeLayer('myBox');
</pre>
</div>

<p>Furthermore, you can remove all layers using the <code>removeLayers()</code> method.</p>

<div class="code">
<pre class="prettyprint lang-js">
// Remove all layers
$('canvas').removeLayers();
</pre>
</div>

<p>As with the <code>getLayers()</code> and <code>setLayers()</code> methods, the <code>removeLayers()</code> method also accepts a callback function.</p>

<div class="code">
<pre class="prettyprint lang-js">
// Remove all draggable layers
$('canvas').removeLayers(function(layer) {
  return (layer.draggable === true);
});
</pre>
</div>

<h3>Removing layer groups</h3>

<p>Using the <code>removeLayerGroup()</code> method, You can remove any layers from the layers array which are in the same layer group.</p>

<div class="code">
<pre class="prettyprint lang-js">
// Remove all layers in the group 'myBoxes'
$('canvas').removeLayerGroup('myBoxes');
</pre>
</div>

<p>To dynamically remove an existing layer from a group, use the <code>removeLayerFromGroup()</code> method.</p>

<div class="code">
<pre class="prettyprint lang-js">
// Remove the layer with the name 'box'
// from the group 'myBoxes'
$('canvas').removeLayerFromGroup('box', 'myBoxes');
</pre>
</div>

<h3>Notes</h3>

<p>None of the above methods redraw the canvas after being called. Therefore, you will need to redraw the canvas using the  <code>drawLayers()</code> method to see the changes visually.</p>
