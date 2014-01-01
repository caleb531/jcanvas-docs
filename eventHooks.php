<h2 class='menu'>Event Hooks</h2>

<p>Event hooks are, essentially, event callbacks that apply to all jCanvas layers. They do not override any existing event callbacks, but rather, complement them.</p>

<h3>Canvas Event Hooks</h3>

<p>jCanvas supports a type of event hook called a canvas event hook. Canvas event hooks apply only to layers on the selected canvases.</p>

<p>To define an event hook, call the <code>setEventHooks()</code> method with the event hooks you would like to set. If you wish to remove an existing event hook, simply set its value to <code>null</code>.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').setEventHooks({
  add: function() {
    // code to run whenever a layer is added
  }
});
</pre>
</div>

<p>Similarly, to retrieve the object containing all event hooks for a canvas, use the <code>getEventHooks()</code> method.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').getEventHooks();
</pre>
</div>

<h3>Global Event Hooks</h3>

<p>jCanvas supports another type of event hook called a global event hook. Global event hooks apply to all layers on all canvases, and do not override canvas event hooks.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$.jCanvas.eventHooks.add = function() {
	// code to run when any layer on any canvas is added
};
</pre>
</div>

<h3>Event Bubbling</h3>

<p>With the addition of event hooks, all jCanvas events bubble up, meaning for any jCanvas event that is triggered:

<ol>
	<li>The layer event callback runs first (if it exists)</li>
	<li>The canvas event hook runs second (if it exists)</li>
	<li>The global event hook runs last (if it exists)</li>
</ol>

<h3>Notes</h3>

<p>Event hooks can also be leveraged by jCanvas plugin developers to give their plugins tighter integration with jCanvas</p>