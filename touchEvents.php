<h2 class='menu'>Touch Events</h2>

<p>jCanvas supports native touch events on iOS and Android using the <code>touchstart</code>, <code>touchend</code>, and <code>touchmove</code> events.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// This demo will only work on iOS and Android
$('canvas').drawRect({
  layer: true,
  fillStyle: '#36c',
  x: 150, y: 100,
  width: 120, height: 80,
  touchstart: function(layer) {
    // Animate layer when touched
    $(this).animateLayer(0, {
      fillStyle: '#c33',
      scale: 1.5
    }, 250);
  },
  touchend: function(layer) {
    // Revert layer when touch ends
    $(this).animateLayer(0, {
      fillStyle: '#36c',
      scale: 1
    }, 250);
  }
});
</pre>
</div>

<p>As a bonus, jCanvas will also convert existing <code>mousedown</code>, <code>mouseup</code>, and <code>mousemove</code> callbacks to their respective touch events on iOS and Android. In other words, jCanvas code that you've written for desktop browsers will be automatically optimized for mobile browsers on iOS and Android.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// This demo will work on iOS, Android, and desktop browsers
$('canvas').drawRect({
  layer: true,
  fillStyle: '#36c',
  x: 150, y: 100,
  width: 120, height: 80,
  mousedown: function(layer) {
    // Animate layer when moused on or touched
    $(this).animateLayer(0, {
      fillStyle: '#c33',
      scale: 1.5
    }, 250);
  },
  mouseup: function(layer) {
    // Animate layer when moused off or touch ends
    $(this).animateLayer(0, {
      fillStyle: '#36c',
      scale: 1
    }, 250);
  }
});
</pre>
</div>

<p>At this time, jCanvas does not support multi-touch.</p>
