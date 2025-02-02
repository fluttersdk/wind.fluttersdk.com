# Font Style

The **Font Style** utility in the Wind plugin allows you to dynamically control the text style of your widgets. Currently, the only supported style is `italic`. This provides a simple and efficient way to toggle between italicized and normal text styles.

## Syntax

The font style is defined using the following classes:

| **Class**     | **Description**                     | **Example**             |
|---------------|-------------------------------------|-------------------------|
| `italic`      | Makes the text italicized.          | `italic`                |
| `not-italic`  | Resets the text to normal style.    | `not-italic`            |

## Examples

### Applying Font Style

You can apply the `italic` class to render italicized text or use `not-italic` to ensure the text is in a normal style.

<x-preview path="typography/font_style" size="md" class="min-h-64"></x-preview>

```dart
WText('Italic Text', className: 'italic'); // Italicized text
WText('Normal Text', className: 'not-italic'); // Normal text style
```
