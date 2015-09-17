## Lines

A line path in jCanvas is, essentially, one or more contiguous line segments.

### Basic Usage

You can draw a line path using the `drawLine()` method. Coordinates are defined using `x1`, `y1`, `x2`, `y2`, and so on (as many as necessary).

```javascript
$('canvas').drawLine({
  strokeStyle: '#000',
  strokeWidth: 10,
  x1: 100, y1: 50,
  x2: 100, y2: 150,
  x3: 200, y3: 100,
  x4: 150, y4: 200
});
```

### Closing a line path

You can, optionally, close a line path, which will connect its start and end points with an extra line. To do so, use the `closed` property.

```javascript
$('canvas').drawLine({
  strokeStyle: '#000',
  strokeWidth: 10,
  x1: 100, y1: 50,
  x2: 100, y2: 150,
  x3: 200, y3: 100,
  x4: 150, y4: 200,
  closed: true
});
```

### Rounded Corners

You can round the corners of a line path using the `rounded` property.

```javascript
$('canvas').drawLine({
  strokeStyle: '#000',
  strokeWidth: 10,
  rounded: true,
  x1: 80, y1: 50,
  x2: 100, y2: 150,
  x3: 200, y3: 100,
  x4: 150, y4: 200
});
```

### Plotting an array of points

If you wish to utilize an array containing your points, you can easily construct the `drawLine()` object using a loop.

```javascript
// The .drawLine() object
var obj = {
  strokeStyle: '#000',
  strokeWidth: 6,
  rounded: true
};

// Your array of points
var pts = [
  [80, 50],
  [100, 150],
  [200, 100],
  [150, 200]
];

// Add the points from the array to the object
for (var p = 0; p < pts.length; p += 1) {
  obj['x'+(p+1)] = pts[p][0];
  obj['y'+(p+1)] = pts[p][1];
}

// Draw the line
$('canvas').drawLine(obj);
```

### Dashed lines

Browsers began recently adopting the ability to create dashed lines. To do so in jCanvas, specify the `strokeDash` and `strokeDashOffset` properties.

The `strokeDash` property accepts an array of one or two numbers, and the `strokeDashOffset` property accepts a single number. See the [Properties](properties.md) page for specific usage details.

```javascript
$('canvas').drawLine({
  strokeStyle: '#000',
  strokeWidth: 3,
  strokeDash: [5],
  strokeDashOffset: 0,
  x1: 100, y1: 50,
  x2: 100, y2: 150,
  x3: 200, y3: 100,
  x4: 150, y4: 200
});
```

### Vectors

Instead of the `drawLine()` method, you can also plot line segments using the `[drawVector()](vectors.md)` method (which draws lines using vectors rather than (*x*, *y*) coordinates).
