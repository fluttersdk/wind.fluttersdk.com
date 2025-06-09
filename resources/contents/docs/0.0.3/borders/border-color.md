# Border Color

Colors can be applied using the `border-` prefix followed by the color name and optional shade. You can also specify custom colors using hex codes.

**Note:** As of version **0.0.3**, behind the scenes, Wind applies border colors using Border.all inside the BoxDecoration, utilizing applyBorderColor to resolve the final color value.

## Syntax

```text
border-[color]-[shade]
border-[color]
border-[[#hexcode]]
```

- **color:** The name of the color (e.g., `red`, `blue`, `green`).
- **shade:** The shade of the color (e.g., `100`, `200`, `300`).
- **hexcode:** A custom hex code for the color.

## Example Classes

| **Class**          | **Color**   | **Shade** | **Description**                | **Preview**                                             |
|--------------------|-------------|-----------|--------------------------------|---------------------------------------------------------|
| `border-red-500`   | Red         | 500       | Red color with shade 500       | <div class="w-8 h-8 rounded bg-red-500 shadow"></div>   |
| `border-blue-300`  | Blue        | 300       | Blue color with shade 300      | <div class="w-8 h-8 rounded bg-blue-300 shadow"></div>  |
| `border-[#1abc9c]` | Custom teal | #1abc9c   | Custom teal color with hexcode | <div class="w-8 h-8 rounded bg-[#1abc9c] shadow"></div> |

Explore all available colors and shades on the [Predefined Colors](/customization/colors) page.

### Example: Applying Border Color

<x-preview path="borders/border_color" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'border-2 border-red-500 p-4',
  child: WText('Red Border', className: 'text-blue-500'),
)
```

Here, the border color is set to red with shade 500.

### Example: Arbitrary Color

<x-preview path="borders/border_color_custom" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'border-2 border-[#1abc9c] p-4',
  child: WText('Custom Color Border', className: 'text-blue-500'),
)
```

Here, the border color is set to a custom teal color using the hex code `#1abc9c`.
