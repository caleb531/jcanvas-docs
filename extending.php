<h2 class='menu'>Extending jCanvas</h2>

<p>jCanvas provides a plugin API so you can create methods which integrate with jCanvas. To do so, use the <code>jCanvas.extend()</code> method.</p>

<p>The <code>extend()</code> method accepts one object containing three properties:</p>

<ul>
<li><dfn>name</dfn>: The name of the method you are creating</li>
<li><dfn>type</dfn>: Optional; the type of drawing, which jCanvas will recognize as a valid value for the <code>type</code> property.</li>
<li><dfn>props</dfn>: Optional; the custom properties your method uses (and their default values). These properties will be merged into the arguments object (mentioned below) for use in your method's code.</li>
<li><dfn>fn</dfn>: The function providing the plugin's functionality. It accepts two arguments:
	<ol>
		<li>The context of the canvas</li>
		<li>The parameters object the method will receive when called</li>
	</ol>
</li>
</ul>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$.jCanvas.extend({
  name: 'pluginName',
  props: {
    prop: true
  },
  fn: function(ctx, params) {
    // Your code here
  }
});
</pre>
</div>

<h3>Example: <code>drawHeart()</code></h3>

<p>To demonstrate how this works, we'll be creating a method that draws a heart on the canvas.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Create a drawHeart() method
$.jCanvas.extend({
  name: 'drawHeart',
  type: 'heart',
  props: {},
  fn: function(ctx, params) {
    // Just to keep our lines short
    var p = params;
    // Draw heart
    ctx.beginPath();
    ctx.moveTo(p.x, p.y + p.radius);
    // Left side of heart
    ctx.quadraticCurveTo(
      p.x - (p.radius * 2),
      p.y - (p.radius * 2),
      p.x,
      p.y - (p.radius / 1.5)
    );
    // Right side of heart
    ctx.quadraticCurveTo(
      p.x + (p.radius * 2),
      p.y - (p.radius * 2),
      p.x,
      p.y + p.radius
    );
    // Call the detectEvents() function to enable jCanvas events
    // Be sure to pass it these arguments, too!
    $.jCanvas.detectEvents(this, ctx, p);
    // Call the closePath() functions to fill, stroke, and close the path
    // This function also enables masking support and events
    // It accepts the same arguments as detectEvents()    
    $.jCanvas.closePath(this, ctx, p);
  }
});

// Use the drawHeart() method
$('canvas').drawHeart({
  layer: true,
  draggable: true,
  fillStyle: '#c33',
  radius: 50,
  x: 150, y: 130
});
</pre>
</div>

<h3>API Methods</h3>

<p>The jCanvas object (<code>$.jCanvas</code>) provides a few useful methods for integrating your methods with jCanvas. All of these methods accept the same three arguments: the canvas DOM element (<code>this</code>), the canvas context (<code>ctx</code>), and the parameters object (<code>params</code>).</p>

<ul>
	<li><dfn>setGlobalProps()</dfn>: </li>
	<li><dfn>transformShape()</dfn>: Enables shape transformation using the standard transformation properties (<code>rotate</code>, <code>scale</code>, <code>translate</code>).</li>
	<li><dfn>detectEvents()</dfn>: Enables and detects jCanvas events for your custom path. The method accepts three arguments:  Note that this method should be called at the end of your path.</li>
	<li><dfn>closePath()</dfn>: Closes the current path, and fills/strokes it if the respective properties have been set. The method also enables masking for the path through the use of the <code>mask</code> property.</li>
	<li><dfn>setCanvasFont()</dfn>: Sets the font of the canvas context based on the <code>fontStyle</code>, <code>fontSize</code>, and <code>fontFamily</code> properties.</li>
	<li><dfn>measureText()</dfn>: Augments the given parameter object with the calculated <code>width</code> and <code>height</code> of the text. Accepts an array of strings (representing lines of text) as a fourth argument.</li>
</ul>

<div class='code'>
<pre class='prettyprint lang-js'>
$.jCanvas.detectEvents(this, ctx, params);
</pre>
</div>

<div class='code'>
<pre class='prettyprint lang-js'>
$.jCanvas.closePath(this, ctx, params);
</pre>
</div>

<h3>Notes</h3>

<p>When calling your method, jCanvas will automatically loop through selected canvas elements, so you don't need to.</p>