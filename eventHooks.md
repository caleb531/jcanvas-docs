## Event Hooks

Event hooks are, essentially, event callbacks that apply to all jCanvas layers. They do not override any existing event callbacks, but rather, complement them.

### Canvas Event Hooks

jCanvas supports a type of event hook called a canvas event hook. Canvas event hooks apply only to layers on the selected canvases.

To define an event hook, call the `setEventHooks()` method with the event hooks you would like to set. If you wish to remove an existing event hook, simply set its value to `null`.

```javascript
$('canvas').setEventHooks({
  add: function(layer) {
    // code to run whenever a layer is added
  }
});
```

Similarly, to retrieve the object containing all event hooks for a canvas, use the `getEventHooks()` method.

```javascript
$('canvas').getEventHooks();
```

### Global Event Hooks

jCanvas supports another type of event hook called a global event hook. Global event hooks apply to all layers on all canvases, and do not override canvas event hooks.

```javascript
$.jCanvas.eventHooks.add = function(layer) {
  // code to run when any layer on any canvas is added
};
```

### Event Bubbling

With the addition of event hooks, all jCanvas events bubble up, meaning for any jCanvas event that is triggered:

  1. The layer event callback runs first (if it exists)
  2. The canvas event hook runs second (if it exists)
  3. The global event hook runs last (if it exists)

### Notes

Event hooks can also be leveraged by jCanvas plugin developers to give their plugins tighter integration with jCanvas
