<h2>Drawing layers</h2>

<p>The <code>drawLayers()</code> method clears the canvas, and draws the canvas's layers.</p>

<pre class="prettyprint lang-js">
$("canvas").drawLayers();
</pre>

<p>The layers are drawn from first to last, so the last layer will be drawn above all the others.</p>

<p>However, if you need to draw only a single layer on the canvas (to acompany asynchronous code), then use the <code>drawLayer()</code> method.</p>

<pre class="prettyprint lang-js">
$("canvas").drawLayer(0);
</pre>

<pre class="prettyprint lang-js">
$("canvas").drawLayer("myBox");
</pre>

<p>Please note that the <code>drawLayer()</code> method does not clear the canvas before drawing, unlike the <code>drawLayers()</code> method.</p>
