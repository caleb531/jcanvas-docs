<h2 class='menu'>Restore the canvas</h2>

<h3>Restoring the transformation state</h3>

<p>The <code>restoreCanvas()</code> method restores the last saved transformation state of the canvas. The method usually works in conjunction with the <code><a href='/projects/jcanvas/docs/saveCanvas/'>saveCanvas()</a></code> method.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$('canvas').restoreCanvas();
</pre>
</div>

<p>The method also accepts a number of parameters as an object, discussed below.</p>

<h3>Restoring successively</h3>

<p>Setting the <code>count</code> property to a positive integer will restore the canvas that many times. For example, if the <code>count</code> property has a value of <code>3</code>, the method would restore the canvas three times.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$('canvas').restoreCanvas({
  count: 3
});
</pre>
</div>

<h3>Layers</h3>

<p>Although it may seem slightly counterintuitive, the <code>restoreCanvas()</code> method can actually be drawn as a layer. This allows for restoring masks or transformations when drawing layers.</p>

<p>To do this, set the <code>layer</code> property to <code>true</code>, just as you would to make any other shape a layer. In addition, just as you can with any other type of layer, you can give this layer a name using the <code>name</code> property.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$('canvas').restoreCanvas({
  layer: true,
  name: 'restore1'
});
</pre>
</div>