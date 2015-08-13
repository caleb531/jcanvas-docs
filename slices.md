## Slices

A slice in jCanvas is, essentially, a slice of a circle (similar to a pizza slice).

### Basic Usage

You can draw a slice using the `drawSlice()` method. The size of a slice is determined by its `start`, `end`, and `radius` properties.

The position of a slice is determined by its `x` and `y` properties. These coordinates lie at the tip of the slice.

```javascript
// Draw a 60&deg; slice
$('canvas').drawSlice({
  fillStyle: '#f63',
  x: 100, y: 100,
  radius: 150,
  // start and end angles in degrees
  start: 60, end: 120
});
```

### Creating a pie chart

You can create a simple pie chart in jCanvas using the `drawSlice()` method.

In the example below, the `spread` property determines the spacing between slices. The property's value is a multiple of the slice's radius (from 0 to 1).

```javascript
$('canvas')
.drawSlice({
  layer: true,
  name: 'red-slice',
  groups: ['chart', 'slices'],
  fillStyle: '#c33',
  x: 180, y: 110,
  start: -45, end: 15,
  radius: 100,
  spread: 1 / 40
})
.drawSlice({
  layer: true,
  name: 'green-slice',
  groups: ['chart', 'slices'],
  fillStyle: '#6c0',
  x: 180, y: 110,
  start: -135, end: -45,
  radius: 100,
  spread: 1 / 40
})
.drawSlice({
  layer: true,
  name: 'blue-slice',
  groups: ['chart', 'slices'],
  fillStyle: '#36c',
  x: 180, y: 110,
  start: 15, end: -135,
  radius: 100,
  spread: 1 / 40
});
```

To add a text label to your pie chart, create a text layer using the `drawText()` method.

```javascript
$('canvas')
.drawSlice({
  layer: true,
  name: 'red-slice',
  groups: ['chart', 'slices'],
  fillStyle: '#c33',
  x: 180, y: 110,
  start: -45, end: 15,
  radius: 100,
  spread: 1 / 40
})
.drawSlice({
  layer: true,
  name: 'green-slice',
  groups: ['chart', 'slices'],
  fillStyle: '#6c0',
  x: 180, y: 110,
  start: -135, end: -45,
  radius: 100,
  spread: 1 / 40
})
.drawSlice({
  layer: true,
  name: 'blue-slice',
  groups: ['chart', 'slices'],
  fillStyle: '#36c',
  x: 180, y: 110,
  start: 15, end: -135,
  radius: 100,
  spread: 1 / 40
})
.drawText({
  layer: true,
  name: 'red-label',
  groups: ['chart', 'labels'],
  fillStyle: '#fff',
  x: 160, y: 50,
  fontFamily: 'sans-serif',
  fontSize: 20,
  text: '17%'
})
.drawText({
  layer: true,
  name: 'green-label',
  groups: ['chart', 'labels'],
  fillStyle: '#fff',
  x: 120, y: 115,
  fontFamily: 'sans-serif',
  fontSize: 20,
  text: '25%'
})
.drawText({
  layer: true,
  name: 'blue-label',
  groups: ['chart', 'labels'],
  fillStyle: '#fff',
  x: 220, y: 150,
  fontFamily: 'sans-serif',
  fontSize: 20,
  text: '58%'
})
```
