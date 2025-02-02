# Background Color

The **wind** plugin makes it simple to apply background colors to widgets using `bg-` prefixed classes. It supports both predefined colors from the theme and custom arbitrary colors defined using hex codes.

## Predefined Background Colors 🎨

The `bg-` prefix lets you apply colors defined in the `WindTheme`. These colors include a variety of predefined options, each with multiple shades.

For a complete list of available colors and shades, refer to the [Predefined Colors](/customization/colors) page in the documentation.

### Syntax

```text
bg-[color]-[shade]
```

- **color:** The name of the color (e.g., red, blue, gray). 
- **shade:** The intensity of the color (e.g., 100, 500, 900).

### Example Classes

| **Class**     | **Color** | **Shade** | **Preview**                                             |
|---------------|-----------|-----------|---------------------------------------------------------|
| `bg-red-500`  | Red       | 500       | <div class="w-8 h-8 rounded bg-red-500 shadow"></div>   |
| `bg-blue-300` | Blue      | 300       | <div class="w-8 h-8 rounded bg-blue-300 shadow"></div>  |
| `bg-gray-900` | Gray      | 900       | <div class="w-8 h-8 rounded bg-gray-900 shadow"></div>  |
| `bg-green`    | Green     | 500       | <div class="w-8 h-8 rounded bg-green-500 shadow"></div> |

### Example: Using Predefined Colors

<x-preview path="backgrounds/background_color" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'bg-blue-500 w-64 h-64 alignment-center',
  child: WText('Blue Background', className: 'text-white'),
)
```

In this example, the background of the container is set to **blue-500** from the WindTheme.

## Arbitrary Colors 🎯

Custom colors can be applied using the **hex color code** within square brackets (`bg-[#rrggbb]`).

### Syntax

```text
bg-[#rrggbb]
```

- **#rrggbb:** The hex color code (e.g., #ff0000, #00ff00, #0000ff).

### Example: Using Arbitrary Colors

<x-preview path="backgrounds/background_color_custom" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'bg-[#1abc9c] w-64 h-64 alignment-center',
  child: WText('Custom Color Background', className: 'text-white'),
)
```

In this example, the background of the container is set to a custom color using the hex code `#1abc9c`.
