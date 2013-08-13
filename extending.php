<h2>Extending jCanvas</h2>

<p>jCanvas provides a plugin API so you can create methods which integrate with jCanvas. To do so, use the <code>jCanvas.extend()</code> method.</p>

<p>The <code>extend()</code> method accepts one object containing three properties:</p>

<ul>
<li><dfn>name</dfn>: The name of the method you are creating</li>
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
  name: "pluginName",
  props: {
    prop: true
  },
  fn: function(ctx, params) {
    // Your code here
  }
});
</pre>
</div>

<h3>Example: drawHeart()</h3>

<p>To demonstrate how this works, we'll be creating a method that draws a heart on the canvas.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Create a drawHeart() method
$.jCanvas.extend({
  name: "drawHeart",
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
$("canvas").drawHeart({
  layer: true,
  draggable: true,
  fillStyle: "#c33",
  radius: 50,
  x: 150, y: 130
});
</pre>
</div>

<h3>API Methods</h3>

<p>The jCanvas object provides a few useful methods for integrating your methods with jCanvas.</p>

<ul>
	<li><dfn>detectEvents()</dfn>: This method enables and detects jCanvas events for your custom path. The method accepts three arguments: the canvas DOM element, the canvas context, and the parameters object.
		<ul>
			<li>This method should be called at the end of your path.</li>
		</ul>
	</li>
	<li><dfn>closePath()</dfn>: This method closes the current path, and fills/strokes it if the respective properties have been set. This method accepts the same arguments as <code>detectEvents()</code>.</li>
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