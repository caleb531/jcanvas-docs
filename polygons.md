## Polygons

The `drawPolygon()` method creates a regular (equal-angled) polygon.

```javascript
// Draw a triangle
$('canvas').drawPolygon({
  strokeStyle: 'black',
  strokeWidth: 4,
  x: 200, y: 100,
  radius: 50,
  sides: 3
});
```

```javascript
// Draw a polygon
$('canvas').drawPolygon({
  fillStyle: '#589',
  strokeStyle: '#000',
  x: 100, y: 100,
  radius: 50,
  sides: 5,
  rotate: 25
});
```

### Concave Polygons

To create concave polygons (polygons that point inward), include the `concavity` property.  
  - A value greater than `0` will cause the sides to point inward.
  - A value less than `0` will cause the sides to point outward.
  - A value equal to `0` does not project at all.
  - A value of `1` will render the polygon invisible, because the sides will point in completely.

```javascript
// Draw a star
$('canvas').drawPolygon({
  fillStyle: '#36c',
  x: 100, y: 100,
  radius: 50,
  sides: 5,
  concavity: 0.5
});
```

```javascript
// Draw a badge-like shape
$('canvas').drawPolygon({
  fillStyle: '#3c6',
  strokeStyle: '#083',
  x: 100, y: 100,
  radius: 50,
  sides: 50,
  concavity: 0.1
});
```

```javascript
// Draw a shield-like shape
$('canvas').drawPolygon({
  fillStyle: '#36c',
  strokeStyle: '#f60',
  strokeWidth: 5,
  x: 100, y: 100,
  radius: 50,
  sides: 3,
  concavity: -0.5,
  rotate: 180
});
```
