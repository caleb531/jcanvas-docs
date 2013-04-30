<h2>Preferences</h2>

<p>The <code>jCanvas()</code> method sets properties of the jCanvas <code>prefs</code> object, so jCanvas methods called in the future can use those properties as defaults.</p>

<pre class="prettyprint lang-js demo">
$.jCanvas({
  fillStyle: "green",
  x: 80, y: 80,
  radius: 40
});
$("canvas").drawArc();
</pre>

<h3>"Chainable" jCanvas() method</h3>

<p>You can also "chain" the <code>jCanvas()</code> method as you would any other jQuery method (for convenience).</p>

<pre class="prettyprint lang-js demo">
$("canvas")
.jCanvas({
  fillStyle: "green",
  x: 80, y: 80,
  radius: 40
})
.drawArc();
</pre>

<h3>Reset to Defaults</h3>

<p>If nothing is passed to the <code>jCanvas()</code> method, all properties will reset to their default values.</p>

<pre class="prettyprint lang-js">
$.jCanvas();
</pre>

<pre class="prettyprint lang-js">
$("canvas").jCanvas();
</pre>

<h3>Setting Defaults</h3>

<p>As mentioned above, jCanvas preferences only last until you call the <code>jCanvas()</code> method with no arguments. This works because the <code>prefs</code> object actually inherits properties from a <code>defaults</code> object.</p>

<p>Setting these defaults can be done by extending the object itself, then calling the <code>jCanvas()</code> method.</p>

<pre class="prettyprint lang-js">
$.extend($.jCanvas.defaults, {
  newDefault: true
});
$.jCanvas();
</pre>

<p>In doing so, the default value for the <code>newDefault</code> property will always be <code>true</code>, even when resetting the preferences (via the <code>jCanvas()</code> method).</p>

<h3>Notes</h3>
<p>Any properties included when calling a jCanvas method will always override respective properties from the jCanvas preferences object.</p>