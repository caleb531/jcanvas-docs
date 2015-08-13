## Patterns

The `createPattern()` method returns a canvas pattern object, which can be used as a fill or stroke style for any drawing.

```javascript
function draw(patt) {
  $('canvas').drawEllipse({
    fillStyle: patt,
    x: 160, y: 100,
    width: 250, height: 100
  });
}

var patt = $('canvas').createPattern({
  source: 'images/water.jpg',
  repeat: 'repeat',
  // Draw ellipse when pattern loads
  load: draw
});
```

### Referencing an Image Element

You can also use an image DOM element as the value for the `source` property.

```javascript
function draw(patt) {
  $('canvas').drawEllipse({
    fillStyle: patt,
    x: 200, y: 100,
    width: 250, height: 100
  });
}

var patt = $('canvas').createPattern({
  source: $('#water')[0],
  repeat: 'repeat',
  // Draw ellipse when pattern loads
  load: draw
});
```

### Creating a pattern using a function

As of version 5.3, anything that can be drawn on the canvas can also be used as a pattern.

To do so, use a function as the value of the `source` property. In your function, you may draw using jCanvas methods, or utilize the given canvas context. Also ensure you give the pattern a `width` and a `height`.

Finally, if you would rather use a existing canvas element, feel free to do so using the `source` property.

```javascript
// Create pattern
var patt = $('canvas').createPattern({
  // Define width/height of pattern (before repeating)
  width: 40, height: 40,
  source: function(context) {
    // Draw rectangle (which will repeat)
    $(this).drawRect({
      fillStyle: '#bcdeb2',
      strokeStyle: '#009c56',
      strokeWidth: 1,
      x: 0, y: 0,
      width: 40, height: 40,
      fromCenter: false,
      cornerRadius: 6
    });
  }
});

// Draw ellipse with pattern as fill style
$('canvas').drawEllipse({
  fillStyle: patt,
  strokeStyle: '#009c56',
  x: 200, y: 100,
  width: 300, height: 100
});
```

### Notes
By default, the pattern repeats on both the X- and Y-axis
