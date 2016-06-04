## Images

```javascript
$('canvas').drawImage({
  source: 'images/fish.jpg',
  x: 150, y: 150
});
```

### Custom width/height

```javascript
$('canvas').drawImage({
  source: 'images/fish.jpg',
  x: 50, y: 50,
  width: 80,
  height: 100,
  fromCenter: false
});
```

If you want to maintain proportions of an image, use the `scale` property (the scale is a multiple, with `1` as the baseline).

```javascript
$('canvas').drawImage({
  source: 'images/fish.jpg',
  x: 150, y: 150,
  scale: 0.5
});
```

### Using an image element

You can also use an image DOM element as the value for the `source` property.

```javascript
$('canvas').drawImage({
  source: $('#fish')[0],
  x: 50, y: 50,
  width: 100,
  fromCenter: false
});
```

### The `load` event

In jCanvas, images are drawn asynchronously because they must load before they can be drawn. In some cases, this isn't an issue because the image loads fast enough, however this isn't always the case.

To address this, jCanvas allows you to run a callback function once the image has loaded, using the `load` event.

```javascript
// Function for drawing an arc
function arc() {
  $('canvas').drawArc({
    strokeStyle: '#6f9',
    strokeWidth: 4,
    x: 155, y: 155,
    radius: 40
  });
}

// Run the arc() function after the image has loaded
$('canvas').drawImage({
  source: 'images/ladybug.jpg',
  x: 150, y: 150,
  load: arc
});
```

Note that the `load` event fires when the image is initially drawn, but *also* when it is redrawn. Therefore, dragging the image (for example) will cause the `load` event to fire continuously (as you are dragging).

### Cropping

Including the `sx`, `sy`, `sWidth`, or `sHeight` properties allows you to choose which section of the image to crop.  
  - `sWidth:` Defines the width of the crop region
  - `sHeight:` Defines the height of the crop region
  - `sx:` Defines the x-position of the crop region
  - `sy:` Defines the y-position of the crop region

```javascript
$('canvas').drawImage({
  source: 'images/ladybug.jpg',
  x: 150, y: 150,
  sWidth: 50,
  sHeight: 50,
  sx: 116, sy: 75
});
```

By default, the `sx` and `sy` properties defines the center of the crop region (for consistency). To change this, set the `cropFromCenter` property to `false`.

```javascript
$('canvas').drawImage({
  source: 'images/fish.jpg',
  x: 150, y: 150,
  sWidth: 100,
  sHeight: 50,
  sx: 100, sy: 70,
  cropFromCenter: false
});
```

Now, the `sx` and `sy` properties define the top-left corner of the crop region, as you might expect.

### Images and Layers

Beginning with version 13.04.05, image layers will always load completely before successive layers are drawn, as long as you use `addLayer()` in conjunction with `drawLayers()`:

```javascript
$('canvas').addLayer({
  type: 'image',
  source: 'images/big-fish.jpg',
  x: 150, y: 150,
  width: 200, height: 125
})
.addLayer({
  type: 'arc',
  fillStyle: '#69f',
  strokeStyle: '#000',
  strokeWidth: 2,
  x: 250, y: 100,
  radius: 50
})
// Redraw layers to ensure correct ordering
.drawLayers();
```

### Notes

Internet Explorer 9 has a bug which prevents images from drawing on the canvas if they have not loaded. To fix this, use an existing `<img>` DOM element as the value for the `source` property.
