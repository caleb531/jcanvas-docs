## Methods

This is a reference of every jCanvas method, for quick access.

### [addLayer( )](addLayers.md)

  - Syntax
    - `addLayer( properties )`
  - Returns
    - `jQuery`

### [addLayerToGroup( )](addLayers.md)

  - Syntax
    - `addLayerToGroup( layerId, groupName )`
  - Returns
    - `jQuery`

### [animateLayer( )](animateLayers.md)

  - Syntax
    - `animateLayer( layerId, properties [, duration ] [, easing ] [, callback ] )`
    - `animateLayer( layerId, properties, options )`
  - Returns
    - `jQuery`

### [animateLayerGroup( )](animateLayers.md)

  - Syntax
    - `animateLayerGroup( groupId, properties [, duration ] [, easing ] [, callback ] )`
    - `animateLayerGroup( groupId, properties, options )`
  - Returns
    - `jQuery`

### [clearCanvas( )](clearCanvas.md)

  - Syntax
    - `clearCanvas( properties )`
  - Returns
    - `jQuery`

### [createGradient( )](gradients.md)

  - Syntax
    - `createGradient( properties )`
  - Returns
    - `CanvasGradient`

### [createPattern( )](patterns.md)

  - Syntax
    - `createPattern( properties )`
  - Returns
    - `CanvasPattern`

### [delayLayer( )](animateLayers.md)

  - Syntax
    - `delayLayer( layerId [, duration ] )`
  - Returns
    - `jQuery`

### [delayLayerGroup( )](animateLayers.md)

  - Syntax
    - `delayLayerGroup( groupId [, duration ] )`
  - Returns
    - `jQuery`

### [detectPixelRatio( )](detectPixelRatio.md)

  - Syntax
    - `detectPixelRatio( [ callback ] )`
  - Returns
    - `jQuery`

### [draw( )](drawManually.md)

  - Syntax
    - `draw( properties )`
  - Returns
    - `jQuery`

### [drawArc( )](arcs.md)

  - Syntax
    - `drawArc( properties )`
  - Returns
    - `jQuery`

### [drawBezier( )](curves.md)

  - Syntax
    - `drawBezier( properties )`
  - Returns
    - `jQuery`

### [drawEllipse( )](ellipses.md)

  - Syntax
    - `drawEllipse( properties )`
  - Returns
    - `jQuery`

### [drawImage( )](images.md)

  - Syntax
    - `drawImage( properties )`
  - Returns
    - `jQuery`

### [drawLayers( )](drawLayers.md)

  - Syntax
    - `drawLayers( )`
  - Returns
    - `jQuery`

### [drawLine( )](lines.md)

  - Syntax
    - `drawLine( properties )`
  - Returns
    - `jQuery`

### [drawPolygon( )](polygons.md)

  - Syntax
    - `drawPolygon( properties )`
  - Returns
    - `jQuery`

### [drawQuadratic( )](curves.md)

  - Syntax
    - `drawQuadratic( properties )`
  - Returns
    - `jQuery`

### [drawRect( )](rectangles.md)

  - Syntax
    - `drawRect( properties )`
  - Returns
    - `jQuery`

### [drawSlice( )](slices.md)

  - Syntax
    - `drawSlice( properties )`
  - Returns
    - `jQuery`

### [drawText( )](text.md)

  - Syntax
    - `drawText( properties )`
  - Returns
    - `jQuery`

### [drawVector( )](vectors.md)

  - Syntax
    - `drawVector( properties )`
  - Returns
    - `jQuery`

### [getCanvasImage( )](getCanvasImage.md)

  - Syntax
    - `getCanvasImage( [ imageType ] )`
  - Returns
    - `String`

### [getEventHooks( )](eventHooks.md)

  - Syntax
    - `getEventHooks( )`
  - Returns
    - `Object`

### [getLayer( )](retrieveLayers.md)

  - Syntax
    - `getLayer( layerId )`
  - Returns
    - `Layer`

### [getLayerGroup( )](retrieveLayers.md)

  - Syntax
    - `getLayerGroup( groupId )`
  - Returns
    - `Layer`

### [getLayerIndex( )](retrieveLayers.md)

  - Syntax
    - `getLayerIndex( layerId )`
  - Returns
    - `Number`

### [getLayers( )](retrieveLayers.md)

  - Syntax
    - `getLayers( [ callback ] )`
  - Returns
    - `Array`

### [jCanvas.extend( )](extending.md)

  - Syntax
    - `jCanvas.extend( properties )`
  - Returns
    - `Function`

### [measureText( )](text.md)

  - Syntax
    - `measureText( properties )`
    - `measureText( layerId )`
  - Returns
    - `Object`

### [moveLayer( )](manipulateLayers.md)

  - Syntax
    - `moveLayer( layerId, groupName )`
  - Returns
    - `jQuery`

### [removeLayer( )](manipulateLayers.md)

  - Syntax
    - `removeLayer( layerId )`
  - Returns
    - `jQuery`

### [removeLayerFromGroup( )](manipulateLayers.md)

  - Syntax
    - `removeLayerFromGroup( layerId, groupName )`
  - Returns
    - `jQuery`

### [removeLayerGroup( )](manipulateLayers.md)

  - Syntax
    - `removeLayerGroup( groupId )`
  - Returns
    - `jQuery`

### [removeLayers( )](manipulateLayers.md)

  - Syntax
    - `removeLayers( )`
  - Returns
    - `jQuery`

### restoreCanvas( )

  - Syntax
    - `restoreCanvas( properties )`
  - Returns
    - `jQuery`
  - Notes
    - For usage details, see the documentation for [`rotateCanvas()`](rotateCanvas.md), [`scaleCanvas()`](scaleCanvas.md), [`translateCanvas()`](translateCanvas.md), or [Masking](masking.md).

### [rotateCanvas( )](rotateCanvas.md)

  - Syntax
    - `rotateCanvas( properties )`
  - Returns
    - `jQuery`

### [scaleCanvas( )](scaleCanvas.md)

  - Syntax
    - `scaleCanvas( properties )`
  - Returns
    - `jQuery`

### [setEventHooks( )](eventHooks.md)

  - Syntax
    - `setEventHooks( properties )`
  - Returns
    - `jQuery`

### [setLayer( )](manipulateLayers.md)

  - Syntax
    - `setLayer( layerId, properties )`
  - Returns
    - `jQuery`

### [setLayerGroup( )](manipulateLayers.md)

  - Syntax
    - `setLayerGroup( groupId, properties )`
  - Returns
    - `jQuery`

### [setLayers( )](manipulateLayers.md)

  - Syntax
    - `setLayers( properties [, callback ] )`
  - Returns
    - `jQuery`

### [setPixels( )](pixelManipulation.md)

  - Syntax
    - `setPixels( properties )`
  - Returns
    - `jQuery`

### [stopLayer( )](animateLayers.md)

  - Syntax
    - `stopLayer( layerId [, clearQueue ] )`
  - Returns
    - `jQuery`

### [stopLayerGroup( )](animateLayers.md)

  - Syntax
    - `stopLayerGroup( groupId [, clearQueue ] )`
  - Returns
    - `jQuery`

### [translateCanvas( )](translateCanvas.md)

  - Syntax
    - `translateCanvas( properties )`
  - Returns
    - `jQuery`
