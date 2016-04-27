## jCanvas Object

jCanvas includes a `jCanvas` object as part of the `jQuery` object.

```javascript
$.jCanvas
```

The `jCanvas` object contains the following properties/methods:

  - `defaults`: an object containing jCanvas's default properties
  - `extend`: a method for extending jCanvas with custom methods.

### Overriding jCanvas defaults

If you wish to override any of jCanvas's default property values, set the properties explicitly or use jQuery's `$.extend`:

```javascript
$.jCanvas.defaults.fromCenter = false;
```

```javascript
$.extend($.jCanvas.defaults, {
  fromCenter: false,
  inDegrees: false
});
```
