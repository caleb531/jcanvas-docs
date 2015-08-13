## Event API

jCanvas supports mouse and touch events for most drawings through the included Event API. Events are used in conjunction with the [Layer API](layerAPI.md).

### Binding Events

Any number of jCanvas events can be bound to any jCanvas layer.

The event property's name is always the name of the event itself (`click`, `mousedown`, *etc.*). These properties should be defined in the object passed to the `addLayer()` method.

The value of this event property must be a function. This callback function also accepts one argument, which is the layer's object of properties, as used below. Additionally, the `this` keyword refers to the canvas DOM element.

```javascript
// Draw a green rectangle
$('canvas').drawRect({
  layer: true,
  fillStyle: '#6c0',
  x: 100, y: 100,
  width: 100, height: 80,
  click: function(layer) {
    // code to run when square is clicked
  }
});
```

### Trigger an event

You can also manually trigger an existing event or trigger a nonexisting event to create your own. To do so, use the `triggerLayerEvent()` method.

```javascript
$('canvas').triggerLayerEvent('myLayer', 'click');
```

```javascript
$('canvas').triggerLayerEvent('myLayer', 'resize');
```

Note that the `triggerLayerEvent()` method will trigger all defined event callbacks and event hooks for the given event.

### Supported Methods

  - `drawRect()`
  - `drawArc()`
  - `drawEllipse()`
  - `drawLine()`
  - `drawQuadratic()`
  - `drawBezier()`
  - `drawVector()`
  - `drawGraph()`
  - `drawPolygon()`
  - `drawImage()`
  - `drawText()`

### Supported Events

  - `click`
  - `dblclick`
  - `mousedown`
  - `mouseup`
  - `mousemove`
  - `mouseover`
  - `mouseout`
  - `dragstart`
  - `drag`
  - `dragstop`
  - `touchstart`
  - `touchend`
  - `touchmove`
