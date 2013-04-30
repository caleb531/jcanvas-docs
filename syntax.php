<h2>Syntax</h2>

<p>All jCanvas methods are regular jQuery methods, and are used in the same manner. Calling a jCanvas method will apply to all canvas elements in the jQuery collection.</p>

<p>Most jCanvas methods accept a map of properties, which may be listed in any order.</p>

<pre class="prettyprint lang-js demo">
// Draw a circle on the canvas
$("canvas").drawArc({
  fillStyle: "black",
  x: 100, y: 100,
  radius: 50
});
</pre>

<h3>Chaining</h3>

<p>Most jCanvas methods support "chaining" (as do most jQuery methods) for cleaner and faster code.</p>

<pre class="prettyprint lang-js demo">
$("canvas").drawArc({
  fillStyle: "black",
  x: 100, y: 100,
  radius: 50
})
.drawArc({
  fillStyle: "#36b",
  x: 300, y: 150,
  radius: 50
});
</pre>

<h3>Defaults</h3>

<p>jCanvas also maintains a set of preferences. These preferences act as defaults for any properties not defined when calling a jCanvas method.</p>

<p>For instance, the <code>drawArc()</code> method automatically draws a full circle if you omit the arc's <code>start</code> and <code>end</code> properties.</p>

<p>For more information on these defaults, see the <a href='/projects/jcanvas/docs/preferences/'>Preferences</a> section.</p>