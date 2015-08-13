## Get Canvas Image

The `getCanvasImage()` method retrieves the canvas's image data as a string. The string is a base64-encoded image URL, which can be used as a valid image URL for any purpose.

```javascript
$('canvas').getCanvasImage();
```

The default image type is PNG, although you can specify PNG, or JPEG.

```javascript
$('canvas').getCanvasImage('png');
$('canvas').getCanvasImage('jpeg');
```

### Setting Quality

If you choose to retrieve the canvas image as a JPEG, you may also set the JPEG's quality (which ranges from `0` to `1`).

```javascript
$('canvas').getCanvasImage('jpeg', 0.5);
```

### Notes

This method does not work on Google Chrome if the page is served from a file URL (`file://`). This is a limitation of Google Chrome's sandboxing architecture, and therefore cannot be fixed. However, this method still works when the page is served from a server (either online or running locally via `localhost://`).
