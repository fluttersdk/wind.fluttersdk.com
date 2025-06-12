# Max-Height & Min-Height

**Wind** provides utilities to control the maximum and minimum heights of widgets, offering flexibility for responsive and adaptive layouts. These utilities support pixel-based, viewport-relative, and percentage-based values.

## Syntax

| **Class**               | **Description**                    | **Example**    |
|-------------------------|------------------------------------|----------------|
| `max-h-[value]`         | Sets the maximum height in pixels. | `max-h-20`     |
| `max-h-[[value]]`       | Arbitrary maximum height value.    | `max-h-[200]`  |
| `max-h-full`            | 100% of the parent’s height.       | `max-h-full`   |
| `max-h-screen`          | 100% of the viewport height.       | `max-h-screen` |
| `max-h-[value]/[value]` | % of the parent’s height.          | `max-h-1/2`    |
| `max-h-[value]vh`       | % of the viewport height.          | `max-h-[90vh]` |

| **Class**               | **Description**                    | **Example**    |
|-------------------------|------------------------------------|----------------|
| `min-h-[value]`         | Sets the minimum height in pixels. | `min-h-20`     |
| `min-h-[[value]]`       | Arbitrary minimum height value.    | `min-h-[200]`  |
| `min-h-full`            | 100% of the parent’s height.       | `min-h-full`   |
| `min-h-screen`          | 100% of the viewport height.       | `min-h-screen` |
| `min-h-[value]/[value]` | % of the parent’s height.          | `min-h-1/2`    |
| `min-h-[value]vh`       | % of the viewport height.          | `min-h-[90vh]` |

## Examples

### Using Max-Height

<x-preview path="sizing/max_height" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'max-h-16 bg-blue-500',
  child: WText('Max height: 64px'), // 16 * 4 (Pixel Factor)
)

WContainer(
  className: 'max-h-[8] bg-gray-500',
  child: WText('Max height: 8px'), // Arbitrary value
)

WContainer(
  className: 'max-h-screen bg-teal-500',
  child: WText('Max height: Full screen height'),
)
```

### Using Min-Height

<x-preview path="sizing/min_height" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'min-h-10 bg-yellow-500',
  child: WText('Min height: 40px'), // 10 * 4 (Pixel Factor)
)

WContainer(
  className: 'min-h-[100] bg-orange-500',
  child: WText('Min height: 100px'), // Arbitrary value
)

WContainer(
  className: 'min-h-screen bg-pink-500',
  child: WText('Min height: Full screen height'),
)
```
