## Translate Canvas

The `translateCanvas()` method translates the canvas by the given values.

```javascript
$('canvas').translateCanvas({
  translateX: 200, translateY: 100
})
.drawRect({
  fillStyle: '#000',
  x: 50, y: 50,
  width: 100, height: 50
})
.restoreCanvas();
```

### The `translate` property

You can also set both the `translateX` and `translateY` properties using the `translate` property.

```javascript
$('canvas').translateCanvas({
  translate: 100
})
.drawRect({
  fillStyle: '#000',
  x: 100, y: 100,
  width: 100, height: 50
})
.restoreCanvas();
```

### Translating an individual shape

Rather than translating the entire canvas, you can translate an individual shape using any of these three properties.

```javascript
$('canvas')
.drawRect({
  fillStyle: '#474',
  x: 50, y: 50,
  width: 100, height: 50,
  translateX: 200, translateY: 100
});
```

Please note that translating a shape changes its center of transformation (which will affect how the layer is rotated).

### Layers

Although it may seem slightly counterintuitive, the `translateCanvas()` method can actually be drawn as a layer. This allows for applying canvas transformations when drawing layers.

To do this, set the `layer` property to `true`, just as you would to make any other shape a layer. In addition, just as you can with any other type of layer, you can give this layer a name using the `name` property.

```javascript
$('canvas').translateCanvas({
  layer: true,
  name: 'translate1'
});
```

However, whenever you're done translating the canvas, you must restore the transformation using the `restoreCanvas()` method.

```javascript
$('canvas').restoreCanvas({
  layer: true
});
```

### Notes

To revert to the canvas's previous state, call the `[restoreCanvas()](restoreCanvas.md)` method. However, you do not need to call this method when translating an individual shape.
