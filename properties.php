<h2>Properties</h2>

<p>These are descriptions of every jCanvas property, their supported methods, and their possible values. Default property values are listed first.</p>

<p>Click a property name to see information about that property.</p>

<ul id='properties' class='accordion'>
<?php
// List of properties and their attributes
$props = array(

"align"=> array(
	"description"=> "The horizontal alignment of the text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<code>\"center\"</code>, <code>\"left\"</code>, <code>\"right\"</code>, <code>\"start\"</code>, <code>\"end\"</code>",
),
"rotate"=> array(
	"description"=> "The angle at which a polygon is rotated",
	"methods"=> "<code>clearCanvas()</code>, <code>drawRect()</code>, <code>drawArc()</code>, <code>drawEllipse()</code>, <code>drawImage()</code>, <code>drawPolygon()</code>",
	"values"=> "<code>0</code>, any number",
),
"autosave"=> array(
	"description"=> "If transforming the canvas (with a method such as <code>scaleCanvas()</code>) automatically saves the canvas state. Please note that this also applies to usage of the <code>mask</code> property. ",
	"methods"=> "All drawing methods",
	"values"=> "<code>true</code>, <code>false</code>",
),
"baseline"=> array(
	"description"=> "The vertical alignment of the text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<code>\"middle\"</code>, <code>\"top\"</code>, <code>\"hanging\"</code>, <code>\"alphabetic\"</code>, <code>\"ideographic\"</code>, <code>\"bottom\"</code>",
),
"cropFromCenter"=> array(
	"description"=> "If the <code>sx</code> and <code>sy</code> properties (for an image's cropping region) lie at the center point of the region",
	"methods"=> "<code>drawImage()</code>",
	"values"=> "<code>true</code>, <code>false</code>",
),
"ccw"=> array(
	"description"=> "If an arc is drawn in the counterclockwise direction",
	"methods"=> "<code>drawArc()</code>",
	"values"=> "<code>false</code>, <code>false</code>",
),
"closed"=> array(
	"description"=> "If a path is closed before it is filled/stroked",
	"methods"=> "<code>drawArc()</code>, <code>drawLine()</code>, <code>drawQuadratic()</code>, <code>drawBezier()</code>",
	"values"=> "<code>false</code>, <code>false</code>",
),
"compositing"=> array(
	"description"=> "How shapes are drawn on top of one another. For examples of the possible values, visit <a href=\"https://developer.mozilla.org/samples/canvas-tutorial/6_1_canvas_composite.html\" target=\"_blank\">Mozilla's examples page</a>",
	"methods"=> "All drawing methods",
	"values"=> "<code>\"source-over\"</code>, <code>\"source-in\"</code>, <code>\"source-out\"</code>, <code>\"source-atop\"</code>, <code>\"lighter\"</code>, <code>\"destination-over\"</code>, <code>\"destination-in\"</code>, <code>\"destination-out\",</code> <code>\"destination-atop\"</code>, <code>\"copy\"</code>, <code>\"xor\"</code>",
),
"cornerRadius"=> array(
	"description"=> "The radius of a rectangle's corners",
	"methods"=> "<code>drawRect()</code>",
	"values"=> "<code>0</code>, any number",
),
"end"=> array(
	"description"=> "The end angle on an arc",
	"methods"=> "<code>drawArc()</code>",
	"values"=> "<code>360</code>, any number",
),
"fillStyle"=> array(
	"description"=> "The fill color of a shape or path",
	"methods"=> "All drawing methods",
	"values"=> "<code>\"transparent\"</code>, any valid color string",
),
"font"=> array(
	"description"=> "The font of the text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<code>\"12pt sans-serif\"</code>, any valid font string",
),
"fontStyle"=> array(
	"description"=> "The font style of the text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<code>\"normal\"</code>, \"bold\", \"italic\", \"bold italic\"",
),
"fontSize"=> array(
	"description"=> "The font size of the text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<code>\"12pt\"</code>, any number (or a string of a number with units)",
),
"fontFamily"=> array(
	"description"=> "The font family of the text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<code>\"sans-serif\"</code>, any valid font family string",
),
"fromCenter"=> array(
	"description"=> "If the <code>x</code> and <code>y</code> properties lie at the center of a shape (rather than the top-left corner)",
	"methods"=> "<code>drawArc()</code>, <code>drawEllipse()</code>, <code>drawRect()</code>, <code>drawImage()</code>, <code>drawText()</code>, <code>setPixels()</code>",
	"values"=> "<code>true</code>, <code>false</code>",
),
"height"=> array(
	"description"=> "The height of a shape",
	"methods"=> "<code>clearCanvas()</code>, <code>drawEllipse()</code>, <code>drawRect()</code>, <code>drawImage()</code>",
	"values"=> "<code>null</code>, any number",
),
"inDegrees"=> array(
	"description"=> "If angles are measured in degrees or radians",
	"methods"=> "<code>drawArc()</code>, <code>drawPolygon()</code>",
	"values"=> "<code>true</code>, <code>false</code>",
),
"layer"=> array(
	"description"=> "If the jCanvas drawing to be drawn should also be added as a layer",
	"methods"=> "All drawing methods",
	"values"=> "<code>false</code>, <code>true</code>",
),
"load"=> array(
	"description"=> "A callback function to run once an image has loaded",
	"methods"=> "<code>pattern()</code>, <code>drawImage()</code>",
	"values"=> "<code>null</code>, any function",
),
"mask"=> array(
	"description"=> "Whether the current shape is used to mask future shapes",
	"methods"=> "All drawing methods",
	"values"=> "<code>false</code>, <code>false</code>",
),
"miterLimit"=> array(
	"description"=> "The distance between the inner and outer corner of two lines. For an example, see <a href=\"https://developer.mozilla.org/samples/canvas-tutorial/4_8_canvas_miterlimit.html\" target=\"_blank\">Mozilla's demo page</a>",
	"methods"=> "All drawing methods",
	"values"=> "<code>10</code>, any number",
),
"opacity"=> array(
	"description"=> "The opacity of a drawing",
	"methods"=> "All drawing methods",
	"values"=> "<code>1</code>, any number from 0 to 1",
),
"projection"=> array(
	"description"=> "How much a polygon's sides project in or out (the default is 0, so nothing projects)",
	"methods"=> "<code>drawPolygon()</code>",
	"values"=> "<code>0</code>, any integer",
),
"r1"=> array(
	"description"=> "The start radius of a radial gradient",
	"methods"=> "<code>gradient()</code>",
	"values"=> "<code>null</code>, any number",
),
"r2"=> array(
	"description"=> "The end radius of a radial gradient",
	"methods"=> "<code>gradient()</code>",
	"values"=> "<code>null</code>, any number",
),
"radius"=> array(
	"description"=> "The radius of a circle or polygon",
	"methods"=> "<code>drawArc()</code>, <code>drawPolygon()</code>",
	"values"=> "<code>0</code>, any number",
),
"repeat"=> array(
	"description"=> "How a pattern is repeated",
	"methods"=> "<code>pattern()</code>",
	"values"=> "<code>\"repeat\"</code>, \"repeat-x\", \"repeat-y\", \"no-repeat\"",
),
"rounded"=> array(
	"description"=> "If the corners of a path is rounded",
	"methods"=> "<code>drawLine()</code>, <code>drawQuadratic()</code>, <code>drawBezier()</code>",
	"values"=> "<code>0</code>, any number",
),
"scale"=> array(
	"description"=> "A multiple of the canvas width and height (used for scaling)",
	"methods"=> "<code>scaleCanvas()</code>, all methods",
	"values"=> "<code>1</code>, any number",
),
"scaleX"=> array(
	"description"=> "A multiple of the canvas width (used for scaling)",
	"methods"=> "<code>scaleCanvas()</code>, all shape methods, <code>drawImage()</code>",
	"values"=> "<code>1</code>, any number",
),
"scaleY"=> array(
	"description"=> "A multiple of the canvas width (used for scaling)",
	"methods"=> "<code>scaleCanvas()</code>,",
	"values"=> "<code>1</code>, any number",
),
"shadowBlur"=> array(
	"description"=> "The blur radius of a shadow",
	"methods"=> "All drawing methods",
	"values"=> "<code>0</code>, any number",
),
"shadowColor"=> array(
	"description"=> "The color of a shadow",
	"methods"=> "All drawing methods",
	"values"=> "<code>\"transparent\"</code>, any valid color string",
),
"shadowX"=> array(
	"description"=> "The x-offset of a shadow",
	"methods"=> "All drawing methods",
	"values"=> "<code>0</code>, any number",
),
"shadowY"=> array(
	"description"=> "The y-offset of a shadow",
	"methods"=> "All drawing methods",
	"values"=> "<code>0</code>, any number",
),
"shadowStroke"=> array(
	"description"=> "Whether a shape's stroke adds to a shape's shadow",
	"methods"=> "All drawing methods",
	"values"=> "<code>false</code>, <code>true</code>",
),
"sides"=> array(
	"description"=> "How many sides a polygon will have",
	"methods"=> "<code>drawPolygon()</code>",
	"values"=> "<code>3</code>, any number greater than 2",
),
"source"=> array(
	"description"=> "The source of the image to be drawn",
	"methods"=> "<code>drawImage()</code>, <code>pattern()</code>",
	"values"=> "<code>\"\"</code>, any string, image DOM element, or canvas DOM element",
),
"sHeight"=> array(
	"description"=> "The height of an image's crop region",
	"methods"=> "<code>drawImage()</code>",
	"values"=> "<code>null</code>, any number",
),
"start"=> array(
	"description"=> "The start angle on an arc",
	"methods"=> "<code>drawArc()</code>",
	"values"=> "<code>0</code>, any number",
),
"strokeCap"=> array(
	"description"=> "The type of cap for any stroke",
	"methods"=> "All drawing methods",
	"values"=> "<code>\"butt\"</code>, <code>\"square\"</code>, <code>\"round\"</code>",
),
"strokeJoin"=> array(
	"description"=> "The type of cap between connected strokes",
	"methods"=> "All drawing methods",
	"values"=> "<code>\"miter\"</code>, <code>\"bevel\"</code>, <code>\"round\"</code>",
),
"strokeStyle"=> array(
	"description"=> "The stroke color of a shape or path",
	"methods"=> "All drawing methods",
	"values"=> "<code>\"transparent\"</code>, any valid color string",
),
"strokeWidth"=> array(
	"description"=> "The stroke width of a shape or path",
	"methods"=> "All drawing methods",
	"values"=> "<code>1</code>, any number",
),
"sWidth"=> array(
	"description"=> "The width of an image's crop region",
	"methods"=> "<code>drawImage()</code>",
	"values"=> "<code>null</code>, any number",
),
"sx"=> array(
	"description"=> "The x position of an image's crop region",
	"methods"=> "<code>drawImage()</code>",
	"values"=> "<code>0</code>, any number",
),
"sy"=> array(
	"description"=> "The y position of an image's crop region",
	"methods"=> "<code>drawImage()</code>",
	"values"=> "<code>0</code>, any number",
),
"text"=> array(
	"description"=> "The text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<code>\"\"</code>, any string",
),
"translateX"=> array(
	"description"=> "The number of pixels by which a shape or canvas is translated on the x-axis",
	"methods"=> "All drawing methods except <code>drawLine()</code>, <code>drawQuadratic()</code>, and <code>drawBezier()</code>",
	"values"=> "<code>0</code>, any number",
),
"translateY"=> array(
	"description"=> "The number of pixels by which a shape or canvas is translated on the y-axis",
	"methods"=> "All drawing methods except <code>drawLine()</code>, <code>drawQuadratic()</code>, and <code>drawBezier()</code>",
	"values"=> "<code>0</code>, any number",
),
"visible"=> array(
	"description"=> "If a jCanvas layer is drawn on the canvas",
	"methods"=> "All drawing methods",
	"values"=> "<code>true</code>, <code>false</code>",
),
"width"=> array(
	"description"=> "The width of a shape",
	"methods"=> "<code>clearCanvas()</code>, <code>drawEllipse()</code>, <code>drawRect()</code>, <code>drawImage()</code>",
	"values"=> "<code>null</code>, any number",
),
"x"=> array(
	"description"=> "The x position on the canvas for a shape",
	"methods"=> "All drawing methods except <code>drawLine()</code>, <code>drawQuadratic()</code>, and <code>drawBezier()</code>",
	"values"=> "<code>0</code>, any number",
),
"y"=> array(
	"description"=> "The y position on the canvas for a shape",
	"methods"=> "All drawing methods except <code>drawLine()</code>, <code>drawQuadratic()</code>, and <code>drawBezier()</code>",
	"values"=> "<code>0</code>, any number",
),
"name"=> array(
	"description"=> "The name associated with a layer",
	"methods"=> "All drawing methods",
	"values"=> "<code>\"\"</code>, any string",
),
"groups"=> array(
	"description"=> "An array of group names associated with a layer",
	"methods"=> "All drawing methods",
	"values"=> "<code>null</code>, any array of strings",
),
"bringToFront"=> array(
	"description"=> "If a draggable layer will come to the front (above all other layers) when dragged",
	"methods"=> "All drawing methods",
	"values"=> "<code>false</code>, <code>true</code>",
),
"draggable"=> array(
	"description"=> "If a layer can be dragged",
	"methods"=> "All drawing methods",
	"values"=> "<code>false</code>, <code>true</code>",
),
"disableEvents"=> array(
	"description"=> "Temporarily disables a layer's events from firing",
	"methods"=> "All drawing methods",
	"values"=> "<code>false</code>, <code>true</code>",
),
"maxWidth"=> array(
	"description"=> "The maximum width for any line of text in a text drawing",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<code>null</code>, any number",
),
"lineHeight"=> array(
	"description"=> "The line height of a text drawing, the value of which is a multiple of the default line height",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<code>1</code>, any number",
),
"fn"=> array(
	"description"=> "A callback function",
	"methods"=> "<code>draw()</code>",
	"values"=> "<code>null</code>, any function",
),
"data"=> array(
	"description"=> "An object that can store any user-defined data for a jCanvas layer",
	"methods"=> "All drawing methods",
	"values"=> "<code>{}</code>, any object",
),
"imageSmoothing"=> array(
	"description"=> "If the browser automatically smooths rendered canvas images",
	"methods"=> "<code>drawImage()</code>, <code>drawPattern()</code>",
	"values"=> "<code>true</code>, <code>false</code>",
),
"dragGroups"=> array(
	"description"=> "The names of any groups that will be dragged when the target layer is dragged",
	"methods"=> "All drawing methods",
	"values"=> "<code>null</code>, an array of one or more group names"
),
"respectAlign"=> array(
	"description"=> "Ensures that the text's (x, y) coordinates are in line with either the left or right margin (depending of the value of the <code>align</code> property)</p>",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<code>true</code>, <code>false</code>",
),
"intersects"=> array(
	"description"=> "Determines if a layer's area intersects with the current mouse/touch coordinates. Note that the layer must have at least one event for this property to work.",
	"methods"=> "All drawing methods",
	"values"=> "<code>true</code>, <code>false</code>",
),
"spread"=> array(
	"description"=> "The distance a slice is from its defined (x, y) coordinates. This distance is a multiple of the slice's radius, with a value ranging from 0 to 1.",
	"methods"=> "drawSlice()",
	"values"=> "<code>0</code>, any number between 0 and 1",
),
"type"=> array(
	"description"=> "The type of a layer",
	"methods"=> "All drawing methods",
	"values"=> "<code>null</code>, <code>\"rectangle\"</code>, <code>\"arc\"</code>, <code>\"circle\"</code>, <code>\"ellipse\"</code>, <code>\"polygon\"</code>, <code>\"line\"</code>, <code>\"vector\"</code>, <code>\"quadratic\"</code>, <code>\"bezier\"</code>, <code>\"image\"</code>, <code>\"text\"</code>, <code>\"function\"</code>",
)

);

// Sort all properties alphabetically
ksort($props);

// Dynamically create HTML from property list
foreach ($props as $prop => $attrs) {

	// Add property name
	echo "<li><h3><a href='#$prop' class='subsection'>$prop</a></h3>
	<ul class='box'>";
	
	// Add info for each property
	foreach ($attrs as $attr => $info) {
		$attr = ucwords($attr);
		echo "\n\t\t<li><dfn>$attr:</dfn> $info</li>";
	}
	echo "</ul></li>";
	
}
?>
</ul>