<h2>Methods</h2>

<p>This is a reference of every jCanvas method, for quick access.</p>

<p>Click a method name to see information about that method.</p>

<ul id='methods' class='accordion'><?php
	
	$methods = array(
		"jCanvas" => array(
			"url"=> "preferences",
			"defs"=> array(
				"( [ properties ] )",
			),
			"returns"=> "jQuery"
		),
		"addLayer" => array(
			"url"=> "addLayers#adding-layers",
			"defs"=> array(
				"( [ properties ] )",
			),
			"returns"=> "jQuery"
		),
		"animateLayer" => array(
			"url"=> "animateLayers#animating-layers",
			"defs"=> array(
				"( layerId, properties [, duration ] [, easing ] [, callback ] )",
				"( layerId, properties, options )",
			),
			"returns"=> "jQuery"
		),
		"animateLayerGroup" => array(
			"url"=> "animateLayers#animating-layer-groups",
			"defs"=> array(
				"( groupId, properties [, duration ] [, easing ] [, callback ] )",
				"( groupId, properties, options )",
			),
			"returns"=> "jQuery"
		),
		"clearCanvas" => array(
			"url"=> "clearCanvas",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"draw" => array(
			"url"=> "drawManually",
			"defs"=> array(
				"( [ properties ] )",
			),
			"returns"=> "jQuery",			
		),
		"drawArc" => array(
			"url"=> "arcs",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"drawBezier" => array(
			"url"=> "curves#bezier-curves",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"drawEllipse" => array(
			"url"=> "ellipses",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"drawImage" => array(
			"url"=> "images",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"drawLayers" => array(
			"url"=> "layers#drawing-layers",
			"defs"=> array(
				"( )"
			),
			"returns"=> "jQuery",			
		),
		"drawLine" => array(
			"url"=> "lines",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"drawPolygon" => array(
			"url"=> "polygons",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"drawQuadratic" => array(
			"url"=> "curves#quadratic-curves",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"drawRect" => array(
			"url"=> "rectangles",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"drawText" => array(
			"url"=> "text",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"delayLayer" => array(
			"url"=> "animatingLayers",
			"defs"=> array(
				"( layerId [, duration ] )"
			),
			"returns"=> "jQuery",			
		),
		"createGradient" => array(
			"url"=> "gradients",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "CanvasGradient",
		),
		"createPattern" => array(
			"url"=> "patterns",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "CanvasPattern",
		),
		"restoreCanvas" => array(
			"url"=> "restoreCanvas",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",			
		),
		"restoreCanvasOnRedraw" => array(
			"url"=> "masking#masking-draggable-shapes",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",			
		),
		"rotateCanvas" => array(
			"url"=> "rotateCanvas",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"saveCanvas" => array(
			"url"=> "saveCanvas",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",			
		),
		"scaleCanvas" => array(
			"url"=> "scaleCanvas",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"setPixels" => array(
			"url"=> "setPixels",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"translateCanvas" => array(
			"url"=> "translateCanvas",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"getLayers" => array(
			"url"=> "retrieveLayers#retrieving-all-layers",
			"defs"=> array(
				"( )"
			),
			"returns"=> "jQuery",			
		),
		"setLayer" => array(
			"url"=> "manipulateLayers#setting-layer-properties",
			"defs"=> array(
				"( layerId,  [ properties ] )"
			),
			"returns"=> "jQuery",			
		),
		"setLayers" => array(
			"url"=> "manipulateLayers#setting-layer-properties",
			"defs"=> array(
				"( properties )"
			),
			"returns"=> "jQuery",			
		),
		"setLayerGroup" => array(
			"url"=> "manipulateLayers#setting-layer-group-properties",
			"defs"=> array(
				"(  groupId, [ properties ] )"
			),
			"returns"=> "jQuery",			
		),
		"getLayer" => array(
			"url"=> "retrieveLayers#retrieving-a-single-layer",
			"defs"=> array(
				"( layerId )"
			),
			"returns"=> "Layer",			
		),
		"getLayerIndex" => array(
			"url"=> "retrieveLayers#retrieving-layer-indices",
			"defs"=> array(
				"( layerId )"
			),
			"returns"=> "Number",			
		),
		"getLayerGroup" => array(
			"url"=> "retrieveLayers#retrieving-layer-groups",
			"defs"=> array(
				"( groupId )"
			),
			"returns"=> "Layer",
		),
		"removeLayers" => array(
			"url"=> "manipulateLayers#removing-layers",
			"defs"=> array(
				"( )"
			),
			"returns"=> "jQuery",			
		),
		"removeLayer" => array(
			"url"=> "manipulateLayers#removing-layers",
			"defs"=> array(
				"( layerId )"
			),
			"returns"=> "jQuery",			
		),
		"removeLayerGroup" => array(
			"url"=> "manipulateLayers#removing-layer-groups",
			"defs"=> array(
				"( groupId )"
			),
			"returns"=> "jQuery",			
		),
		"getCanvasImage" => array(
			"url"=> "getCanvasImage",
			"defs"=> array(
				"( [ imageType ] )"
			),
			"returns"=> "String",			
		),
		"stopLayer" => array(
			"url"=> "animatingLayers#stopping-animation",
			"defs"=> array(
				"( layerId [, clearQueue ] )"
			),
			"returns"=> "jQuery",			
		),
		"stopLayerGroup" => array(
			"url"=> "animatingLayers#stopping-animation",
			"defs"=> array(
				"( groupId [, clearQueue ] )"
			),
			"returns"=> "jQuery",			
		),
		"delayLayerGroup" => array(
			"url"=> "animatingLayers#delaying-animation",
			"defs"=> array(
				"( groupId [, clearQueue ] )"
			),
			"returns"=> "jQuery",			
		),
		"measureText" => array(
			"url"=> "text#measuring-text",
			"defs"=> array(
				"( [ properties ] )",
				"( layerId )"
			),
			"returns"=> "Object",			
		),
		"jCanvas.extend" => array(
			"url"=> "extending",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "Function",
		),
		"drawVector" => array(
			"url"=> "vectors",
			"defs"=> array(
				"( [ properties ] )"
			),
			"returns"=> "jQuery",
		),
		"detectPixelRatio" => array(
			"url"=> "detectPixelRatio",
			"defs"=> array(
				"( [ callback ] )"
			),
			"returns"=> "jQuery",
		),
	);
	ksort($methods);
		
	foreach ($methods as $name => $info) {
		echo "
	<li id='$name'><h3><a href='#" . str_replace('.', '_', $name) . "' class='subsection'>$name( )</a></h3>
		<ul class='box'>
			<li><dfn><a href='/projects/jcanvas/docs/$info[url]'>Method Usage</a></dfn></li>
			<li><dfn>Syntax</dfn>\n\t\t\t\t\t<ul class='syntax'>";
			// Add syntax definitions
			foreach ($info['defs'] as $def) {
				$def = preg_replace('/\] \[/', '] [', $def);
				$def = preg_replace('/\] (\w+) \[/', '] \1 [', $def);
				echo "\n\t\t\t\t\t\t<li><code>$name$def</code></li>";
			}
			echo "\n\t\t\t\t\t</ul>\n\t\t\t\t</li>
			<li><dfn>Returns:</dfn> <code>$info[returns]</code></li>
		</ul>
	</li>";
	}

?></ul>