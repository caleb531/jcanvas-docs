<h2 class="menu">Functions</h2>

<p>jCanvas allows you to use a user-defined function as the value for any fill or stroke style. The function accepts one argument: the parameters object passed into the method (or the layer object if the drawing is a layer).</p>

<p>Functions as fill/stroke styles can be useful for dynamic computation of those styles.</p>

<div class="code demo">
<pre class="prettyprint lang-js">
// Tshe circle changes color as you drag it
$('canvas').drawArc({
  layer: true,
  draggable: true,
  x: 50, y: 50,
  radius: 30,
  fillStyle: function(layer) {
    var value = Math.round(layer.x / this.width * 360);
    value = Math.min(value, 360);
    return 'hsl(' + value + ', 50%, 50%)';
  }
});
</pre>
</div>

<h3>Notes</h3>

<p>The return value of the given function will be used as the resulting fill/stroke style.</p>
