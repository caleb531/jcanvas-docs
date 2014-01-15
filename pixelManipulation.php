<h2 class='menu'>Pixel Manipulation</h2>

<p>The <code>setPixels()</code> method allows for modification of a specific section of pixels from the canvas.</p>

<p>To modify the pixels, you can loop through each pixel using the <code>each</code> callback method.</p>

<p>The <code>each</code> callback function accepts two parameters:</p>

<ol>
	<li>An object containing the properties for red, green, blue, and alpha color values (<code>r</code>, <code>g</code>, <code>b</code>, <code>a</code>)</li>
	<li>The parameters passed to the <code>setPixels()</code> method</li>
</ol>

<h3>Basic usage</h3>

<div class='code demo'>
<pre class='prettyprint lang-js'>
function invert() {
  $(this).setPixels({
    x: 150, y: 100,
    width: 220, height: 138,
    // loop through each pixel
    each: function(px) {
      px.r = 255 - px.r;
      px.g = 255 - px.g;
      px.b = 255 - px.b;
    }
  });
}

$('canvas').drawImage({
  source: 'images/fish.jpg',
  x: 150, y: 100,
  // Invert image color when image loads
  load: invert
});
</pre>
</div>

<h3>Pixels and Events</h3>

<p>In this example, hovering over the image will manipulate the pixels closest to the part you hovered over.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
function invert(params) {
  $(this).setPixels({
    x: params.eventX, y: params.eventY,
    width: 50, height: 50,
    // loop through each pixel
    each: function(px) {
      px.r = 255 - px.r;
      px.g = 255 - px.g;
      px.b = 255 - px.b;
    }
  });
}

$('canvas').drawImage({
  layer: true,
  source: 'images/fish.jpg',
  x: 150, y: 100,
  mousemove: invert
});
</pre>
</div>

<h3>Notes</h3>

<p>If the <code>width</code>, and <code>height</code> properties are not specified, the method loops through every pixel on the canvas.</p>

<p>The <code>r</code>, <code>g</code>, <code>b</code>, and <code>a</code> properties all range from <code>0</code> to <code>255</code>.</p>

<p>As with all jCanvas methods, the <code>setPixels()</code> method respects the value of the <code>fromCenter</code> property, which defaults to <code>true</code>.</p>