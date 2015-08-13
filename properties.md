## Properties

These are descriptions of every jCanvas property, their supported methods, and their possible values. Default property values are listed first.

### align

  - *Description:* The horizontal alignment of the text to be drawn
  - *Methods:* `drawText()`
  - *Values:* `'center'`, `'left'`, `'right'`, `'start'`, `'end'`

### arrowAngle

  - *Description:* The measure of the angle formed from the left tip of the arrow to the right tip
  - *Methods:* `drawLine()`, `drawQuadratic()`, `drawBezier()`
  - *Values:* `90`, any number

### arrowRadius

  - *Description:* The length of each tip of an arrow
  - *Methods:* `drawLine()`, `drawQuadratic()`, `drawBezier()`
  - *Values:* `0`, any number

### autosave

  - *Description:* If transforming the canvas (with a method such as `scaleCanvas()`) automatically saves the canvas state. Please note that this also applies to usage of the `mask` property.
  - *Methods:* All drawing methods
  - *Values:* `true`, `false`

### baseline

  - *Description:* The vertical alignment of the text to be drawn
  - *Methods:* `drawText()`
  - *Values:* `'middle'`, `'top'`, `'hanging'`, `'alphabetic'`, `'ideographic'`, `'bottom'`

### bringToFront

  - *Description:* If a draggable layer will come to the front (above all other layers) when dragged
  - *Methods:* All drawing methods
  - *Values:* `false`, `true`

### ccw

  - *Description:* If an arc is drawn in the counterclockwise direction
  - *Methods:* `drawArc()`
  - *Values:* `false`, `false`

### closed

  - *Description:* If a path is closed before it is filled/stroked
  - *Methods:* `drawArc()`, `drawLine()`, `drawQuadratic()`, `drawBezier()`
  - *Values:* `false`, `false`

