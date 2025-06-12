# Line Height

The **Line Height** utility in Wind allows you to control the spacing between lines of text. This feature supports both predefined values and arbitrary values for maximum flexibility.

## How Line Height Works in Flutter

In Flutter, **line height** is applied as a multiplier to the font size. For example:
- If the font size is `16px` and the line height is `1.5`, the calculated line height will be `16px * 1.5 = 24px`.

The line height is **not directly in pixels**; instead, it scales proportionally to the font size of the text.

## Default Line Heights

The default line heights in Wind are as follows. You can customize these values by visiting the [Customizing Line Height](/customization/line-height) page.

| **Class**         | **Value (em)** | **Description**       |
|-------------------|----------------|-----------------------|
| `leading-3`       | 0.75           | Compact line height   |
| `leading-4`       | 1.0            | Standard compact      |
| `leading-5`       | 1.25           | Slightly expanded     |
| `leading-6`       | 1.5            | Comfortable           |
| `leading-7`       | 1.75           | Spacious              |
| `leading-8`       | 2.0            | Very spacious         |
| `leading-9`       | 2.25           | Extra spacious        |
| `leading-10`      | 2.5            | Maximum spaciousness  |
| `leading-none`    | 1.0            | No additional spacing |
| `leading-tight`   | 1.25           | Tight spacing         |
| `leading-snug`    | 1.375          | Snug spacing          |
| `leading-normal`  | 1.5            | Normal spacing        |
| `leading-relaxed` | 1.625          | Relaxed spacing       |
| `leading-loose`   | 2.0            | Loose spacing         |

### How Line Heights Are Applied

Line height values are defined in **em units**. These values act as a multiplier to the font size. For instance:
- `leading-6` corresponds to `1.5em`. With a font size of `16px`, the line height will be:
  **16px (font size) * 1.5 (line height multiplier) = 24px**.

### Arbitrary Values

You can also use arbitrary values for precise control. For instance, `leading-[1.3]` will set the line height multiplier to `1.3`. With a font size of `16px`, the line height will be:
**16px * 1.3 = 20.8px**.

## Syntax

### Predefined Classes

To use predefined line heights, use the `leading-` prefix with the key.

```text
leading-[size]
```

Example:
- `leading-6` → Comfortable spacing (**1.5 multiplier**)
- `leading-none` → No additional spacing (**1.0 multiplier**)

### Arbitrary Values

For precise line heights, use arbitrary values.

```text
leading-[value]
```

Example:
- `leading-[1.3]` → **1.3 multiplier**

## Examples

<x-preview path="typography/line_height" size="md" class="min-h-64"></x-preview>

```dart
// Example: Using predefined line heights
WText(
  'Comfortable Line Height',
  className: 'text-lg leading-6',
);

// Example: Using arbitrary line height
WText(
  'Custom Line Height',
  className: 'text-lg leading-[1.3]',
);
```

In the first example, `leading-6` applies a **1.5 multiplier** to the font size. If the font size is **16px**, the line height will be **24px**.

In the second example, `leading-[1.3]` applies a **1.3 multiplier**. With a font size of **16px**, the line height will be **20.8px**.
