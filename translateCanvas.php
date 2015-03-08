<h2 class='menu'>Translate Canvas</h2>

<p>The <code>translateCanvas()</code> method translates the canvas from the included point.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').translateCanvas({
  translateX: 200, translateY: 100
})
.drawRect({
  fillStyle: '#000',
  x: 50, y: 50,
  width: 100, height: 50
})
.restoreCanvas();
</pre>
</div>

<h3>The <code>translate</code> property</h3>

<p>You can also set both the <code>translateX</code> and <code>translateY</code> properties using the <code>translate</code> property.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').translateCanvas({
  translate: 100
})
.drawRect({
  fillStyle: '#000',
  x: 100, y: 100,
  width: 100, height: 50
})
.restoreCanvas();
</pre>
</div>

<h3>Translating an individual shape</h3>

<p>Rather than translating the entire canvas, you can translate an individual shape using any of these three properties.</p>

<div class='code demo'>
<pre class='prettyprint lang-js demo'>
$('canvas')
.drawRect({
  fillStyle: '#474',
  x: 50, y: 50,
  width: 100, height: 50,
  translateX: 200, translateY: 100
});
</pre>
</div>

<p>Please note that translating a shape changes its center of transformation (which will affect how the layer is rotated).</p>

<h3>Layers</h3>

<p>Although it may seem slightly counterintuitive, the <code>translateCanvas()</code> method can actually be drawn as a layer. This allows for applying canvas transformations when drawing layers.</p>

<p>To do this, set the <code>layer</code> property to <code>true</code>, just as you would to make any other shape a layer. In addition, just as you can with any other type of layer, you can give this layer a name using the <code>name</code> property.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$('canvas').translateCanvas({
  layer: true,
  name: 'translate1'
});
</pre>
</div>

<p>However, whenever you're done translating the canvas, you must restore the transformation using the <code>restoreCanvas()</code> method.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$('canvas').restoreCanvas({
  layer: true
});
</pre>
</div>


<h3>Notes</h3>

<p>To revert to the canvas's previous state, call the <code><a href='/projects/jcanvas/docs/restoreCanvas/'>restoreCanvas()</a></code> method. However, you do not need to call this method when translating an individual shape.</p>
