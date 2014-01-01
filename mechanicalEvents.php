<h2 class='menu'>Mechanical Events</h2>

<p>jCanvas allows you to run a callback when you perform a layer-related action, such as adding a new layer or removing an existing layer. These events are referred to in jCanvas terminology as <em>mechanical events</em>, though they work like any other jCanvas event.</p>

<h3>The <code>add</code> event</h3>

<p>The <code>add</code> event fires when a layer is added (but <em>before</em> it is drawn).</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawRect({
  layer: true,
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  add: function(layer) {
    // code to run when layer is added
  }
});
</pre>
</div>

<h3>The <code>remove</code> event</h3>

<p>The <code>remove</code> event fires when a layer is removed using the <code>removeLayer()</code> method.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawRect({
  layer: true,
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  remove: function(layer) {
    // code to run when layer is removed
  }
});
</pre>
</div>

<p>Note that when using methods such as the <code>removeLayerGroup()</code> method, a <code>remove</code> event will fire for each layer in the group.</p>

<h3>The <code>change</code> event</h3>

<p>The <code>change</code> event fires when a layer's properties are changed using the <code>setLayer()</code> method.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawRect({
  layer: true,
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  change: function(layer, props) {
    // code to run when layer properties are changed
  }
});
</pre>
</div>

<p>Note that when using methods such as the <code>setLayerGroup()</code> method, a <code>change</code> event will fire for each layer in the group.</p>

<h3>The <code>move</code> event</h3>

<p>The <code>move</code> event fires when a layer is moved to a new position using the <code>moveLayer()</code> method.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawRect({
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  move: function(layer) {
    // code to run when layer is moved
  }
});
</pre>
</div>

<h3>Animation events</h3>

<p>jCanvas provides the following events pertaining to animation: <code>animatestart</code>, <code>animate</code>, and <code>animateend</code>.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawRect({
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  animatestart: function(layer) {
    // code to run when animation starts
  },
  animate: function(layer, fx) {
    // code to run on each frame of the animation
    // fx contains animation-related properties
  }
  animateend: function(layer) {
    // code to run when animation ends
  }
});
</pre>
</div>

<p>jCanvas also supports a <code>stop</code> event, which fires when the <code>stopLayer()</code> method is called.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawRect({
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  stop: function(layer) {
    // code to run when animation is stopped
  }
});
</pre>
</div>

<p>Similarly, jCanvas supports a <code>delay</code> event, which fires when the <code>delayLayer()</code> method is called.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas').drawRect({
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  delayed: function(layer) {
    // code to run when animation is delayed
  }
});
</pre>
</div>