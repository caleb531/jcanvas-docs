<h2 class='menu'>Introduction</h2>

<p>The <code>&lt;canvas&gt;</code> element is a new element apart of HTML5. It allows you to draw shapes, paths, images, and other drawings on a blank element called the canvas.</p>

<h3>Creating a canvas</h3>

<p>Before you can draw on the canvas, you need to create one.</p>

<div class='code'>
<pre class='prettyprint lang-html'>
&lt;canvas width='300' height='150'&gt;&lt;/canvas&gt;
</pre>
</div>

<p>Of course, the canvas can be any width/height you want. You may also wish to give the canvas an ID (for future reference).</p>

<p>As a side note, you cannot accurately set a canvas's width and height via CSS; you can only do so through the canvas element's <code>width</code> and <code>height</code> attributes.</p>

<h3>Importing jCanvas</h3>

<p>You also need to add jCanvas to your page somehow (usually a <code>&lt;script&gt;</code> element will do).</p>

<div class='code'>
<pre class='prettyprint lang-html'>
&lt;script src='jcanvas.min.js'&gt;&lt;/script&gt;
</pre>
</div>

<h3>Drawing</h3>

<p>HTML5 provides <a href='https://developer.mozilla.org/en/Canvas_tutorial/Drawing_shapes' target='_blank'>a native JavaScript API</a> for drawing on the canvas. However, we will be using jCanvas instead.</p>

<p>Using jCanvas requires basic knowledge of <a href='http://docs.jquery.com/Tutorials:How_jQuery_Works' target='_blank'>using jQuery</a>.</p>

<h2 class='menu'><a href='/projects/jcanvas/docs/syntax/'>Learn the jCanvas syntax</a></h2>