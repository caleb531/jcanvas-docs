<h2>Properties</h2>

<p>These are descriptions of every jCanvas property, their supported methods, and their possible values. Default values are listed first in <strong>bold</strong>.</p>

<p>Click a property name to see information about that property.</p>

<ul id='properties' class='accordion'>
<?php
// List of properties and their attributes
$props = array(

"align"=> array(
	"description"=> "The horizontal alignment of the text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<strong><code>\"center\"</code></strong>, <code>\"left\"</code>, <code>\"right\"</code>, <code>\"start\"</code>, <code>\"end\"</code>",
),
"rotate"=> array(
	"description"=> "The angle at which a polygon is rotated",
	"methods"=> "<code>clearCanvas()</code>, <code>drawRect()</code>, <code>drawArc()</code>, <code>drawEllipse()</code>, <code>drawImage()</code>, <code>drawPolygon()</code>",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"autosave"=> array(
	"description"=> "If transforming the canvas (with a method such as <code>scaleCanvas()</code>) automatically saves the canvas state. Please note that this also applies to usage of the <code>mask</code> property. ",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>true</code></strong>, <code>false</code>",
),
"baseline"=> array(
	"description"=> "The vertical alignment of the text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<strong><code>\"middle\"</code></strong>, <code>\"top\"</code>, <code>\"hanging\"</code>, <code>\"alphabetic\"</code>, <code>\"ideographic\"</code>, <code>\"bottom\"</code>",
),
"cropFromCenter"=> array(
	"description"=> "If the <code>sx</code> and <code>sy</code> properties (for an image's cropping region) lie at the center point of the region",
	"methods"=> "<code>drawImage()</code>",
	"values"=> "<strong><code>true</code></strong>, <code>false</code>",
),
"ccw"=> array(
	"description"=> "If an arc is drawn in the counterclockwise direction",
	"methods"=> "<code>drawArc()</code>",
	"values"=> "<strong><code>false</code></strong>, <code>false</code>",
),
"closed"=> array(
	"description"=> "If a path is closed before it is filled/stroked",
	"methods"=> "<code>drawArc()</code>, <code>drawLine()</code>, <code>drawQuadratic()</code>, <code>drawBezier()</code>",
	"values"=> "<strong><code>false</code></strong>, <code>false</code>",
),
"compositing"=> array(
	"description"=> "How shapes are drawn on top of one another. For examples of the possible values, visit <a href=\"https://developer.mozilla.org/samples/canvas-tutorial/6_1_canvas_composite.html\" target=\"_blank\">Mozilla's examples page</a>.",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>\"source-over\"</code></strong>, \"source-in\", \"source-out\", \"source-atop\", <code>\"lighter\"</code>, \"destination-over\", \"destination-in\", \"destination-out\", \"destination-atop\", <code>\"copy\"</code>, <code>\"xor\"</code>",
),
"cornerRadius"=> array(
	"description"=> "The radius of a rectangle's corners",
	"methods"=> "<code>drawRect()</code>",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"end"=> array(
	"description"=> "The end angle on an arc",
	"methods"=> "<code>drawArc()</code>",
	"values"=> "<strong><code>360</code></strong>, any number",
),
"fillStyle"=> array(
	"description"=> "The fill color of a shape or path",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>\"transparent\"</code></strong>, any valid color string",
),
"font"=> array(
	"description"=> "The font of the text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<strong><code>\"12pt sans-serif\"</code></strong>, any valid font string",
),
"fontStyle"=> array(
	"description"=> "The font style of the text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<strong><code>\"normal\"</code></strong>, \"bold\", \"italic\", \"bold italic\"",
),
"fontSize"=> array(
	"description"=> "The font size of the text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<strong><code>\"12pt\"</code></strong>, any number (or a string of a number with units)",
),
"fontFamily"=> array(
	"description"=> "The font family of the text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<strong><code>\"sans-serif\"</code></strong>, any valid font family string",
),
"fromCenter"=> array(
	"description"=> "If the <code>x</code> and <code>y</code> properties lie at the center of a shape (rather than the top-left corner)",
	"methods"=> "<code>drawArc()</code>, <code>drawEllipse()</code>, <code>drawRect()</code>, <code>drawImage()</code>, <code>drawText()</code>, <code>setPixels()</code>",
	"values"=> "<strong><code>true</code></strong>, <code>false</code>",
),
"height"=> array(
	"description"=> "The height of a shape",
	"methods"=> "<code>clearCanvas()</code>, <code>drawEllipse()</code>, <code>drawRect()</code>, <code>drawImage()</code>",
	"values"=> "<strong><code>null</code></strong>, any number",
),
"inDegrees"=> array(
	"description"=> "If angles are measured in degrees or radians",
	"methods"=> "<code>drawArc()</code>, <code>drawPolygon()</code>",
	"values"=> "<strong><code>true</code></strong>, <code>false</code>",
),
"layer"=> array(
	"description"=> "If the jCanvas drawing to be drawn should also be added as a layer",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>false</code></strong>, <code>true</code>",
),
"load"=> array(
	"description"=> "A callback function to run once an image has loaded",
	"methods"=> "<code>pattern()</code>, <code>drawImage()</code>",
	"values"=> "<strong><code>null</code></strong>, any function",
),
"mask"=> array(
	"description"=> "Whether the current shape is used to mask future shapes",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>false</code></strong>, <code>false</code>",
),
"miterLimit"=> array(
	"description"=> "The distance between the inner and outer corner of two lines. For an example, see <a href=\"https://developer.mozilla.org/samples/canvas-tutorial/4_8_canvas_miterlimit.html\" target=\"_blank\">Mozilla's demo page</a>.",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>10</code></strong>, any number.",
),
"opacity"=> array(
	"description"=> "The opacity of a drawing",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>1</code></strong>, any number from 0 to 1",
),
"projection"=> array(
	"description"=> "How much a polygon's sides project in or out (the default is 0, so nothing projects)",
	"methods"=> "<code>drawPolygon()</code>",
	"values"=> "<strong><code>0</code></strong>, any integer",
),
"r1"=> array(
	"description"=> "The start radius of a radial gradient",
	"methods"=> "<code>gradient()</code>",
	"values"=> "<strong><code>null</code></strong>, any number",
),
"r2"=> array(
	"description"=> "The end radius of a radial gradient",
	"methods"=> "<code>gradient()</code>",
	"values"=> "<strong><code>null</code></strong>, any number",
),
"radius"=> array(
	"description"=> "The radius of a circle or polygon",
	"methods"=> "<code>drawArc()</code>, <code>drawPolygon()</code>",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"repeat"=> array(
	"description"=> "How a pattern is repeated",
	"methods"=> "<code>pattern()</code>",
	"values"=> "<strong><code>\"repeat\"</code></strong>, \"repeat-x\", \"repeat-y\", \"no-repeat\"",
),
"rounded"=> array(
	"description"=> "If the corners of a path is rounded",
	"methods"=> "<code>drawLine()</code>, <code>drawQuadratic()</code>, <code>drawBezier()</code>",
	"values"=> "<code>0</code>, any number",
),
"scale"=> array(
	"description"=> "A multiple of the canvas width and height (used for scaling)",
	"methods"=> "<code>scaleCanvas()</code>, all methods",
	"values"=> "<strong><code>1</code></strong>, any number",
),
"scaleX"=> array(
	"description"=> "A multiple of the canvas width (used for scaling)",
	"methods"=> "<code>scaleCanvas()</code>, all shape methods, <code>drawImage()</code>",
	"values"=> "<strong><code>1</code></strong>, any number",
),
"scaleY"=> array(
	"description"=> "A multiple of the canvas width (used for scaling)",
	"methods"=> "<code>scaleCanvas()</code>,",
	"values"=> "<strong><code>1</code></strong>, any number",
),
"shadowBlur"=> array(
	"description"=> "The blur radius of a shadow",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"shadowColor"=> array(
	"description"=> "The color of a shadow",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>\"transparent\"</code></strong>, any valid color string",
),
"shadowX"=> array(
	"description"=> "The x-offset of a shadow",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"shadowY"=> array(
	"description"=> "The y-offset of a shadow",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"sides"=> array(
	"description"=> "How many sides a polygon will have",
	"methods"=> "<code>drawPolygon()</code>",
	"values"=> "<strong><code>3</code></strong>, any number greater than 2",
),
"source"=> array(
	"description"=> "The source of the image to be drawn.",
	"methods"=> "<code>drawImage()</code>, <code>pattern()</code>",
	"values"=> "<strong><code>\"\"</code></strong>, any string, image DOM element, or canvas DOM element.",
),
"sHeight"=> array(
	"description"=> "The height of an image's crop region",
	"methods"=> "<code>drawImage()</code>",
	"values"=> "<strong><code>null</code></strong>, any number",
),
"start"=> array(
	"description"=> "The start angle on an arc",
	"methods"=> "<code>drawArc()</code>",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"strokeCap"=> array(
	"description"=> "The type of cap for any stroke",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>\"butt\"</code></strong>, <code>\"square\"</code>, <code>\"round\"</code>",
),
"strokeJoin"=> array(
	"description"=> "The type of cap between connected strokes",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>\"miter\"</code></strong>, <code>\"bevel\"</code>, <code>\"round\"</code>",
),
"strokeStyle"=> array(
	"description"=> "The stroke color of a shape or path",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>\"transparent\"</code></strong>, any valid color string",
),
"strokeWidth"=> array(
	"description"=> "The stroke width of a shape or path",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>1</code></strong>, any number",
),
"sWidth"=> array(
	"description"=> "The width of an image's crop region",
	"methods"=> "<code>drawImage()</code>",
	"values"=> "<strong><code>null</code></strong>, any number",
),
"sx"=> array(
	"description"=> "The x position of an image's crop region",
	"methods"=> "<code>drawImage()</code>",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"sy"=> array(
	"description"=> "The y position of an image's crop region",
	"methods"=> "<code>drawImage()</code>",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"text"=> array(
	"description"=> "The text to be drawn",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<strong><code>\"\"</code></strong>, any string",
),
"translateX"=> array(
	"description"=> "The number of pixels by which a shape or canvas is translated on the x-axis.",
	"methods"=> "All drawing methods except <code>drawLine()</code>, <code>drawQuadratic()</code>, and <code>drawBezier()</code>",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"translateY"=> array(
	"description"=> "The number of pixels by which a shape or canvas is translated on the y-axis.",
	"methods"=> "All drawing methods except <code>drawLine()</code>, <code>drawQuadratic()</code>, and <code>drawBezier()</code>",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"visible"=> array(
	"description"=> "If a jCanvas layer is drawn on the canvas.",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>true</code></strong>, <code>false</code>",
),
"width"=> array(
	"description"=> "The width of a shape",
	"methods"=> "<code>clearCanvas()</code>, <code>drawEllipse()</code>, <code>drawRect()</code>, <code>drawImage()</code>",
	"values"=> "<strong><code>null</code></strong>, any number",
),
"x"=> array(
	"description"=> "The x position on the canvas for a shape",
	"methods"=> "All drawing methods except <code>drawLine()</code>, <code>drawQuadratic()</code>, and <code>drawBezier()</code>",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"y"=> array(
	"description"=> "The y position on the canvas for a shape",
	"methods"=> "All drawing methods except <code>drawLine()</code>, <code>drawQuadratic()</code>, and <code>drawBezier()</code>",
	"values"=> "<strong><code>0</code></strong>, any number",
),
"name"=> array(
	"description"=> "The name associated with a layer",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>\"\"</code></strong>, any string",
),
"group"=> array(
	"description"=> "The group name associated with a layer",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>\"\"</code></strong>, any string",
),
"bringToFront"=> array(
	"description"=> "If a draggable layer will come to the front (above all other layers) when dragged",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>false</code></strong>, <code>true</code>",
),
"draggable"=> array(
	"description"=> "If a layer can be dragged",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>false</code></strong>, <code>true</code>",
),
"disableDrag"=> array(
	"description"=> "Temporarily disables a layer's ability to be dragged",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>false</code></strong>, <code>true</code>",
),
"disableEvents"=> array(
	"description"=> "Temporarily disables a layer's events from firing",
	"methods"=> "All drawing methods",
	"values"=> "<strong><code>false</code></strong>, <code>true</code>",
),
"maxWidth"=> array(
	"description"=> "The maximum width for any line of text in a text object.",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<strong>null</strong>, any number",
),
"lineHeight"=> array(
	"description"=> "The line height of a piece of text, the value of which is a multiple of the default line height.",
	"methods"=> "<code>drawText()</code>",
	"values"=> "<strong>1</strong>, any number",
),
"graph"=> array(
	"description"=> "A string indicating the type of graph. See the <a href='/projects/jcanvas/docs/graphs/'>Graphs</a> section for details about the possible values.",
	"methods"=> "<code>drawGraph()</code>",
	"values"=> "<strong>\"y\"</strong>, \"x\", \"r\"",
),
"domain"=> array(
	"description"=> "A two-value array representing the domain of a function.",
	"methods"=> "<code>drawGraph()</code>",
	"values"=> "<strong>null</strong>, any array",
),
"range"=> array(
	"description"=> "A two-value array representing the range of a function.",
	"methods"=> "<code>drawGraph()</code>",
	"values"=> "<strong>null</strong>, any array",
),
"fn"=> array(
	"description"=> "A callback function required by some jCanvas methods",
	"methods"=> "<code>draw()</code>, <code>drawGraph()</code>",
	"values"=> "<strong>null</strong>, any function",
),
"data"=> array(
	"description"=> "An object that can store any user-defined data for a jCanvas layer",
	"methods"=> "All drawing methods",
	"values"=> "<strong>{}</strong>, any object",
),
"imageSmoothing"=> array(
	"description"=> "If the browser automatically smooths rendered canvas images.",
	"methods"=> "<code>drawImage()</code>, <code>drawPattern()</code>",
	"values"=> "<strong>true</strong>, <code>false</code>",
),
"dragGroupWithLayer"=> array(
	"description"=> "Determines if a layer's <code>group</code> will drag with that layer",
	"methods"=> "All drawing methods",
	"values"=> "<strong>true</strong>, <code>false</code>",
),
"type"=> array(
	"description"=> "The type of a layer",
	"methods"=> "All drawing methods",
	"values"=> "<strong>null</strong>, <code>\"rectangle\"</code>, <code>\"arc\"</code>, <code>\"circle\"</code>, <code>\"ellipse\"</code>, <code>\"polygon\"</code>, <code>\"line\"</code>, <code>\"vector\"</code>, <code>\"quadratic\"</code>, <code>\"bezier\"</code>, <code>\"image\"</code>, <code>\"text\"</code>, <code>\"function\"</code>",
),

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