<h2 class='menu'>Images</h2>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawImage({
  source: 'images/fish.jpg',
  x: 150, y: 150
});
</pre>
</div>

<h3>Custom width/height</h3>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawImage({
  source: 'images/fish.jpg',
  x: 50, y: 50,
  width: 80,
  height: 100,
  fromCenter: false
});
</pre>
</div>

<p>If you want to maintain proportions of an image, use the <code>scale</code> property (the scale is a multiple, with <code>1</code> as the baseline).</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawImage({
  source: 'images/fish.jpg',
  x: 150, y: 150,
  scale: 0.5
});
</pre>
</div>

<h3>Using an image element</h3>

<p>You can also use an image DOM element as the value for the <code>source</code> property.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawImage({
  source: $('#fish')[0],
  x: 50, y: 50,
  width: 100,
  fromCenter: false
});
</pre>
</div>

<h3>The <code>load</code> event</h3>

<p>In jCanvas, images are drawn asynchronously because they must load before they can be drawn. In some cases, this isn't an issue because the image loads fast enough, however this isn't always the case.</p>

<p>To address this, jCanvas allows you to run a callback function once the image has loaded, using the <code>load</code> event.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Function for drawing an arc
function arc() {
  $('canvas').drawArc({
    strokeStyle: '#6f9',
    strokeWidth: 4,
    x: 155, y: 155,
    radius: 40
  });
}

// Run the arc() function after the image has loaded
$('canvas').drawImage({
  source: 'images/ladybug.jpg',
  x: 150, y: 150,
  load: arc
});
</pre>
</div>

<p>Note that the <code>load</code> event fires when the image is initially drawn, but <em>also</em> when it is redrawn. Therefore, dragging the image (for example) will cause the <code>load</code> event to fire continuously (as you are dragging).</p>

<h3>Cropping</h3>

<p>Including the <code>sx</code>, <code>sy</code>, <code>sWidth</code>, or <code>sHeight</code> properties allows you to choose which section of the image to crop.</p>

<ul>
	<li><code>sWidth:</code> Defines the width of the crop region</li>
	<li><code>sHeight:</code> Defines the height of the crop region</li>
	<li><code>sx:</code> Defines the x-position of the crop region</li>
	<li><code>sy:</code> Defines the y-position of the crop region</li>
</ul>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawImage({
  source: 'images/ladybug.jpg',
  x: 150, y: 150,
  sWidth: 50,
  sHeight: 50,
  sx: 116, sy: 75
});
</pre>
</div>

<p>By default, the <code>sx</code> and <code>sy</code> properties defines the center of the crop region (for consistency). To change this, set the <code>cropFromCenter</code> property to <code>false</code>.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawImage({
  source: 'images/fish.jpg',
  x: 150, y: 150,
  sWidth: 100,
  sHeight: 50,
  sx: 100, sy: 70,
  cropFromCenter: false
});
</pre>
</div>

<p>Now, the <code>sx</code> and <code>sy</code> properties define the top-left corner of the crop region, as you might expect.</p>

<h3>Images and Layers</h3>

<p>Beginning with version 13.04.05, image layers will always load completely before successive layers are drawn.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawImage({
  layer: true,
  source: 'images/big-fish.jpg',
  x: 150, y: 150,
  width: 200, height: 125
})
.drawArc({
  layer: true,
  fillStyle: '#69f',
  strokeStyle: '#000',
  strokeWidth: 2,
  x: 250, y: 100,
  radius: 50
})
// Redraw layers to ensure correct ordering
.drawLayers();
</pre>
</div>

<h3>Notes</h3>

<p>Internet Explorer 9 has a bug which prevents images from drawing on the canvas if they have not loaded. To fix this, use an existing <code>&lt;img&gt;</code> DOM element as the value for the <code>source</code> property.</p>
