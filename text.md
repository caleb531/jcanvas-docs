## Text

To draw text on the canvas, use the `drawText()` method.

The resulting text on the canvas is determined by the value of the `text` property, as well as any of the following font properties:

  - `fontStyle`
  - `fontSize`
  - `fontFamily`

```javascript
$('canvas').drawText({
  fillStyle: '#9cf',
  strokeStyle: '#25a',
  strokeWidth: 2,
  x: 150, y: 100,
  fontSize: 48,
  fontFamily: 'Verdana, sans-serif',
  text: 'Hello'
});
```

### Font Sizes

The value for the `fontSize` property accepts two different types of values. If you specify the value as a plain number (*e.g.* `48`), the font size is interpreted in pixels.

However, you can also specify the number as a string with additional units attached (*e.g.* `'36pt'`). Examples of both use cases can be found throughout this section.

### Transforming text

Just like other shapes, the `drawText()` method respects the value of the `fromCenter` and transformation properties such as `rotate`.

```javascript
$('canvas').drawText({
  fillStyle: '#cfc',
  strokeStyle: '#000',
  strokeWidth: 2,
  x: 150, y: 100,
  fontSize: '50pt',
  fontFamily: 'Arial',
  text: 'Hello',
  // Measure (x, y) from the text's top-left corner
  fromCenter: false,
  // Rotate the text by 30 degrees
  rotate: 30
});
```

### Scaling text

You can animate the font size of text using the `scale`, `scaleX`, or `scaleY` properties.

```javascript
$('canvas').drawText({
  layer: true,
  fillStyle: '#9cf',
  strokeStyle: '#25a',
  strokeWidth: 2,
  x: 200, y: 100,
  fontSize: '36pt',
  fontFamily: 'Verdana, sans-serif',
  text: 'Hello',
  scale: 2,
  click: function() {
    // Click the text to make it grow
    $(this).animateLayer(0, {
      scale: '+=0.25',
    }, 250);
  }
});
```

### Measuring text

The `measureText()` method returns an object containing the text's calculated `width` and `height` (as well as of its other properties).

The method accepts a layer identifier (either the layer's index, or its name). The method also accepts an object of properties (the same properties you use when calling the `drawText()` method) as the only argument.

In the example below, the circle is only as wide as the text inside of it.

```javascript
// Draw text
$('canvas').drawText({
  layer: true,
  name: 'myText',
  fillStyle: '#36c',
  strokeWidth: 2,
  x: 180, y: 150,
  fontSize: '36pt',
  fontFamily: 'Verdana, sans-serif',
  text: 'Hello'
})
// Draw circle as wide as the text
.drawArc({
  layer: true,
  strokeStyle: '#000',
  strokeWidth: 4,
  x: 180, y: 150,
  radius: $('canvas').measureText('myText').width / 2
});
```

### Wrapping text

You can also define a maximum line width for the text using the `maxWidth` property. In doing so, each line of text will never be longer than the maximum width (this is known as text 'wrapping').

Manually adding a line break can be done so by adding the standard newline character in your string (`\n`).

```javascript
$('canvas').drawText({
  fillStyle: '#36c',
  fontStyle: 'bold',
  fontSize: '20pt',
  fontFamily: 'Trebuchet MS, sans-serif',
  text: 'The quick brown fox jumps over the lazy dog.',
  x: 180, y: 100,
  maxWidth: 300
});
```

### Aligning text

If you wish to align your text to the `left` or `right` (rather than the `center` by default), use the `align` property.

```javascript
$('canvas').drawText({
  fillStyle: '#36c',
  fontStyle: 'bold',
  fontSize: '20pt',
  fontFamily: 'Trebuchet MS, sans-serif',
  text: 'The quick brown fox jumps over the lazy dog.',
  x: 180, y: 100,
  align: 'left',
  maxWidth: 300
});
```

### Aligning text to a margin

With the above `align` property, the text will, by default, appear to align the text to either the left or right, but will still be centered relative to its `x` and `y` coordinates.

The `respectAlign` property will ensure that the text's (x, y) coordinates are in line with either the left or right margin (depending of the value of the `align` property). Therefore, enabling this property will require you to adjust your `x` position accordingly.

```javascript
$('canvas').drawText({
  fillStyle: '#36c',
  fontStyle: 'bold',
  fontSize: '20pt',
  fontFamily: 'Trebuchet MS, sans-serif',
  text: 'The quick brown fox jumps over the lazy dog.',
  x: 80, y: 100,
  align: 'left',
  respectAlign: true,
  maxWidth: 300
});
```

### Changing line height

The `lineHeight` property will change the line height of your text. The value of this property is a multiple of the default line height (which is `1`).

For example, the demo below will double the line height of the text it draws.

```javascript
$('canvas').drawText({
  fillStyle: '#36c',
  fontStyle: 'bold',
  fontSize: '20pt',
  fontFamily: 'Trebuchet MS, sans-serif',
  text: 'The quick brown fox jumps over the lazy dog.',
  x: 180, y: 100,
  align: 'left',
  maxWidth: 300,
  lineHeight: 2
});
```

A line height with a negative value will swap any lines of text (*e.g.* the top line becomes the bottom line).

```javascript
$('canvas').drawText({
  fillStyle: '#36c',
  fontStyle: 'bold',
  fontSize: '20pt',
  fontFamily: 'Trebuchet MS, sans-serif',
  text: 'The quick brown fox jumps over the lazy dog.',
  x: 180, y: 100,
  align: 'left',
  maxWidth: 300,
  lineHeight: -2
});
```

Note that a negative line height will produce a negative number when retrieving the height of the text (using the `measureText()` method).

### Text along an arc

jCanvas can also draw arc text (that is, text along an arc). Doing so only requires specifying one extra property: the `radius` property.

```javascript
$('canvas').drawText({
  fillStyle: '#c33',
  fontFamily: 'Ubuntu, sans-serif',
  fontSize: 18,
  text: 'THIS IS THE FIRST LINE\nTHIS IS THE SECOND LINE\nTHIS IS THE THIRD LINE',
  x: 160, y: 200,
  radius: 150
});
```

For arc text only, there exists an optional `letterSpacing` which controls the spacing between characters along the arc.

```javascript
$('canvas').drawText({
  fillStyle: '#c33',
  fontFamily: 'Ubuntu, sans-serif',
  fontSize: 18,
  text: 'THIS IS THE FIRST LINE\nTHIS IS THE SECOND LINE\nTHIS IS THE THIRD LINE',
  x: 160, y: 200,
  radius: 150,
  letterSpacing: 0.02
});
```

Technically speaking, the value of the `letterSpacing` property represents a multiple of *pi*, which in turn represents the angular distance between each letter. For example, a value of `0.05` implies that each character is 9 degrees apart (0.05&pi; is equivalent to 9&deg;)
