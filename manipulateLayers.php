<h2>Manipulating Layers</h2>

<h3>Setting layer properties</h3>

<p>Using the <code>setLayer()</code> method, you can set the properties of a layer. The method's arguments include:</p>

<ol>
	<li>The <code>name</code> or index of the layer, or the layer itself</li>
	<li>The object of properties to set.</li>
</ol>

<p>Also note that this method does not automatically redraw the canvas.</p>

<pre class="prettyprint lang-js">
$("canvas").setLayer("myBox", {
  fillStyle: "#36b",
  rotate: 30
})
.drawLayers();
</pre>

<h3>Setting layer group properties</h3>

<p>Using the <code>setLayerGroup()</code> method, you can set any properties of all layers in the group. The method accepts the same arguments as <code>setLayer()</code>.</p>

<p>Also note that this method does not automatically redraw the canvas.</p>

<pre class="prettyprint lang-js">
$("canvas").setLayerGroup("myBoxes", {
  fillStyle: "#36b",
  rotate: 30
})
.drawLayers();
</pre>

<h3>Moving layers</h3>

<p>Using the <code>moveLayer()</code> method, you can move a layer to a new index in the layers array. Please note that the canvas does not change until you redraw it.</p>

<p>The method accepts a layer ID (name, index, or object), and the new index to which the layer is to be moved.</p>

<p>Also note that this method does not automatically redraw the canvas.</p>

<pre class="prettyprint lang-js">
$("canvas").moveLayer("box", 1);
</pre>

<h3>Removing layers</h3>

<p>jCanvas provides a <code>removeLayer()</code> method for removing one layer from the jCanvas layers array.</p>

<p>Also note that this method does not automatically redraw the canvas.</p>

<pre class="prettyprint lang-js">
$("canvas").removeLayer(0);
</pre>

<pre class="prettyprint lang-js">
$("canvas").removeLayer("myBox");
</pre>

<p>Furthermore, you can remove all layers using the <code>removeLayers()</code> method.</p>

<pre class="prettyprint lang-js">
$("canvas").removeLayers();
</pre>

<h3>Removing layer groups</h3>

<p>Using the <code>removeLayerGroup()</code> method, You can remove any layers from the layers array which are in the same layer group.</p>

<pre class="prettyprint lang-js">
$("canvas").removeLayerGroup("myBoxes");
</pre>
