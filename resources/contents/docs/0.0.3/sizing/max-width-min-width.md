# Max-Width & Min-Width

**Wind** provides utilities to control the maximum and minimum widths of widgets, enabling responsive and adaptive layouts. These utilities support pixel-based, viewport-relative, and percentage-based values.

## Syntax

| **Class**               | **Description**                   | **Example**    |
|-------------------------|-----------------------------------|----------------|
| `max-w-[value]`         | Sets the maximum width in pixels. | `max-w-20`     |
| `max-w-[[value]]`       | Arbitrary maximum width value.    | `max-w-[300]`  |
| `max-w-full`            | 100% of the parent’s width.       | `max-w-full`   |
| `max-w-screen`          | 100% of the viewport width.       | `max-w-screen` |
| `max-w-[value]/[value]` | % of the parent’s width.          | `max-w-1/2`    |
| `max-w-[value]vw`       | % of the viewport width.          | `max-w-[80vw]` |

| **Class**               | **Description**                   | **Example**    |
|-------------------------|-----------------------------------|----------------|
| `min-w-[value]`         | Sets the minimum width in pixels. | `min-w-20`     |
| `min-w-[[value]]`       | Arbitrary minimum width value.    | `min-w-[300]`  |
| `min-w-full`            | 100% of the parent’s width.       | `min-w-full`   |
| `min-w-screen`          | 100% of the viewport width.       | `min-w-screen` |
| `min-w-[value]/[value]` | % of the parent’s width.          | `min-w-1/2`    |
| `min-w-[value]vw`       | % of the viewport width.          | `min-w-[80vw]` |

## Examples

### Using Max-Width

<x-preview path="sizing/max_width" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'max-w-10 bg-purple-500',
  child: WText('Max width: 40px'), // 10 * 4 (Pixel Factor)
)

WContainer(
  className: 'max-w-[300] bg-gray-500',
  child: WText('Max width: 300px'), // Arbitrary value
)

WContainer(
  className: 'max-w-screen bg-teal-500',
  child: WText('Max width: Full screen width'),
)
```

### Using Min-Width

<x-preview path="sizing/min_width" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'min-w-12 bg-yellow-500',
  child: WText('Min width: 48px'), // 12 * 4 (Pixel Factor)
)

WContainer(
  className: 'min-w-[100] bg-orange-500',
  child: WText('Min width: 100px'), // Arbitrary value
)

WContainer(
  className: 'min-w-full bg-pink-500',
  child: WText('Min width: Full parent width'),
)
```
