## Draw Manually

With the `draw()` method, you can draw on the canvas using native canvas methods (or any method, for that matter). To do this, write your code inside a function 

```javascript
$('canvas').draw({
  fn: function(ctx) {
    ctx.fillStyle = '#333';
    ctx.fillRect(50, 50, 100, 100);
  }
});
```

### Draw Anything

The `draw()` method can be used to draw any other jCanvas drawing (although usually this is not necessary).

```javascript
$('canvas').draw({
  type: 'rectangle',
  fillStyle: '#c33',
  x: 100, y: 100,
  width: 100, height: 80
});
```

The above code is equivalent to the following:

```javascript
$('canvas').drawRect({
  fillStyle: '#c33',
  x: 100, y: 100,
  width: 100, height: 80
});
```

### Notes

The `this` keyword in the callback function refers to the canvas DOM element.
