<h2 class='menu'>Draggable Layers</h2>

<p>Layers can be made draggable using the <code>draggable</code> property.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas')
.drawArc({
  layer: true,
  draggable: true,
  fillStyle: '#36c',
  x: 150, y: 150,
  radius: 50
})
.drawRect({
  layer: true,
  draggable: true,
  fillStyle: '#6c1',
  x: 100, y: 100,
  width: 100, height: 100
});
</pre>
</div>

<p>By default, draggable shapes will <em>not</em> move to the front when dragged. To change this behavior, set the <code>bringToFront</code> property to <code>true</code>.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
$('canvas')
.drawArc({
  layer: true,
  draggable: true,
  bringToFront: true,
  fillStyle: '#36c',
  x: 150, y: 150,
  radius: 50
})
.drawRect({
  layer: true,
  draggable: true,
  bringToFront: true,
  fillStyle: '#6c1',
  x: 100, y: 100,
  width: 100, height: 100
});
</pre>
</div>

<h4>Drag Events</h4>

<p>You can provide callbacks for when any drag event occurs by defining <code>dragstart</code>, <code>drag</code>, <code>dragstop</code>, and <code>dragcancel</code> callbacks.</p>

<ul>
	<li><dfn>dragstart</dfn>: Triggers when you start dragging a layer</li>
	<li><dfn>drag</dfn>: Triggers as you drag a layer</li>
	<li><dfn>dragstop</dfn>: Triggers when you stop dragging a layer</li>
	<li><dfn>dragcancel</dfn>: Triggers when you drag a layer off the edge of the canvas</li>
</ul>

<h3>Draggable groups</h3>

<p>jCanvas allows you to assign a drag group to a layer. This means that when the layer is dragged, all other layers in the same layer <code>group</code> will also be dragged.</p>

<p>This draggable grouping is achieved when you add the <code>dragGroups</code> property to any (typically all) layers in the same ayer group.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Both layers will be dragged together
$('canvas')
.jCanvas({
  layer: true,
  draggable: true,
  groups: ['shapes'],
  dragGroups: ['shapes']
})
.drawArc({
  fillStyle: '#36c',
  x: 150, y: 150,
  radius: 50
})
.drawRect({
  fillStyle: '#6c1',
  x: 100, y: 100,
  width: 100, height: 100
});
</pre>
</div>