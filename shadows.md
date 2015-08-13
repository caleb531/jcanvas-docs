## Shadows

To create a generic shadow, use the `shadowColor` and `shadowBlur` properties:

```javascript
$('canvas').drawArc({
  fillStyle: '#58d',
  shadowColor: '#000',
  shadowBlur: 10,
  x: 50, y: 50,
  radius: 30
});
```

### Offset Position

The shadow can be offset relative to itself using the `shadowX` and `shadowY` properties:

```javascript
$('canvas').drawArc({
  fillStyle: '#58d',
  strokeStyle: '#8e3',
  strokeWidth: 4,
  shadowColor: '#000',
  shadowBlur: 5,
  shadowX: -5, shadowY: 5,
  x: 50, y: 50,
  radius: 30
});
```
