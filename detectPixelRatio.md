## Detect Pixel Ratio

jCanvas offers a `detectPixelRatio()` method for detecting high-resolution displays (including devices with retina displays).

For these devices, the method will increase the dimensional width and height of the canvas, scale its context to match, then scale it down using CSS. This will result in the device rendering the canvas at a higher pixel density.

The method also accepts a callback function as its only argument, which, in turn, accepts the device's pixel ratio as *its* only argument.

```javascript
$('canvas').detectPixelRatio(function(ratio) {
  // Run some code depending on the device pixel ratio
});
```

### Notes

Retina displays on Apple devices have a pixel ratio of 2.
