## Clear Canvas

This `clearCanvas()` clears all or any part of the canvas. Note that this method *cannot* be used on jCanvas layers.

### Clear Entire Canvas

If nothing is passed, the entire canvas is cleared.

```javascript
$("canvas").clearCanvas()
```

<h3>Clear a Section</h3>

Clearing a section works in the same way as [drawing a rectangle](rectangles.md), with the rectangle being drawn from its center (by default).

```javascript
$("canvas")
.drawEllipse({
    fillStyle: "#000",
    x: 200, y: 100,
    width: 200, height: 100,
})
.clearCanvas({
    x: 200, y: 100,
    width: 50,
    height: 50
});
