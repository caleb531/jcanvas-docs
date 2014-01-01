<h2 class='menu'>Saving the canvas</h2>

<h3>Saving the transformation state</h3>

<p>The <code>saveCanvas()</code> method saves the current canvas transformation state. The method usually works in conjunction with the <code><a href='/projects/jcanvas/docs/restoreCanvas/'>restoreCanvas()</a></code> method.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$('canvas').saveCanvas();
</pre>
</div>

<p>The method also accepts a number of parameters as an object, discussed below.</p>

<h3>Saving successively</h3>

<p>Setting the <code>count</code> property to a positive integer will save the canvas that many times. For example, if the <code>count</code> property has a value of <code>3</code>, the method would save the canvas three times.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$('canvas').saveCanvas({
  count: 3
});
</pre>
</div>

<h3>Layers</h3>

<p>Although it may seem slightly counterintuitive, the <code>saveCanvas()</code> method can actually be drawn as a layer. This allows for restoring masks or transformations when drawing layers.</p>

<p>To do this, set the <code>layer</code> property to <code>true</code>, just as you would to make any other shape a layer. In addition, just as you can with any other type of layer, you can give this layer a name using the <code>name</code> property.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$('canvas').saveCanvas({
  layer: true,
  name: 'save1'
});
</pre>
</div>