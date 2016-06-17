## Adding layers

### Adding layers

The `addLayer()` method adds a layer to the canvas in the form of an object or a function. The layer is *not* drawn after calling this method.

If the input is an object, you must specify the `type` property (i.e. the type of drawing associated with the properties you specify). Recognized types include `rectangle`, `arc`, `line`, `quadratic`, `bezier`, `text`, and many others.

```javascript
// Create a rectangle layer
$('canvas').addLayer({
  type: 'rectangle',
  fillStyle: '#585',
  x: 100, y: 100,
  width: 100, height: 50
})
.drawLayers();
```

You can also add a layer using the `layer` property with any method.

```javascript
// Create and draw a rectangle layer
$('canvas').drawRect({
  layer: true,
  fillStyle: '#585',
  x: 100, y: 100,
  width: 100, height: 50
});
```

Because we are creating a layer and calling the `drawRect()` method simultaneously, this will also draw the layer.

### Naming layers

To name a layer, use the `name` property. This name can be used later to retrieve, remove, or animate the layer.

```javascript
// Create a named layer
$('canvas').drawRect({
  layer: true,
  name: 'myBox',
  fillStyle: '#585',
  x: 100, y: 100,
  width: 100, height: 50
});
```

Note that the layer `name` must be unique (that is, no two layers on the canvas can have the same name). The layer name can not be a number, either.

### Grouping layers

To assign one or more groups to a layer, use the `groups` property. Doing so will not change the order in which the layer is drawn. The property is merely for categorization purposes.

```javascript
$('canvas').drawRect({
  layer: true,
  groups: ['myBoxes'],
  name: 'box',
  fillStyle: '#585',
  x: 100, y: 100,
  width: 100, height: 50
});
```

To dynamically add an existing layer to a group, use the `addLayerToGroup()` method.

```javascript
$('canvas').addLayerToGroup('box', 'myBoxes');
```

To dynamically remove an existing layer from a group, use the `removeLayerFromGroup()` method. Note that this does not remove the layer from jCanvas.

```javascript
$('canvas').removeLayerFromGroup('box', 'myBoxes');
```

### Hiding layers

To temporarily hide a layer, set its `visible` property to `false`. This also will prevent any of the layer's events from triggering.

To show the layer again, set its `visible` property to `true`.

```javascript
// This layer should be invisible
$('canvas').drawRect({
  layer: true,
  visible: false,
  fillStyle: '#585',
  x: 100, y: 100,
  width: 100, height: 50
});
```

### Function layers

Instead of an object, the `addLayer()` method accepts a function using the `fn` property (this function will run when the layer is drawn). The function also accepts one parameter: the canvas context.

jCanvas refers to these types of layers as *function layers*.

```javascript
// Create a named function layer
$('canvas').addLayer({
  type: 'function',
  name: 'myBox',
  fn: function(ctx) {
    ctx.fillStyle = '#36c';
    ctx.fillRect(50, 50, 100, 50);
  }
})
.drawLayers();
```

This also works when using the `draw()` method and the `layer` property.

```javascript
// Create and draw a named function layer
$('canvas').draw({
  layer: true,
  name: 'myBox',
  fn: function(ctx) {
    ctx.fillStyle = '#36c';
    ctx.fillRect(50, 50, 100, 50);
  }
});
```

### Setting a layer's index

You can also set a layer's index (in the current layers array) using the `index` property.

```javascript
$('canvas')
.addLayer({
  type: 'rectangle',
  name: 'redBox',
  fillStyle: '#c33',
  x: 180, y: 150,
  width: 100, height: 100
})
.addLayer({
  type: 'rectangle',
  name: 'greenBox',
  fillStyle: '#585',
  x: 150, y: 200,
  width: 100, height: 100
})
// Normally on top, but moved to the bottom
.addLayer({
  type: 'rectangle',
  name: 'blueBox',
  index: 0,
  fillStyle: '#36b',
  x: 230, y: 180,
  width: 100, height: 100
})
.drawLayers();
```

Keep in mind that a layer's index cannot be greater than the current number of layers. Therefore, you couldn't assign the first layer an index, because there are no other existing layers at that moment.

### Storing Data

You can also store arbitrary data on any jCanvas layer using the `data` property.

```javascript
// Create and draw a rectangle layer
$('canvas').drawRect({
  layer: true,
  data: {
    something: true
  },
  fillStyle: '#585',
  x: 100, y: 100,
  width: 100, height: 50
});
```
