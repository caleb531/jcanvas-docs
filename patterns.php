<h2>Patterns</h2>

<p>The <code>createPattern()</code> method returns a canvas pattern object, which can be used as a fill or stroke style for any drawing.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
function draw(patt) {
  $("canvas").drawEllipse({
    fillStyle: patt,
    x: 200, y: 100,
    width: 250, height: 100
  });
}

var patt = $("canvas").createPattern({
  source: "images/water.jpg",
  repeat: "repeat",
  // Draw ellipse when pattern loads
  load: draw
});
</pre>
</div>

<h3>Referencing an Image Element</h3>

<p>You can also use an image DOM element as the value for the <code>source</code> property.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
function draw(patt) {
  $("canvas").drawEllipse({
    fillStyle: patt,
    x: 200, y: 100,
    width: 250, height: 100
  });
}

var patt = $("canvas").createPattern({
  source: $('#water')[0],
  repeat: "repeat",
  // Draw ellipse when pattern loads
  load: draw
});
</pre>
</div>

<h3>Creating a pattern using a function</h3>

<p>As of version 5.3, anything that can be drawn on the canvas can also be used as a pattern.</p>

<p>To do so, use a function as the value of the <code>source</code> property. In your function, you may draw using jCanvas methods, or utilize the given canvas context. Also ensure you give the pattern a <code>width</code> and a <code>height</code>.</p>

<p>Finally, if you would rather use a existing canvas element, feel free to do so using the <code>source</code> property.</p>

<div class='code demo'>
<pre class='prettyprint lang-js'>
// Create pattern
var patt = $("canvas").createPattern({
  // Define width/height of pattern (before repeating)
  width: 40, height: 40,
  source: function(context) {
    // Draw rectangle (which will repeat)
    $(this).drawRect({
      fillStyle: "#bcdeb2",
      strokeStyle: "#009c56",
      strokeWidth: 1,
      x: 0, y: 0,
      width: 40, height: 40,
      fromCenter: false,
      cornerRadius: 6
    });
  }
});

// Draw ellipse with pattern as fill style
$("canvas").drawEllipse({
  fillStyle: patt,
  strokeStyle: "#009c56",
  x: 200, y: 100,
  width: 300, height: 100
});
</pre>
</div>


<h3>Notes</h3>
<p>By default, the pattern repeats on both the X- and Y-axis</p>