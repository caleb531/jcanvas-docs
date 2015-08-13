## Arrows

You can draw arrows in the same way you draw lines or curves, except that you must provide some arrow-specific properties.

### Basic Usage

There are four basic properties which you can use to add an arrow to an existing path:  
	- `startArrow`: A boolean indicating if an arrow is drawn at the start point of the path
	- `endArrow`: A boolean indicating if an arrow is drawn at the end point of the path
	- `arrowAngle`: The angle between the two tips of the angle (optional; defaults to `90`)
	- `arrowRadius`: A number indicating the length of each tip of the arrow (required)

Note that you are not *required* to specify both the `startArrow` and `endArrow` properties. However, you *must* specify one or the other, and you *may* specify both.

### Lines

```javascript
$('canvas').drawLine({
  strokeStyle: '#000',
  strokeWidth: 4,
  rounded: true,
  startArrow: true,
  arrowRadius: 15,
  arrowAngle: 90,
  x1: 100, y1: 100,
  x2: 150, y2: 125,
  x3: 200, y3: 75
});
```

### Vectors

```javascript
$('canvas').drawVector({
  strokeStyle: '#000',
  strokeWidth: 4,
  rounded: true,
  endArrow: true,
  arrowRadius: 15,
  arrowAngle: 90,
  x: 50, y: 50,
  a1: 180, l1: 100,
  a2: 90, l2: 100
});
```

### Quadratic Curves

```javascript
$('canvas').drawQuadratic({
  strokeStyle: '#000',
  strokeWidth: 4,
  rounded: true,
  endArrow: true,
  arrowRadius: 15,
  arrowAngle: 60,
  x1: 50, y1: 50,
  cx1: 200, cy1: 50,
  x2: 250, y2: 200
})
```

### Bézier Curves

```javascript
$('canvas').drawBezier({
  strokeStyle: '#000',
  strokeWidth: 4,
  rounded: true,
  startArrow: true,
  endArrow: true,
  arrowRadius: 15,
  arrowAngle: 90,
  x1: 100, y1: 100,
  cx1: 150, cy1: 100,
  cx2: 100, cy2: 200,
  x2: 150, y2: 200,
  cx3: 250, cy3: 200,
  cx4: 100, cy4: 50,
  x3: 250, y3: 100
})
```

### Arcs

```javascript
$('canvas').drawArc({
  strokeStyle: '#000',
  strokeWidth: 4,
  rounded: true,
  endArrow: true,
  arrowRadius: 15,
  arrowAngle: 90,
  x: 160, y: 120,
  start: 90,
  end: 360,
  radius: 50
});
```

### Paths

```javascript
$('canvas').drawPath({
  strokeStyle: '#000',
  strokeWidth: 5,
  p1: {
    type: 'line',
    x1: 160, y1: 200,
    x2: 160, y2: 50,
    endArrow: true,
    arrowRadius: 30,
    arrowAngle: 90
  },
  p2: {
    type: 'quadratic',
    x1: 160, y1: 50,
    cx1: 160, cy1: 150,
    x2: 100, y2: 200
  }
});
```
