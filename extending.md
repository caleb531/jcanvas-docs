## Extending jCanvas

jCanvas provides a plugin API so you can create methods which integrate with jCanvas. To do so, use the `jCanvas.extend()` method.

The `extend()` method accepts one object containing three properties:  
  - `name`: The name of the method you are creating
  - `type`: Optional; the type of drawing, which jCanvas will recognize as a valid value for the `type` property.
  - `props`: Optional; the custom properties your method uses (and their default values). These properties will be merged into the arguments object (mentioned below) for use in your method's code.
  - `fn`: The function providing the plugin's functionality. It accepts two arguments:
    1. The context of the canvas
    2. The parameters object the method will receive when called

```javascript
$.jCanvas.extend({
  name: 'pluginName',
  props: {
    prop: true
  },
  fn: function(ctx, params) {
    // Your code here
  }
});
```

### Example: `drawHeart()`

To demonstrate how this works, we'll be creating a method that draws a heart on the canvas.

```javascript
// Create a drawHeart() method
$.jCanvas.extend({
  name: 'drawHeart',
  type: 'heart',
  props: {},
  fn: function(ctx, params) {
    // Just to keep our lines short
    var p = params;
    // Enable layer transformations like scale and rotate
    $.jCanvas.transformShape(this, ctx, p);
    // Draw heart
    ctx.beginPath();
    ctx.moveTo(p.x, p.y + p.radius);
    // Left side of heart
    ctx.quadraticCurveTo(
      p.x - (p.radius * 2),
      p.y - (p.radius * 2),
      p.x,
      p.y - (p.radius / 1.5)
    );
    // Right side of heart
    ctx.quadraticCurveTo(
      p.x + (p.radius * 2),
      p.y - (p.radius * 2),
      p.x,
      p.y + p.radius
    );
    // Call the detectEvents() function to enable jCanvas events
    // Be sure to pass it these arguments, too!
    $.jCanvas.detectEvents(this, ctx, p);
    // Call the closePath() functions to fill, stroke, and close the path
    // This function also enables masking support and events
    // It accepts the same arguments as detectEvents()
    $.jCanvas.closePath(this, ctx, p);
  }
});

// Use the drawHeart() method
$('canvas').drawHeart({
  layer: true,
  draggable: true,
  fillStyle: '#c33',
  radius: 50,
  x: 150, y: 130,
  rotate: 30
});
```

### API Methods

The jCanvas object (`$.jCanvas`) provides a few useful methods for integrating your methods with jCanvas. All of these methods accept the same three arguments: the canvas DOM element (`this`), the canvas context (`ctx`), and the parameters object (`params`).  
  - `setGlobalProps()`: sets global canvas properties like `fillStyle`, `shadowColor`, etc.
  - `transformShape()`: Enables shape transformation using the standard transformation properties (`rotate`, `scale`, `translate`). Note that the `closePath()` method must be called later on to restore the layer transformations.
  - `detectEvents()`: Enables and detects jCanvas events for your custom path. Note that this method should be called at the end of your path.
  - `closePath()`: Closes the current path, and fills/strokes it if the respective properties have been set. The method also enables masking for the path through the use of the `mask` property.
  - `setCanvasFont()`: Sets the font of the canvas context based on the `fontStyle`, `fontSize`, and `fontFamily` properties.
  - `measureText()`: Augments the given parameter object with the calculated `width` and `height` of the text. Accepts an array of strings (representing lines of text) as a fourth argument.

```javascript
$.jCanvas.detectEvents(this, ctx, params);
```

```javascript
$.jCanvas.closePath(this, ctx, params);
```

### Notes

When calling your method, jCanvas will automatically loop through selected canvas elements, so you don't need to.
