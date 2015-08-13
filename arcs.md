## Arcs

An arc in jCanvas is, essentially, part of the rim of a circle (similar to the smile on a smiley-face).

### Basic Usage

You can draw an arc using the `drawArc()` method. The size of an arc is determined by its `start`, `end`, and `radius` properties.

jCanvas considers zero degrees to lie due north of the arc (like the 12 on an analog clock).

```javascript
// Draw a 90&deg; arc
$('canvas').drawArc({
  strokeStyle: '#000',
  strokeWidth: 5,
  x: 100, y: 100,
  radius: 50,
  // start and end angles in degrees
  start: 0, end: 90
});
```

If you omit the `start` and `end` properties, the arc defaults to a full circle.

```javascript
// Draw a full circle
$('canvas').drawArc({
  strokeStyle: '#000',
  strokeWidth: 5,
  x: 100, y: 100,
  radius: 50
});
```

### Radian values

The `start` and `end` values are measured in degrees by default. If you'd prefer to use radians, include the `inDegrees` property with a value of `false`.

```javascript
// Draw a black semicircle
$('canvas').drawArc({
  fillStyle: 'black',
  x: 100, y: 100,
  radius: 50,
  start: 0, end: Math.PI,
  ccw: true,
  inDegrees: false
});
```

### Closed Arc

Using the `closed` property, you can also close an arc, which connects the start and end points.

```javascript
// Draw a closed red arc
$('canvas').drawArc({
  strokeStyle: '#c33',
  strokeWidth: 5,
  x: 100, y: 100,
  radius: 50,
  start: 45, end: 225,
  closed: true
});
```
