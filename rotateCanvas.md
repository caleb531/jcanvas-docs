## Rotating the canvas

### Rotating the canvas context

The `rotateCanvas()` method rotates the canvas from the included point.

The `x` and `y` properties define the center of rotation.

```javascript
$('canvas').rotateCanvas({
  rotate: 45,
  x: 100, y: 100
})
.drawRect({
  fillStyle: '#000',
  x: 100, y: 100,
  width: 100, height: 50
})
.restoreCanvas();
```

### Rotating an individual shape

Rather than rotating the entire canvas, you can rotate an individual shape using the `rotate` properties.

```javascript
// Rotate this rectangle by 30 degrees
$('canvas').drawRect({
  fillStyle: '#c33',
  x: 200, y: 100,
  width: 150, height: 80,
  rotate: 30
});
```

Please note that you can offset the center of rotation by specifying the `translateX` and `translateY` properties.

```javascript
// Rectangle rotates from its center
$('canvas').drawRect({
  fillStyle: '#c33',
  x: 150, y: 100,
  width: 150, height: 80,
  rotate: 30
});
// Rectangle rotates from its top-left corner
$('canvas').drawRect({
  fillStyle: '#6c3',
  x: 150, y: 100,
  width: 150, height: 80,
  translateX: 75, // width / 2
  translateY: 40, // height / 2
  rotate: 30
});
```

### Layers

Although it may seem slightly counterintuitive, the `rotateCanvas()` method can actually be drawn as a layer. This allows for applying canvas transformations when drawing layers.

To do this, set the `layer` property to `true`, just as you would to make any other shape a layer. In addition, just as you can with any other type of layer, you can give this layer a name using the `name` property.

```javascript
$('canvas').rotateCanvas({
  layer: true,
  name: 'rotate1'
});
```

However, whenever you're done rotating the canvas, you must restore the transformation using the `restoreCanvas()` method.

```javascript
$('canvas').restoreCanvas({
  layer: true
});
```

### Notes

To revert to the canvas's previous state, call the `restoreCanvas()` method. However, you do not need to call this method when rotating an individual shape.
