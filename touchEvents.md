## Touch Events

jCanvas supports native touch events on iOS and Android using the `touchstart`, `touchend`, and `touchmove` events.

```javascript
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
```

As a bonus, jCanvas will also convert existing `mousedown`, `mouseup`, and `mousemove` callbacks to their respective touch events on iOS and Android. In other words, jCanvas code that you've written for desktop browsers will be automatically optimized for mobile browsers on iOS and Android.

```javascript
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
```

At this time, jCanvas does not support multi-touch.
