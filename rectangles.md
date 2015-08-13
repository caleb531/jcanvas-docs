## Rectangles

A rectangle in jCanvas is, essentially, a rectangle of any width or height.

### Basic Usage

You can draw a rectangle using the `drawRect()` method. The size of a rectangle is determined by its `width` and `height` properties.

```javascript
$('canvas').drawRect({
  fillStyle: '#000',
  x: 150, y: 100,
  width: 200,
  height: 100
});
```

### Positioning

The `fromCenter` property (used above) determines if a rectangle's `x` and `y` properties lie at its center (as opposed to its top-left corner). This property is `true` by default.

For example, consider the following rectangles. They both have the same `x` and `y` property values, but only one has its `fromCenter` property set to `false`.

```javascript
$('canvas').drawRect({
  fillStyle: '#c33',
  x: 100, y: 60,
  width: 100,
  height: 80
});
$('canvas').drawRect({
  fillStyle: '#6a6',
  x: 100, y: 60,
  width: 100,
  height: 80,
  fromCenter: false
});
```

If you want to make `fromCenter` `false` by default for all shapes, do so using the `$.jCanvas.defaults` object.

```javascript
$.jCanvas.defaults.fromCenter = false;
$('canvas').drawRect({
  fillStyle: '#6a6',
  x: 100, y: 60,
  width: 100,
  height: 80,
  fromCenter: false
});
```

### Rounded Corners

You may round the corners of a rectangle using the `cornerRadius` property.

```javascript
$('canvas').drawRect({
  fillStyle: '#36c',
  x: 150, y: 100,
  width: 200,
  height: 100,
  cornerRadius: 10
});
```

```javascript
$('canvas').drawRect({
  strokeStyle: '#c33',
  strokeWidth: 4,
  x: 150, y: 100,
  width: 200,
  height: 100,
  cornerRadius: 10
});
```
