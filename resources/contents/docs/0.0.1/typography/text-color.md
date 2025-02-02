# Text Color

**Wind** allows you to style text colors easily using the `text-` prefix. Both predefined colors and arbitrary values are supported, offering flexibility in your designs.

## Syntax

```text
text-[color]
text-[color]-[shade]
text-[[value]]
```

- **color:** The name of the color (e.g., `red`, `blue`, `green`).
- **shade:** The shade of the color (e.g., `100`, `200`, `300`).
- **value:** An arbitrary color value (e.g., `#FF0000`).

## Predefined Colors

Wind provides a rich palette of predefined colors. 

Class	Color
text-red-500	Red
text-blue-500	Blue
text-green-500	Green

| **Class**       | **Color** | **Shade** | **Preview**                                             |
|-----------------|-----------|-----------|---------------------------------------------------------|
| `text-red-500`  | Red       | 500       | <div class="w-8 h-8 rounded bg-red-500 shadow"></div>   |
| `text-blue-500` | Blue      | 500       | <div class="w-8 h-8 rounded bg-blue-500 shadow"></div>  |
| `text-green`    | Green     | 500       | <div class="w-8 h-8 rounded bg-green-500 shadow"></div> |

You can explore the full list of colors in the [Customizing Colors](/customization/colors) section.

## Arbitrary Colors

If predefined colors don’t meet your needs, you can specify custom colors using the `text-[#hexcode]` syntax.

| **Class**         | **Color** | **Preview**                                             |
|-------------------|-----------|---------------------------------------------------------|
| `text-[#FF00FF]`  | Pink      | <div class="w-8 h-8 rounded bg-[#FF00FF] shadow"></div> |
| `text-[#FFFF00]`  | Yellow    | <div class="w-8 h-8 rounded bg-[#FFFF00] shadow"></div> |
| `text-[#00FFFF]`  | Cyan      | <div class="w-8 h-8 rounded bg-[#00FFFF] shadow"></div> |

## Examples

### Example: Applying Predefined Text Colors

<x-preview path="typography/text_color_predefined" size="md" class="min-h-64"></x-preview>

```dart
WText(
  'This is a red text.',
  className: 'text-red-500',
)
```

In this example, the text color is set to red using the `text-red-500` class.

### Example: Applying Arbitrary Text Colors

<x-preview path="typography/text_color_arbitrary" size="md" class="min-h-64"></x-preview>

```dart
WText(
  'This is a custom color text.',
  className: 'text-[#FF00FF]',
)
```

Here, the text color is set to pink using the `text-[#FF00FF]` class.
