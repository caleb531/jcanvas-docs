<h2>Text</h2>

<p>To draw text on the canvas, use the <code>drawText()</code> method.</p>

<p>The resulting text on the canvas is determined by the value of the <code>text</code> and any of the following font properties:</p>

<ul>
	<li><code>fontStyle</code></li>
	<li><code>fontSize</code></li>
	<li><code>fontFamily</code></li>
</ul>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawText({
  fillStyle: "#9cf",
  strokeStyle: "#25a",
  strokeWidth: 2,
  x: 150, y: 100,
  fontSize: 48,
  fontFamily: "Verdana, sans-serif",
  text: "Hello"
});
</pre>
</div>

<h3>Font Sizes</h3>

<p>The value for the <code>fontSize</code> property accepts two different types of values. If you specify the value as a plain number (<em>e.g.</em> <code>48</code>), the font size is interpreted in pixels.

However, you can also specify the number as a string with additional units attached (<em>e.g.</em> <code>"36pt"</code>). Examples of both use cases can be found throughout this section.</p>

<h3>Transforming text</h3>

<p>Just like other shapes, the <code>drawText()</code> method respects the value of the <code>fromCenter</code> and transformation properties such as <code>rotate</code>.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawText({
  fillStyle: "#cfc",
  strokeStyle: "#000",
  strokeWidth: 2,
  x: 150, y: 100,
  fontSize: "50pt",
  fontFamily: "Arial",
  text: "Hello",
  // Measure (x, y) from the text's top-left corner
  fromCenter: false,
  // Rotate the text by 30 degrees
  rotate: 30
});
</pre>
</div>

<h3>Scaling text</h3>

<p>You can animate the font size of text using the <code>scale</code>, <code>scaleX</code>, or <code>scaleY</code> properties.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawText({
  layer: true,
  fillStyle: "#9cf",
  strokeStyle: "#25a",
  strokeWidth: 2,
  x: 200, y: 100,
  fontSize: "36pt",
  fontFamily: "Verdana, sans-serif",
  text: "Hello",
  scale: 2,
  click: function() {
    // Click the text to make it grow
    $(this).animateLayer({
      scale: "+=0.25",
    }, 250);
  }
});
</pre>
</div>

<h3>Measuring text</h3>

<p>The <code>measureText()</code> method returns an object containing the text's calculated <code>width</code> and <code>height</code> (as well as of its other properties).</p>

<p>The method accepts a layer identifier (either the layer's index, or its name). The method also accepts an object of properties (the same properties you use when calling the <code>drawText()</code> method) as the only argument.</p>

<p>In the example below, the circle is only as wide as the text inside of it.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Draw text
$('canvas').drawText({
  layer: true,
  name: 'myText',
  fillStyle: "#36c",
  strokeWidth: 2,
  x: 180, y: 150,
  fontSize: "36pt",
  fontFamily: "Verdana, sans-serif",
  text: "Hello"
})
// Draw circle as wide as the text
.drawArc({
  layer: true,
  strokeStyle: '#000',
  strokeWidth: 4,
  x: 180, y: 150,
  radius: $('canvas').measureText('myText').width / 2
});
</pre>
</div>

<h3 class='beta'>Wrapping text</h3>

<p>You can also define a maximum line width for the text using the <code>maxWidth</code> property. In doing so, each line of text will never be longer than the maximum width (this is known as text "wrapping").</p>

<p>Manually adding a line break can be done so by adding the standard newline character in your string (<code>\n</code>).</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawText({
  fillStyle: "#36c",
  fontStyle: "bold",
  fontSize: "20pt",
  fontFamily: "Trebuchet MS, sans-serif",
  text: "The quick brown fox jumps over the lazy dog.",
  x: 180, y: 100,
  maxWidth: 300
});
</pre>
</div>

<h3>Aligning text</h3>

<p>If you wish to align your text to the <code>left</code> or <code>right</code> (rather than the <code>center</code> by default), use the <code>align</code> property.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawText({
  fillStyle: "#36c",
  fontStyle: "bold",
  fontSize: "20pt",
  fontFamily: "Trebuchet MS, sans-serif",
  text: "The quick brown fox jumps over the lazy dog.",
  x: 180, y: 100,
  align: "left",
  maxWidth: 300
});
</pre>
</div>

<h3>Aligning text to a margin</h3>

<p>With the above <code>align</code> property, the text will, by default, appear to align the text to either the left or right, but will still be centered relative to its <code>x</code> and <code>y</code> coordinates.</p>

<p>The <code>respectAlign</code> property will ensure that the text's (x, y) coordinates are in line with either the left or right margin (depending of the value of the <code>align</code> property). Therefore, enabling this property will require you to adjust your <code>x</code> position accordingly.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawText({
  fillStyle: "#36c",
  fontStyle: "bold",
  fontSize: "20pt",
  fontFamily: "Trebuchet MS, sans-serif",
  text: "The quick brown fox jumps over the lazy dog.",
  x: 80, y: 100,
  align: "left",
  respectAlign: true,
  maxWidth: 300
});
</pre>
</div>

<h3>Changing line height</h3>

<p>The <code>lineHeight</code> property will change the line height of your text. The value of this property is a multiple of the default line height (which is <code>1</code>).</p>

<p>For example, the demo below will double the line height of the text it draws.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawText({
  fillStyle: "#36c",
  fontStyle: "bold",
  fontSize: "20pt",
  fontFamily: "Trebuchet MS, sans-serif",
  text: "The quick brown fox jumps over the lazy dog.",
  x: 180, y: 100,
  align: "left",
  maxWidth: 300,
  lineHeight: 2
});
</pre>
</div>

<p>A line height with a negative value will swap any lines of text (<em>e.g.</em> the top line becomes the bottom line).</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$("canvas").drawText({
  fillStyle: "#36c",
  fontStyle: "bold",
  fontSize: "20pt",
  fontFamily: "Trebuchet MS, sans-serif",
  text: "The quick brown fox jumps over the lazy dog.",
  x: 180, y: 100,
  align: "left",
  maxWidth: 300,
  lineHeight: -2
});
</pre>
</div>

<p>Note that a negative line height will also produce a negative text height when retrieving the width/height of text (using the <code>measureText()</code> method).</p>