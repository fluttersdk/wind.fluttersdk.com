# Width

The width utilities in **Wind** allow setting the width of widgets dynamically. The values can be pixel-based, viewport-relative, or percentage-based.

## Syntax

| **Class**           | **Description**               | **Example** |
|---------------------|-------------------------------|-------------|
| `w-[value]`         | Sets the width in pixels.     | `w-4`       |
| `w-[[value]]`       | Arbitrary width value.        | `w-[10]`    |
| `w-full`            | 100% of the parent’s width.   | `w-full`    |
| `w-max`             | Infinite width.               | `w-max`     |
| `w-min`             | Minimum possible width (0px). | `w-min`     |
| `w-[value]/[value]` | % of the parent’s width.      | `w-1/2`     |
| `w-[value]vw`       | % of the viewport width.      | `w-[50vw]`  |

## Examples

<x-preview path="sizing/width" size="md" class="min-h-64"></x-preview>

```dart
 WContainer(
  className: 'w-12 bg-blue-500',
  child: WText('Width is 48px'), // 12 * 4 (Pixel Factor)
)

WContainer(
  className: 'w-[150] bg-red-500',
  child: WText('Width is 150px'), // Arbitrary value
)

WContainer(
  className: 'w-full bg-green-500',
  child: WText('Full width of parent'),
)
```
