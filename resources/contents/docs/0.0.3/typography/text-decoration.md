# Text Decoration

The `text-decoration` feature in Wind allows you to easily style text with various decorations such as underlines, overlines, and strikethroughs. These utilities provide a simple way to manage text decoration styles directly in your class names.

## Predefined Classes

| **Class**      | **Effect**        | **Preview**                                          |
|----------------|-------------------|------------------------------------------------------|
| `no-underline` | Removes underline | <div class="text-lg no-underline">No Underline</div> |
| `underline`    | Adds underline    | <div class="text-lg underline">Underline</div>       |
| `overline`     | Adds overline     | <div class="text-lg overline">Overline</div>         |
| `line-through` | Adds line-through | <div class="text-lg line-through">Line-Through</div> |

## Examples

<x-preview path="typography/text_decoration" size="md" class="min-h-64"></x-preview>

```dart
WText(
  'No underline here.',
  className: 'no-underline',
)
WText(
  'This text is underlined.',
  className: 'underline',
)
WText(
  'This text has an overline.',
  className: 'overline',
)
WText(
  'This text is strikethrough.',
  className: 'line-through',
)
```

In this example:
- `no-underline` removes the underline from the text.
- `underline` adds an underline to the text.
- `overline` adds an overline to the text.
- `line-through` adds a strikethrough to the text.
