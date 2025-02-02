# Customizing Letter Spacing

The **wind** plugin provides a robust system for managing and customizing letter spacing in your Flutter application. By using pre-defined values, arbitrary values, or dynamic customization through the `WindTheme` class, you can control the spacing between characters to align with your design needs.

## Default Letter Spacings 🎨

The `WindTheme` class defines several pre-defined letter spacings, each mapped to descriptive keys. These values are in em units and can be directly applied to your text elements.

| **Key**      | **Value (em)** | **Description**          |
|--------------|----------------|--------------------------|
| `tighter`    | `-0.05`        | Very tight spacing       |
| `tight`      | `-0.025`       | Tight spacing            |
| `normal`     | `0`            | Default spacing          |
| `wide`       | `0.025`        | Wide spacing             |
| `wider`      | `0.05`         | Very wide spacing        |
| `widest`     | `0.1`          | Extremely wide spacing   |

For example:
- Using `tracking-tight` applies a letter spacing of **-0.025em**.
- Using `tracking-wide` applies a letter spacing of **0.025em**.

## Arbitrary Letter Spacings 🎯

The wind plugin supports arbitrary letter spacings for dynamic customization. You can specify custom letter spacings using the `tracking-[value]` syntax, where value is the desired spacing in em units.

Examples:
- `tracking-[0.1]` applies a letter spacing of **0.1em**.
- `tracking-[0.3]` applies a letter spacing of **0.3em**.

## Managing Letter Spacings Dynamically

The `WindTheme` class provides methods to check, retrieve, add, and remove letter spacings dynamically.

### Checking if a Letter Spacing Exists

To verify if a specific letter spacing is defined:

```dart
bool exists = WindTheme.hasLetterSpacing('normal');
print(exists); // Output: true
```

### Retrieving a Letter Spacing

To get the value of a specific letter spacing:

```dart
double spacing = WindTheme.getLetterSpacing('wide');
print(spacing); // Output: 0.025
```

### Adding or Updating a Letter Spacing

To define a new letter spacing or modify an existing one:

```dart
// Add a custom letter spacing
WindTheme.setLetterSpacing('extra-wide', 0.15);

// Update an existing letter spacing
WindTheme.setLetterSpacing('wide', 0.03);
```

### Removing a Letter Spacing

To remove a letter spacing from the `WindTheme`:

```dart
WindTheme.removeLetterSpacing('extra-wide');
```
