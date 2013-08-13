<h2>Get Canvas Image</h2>

<p>The <code>getCanvasImage()</code> method retrieves the canvas's image data as a string. The string is a base64-encoded image URL, which can be used as a valid image URL for any purpose.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$("canvas").getCanvasImage();
</pre>
</div>

<p>The default image type is PNG, although you can specify PNG, or JPEG.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$("canvas").getCanvasImage("png");
$("canvas").getCanvasImage("jpeg");
</pre>
</div>

<h3>Setting Quality</h3>

<p>If you choose to retrieve the canvas image as a JPEG, you may also set the JPEG's quality (which ranges from <code>0</code> to <code>1</code>).</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$("canvas").getCanvasImage("jpeg", 0.5);
</pre>
</div>

<h3>Notes</h3>

<p>This method does not work on Google Chrome if the page is served from a file URL (<code>file://</code>). This is a limitation of Google Chrome's sandboxing architecture, and therefore cannot be fixed. However, this method still works when the page is served from a server (either online or running locally via <code>localhost://</code>).</p>