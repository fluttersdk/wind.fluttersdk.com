# Height

The height utilities in **Wind** allow setting the height of widgets dynamically. The values can be pixel-based, viewport-relative, or percentage-based.

## Syntax

| **Class**           | **Description**                | **Example** |
|---------------------|--------------------------------|-------------|
| `h-[value]`         | Sets the height in pixels.     | `h-4`       |
| `h-[[value]]`       | Arbitrary height value.        | `h-[10]`    |
| `h-full`            | 100% of the parent’s height.   | `h-full`    |
| `h-max`             | Infinite height.               | `h-max`     |
| `h-min`             | Minimum possible height (0px). | `h-min`     |
| `h-[value]/[value]` | % of the parent’s height.      | `h-1/2`     |
| `h-[value]vh`       | % of the viewport height.      | `h-[50vh]`  |

## Examples

<x-preview path="sizing/height" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'h-12 bg-blue-500',
  child: WText('Height is 48px'), // 12 * 4 (Pixel Factor)
)

WContainer(
  className: 'h-[150] bg-red-500',
  child: WText('Height is 150px'), // Arbitrary value
)

WContainer(
  className: 'h-full bg-green-500',
  child: WText('Full height of parent'),
)
```
