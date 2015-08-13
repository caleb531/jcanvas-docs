## Introduction

The `&lt;canvas&gt;` element is a new element apart of HTML5. It allows you to draw shapes, paths, images, and other drawings on a blank element called the canvas.

### Creating a canvas

Before you can draw on the canvas, you need to create one.

```html
&lt;canvas width="300" height="150"&gt;&lt;/canvas&gt;
```

Of course, the canvas can be any width/height you want. You may also wish to give the canvas an ID (for future reference).

As a side note, you cannot accurately set a canvas's width and height via CSS; you can only do so through the canvas element's `width` and `height` attributes.

### Importing jCanvas

You also need to add jCanvas to your page somehow (usually a `&lt;script&gt;` element will do).

```html
&lt;script src="jcanvas.min.js"&gt;&lt;/script&gt;
```

### Drawing

HTML5 provides [a native JavaScript API](https://developer.mozilla.org/en/Canvas_tutorial/Drawing_shapes) for drawing on the canvas. However, we will be using jCanvas instead.

Using jCanvas requires basic knowledge of [using jQuery](http://docs.jquery.com/Tutorials:How_jQuery_Works).

## [Learn the jCanvas syntax](/jcanvas/docs/syntax/)
