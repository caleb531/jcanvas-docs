## Vectors

Besides using the `drawLine()` method for drawing line segments on the canvas, you can also use the `drawVector()` method, which works differently, but produces the same result (contiguous lines).

Using the `drawVector()` method, each line segment is created from an angle and a length. These segments are defined using `a1`, `l1`, `a2`, `l2`, and so on.

```javascript
// Draw a line that is 100px long at 45deg from the north
$('canvas').drawVector({
  strokeStyle: '#000',
  strokeWidth: 4,
  a1: 135, l1: 100
});
```

### Defining a starting point

Additionally, you can specify a starting point for your vector using the `x` and `y` properties.

```javascript
$('canvas').drawVector({
  strokeStyle: '#000',
  strokeWidth: 4,
  x: 50, y: 50,
  a1: 120, l1: 100
});
```

### Combining vectors

Of course, you can create multiple vectors. Keep in mind that no matter where any vector is positioned, its angle is always relative to the north (or 12:00 according to any analog clock).

```javascript
// Draw a bent path
$('canvas').drawVector({
  strokeStyle: '#000',
  strokeWidth: 4,
  x: 50, y: 150,
  a1: 45, l1: 100,
  a2: 135, l2: 220
});
```

### Using line properties

Because the `drawVector()` method creates line segments just like the `drawLine()` method, the `drawVector()` method  accepts many of the same properties as `drawLine()`. These properties include (but are not limited to) `closed` and `rounded`.

```javascript
// Draw a closed path (making a triangle)
$('canvas').drawVector({
  strokeStyle: '#000',
  strokeWidth: 4,
  rounded: true,
  closed: true,
  x: 50, y: 150,
  a1: 45, l1: 100,
  a2: 135, l2: 220
});
```

Details on the usage of these properties can be found in the [Lines](lines.md) section.

### Notes

Angles are specified in degrees by default. However, if you wish you specify your angles in radians, set the `inDegrees` property to `false`.
