# Customizing Font Sizes

The **wind** plugin provides a powerful way to manage and customize font sizes for your Flutter application using the `WindTheme` class. With pre-defined font sizes, support for arbitrary values, and programmatic customization, you can easily align your application’s typography with your design requirements.

## Default Font Sizes 🎨

The `WindTheme` class includes a set of pre-defined font sizes that can be used directly in your application. These sizes are defined in rem units and scaled by the rem factor.

| **Key** | **Value (rem)** | **Calculated px (Default Rem Factor: 4)** | **Description**   |
|---------|-----------------|-------------------------------------------|-------------------|
| `xs`    | `0.75`          | `12px`                                    | Extra small       |
| `sm`    | `0.875`         | `14px`                                    | Small             |
| `base`  | `1`             | `16px`                                    | Base size         |
| `lg`    | `1.125`         | `18px`                                    | Large             |
| `xl`    | `1.25`          | `20px`                                    | Extra large       |
| `2xl`   | `1.5`           | `24px`                                    | Very large        |
| `3xl`   | `1.875`         | `30px`                                    | Extra extra large |
| `4xl`   | `2.25`          | `36px`                                    | Huge              |
| `5xl`   | `3`             | `48px`                                    | Massive           |
| `6xl`   | `4`             | `64px`                                    | Gigantic          |

For example:
- `font-xs` applies a font size of **12px**.
- `font-3xl` applies a font size of **30px**.

## Arbitrary Font Sizes 🎯

The wind plugin supports arbitrary font sizes for dynamic customization. You can specify custom font sizes using the `font-[value]` syntax, where value is the desired size in px.

Examples:
- `font-[8]` applies a font size of **8px**.
- `font-[22]` applies a font size of **22px**.

This feature is ideal for achieving unique font sizes beyond the predefined values.

## Managing Font Sizes Dynamically

The `WindTheme` class provides methods to check, retrieve, add, and remove font sizes dynamically.

### Checking if a Font Size Exists

To verify if a specific font size is defined:

```dart
bool exists = WindTheme.hasFontSize('lg');
print(exists); // Output: true
```

### Retrieving a Font Size

To get the value of a specific font size:

```dart
double size = WindTheme.getFontSize('xl');
print(size); // Output: 1.25
```

### Adding or Updating a Font Size

To define a new font size or modify an existing one:

```dart
// Add a custom font size
WindTheme.setFontSize('custom', 1.2);

// Update an existing font size
WindTheme.setFontSize('lg', 1.0);
```

### Removing a Font Size

To remove a font size from the `WindTheme`:

```dart
WindTheme.removeFontSize('custom');
```
