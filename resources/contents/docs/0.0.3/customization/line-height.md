# Customizing Line Height

The **wind** plugin provides a comprehensive system for managing line heights in Flutter through the `WindTheme` class. By using pre-defined line heights, arbitrary custom values, or programmatic customization, you can ensure your application’s typography aligns with your design specifications.

## Default Line Heights 🎨

The `WindTheme` class includes several pre-defined line heights, each mapped to intuitive keys. These values are specified in em units and can be directly used with your text components.

| **Key**      | **Value (em)** | **Description**           |
|--------------|----------------|---------------------------|
| `3`          | `0.75`         | Compact line height       |
| `4`          | `1`            | Standard compact          |
| `5`          | `1.25`         | Slightly expanded         |
| `6`          | `1.5`          | Comfortable               |
| `7`          | `1.75`         | Spacious                  |
| `8`          | `2`            | Very spacious             |
| `9`          | `2.25`         | Extra spacious            |
| `10`         | `2.5`          | Maximum spaciousness      |
| `none`       | `1`            | No additional spacing     |
| `tight`      | `1.25`         | Tight spacing             |
| `snug`       | `1.375`        | Snug spacing              |
| `normal`     | `1.5`          | Normal spacing            |
| `relaxed`    | `1.625`        | Relaxed spacing           |
| `loose`      | `2`            | Loose spacing             |

For example:
- Using `leading-3` applies a line height of **0.75em**.
- Using `leading-8` applies a line height of **2em**.

## Arbitrary Line Heights 🎯

The wind plugin supports arbitrary line heights for dynamic customization. You can specify custom line heights using the `leading-[value]` syntax, where value is the desired height in em units.

Examples:
- `leading-[1.2]` applies a line height of **1.2em**.
- `leading-[2.8]` applies a line height of **2.8em**.

This feature is ideal for achieving unique line heights beyond the predefined values.

## Managing Line Heights Dynamically

The `WindTheme` class provides methods to check, retrieve, add, and remove line heights dynamically.

### Checking if a Line Height Exists

To verify if a specific line height is defined:

```dart
bool exists = WindTheme.hasLineHeight('normal');
print(exists); // Output: true
```

### Retrieving a Line Height

To fetch the value of a specific line height:

```dart
double height = WindTheme.getLineHeight('tight');
print(height); // Output: 1.25
```

### Adding or Updating a Line Height

To define a new line height or modify an existing one:

```dart
// Add a custom line height
WindTheme.setLineHeight('custom', 1.2);

// Update an existing line height
WindTheme.setLineHeight('snug', 1.4);
```

### Removing a Line Height

To remove a line height from the `WindTheme`:

```dart
WindTheme.removeLineHeight('custom');
```
