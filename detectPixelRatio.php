<h2 class='menu'>Detect Pixel Ratio</h2>

<p>jCanvas offers a <code>detectPixelRatio()</code> method for detecting high-resolution displays (including devices with retina displays).</p>

<p>For these devices, the method will increase the dimensional width and height of the canvas, scale its context to match, then scale it down using CSS. This will result in the device rendering the canvas at a higher pixel density.</p>

<p>The method also accepts a callback function as its only argument, which, in turn, accepts the device's pixel ratio as <em>its</em> only argument.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').detectPixelRatio(function(ratio) {
  // Run some code depending on the device pixel ratio
});
</pre>
</div>

<h3>Notes</h3>

<p>Retina displays on Apple devices have a pixel ratio of 2.</p>