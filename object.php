<h2>jCanvas Object</h2>

<p>jCanvas includes a <code>jCanvas</code> object as part of the <code>jQuery</code> object.</p>

<div class='code'>
<pre class='prettyprint lang-js'>
$.jCanvas
</pre>
</div>

<p>The <code>jCanvas</code> object contains the following properties/methods:</p>

<ul>
	<li><dfn>defaults</dfn>: an object containing jCanvas's default properties</li>
	<li><dfn>prefs</dfn>: a clone of the <code>defaults</code> object, which can be modified by the <code>jCanvas</code> function.</li>
	<li><dfn>extend</dfn>: a method for extending jCanvas with custom methods.</li>
	<li><dfn>getTouchEventName</dfn>: a method that maps the given mouse event name to a touch event name (if touch events are supported). For example, passing in <code>"mousedown"</code> will return <code>"touchstart"</code> if touch events are supported. Otherwise, the method will return <code>"mousedown"</code>.</li>
</ul>

<h3>jCanvas Function</h3>

<p>While the jCanvas object stores properties and methods, it is actually a function. For more information, see the <a href="/projects/jcanvas/docs/preferences/">Preferences</a> section.</p>