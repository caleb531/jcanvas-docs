## Gradients

The `createGradient()` method returns a canvas gradient object, which is used as a fill or stroke style.

Gradient colors are defined using `c1`, `c2`, `c3`, and so on. Optional color stops are defined using `s1`, `s2`, `s3`, and so on (and can be any number from `0` through `1`).

### Linear

```javascript
var linear = $('canvas').createGradient({
  x1: 0, y1: 20,
  x2: 0, y2: 80,
  c1: 'rgb(0, 0, 0)',
  c2: '#0f0',
  c3: 'blue'
});
$('canvas').drawArc({
  fillStyle: linear,
  x: 50, y: 50,
  radius: 30
});
```

```javascript
var linear = $('canvas').createGradient({
  x1: 0, y1: 20,
  x2: 0, y2: 80,
  c1: 'rgb(0, 0, 0)',
  c2: '#0f0', s2: 0.2,
  c3: 'blue', s3: 0.5
});
$('canvas').drawArc({
  fillStyle: linear,
  x: 50, y: 50,
  radius: 30
});
```

### Radial

Radial gradients are created when the `r1` or `r2` properties are defined.

```javascript
var radial = $('canvas').createGradient({
  x1: 50, y1: 50,
  x2: 50, y2: 50,
  r1: 10, r2: 30,
  c1: 'rgba(255, 0, 0, 0.75)',
  c2: '#000'
});
$('canvas').drawArc({
  fillStyle: radial,
  x: 50, y: 50,
  radius: 30
});
```

### Animating Layers with Gradients

There are cases where you may wish to animate a layer that has a gradient fill/stroke. However, animating the layer's position or size will leave the gradient unaffected, because gradients are relative to the canvas.

To demonstrate this behavior, consider the following example:

```javascript
// Create and store a linear gradient
var gradient = $('canvas').createGradient({
  // Gradient is drawn relative to layer position
  x1: 0, y1: 20,
  x2: 0, y2: 140,
  c1: '#36c', c2: '#c33'
});
// Create layer with gradient fill
$('canvas').drawRect({
  layer: true,
  name: 'box',
  fillStyle: gradient,
  x: 100, y: 80,
  width: 100, height: 60
});
// Animate layer
$('canvas').animateLayer('box', {
  x: 220, y: 150
}, 1000);
```


To solve this problem, by using a function as the layer's fill/stroke style, you can achieve a gradient which moves with its layer. Note that the below example assumes that the gradient's coordinates are relative to the layer's size and position.

```javascript
// Create layer with gradient fill
$('canvas').drawRect({
  layer: true,
  name: 'box',
  // Define fill as a function
  fillStyle: function(layer) {
    return $(this).createGradient({
      // Gradient is drawn relative to layer position
      x1: 0, y1: layer.y - layer.height,
      x2: 0, y2: layer.y + layer.height,
      c1: '#36c', c2: '#c33'
    });
  },
  x: 100, y: 80,
  width: 100, height: 60
});
// Animate layer
$('canvas').animateLayer('box', {
  x: 220, y: 150
}, 1000);
```

### Notes

Color stops are optional, and are measured from 0 to 1.
