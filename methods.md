## Methods

This is a reference of every jCanvas method, for quick access.

### [addLayer( )](/jcanvas/docs/addLayers#adding-layers)

	- Syntax
		- `addLayer( properties )`
	- Returns
		- `jQuery`

### [addLayerToGroup( )](/jcanvas/docs/addLayers#grouping-layers)

	- Syntax
		- `addLayerToGroup( layerId, groupName )`
	- Returns
		- `jQuery`

### [animateLayer( )](/jcanvas/docs/animateLayers#animating-layers)

	- Syntax
		- `animateLayer( layerId, properties [, duration ] [, easing ] [, callback ] )`
		- `animateLayer( layerId, properties, options )`
	- Returns
		- `jQuery`

### [animateLayerGroup( )](/jcanvas/docs/animateLayers#animating-layer-groups)

	- Syntax
		- `animateLayerGroup( groupId, properties [, duration ] [, easing ] [, callback ] )`
		- `animateLayerGroup( groupId, properties, options )`
	- Returns
		- `jQuery`

### [clearCanvas( )](/jcanvas/docs/clearCanvas)

	- Syntax
		- `clearCanvas( properties )`
	- Returns
		- `jQuery`

### [createGradient( )](/jcanvas/docs/gradients)

	- Syntax
		- `createGradient( properties )`
	- Returns
		- `CanvasGradient`

### [createPattern( )](/jcanvas/docs/patterns)

	- Syntax
		- `createPattern( properties )`
	- Returns
		- `CanvasPattern`

### [delayLayer( )](/jcanvas/docs/animateLayers)

	- Syntax
		- `delayLayer( layerId [, duration ] )`
	- Returns
		- `jQuery`

### [delayLayerGroup( )](/jcanvas/docs/animateLayers#delaying-animation)

	- Syntax
		- `delayLayerGroup( groupId [, duration ] )`
	- Returns
		- `jQuery`

### [detectPixelRatio( )](/jcanvas/docs/detectPixelRatio)

	- Syntax
		- `detectPixelRatio( [ callback ] )`
	- Returns
		- `jQuery`

### [draw( )](/jcanvas/docs/drawManually)

	- Syntax
		- `draw( properties )`
	- Returns
		- `jQuery`

### [drawArc( )](/jcanvas/docs/arcs)

	- Syntax
		- `drawArc( properties )`
	- Returns
		- `jQuery`

### [drawBezier( )](/jcanvas/docs/curves#bezier-curves)

	- Syntax
		- `drawBezier( properties )`
	- Returns
		- `jQuery`

### [drawEllipse( )](/jcanvas/docs/ellipses)

	- Syntax
		- `drawEllipse( properties )`
	- Returns
		- `jQuery`

### [drawImage( )](/jcanvas/docs/images)

	- Syntax
		- `drawImage( properties )`
	- Returns
		- `jQuery`

### [drawLayers( )](/jcanvas/docs/drawLayers)

	- Syntax
		- `drawLayers( )`
	- Returns
		- `jQuery`

### [drawLine( )](/jcanvas/docs/lines)

	- Syntax
		- `drawLine( properties )`
	- Returns
		- `jQuery`

### [drawPolygon( )](/jcanvas/docs/polygons)

	- Syntax
		- `drawPolygon( properties )`
	- Returns
		- `jQuery`

### [drawQuadratic( )](/jcanvas/docs/curves#quadratic-curves)

	- Syntax
		- `drawQuadratic( properties )`
	- Returns
		- `jQuery`

### [drawRect( )](/jcanvas/docs/rectangles)

	- Syntax
		- `drawRect( properties )`
	- Returns
		- `jQuery`

### [drawSlice( )](/jcanvas/docs/slices)

	- Syntax
		- `drawSlice( properties )`
	- Returns
		- `jQuery`

### [drawText( )](/jcanvas/docs/text)

	- Syntax
		- `drawText( properties )`
	- Returns
		- `jQuery`

### [drawVector( )](/jcanvas/docs/vectors)

	- Syntax
		- `drawVector( properties )`
	- Returns
		- `jQuery`

### [getCanvasImage( )](/jcanvas/docs/getCanvasImage)

	- Syntax
		- `getCanvasImage( [ imageType ] )`
	- Returns
		- `String`

### [getEventHooks( )](/jcanvas/docs/eventHooks)

	- Syntax
		- `getEventHooks( )`
	- Returns
		- `Object`

