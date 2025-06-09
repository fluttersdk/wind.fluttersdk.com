# Border Radius

You can apply border radii using the `rounded-` prefix. The WindTheme plugin supports both predefined values and arbitrary values for maximum flexibility.

**Note:** As of version **0.0.3**, using rounded-* classes applies actual clipping via ClipRRect, ensuring that the child content is physically clipped to the border radius.

## Syntax

```text
rounded-[size]
rounded-[[value]]
```

- **size:** Refers to a predefined size available in WindTheme (e.g., sm, lg, xl).
- **value:** An arbitrary pixel value for the border radius.

## Examples

| **Class**      | **Calculated Radius** | **Explanation**               |
|----------------|-----------------------|-------------------------------|
| `rounded-sm`   | 2px                   | A small border radius.        |
| `rounded-lg`   | 8px                   | A large border radius.        |
| `rounded-[6]`  | 6px                   | Arbitrary value, directly 6px |
| `rounded-full` | 9999px                | Full border radius            |

For the full list of sizes, refer to the [Rounded section](/customization/rounded-corners).

### Example: Applying Border Radius

<x-preview path="borders/border_radius" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'border-2 border-red-500 rounded-lg p-4',
  child: WText('Rounded Border', className: 'text-blue-500'),
)
```

Here, the border radius is set to **8px**.

```dart
WContainer(
  className: 'border-2 border-red-500 rounded-full p-4',
  child: WText('Full Rounded Border', className: 'text-blue-500'),
)
```

Here, the border radius is set to **9999px**.

### Example: Arbitrary Radius

<x-preview path="borders/border_radius_custom" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'border-2 border-red-500 rounded-[6] p-4',
  child: WText('Custom Rounded Border', className: 'text-blue-500'),
)
```

Here, the border radius is set to an arbitrary value of **6px**.
