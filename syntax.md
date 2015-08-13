## Syntax

All jCanvas methods are regular jQuery methods, and are used in the same manner. Calling a jCanvas method will apply to all canvas elements in the jQuery collection.

### Basic Usage

Most jCanvas methods accept a map of properties, which may be listed in any order.

```javascript
// Draw a circle on the canvas
$('canvas').drawArc({
  fillStyle: 'black',
  x: 100, y: 100,
  radius: 50
});
```

### Numeric Values

Most numeric property values are measured in pixels, although some are relative to the values of other properties. The description for any property will usually mention these special cases when necessary.

### Chaining

Most jCanvas methods support [chaining](http://tobiasahlin.com/blog/quick-guide-chaining-in-jquery/) for cleaner and faster code.

```javascript
$('canvas').drawArc({
  fillStyle: 'black',
  x: 100, y: 100,
  radius: 50
})
.drawArc({
  fillStyle: '#36b',
  x: 300, y: 150,
  radius: 50
});
```

### Multiple Canvases

As demonstrated in the examples above, jCanvas can draw the same drawing on multiple canvases.

```javascript
// Applies to all canvas elements
$('canvas').drawArc({
  fillStyle: 'black',
  x: 100, y: 100,
  radius: 50
});
```

```javascript
// Applies to all canvas elements with a class of 'demo'
$('canvas.demo').drawArc({
  fillStyle: 'black',
  x: 100, y: 100,
  radius: 50
});
```