### [getLayer( )](/jcanvas/docs/retrieveLayers#retrieving-a-single-layer)

	- Syntax
		- `getLayer( layerId )`
	- Returns
		- `Layer`

### [getLayerGroup( )](/jcanvas/docs/retrieveLayers#retrieving-layer-groups)

	- Syntax
		- `getLayerGroup( groupId )`
	- Returns
		- `Layer`

### [getLayerIndex( )](/jcanvas/docs/retrieveLayers#retrieving-layer-indices)

	- Syntax
		- `getLayerIndex( layerId )`
	- Returns
		- `Number`

### [getLayers( )](/jcanvas/docs/retrieveLayers#retrieving-all-layers)

	- Syntax
		- `getLayers( [ callback ] )`
	- Returns
		- `Array`

### [jCanvas.extend( )](/jcanvas/docs/extending)

	- Syntax
		- `jCanvas.extend( properties )`
	- Returns
		- `Function`

### [measureText( )](/jcanvas/docs/text#measuring-text)

	- Syntax
		- `measureText( properties )`
		- `measureText( layerId )`
	- Returns
		- `Object`

### [moveLayer( )](/jcanvas/docs/manipulateLayers#moving-layers)

	- Syntax
		- `moveLayer( layerId, groupName )`
	- Returns
		- `jQuery`

### [removeLayer( )](/jcanvas/docs/manipulateLayers#removing-layers)

	- Syntax
		- `removeLayer( layerId )`
	- Returns
		- `jQuery`

### [removeLayerFromGroup( )](/jcanvas/docs/manipulateLayers#removing-layers)

	- Syntax
		- `removeLayerFromGroup( layerId, groupName )`
	- Returns
		- `jQuery`

### [removeLayerGroup( )](/jcanvas/docs/manipulateLayers#removing-layer-groups)

	- Syntax
		- `removeLayerGroup( groupId )`
	- Returns
		- `jQuery`

### [removeLayers( )](/jcanvas/docs/manipulateLayers#removing-layers)

	- Syntax
		- `removeLayers( )`
	- Returns
		- `jQuery`

### [restoreCanvas( )](/jcanvas/docs/restoreCanvas)

	- Syntax
		- `restoreCanvas( properties )`
	- Returns
		- `jQuery`

### [rotateCanvas( )](/jcanvas/docs/rotateCanvas)

	- Syntax
		- `rotateCanvas( properties )`
	- Returns
		- `jQuery`

### [saveCanvas( )](/jcanvas/docs/saveCanvas)

	- Syntax
		- `saveCanvas( properties )`
	- Returns
		- `jQuery`

### [scaleCanvas( )](/jcanvas/docs/scaleCanvas)

	- Syntax
		- `scaleCanvas( properties )`
	- Returns
		- `jQuery`

### [setEventHooks( )](/jcanvas/docs/eventHooks)

	- Syntax
		- `setEventHooks( properties )`
	- Returns
		- `jQuery`

### [setLayer( )](/jcanvas/docs/manipulateLayers#setting-layer-properties)

	- Syntax
		- `setLayer( layerId, properties )`
	- Returns
		- `jQuery`

### [setLayerGroup( )](/jcanvas/docs/manipulateLayers#setting-layer-group-properties)

	- Syntax
		- `setLayerGroup( groupId, properties )`
	- Returns
		- `jQuery`

### [setLayers( )](/jcanvas/docs/manipulateLayers#setting-layer-properties)

	- Syntax
		- `setLayers( properties [, callback ] )`
	- Returns
		- `jQuery`

### [setPixels( )](/jcanvas/docs/pixelManipulation/)

	- Syntax
		- `setPixels( properties )`
	- Returns
		- `jQuery`

### [stopLayer( )](/jcanvas/docs/animateLayers#stopping-animation)

	- Syntax
		- `stopLayer( layerId [, clearQueue ] )`
	- Returns
		- `jQuery`

### [stopLayerGroup( )](/jcanvas/docs/animateLayers#stopping-animation)

	- Syntax
		- `stopLayerGroup( groupId [, clearQueue ] )`
	- Returns
		- `jQuery`

### [translateCanvas( )](/jcanvas/docs/translateCanvas)

	- Syntax
		- `translateCanvas( properties )`
	- Returns
		- `jQuery`
