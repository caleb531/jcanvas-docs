## Scaling the canvas

### Scaling the canvas context

The `scaleCanvas()` method scales the canvas from the included point.

```javascript
$('canvas').scaleCanvas({
  x: 100, y: 100,
  scaleX: 1.5, scaleY: 3
})
.drawArc({
  fillStyle: '#000',
  x: 100, y: 100,
  radius: 20
})
.restoreCanvas();
```

### The `scale` property

You can also set both the `scaleX` and `scaleY` properties using the `scale` property.

```javascript
$('canvas').scaleCanvas({
  scale: 2
})
.drawRect({
  fillStyle: '#000',
  x: 100, y: 100,
  width: 100, height: 50
})
.restoreCanvas();
```


### Scaling an individual shape

Rather than scaling the entire canvas, you can scale an individual shape using any of these three properties: `scale`, `scaleX`, or `scaleY`.

```javascript
// This square is scaled to be a rectangle
$('canvas').drawRect({
  fillStyle: '#36c',
  x: 200, y: 100,
  width: 100, height: 100,
  scaleX: 3
});
```

### Layers

Although it may seem slightly counterintuitive, the `scaleCanvas()` method can actually be drawn as a layer. This allows for applying canvas transformations when drawing layers.

To do this, set the `layer` property to `true`, just as you would to make any other shape a layer. In addition, just as you can with any other type of layer, you can give this layer a name using the `name` property.

```javascript
$('canvas').scaleCanvas({
  layer: true,
  name: 'scale1'
});
```

However, whenever you're done scaling the canvas, you must restore the transformation using the `restoreCanvas()` method.

```javascript
$('canvas').restoreCanvas({
  layer: true
});
```

### Notes

The `scaleX` and `scaleY` values are multiples of the canvas's current width/height (i.e. `1` is the baseline).

To revert to the canvas's previous state, call the `[restoreCanvas()](/jcanvas/docs/restoreCanvas/)` method. However, you do not need to call this method when scaling an individual shape.
