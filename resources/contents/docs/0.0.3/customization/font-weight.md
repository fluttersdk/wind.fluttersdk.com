# Customizing Font Weight

The **wind** plugin provides a straightforward way to manage and customize font weights for your Flutter application using the `WindTheme` class. With pre-defined weights and the ability to customize them dynamically, you can maintain consistent typography across your application.

## Default Font Weights 🎨

The `WindTheme` class includes pre-defined font weights mapped to intuitive keys. These weights correspond to Flutter’s FontWeight values and can be used directly in your application.

| **Key**      | **FontWeight** | **Description**    |
|--------------|----------------|--------------------|
| `thin`       | `w100`         | Thinnest weight    |
| `extralight` | `w200`         | Extra light weight |
| `light`      | `w300`         | Light weight       |
| `normal`     | `w400`         | Regular weight     |
| `medium`     | `w500`         | Medium weight      |
| `semibold`   | `w600`         | Semi-bold weight   |
| `bold`       | `w700`         | Bold weight        |
| `extrabold`  | `w800`         | Extra bold weight  |
| `black`      | `w900`         | Heaviest weight    |

For example:
- Using `font-thin` applies the thinnest **font weight (w100)**.
- Using `font-bold` applies a bold **font weight (w700)**.

## Managing Font Weights Dynamically

The `WindTheme` class provides methods to check, retrieve, customize, and remove font weights dynamically.

### Checking if a Font Weight Exists

To verify if a specific font weight is defined:

```dart
bool exists = WindTheme.hasFontWeight('bold');
print(exists); // Output: true
```

### Retrieving a Font Weight

To get the FontWeight value of a specific key:

```dart
FontWeight weight = WindTheme.getFontWeight('medium');
print(weight); // Output: FontWeight.w500
```

### Adding or Updating a Font Weight

To define a new font weight or modify an existing one:

```dart
// Add a custom font weight
WindTheme.setFontWeight('ultrabold', FontWeight.w800);

// Update an existing font weight
WindTheme.setFontWeight('bold', FontWeight.w600);
```

### Removing a Font Weight

To remove a font weight from the WindTheme:

```dart
WindTheme.removeFontWeight('extralight'); // Removes the 'extralight' weight
```
