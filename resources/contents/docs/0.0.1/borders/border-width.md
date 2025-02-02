# Border Width

Border widths in wind are defined using the `border-` prefix with a size. The size in the class directly corresponds to the pixel value. No additional calculations with Pixel Factor or REM Factor are applied.

While the current version of wind supports general border styling, specific sides (e.g., border-t, border-l) are not yet implemented. This feature is planned for a future release. 🎉

## Default behavior

The number in the class represents the pixel value directly.

Example:
- `border-4` → 4px
- `border-2` → 2px

For arbitrary values, the specified size is also used directly as the pixel value:
- `border-[6]` → 6px.

## Syntax

```text
border-[size]
border-[[value]]
```

- **size:** The width of the border (e.g., 2, 4, 6).
- **value:** An arbitrary pixel value for the border width.

## Example Classes

| **Class**    | **Calculated Width** | **Explanation**               |
|--------------|----------------------|-------------------------------|
| `border-2`   | 2px                  | Directly 2px as defined.      |
| `border-4`   | 4px                  | Directly 4px as defined.      |
| `border-[6]` | 6px                  | Arbitrary value, directly 6px |

## Example: Applying Border Width

<x-preview path="borders/border_width" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'border-4 border-blue-500 p-4',
  child: WText('Thick Border', className: 'text-blue-500'),
)
```

Here, the border width is calculated as **16px** (using factors), and the color is **blue-500**.
