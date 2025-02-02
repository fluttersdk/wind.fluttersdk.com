# Letter Spacing

The **Letter Spacing** utilities in the **Wind** plugin allow you to adjust the spacing between letters in a text. These utilities can be used to create tighter or wider text spacing depending on your design needs.

## How It Works

- **Predefined Values:** Letter spacing is defined in the theme using em units and calculated into pixel values using the **[Pixel Factor](/customization/pixel-factor)**. For example, a `tracking-wider` class with a value of **0.05em** is multiplied by the Pixel Factor (**default is 4**) to calculate **0.2px** spacing.
- **Arbitrary Values:** You can specify custom letter spacing using `tracking-[value]`, where the value is interpreted directly as pixels. For example, `tracking-[0.13]` results in **0.13px** spacing.

## Default Letter Spacing Values

These are the default values provided by the Wind plugin. To customize them, refer to the [Customizing Letter Spacing](/customization/letter-spacing) page.

| Class Name         | Value (em) | Calculated px | Description            |
|--------------------|------------|---------------|------------------------|
| `tracking-tighter` | -0.05      | -0.2px        | Very tight spacing     |
| `tracking-tight`   | -0.025     | -0.1px        | Tight spacing          |
| `tracking-normal`  | 0          | 0px           | Default spacing        |
| `tracking-wide`    | 0.025      | 0.1px         | Wide spacing           |
| `tracking-wider`   | 0.05       | 0.2px         | Very wide spacing      |
| `tracking-widest`  | 0.1        | 0.4px         | Extremely wide spacing |

### Syntax

```text
tracking-[size]
tracking-[[value]]
```

- **Predefined Values:** Use classes like `tracking-tighter`, `tracking-normal`, or `tracking-wide` for standard options.
- **Arbitrary Values:** Specify custom letter spacing with [value] wrapped in brackets, such as `tracking-[0.13]`.

## Examples

<x-preview path="typography/letter_spacing" size="md" class="min-h-64"></x-preview>

```dart
WText(
  'Wide Letter Spacing',
  className: 'tracking-wide text-lg text-gray-700',
);
WText(
  'Custom Letter Spacing',
  className: 'tracking-[0.13] text-base text-blue-500',
);
```

- `tracking-wide` applies **0.1px** spacing to the text.
- `tracking-[0.13]` applies **0.13px** custom spacing.
