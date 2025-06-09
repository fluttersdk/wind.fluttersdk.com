# Text Alignment

**Wind** provides an easy way to control text alignment using the `text-` prefix. This feature allows you to align text in various directions, such as left, center, right, justify, or based on the reading direction (start or end).

This alignment not only affects the `textAlign` of the text but also applies alignment positioning through `AlignmentParser`, which wraps the text widget using `Align` for layout alignment.

## Syntax

```text
text-[alignment]
```

- **alignment:** The direction in which the text should be aligned (e.g., `left`, `center`, `right`, `justify`, `start`, `end`).

## Predefined Alignments

Wind comes with the following predefined text alignment options:

| **Class**      | **Alignment** | **Explanation**           |
|----------------|---------------|---------------------------|
| `text-left`    | Left          | Aligns text to the left.  |
| `text-center`  | Center        | Centers the text.         |
| `text-right`   | Right         | Aligns text to the right. |
| `text-justify` | Justify       | Justifies the text.       |
| `text-start`   | Start         | Aligns text to the start. |
| `text-end`     | End           | Aligns text to the end.   |

The classes `text-left`, `text-center`, and `text-right` also position the widget horizontally using `Alignment.centerLeft`, `Alignment.center`, and `Alignment.centerRight`, respectively.

## Example: Applying Text Alignment

### Center-Aligned Text

<x-preview path="typography/text_alignment_center" size="md" class="min-h-64"></x-preview>

```dart
WText(
  'Centered Text',
  className: 'text-center',
)
```

Here, the text is centered using the `text-center` class.

### Right-Aligned Text

<x-preview path="typography/text_alignment_right" size="md" class="min-h-64"></x-preview>

```dart
WText(
  'Right-Aligned Text',
  className: 'text-right',
)
```

In this example, the text is aligned to the right using the `text-right` class.

### Justified Text

<x-preview path="typography/text_alignment_justify" size="md" class="min-h-64"></x-preview>

```dart
WText(
  'This text is justified. The edges are evenly aligned, creating a clean and formal look.',
  className: 'text-justify',
)
```

Here, the text is justified using the `text-justify` class.
