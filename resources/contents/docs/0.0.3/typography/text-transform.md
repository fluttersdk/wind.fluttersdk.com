# Text Transform

The **text transform** utility in Wind allows you to easily modify the capitalization of text content. You can use predefined classes to apply text transformations, such as uppercase, lowercase, capitalize, or none.

## Predefined Classes

Below are the predefined classes for text transformation:

| **Class**          | **Transformation** | **Description**                           |
|--------------------|--------------------|-------------------------------------------|
| `uppercase`        | Uppercase          | Converts all text to uppercase.           |
| `lowercase`        | Lowercase          | Converts all text to lowercase.           |
| `capitalize`       | Capitalize         | Capitalizes the first letter of the text. |
| `none`             | None               | Leaves the text unchanged.                |

## Examples

<x-preview path="typography/text_transform" size="md" class="min-h-64"></x-preview>

```dart
WText(
  'Upper Case',
  className: 'uppercase',
)
WText(
  'Lower Case',
  className: 'lowercase',
)
WText(
  'capitalize this text',
  className: 'capitalize',
)
WText(
  'No transformation here.',
  className: 'none',
)
```

In this example:
- `uppercase` converts the text to uppercase.
- `lowercase` converts the text to lowercase.
- `capitalize` capitalizes the first letter of the text.
- `none` leaves the text unchanged.