### compositing

  - *Description:* How shapes are drawn on top of one another. For examples of the possible values, visit [Mozilla's examples page](https://developer.mozilla.org/samples/canvas-tutorial/6_1_canvas_composite.html)
  - *Methods:* All drawing methods
  - *Values:* `'source-over'`, `'source-in'`, `'source-out'`, `'source-atop'`, `'lighter'`, `'destination-over'`, `'destination-in'`, `'destination-out',` `'destination-atop'`, `'copy'`, `'xor'`

### concavity

  - *Description:* How much a polygon's sides project in or out (the default is 0, so nothing projects)
  - *Methods:* `drawPolygon()`
  - *Values:* `0`, any integer

### cornerRadius

  - *Description:* The radius of a rectangle's corners
  - *Methods:* `drawRect()`
  - *Values:* `0`, any number

### cropFromCenter

  - *Description:* If the `sx` and `sy` properties (for an image's cropping region) lie at the center point of the region
  - *Methods:* `drawImage()`
  - *Values:* `true`, `false`

### crossOrigin

  - *Description:* Corresponds to the crossOrigin property on images and patterns
  - *Methods:* `drawImage()`, `createPattern()`
  - *Values:* `''`, `'anonymous'`, `'use-credentials'`

### data

  - *Description:* An object that can store any user-defined data for a jCanvas layer
  - *Methods:* All drawing methods
  - *Values:* `null`, any object

### disableEvents

  - *Description:* Temporarily disables a layer's events from firing
  - *Methods:* All drawing methods
  - *Values:* `false`, `true`

### dragGroups

  - *Description:* The names of any groups that will be dragged when the target layer is dragged
  - *Methods:* All drawing methods
  - *Values:* `null`, an array of one or more group names

### draggable

  - *Description:* If a layer can be dragged
  - *Methods:* All drawing methods
  - *Values:* `false`, `true`

### end

  - *Description:* The end angle on an arc
  - *Methods:* `drawArc()`
  - *Values:* `360`, any number

### endArrow

  - *Description:* Indicates if the given path drawing will have an arrow placed at its end point
  - *Methods:* `drawLine()`, `drawQuadratic()`, `drawBezier()`
  - *Values:* `false`, `true`

### fillStyle

  - *Description:* The fill color of a shape or path
  - *Methods:* All drawing methods
  - *Values:* `'transparent'`, any valid color string

### fn

  - *Description:* A callback function
  - *Methods:* `draw()`
  - *Values:* `null`, any function

### font

  - *Description:* The font of the text to be drawn
  - *Methods:* `drawText()`
  - *Values:* `'12pt sans-serif'`, any valid font string

### fontFamily

  - *Description:* The font family of the text to be drawn
  - *Methods:* `drawText()`
  - *Values:* `'sans-serif'`, any valid font family string

### fontSize

  - *Description:* The font size of the text to be drawn
  - *Methods:* `drawText()`
  - *Values:* `'12pt'`, any number (or a string of a number with units)

### fontStyle

  - *Description:* The font style of the text to be drawn
  - *Methods:* `drawText()`
  - *Values:* `'normal'`, 'bold', 'italic', 'bold italic'

### fromCenter

  - *Description:* If the `x` and `y` properties lie at the center of a shape (rather than the top-left corner)
  - *Methods:* `drawArc()`, `drawEllipse()`, `drawRect()`, `drawImage()`, `drawText()`, `setPixels()`
  - *Values:* `true`, `false`

### groups

  - *Description:* An array of group names associated with a layer
  - *Methods:* All drawing methods
  - *Values:* `null`, any array of strings

### height

  - *Description:* The height of a shape
  - *Methods:* `clearCanvas()`, `drawEllipse()`, `drawRect()`, `drawImage()`
  - *Values:* `null`, any number

### imageSmoothing

  - *Description:* If the browser automatically smooths rendered canvas images
  - *Methods:* `drawImage()`, `drawPattern()`
  - *Values:* `true`, `false`

### inDegrees

  - *Description:* If angles are measured in degrees or radians
  - *Methods:* `drawArc()`, `drawPolygon()`
  - *Values:* `true`, `false`

### intangible

  - *Description:* Indicates if the user can "click through" the layer as if it didn't exist. Note that the layer will still respond to mechanical events, just not mouse events.
  - *Methods:* All drawing methods
  - *Values:* false

### intersects

  - *Description:* A read-only layer property which is `true` if the cursor coordinates lie within the layer and `false` when they do not
  - *Methods:* All drawing methods
  - *Values:* false

### layer

  - *Description:* If the jCanvas drawing to be drawn should also be added as a layer
  - *Methods:* All drawing methods
  - *Values:* `false`, `true`

### lineHeight

  - *Description:* The line height of a text drawing, the value of which is a multiple of the default line height
  - *Methods:* `drawText()`
  - *Values:* `1`, any number

### load

  - *Description:* A callback function to run once an image has loaded
  - *Methods:* `pattern()`, `drawImage()`
  - *Values:* `null`, any function

### mask

  - *Description:* Whether the current shape is used to mask future shapes
  - *Methods:* All drawing methods
  - *Values:* `false`, `false`

### maxWidth

  - *Description:* The maximum width for any line of text in a text drawing
  - *Methods:* `drawText()`
  - *Values:* `null`, any number

### miterLimit

  - *Description:* The distance between the inner and outer corner of two lines. For an example, see [Mozilla's demo page](https://developer.mozilla.org/samples/canvas-tutorial/4_8_canvas_miterlimit.html)
  - *Methods:* All drawing methods
  - *Values:* `10`, any number

### name

  - *Description:* The name associated with a layer
  - *Methods:* All drawing methods
  - *Values:* `''`, any string

### opacity

  - *Description:* The opacity of a drawing
  - *Methods:* All drawing methods
  - *Values:* `1`, any number from 0 to 1

### r1

  - *Description:* The start radius of a radial gradient
  - *Methods:* `gradient()`
  - *Values:* `null`, any number

### r2

  - *Description:* The end radius of a radial gradient
  - *Methods:* `gradient()`
  - *Values:* `null`, any number

### radius

  - *Description:* The radius of a circle or polygon
  - *Methods:* `drawArc()`, `drawPolygon()`
  - *Values:* `0`, any number

### repeat

  - *Description:* How a pattern is repeated
  - *Methods:* `pattern()`
  - *Values:* `'repeat'`, `'repeat-x'`, `'repeat-y'`, `'no-repeat'`

### respectAlign

  - *Description:* Ensures that the text's (x, y) coordinates are in line with either the left or right margin (depending of the value of the `align` property)
  - *Methods:* `drawText()`
  - *Values:* `true`, `false`

### restrictDragToAxis

  - *Description:* Restricts the dragging of a layer to the specified axis
  - *Methods:* `pattern()`
  - *Values:* `null`, `'x'`, `'y'`

### rotate

  - *Description:* The angle at which a polygon is rotated
  - *Methods:* `clearCanvas()`, `drawRect()`, `drawArc()`, `drawEllipse()`, `drawImage()`, `drawPolygon()`
  - *Values:* `0`, any number

### rounded

  - *Description:* If the corners of a path is rounded
  - *Methods:* `drawLine()`, `drawQuadratic()`, `drawBezier()`
  - *Values:* `0`, any number

### sHeight

  - *Description:* The height of an image's crop region
  - *Methods:* `drawImage()`
  - *Values:* `null`, any number

### sWidth

  - *Description:* The width of an image's crop region
  - *Methods:* `drawImage()`
  - *Values:* `null`, any number

### scale

  - *Description:* A multiple of the canvas width and height (used for scaling)
  - *Methods:* `scaleCanvas()`, all methods
  - *Values:* `1`, any number

### scaleX

  - *Description:* A multiple of the canvas width (used for scaling)
  - *Methods:* `scaleCanvas()`, all shape methods, `drawImage()`
  - *Values:* `1`, any number

### scaleY

  - *Description:* A multiple of the canvas width (used for scaling)
  - *Methods:* `scaleCanvas()`,
  - *Values:* `1`, any number

### shadowBlur

  - *Description:* The blur radius of a shadow
  - *Methods:* All drawing methods
  - *Values:* `0`, any number

### shadowColor

  - *Description:* The color of a shadow
  - *Methods:* All drawing methods
  - *Values:* `'transparent'`, any valid color string

### shadowStroke

  - *Description:* Whether a shape's stroke adds to a shape's shadow
  - *Methods:* All drawing methods
  - *Values:* `false`, `true`

### shadowX

  - *Description:* The x-offset of a shadow
  - *Methods:* All drawing methods
  - *Values:* `0`, any number

### shadowY

  - *Description:* The y-offset of a shadow
  - *Methods:* All drawing methods
  - *Values:* `0`, any number

### sides

  - *Description:* How many sides a polygon will have
  - *Methods:* `drawPolygon()`
  - *Values:* `3`, any number greater than 2

### source

  - *Description:* The source of the image to be drawn
  - *Methods:* `drawImage()`, `pattern()`
  - *Values:* `''`, any string, image DOM element, or canvas DOM element

### spread

  - *Description:* The distance a slice is from its defined (x, y) coordinates. This distance is a multiple of the slice's radius, with a value ranging from 0 to 1.
  - *Methods:* drawSlice()
  - *Values:* `0`, any number between 0 and 1

### start

  - *Description:* The start angle on an arc
  - *Methods:* `drawArc()`
  - *Values:* `0`, any number

### startArrow

  - *Description:* Indicates if the given path drawing will have an arrow placed at its start point
  - *Methods:* `drawLine()`, `drawQuadratic()`, `drawBezier()`
  - *Values:* `false`, `true`

### strokeCap

  - *Description:* The type of cap for any stroke
  - *Methods:* All drawing methods
  - *Values:* `'butt'`, `'square'`, `'round'`

### strokeDash

  - *Description:* An array consisting of one or two numbers. The first number represents the length of each dash. The second number represents the spacing between each dash. If only one number is given, the implied second number is equal to the first.
  - *Methods:* All drawing methods
  - *Values:* `null`, an array of one of two numbers

### strokeDashOffset

  - *Description:* The offset of the dash-space alternation
  - *Methods:* All drawing methods
  - *Values:* 0

### strokeJoin

  - *Description:* The type of cap between connected strokes
  - *Methods:* All drawing methods
  - *Values:* `'miter'`, `'bevel'`, `'round'`

### strokeStyle

  - *Description:* The stroke color of a shape or path
  - *Methods:* All drawing methods
  - *Values:* `'transparent'`, any valid color string

### strokeWidth

  - *Description:* The stroke width of a shape or path
  - *Methods:* All drawing methods
  - *Values:* `1`, any number

### sx

  - *Description:* The x position of an image's crop region
  - *Methods:* `drawImage()`
  - *Values:* `0`, any number

### sy

  - *Description:* The y position of an image's crop region
  - *Methods:* `drawImage()`
  - *Values:* `0`, any number

### text

  - *Description:* The text to be drawn
  - *Methods:* `drawText()`
  - *Values:* `''`, any string

### translateX

  - *Description:* The number of pixels by which a shape or canvas is translated on the x-axis
  - *Methods:* All drawing methods except `drawLine()`, `drawQuadratic()`, and `drawBezier()`
  - *Values:* `0`, any number

### translateY

  - *Description:* The number of pixels by which a shape or canvas is translated on the y-axis
  - *Methods:* All drawing methods except `drawLine()`, `drawQuadratic()`, and `drawBezier()`
  - *Values:* `0`, any number

### type

  - *Description:* The type of a layer
  - *Methods:* All drawing methods
  - *Values:* `null`, `'rectangle'`, `'arc'`, `'circle'`, `'ellipse'`, `'polygon'`, `'line'`, `'vector'`, `'quadratic'`, `'bezier'`, `'image'`, `'text'`, `'function'`

### visible

  - *Description:* If a jCanvas layer is drawn on the canvas
  - *Methods:* All drawing methods
  - *Values:* `true`, `false`

### width

  - *Description:* The width of a shape
  - *Methods:* `clearCanvas()`, `drawEllipse()`, `drawRect()`, `drawImage()`
  - *Values:* `null`, any number

### x

  - *Description:* The x position on the canvas for a shape
  - *Methods:* All drawing methods except `drawLine()`, `drawQuadratic()`, and `drawBezier()`
  - *Values:* `0`, any number

### y

  - *Description:* The y position on the canvas for a shape
  - *Methods:* All drawing methods except `drawLine()`, `drawQuadratic()`, and `drawBezier()`
  - *Values:* `0`, any number
