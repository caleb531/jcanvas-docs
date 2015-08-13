## Mechanical Events

jCanvas allows you to run a callback when you perform a layer-related action, such as adding a new layer or removing an existing layer. These events are referred to in jCanvas terminology as *mechanical events*, though they work like any other jCanvas event.

### The `add` event

The `add` event fires when a layer is added (but *before* it is drawn).

```javascript
$('canvas').drawRect({
  layer: true,
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  add: function(layer) {
    // code to run when layer is added
  }
});
```

### The `remove` event

The `remove` event fires when a layer is removed using the `removeLayer()` method.

```javascript
$('canvas').drawRect({
  layer: true,
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  remove: function(layer) {
    // code to run when layer is removed
  }
});
```

Note that when using methods such as the `removeLayerGroup()` method, a `remove` event will fire for each layer in the group.

### The `change` event

The `change` event fires when a layer's properties are changed using the `setLayer()` method.

```javascript
$('canvas').drawRect({
  layer: true,
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  change: function(layer, props) {
    // code to run when layer properties are changed
  }
});
```

Note that when using methods such as the `setLayerGroup()` method, a `change` event will fire for each layer in the group.

### The `move` event

The `move` event fires when a layer is moved to a new position using the `moveLayer()` method.

```javascript
$('canvas').drawRect({
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  move: function(layer) {
    // code to run when layer is moved
  }
});
```

### Animation events

jCanvas provides the following events pertaining to animation: `animatestart`, `animate`, and `animateend`.

```javascript
$('canvas').drawRect({
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  animatestart: function(layer) {
    // code to run when animation starts
  },
  animate: function(layer, fx) {
    // code to run on each frame of the animation
    // fx contains animation-related properties
  },
  animateend: function(layer) {
    // code to run when animation ends
  }
});
```

jCanvas also supports a `stop` event, which fires when the `stopLayer()` method is called.

```javascript
$('canvas').drawRect({
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  stop: function(layer) {
    // code to run when animation is stopped
  }
});
```

Similarly, jCanvas supports a `delay` event, which fires when the `delayLayer()` method is called.

```javascript
$('canvas').drawRect({
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 100,
  delayed: function(layer) {
    // code to run when animation is delayed
  }
});
```
