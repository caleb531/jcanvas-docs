<h2 class='menu'>Mouse events</h2>

<p>jCanvas supports a number of standard mouse events that you can use on most types of jCanvas layers.</p>

<h3>Events and animation</h3>

<p>When you click the star in the demo below, it will spin.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Click the star to make it spin
$('canvas').drawPolygon({
  layer: true,
  fillStyle: '#c33',
  x: 100, y: 100,
  radius: 50,
  sides: 5,
  concavity: 0.5,
  click: function(layer) {
    // Spin star
    $(this).animateLayer(layer, {
      rotate: '+=144'
    });
  }
});
</pre>
</div>

<h3>Multiple layers with events</h3>

<p>This example utilizes multiple layers with events attached.</p>

<p>When calling the <code>animateLayer()</code> method, you should pass it the layer object to animate that particular layer. Failing to do so will animate the first layer by default.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Create five cascading stars
for (var i=0; i&lt;5; i+=1) {

  $('canvas').drawPolygon({
    layer: true,
    fillStyle: '#c33',
    x: 50+(i*60), y: 50,
    radius: 30,
    sides: 5,
    concavity: 0.5,
    click: function(layer) {
      // Click a star to spin it
      $(this).animateLayer(layer, {
        rotate: '+=144'
      });
    }
  });

}
</pre>
</div>

<h3>The <code>mouseover</code> and <code>mouseout</code> events</h3>

<p>The <code>mouseover</code> and <code>mouseout</code> can be used separately, or together.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Hover over the triangle to rotate it
$('canvas').drawPolygon({
  layer: true,
  fillStyle: '#c33',
  strokeStyle: '#333',
  strokeWidth: 2,
  x: 180, y: 150,
  radius: 100,
  sides: 3,
  mouseover: function(layer) {
    $(this).animateLayer(layer, {
      rotate: '+=60'
    }, 500);
  },
  mouseout: function(layer) {
    $(this).animateLayer(layer, {
      rotate: '+=60'
    }, 500);
  },
});
</pre>
</div>