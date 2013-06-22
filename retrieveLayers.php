<h2>Retrieving layers</h2>

<h3>Retrieving a single layer</h3>

<p>You can retrieve a specific layer using the <code>getLayer()</code> method. You can pass it the index of the layer, or the layer's assigned <code>name</code>.</p>

<pre class="prettyprint lang-js">
$("canvas").getLayer(0);
</pre>

<pre class="prettyprint lang-js">
$("canvas").getLayer("myBox");
</pre>

<p>You can also retrieve the first layer whose names matches the given regular expression.</p>

<pre class="prettyprint lang-js">
$("canvas").getLayer(/box/gi);
</pre>

<h3>Retrieving all layers</h3>

<p>To retrieve all layers (as an array) for any canvas element, use the <code>getLayers()</code> method.</p>

<p>The <code>getLayers()</code> method returns an array containing each layer object. Therefore, you can act on the array after retrieving it.</p>

<pre class="prettyprint lang-js">
$("canvas").getLayers();
</pre>

<pre class="prettyprint lang-js">
var layers = $("canvas").getLayers();
// Reverse layer order
layers.reverse();
</pre>

<p>The <code>getLayers()</code> method accepts one optional argument: a callback function which filters the layers array to those layers which pass the callback function. That is, If the callback function returns <code>true</code>, the layer will be in the resulting array. If the function returns <code>false</code>, the layer will not be included in the resulting array.</p>

<pre class="prettyprint lang-js">
$("canvas").getLayers(function(layer) {
	return (layer.draggable === true);
});
// Returns an array containing only draggable layers
</pre>

<p>The <code>getLayers()</code> method always returns an array.</p>

<h3>Retrieving layer groups</h3>

<p>If you've defined the same <code>group</code> for a set of layers, you can get those layers using the <code>getLayerGroup()</code> method.</p>

<pre class="prettyprint lang-js">
$("canvas").getLayerGroup("myBoxes");
</pre>

<p>You can also retrieve all layers whose group name matches the given regular expression.</p>

<pre class="prettyprint lang-js">
$("canvas").getLayerGroup(/box/gi);
</pre>

<h3>Retrieving layer indices</h3>

<p>You can retrieve a layer's index in the layers array using the <code>getLayerIndex()</code> method.</p>

<pre class="prettyprint lang-js">
$("canvas").getLayerIndex("box");
</pre>