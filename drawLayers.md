## Drawing layers

The `drawLayers()` method clears the canvas, and draws the canvas's layers.

```javascript
$('canvas').drawLayers();
```

The layers are drawn from first to last, so the last layer will be drawn above all the others.

However, if you need to draw only a single layer on the canvas (to acompany asynchronous code), then use the `drawLayer()` method.

```javascript
$('canvas').drawLayer(0);
```

```javascript
$('canvas').drawLayer('myBox');
```

Please note that the `drawLayer()` method does not clear the canvas before drawing, unlike the `drawLayers()` method.
