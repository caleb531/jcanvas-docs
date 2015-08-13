## Pixel Manipulation

The `setPixels()` method allows for modification of a specific section of pixels from the canvas.

To modify the pixels, you can loop through each pixel using the `each` callback method.

The `each` callback function accepts two parameters:

	1. An object containing the properties for red, green, blue, and alpha color values (`r`, `g`, `b`, `a`)
	2. The parameters passed to the `setPixels()` method

### Basic usage

```javascript
function invert() {
  $(this).setPixels({
    x: 150, y: 100,
    width: 220, height: 138,
    // loop through each pixel
    each: function(px) {
      px.r = 255 - px.r;
      px.g = 255 - px.g;
      px.b = 255 - px.b;
    }
  });
}

$('canvas').drawImage({
  source: 'images/fish.jpg',
  x: 150, y: 100,
  // Invert image color when image loads
  load: invert
});
```

### Pixels and Events

In this example, hovering over the image will manipulate the pixels closest to the part you hovered over.

```javascript
function invert(params) {
  $(this).setPixels({
    x: params.eventX, y: params.eventY,
    width: 50, height: 50,
    // loop through each pixel
    each: function(px) {
      px.r = 255 - px.r;
      px.g = 255 - px.g;
      px.b = 255 - px.b;
    }
  });
}

$('canvas').drawImage({
  layer: true,
  source: 'images/fish.jpg',
  x: 150, y: 100,
  mousemove: invert
});
```

### Notes

If the `width`, and `height` properties are not specified, the method loops through every pixel on the canvas.

The `r`, `g`, `b`, and `a` properties all range from `0` to `255`.

As with all jCanvas methods, the `setPixels()` method respects the value of the `fromCenter` property, which defaults to `true`.
