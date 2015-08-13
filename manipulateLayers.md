## Manipulating Layers

### Setting layer properties

Using the `setLayer()` method, you can set the properties of a layer. The method's arguments include:

  1. The `name` or index of the layer, or the layer itself
  2. The object of properties to set.

Note that this method does not automatically redraw the canvas.

```javascript
$('canvas').setLayer('myBox', {
  fillStyle: '#36b',
  rotate: 30,
  x: '+=100',
  y: '-=100'
})
.drawLayers();
```

Note that the you can use the `'+="` and `"-="` strings to increment and decrement numbers, respectively.

You can also set properties on *all* layers using the `setLayers()` method.

```javascript
// Set properties of all layers
$('canvas').setLayers({
  fillStyle: '#36b',
  rotate: 30
})
.drawLayers();
```

Note that the `setLayers()` method also accepts a callback function as s second argument, which filters the layers.

```javascript
// Set properties of all draggable layers
$('canvas').setLayers({
  fillStyle: '#36b',
  rotate: 30
}, function(layer) {
  return (layer.draggable === true);
})
.drawLayers();
```

### Setting layer group properties

Using the `setLayerGroup()` method, you can set any properties of all layers in the group. The method accepts the same arguments as `setLayer()`.

Also note that this method does not automatically redraw the canvas.

```javascript
// Set properties for all layers
// in the group 'myBoxes'
$('canvas').setLayerGroup('myBoxes', {
  fillStyle: '#36b',
  rotate: 30
})
.drawLayers();
```

### Moving layers

Using the `moveLayer()` method, you can move a layer to a new index in the layers array. Please note that the canvas does not change until you redraw it.

The method accepts a layer ID (name, index, or object), and the new index to which the layer is to be moved.

Also note that this method does not automatically redraw the canvas.

```javascript
// Move the layer with the name 'box' to index 1
$('canvas').moveLayer('box', 1);
```

### Removing layers

jCanvas provides a `removeLayer()` method for removing one layer from the jCanvas layers array.

Also note that this method does not automatically redraw the canvas.

```javascript
// Removes the layer at index 0
$('canvas').removeLayer(0);
```

```javascript
// Removes the layer with the name 'myBox'
$('canvas').removeLayer('myBox');
```

Furthermore, you can remove all layers using the `removeLayers()` method.

```javascript
// Remove all layers
$('canvas').removeLayers();
```

As with the `getLayers()` and `setLayers()` methods, the `removeLayers()` method also accepts a callback function.

```javascript
// Remove all draggable layers
$('canvas').removeLayers(function(layer) {
  return (layer.draggable === true);
});
```

### Removing layer groups

Using the `removeLayerGroup()` method, You can remove any layers from the layers array which are in the same layer group.

```javascript
// Remove all layers in the group 'myBoxes'
$('canvas').removeLayerGroup('myBoxes');
```

To dynamically remove an existing layer from a group, use the `removeLayerFromGroup()` method.

```javascript
// Remove the layer with the name 'box'
// from the group 'myBoxes'
$('canvas').removeLayerFromGroup('box', 'myBoxes');
```

### Notes

None of the above methods redraw the canvas after being called. Therefore, you will need to redraw the canvas using the  `drawLayers()` method to see the changes visually.
