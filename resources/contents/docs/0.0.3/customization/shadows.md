# Customizing Shadows

The **wind** plugin provides a powerful way to manage shadows in your Flutter application through the `WindTheme` class. By using pre-defined shadow sizes, customizing them, or specifying arbitrary values, you can achieve consistent and visually appealing designs.

## Default Shadow Sizes 🎨

The `WindTheme` class includes a set of default shadow sizes mapped to descriptive keys. These sizes can be applied directly in your application for consistent shadow effects.

| **Key**   | **Value (px)** | **Description**          |
|-----------|----------------|--------------------------|
| `none`    | `0`            | No shadow                |
| `sm`      | `1`            | Small shadow             |
| `default` | `2`            | Default shadow size      |
| `md`      | `4`            | Medium shadow            |
| `lg`      | `8`            | Large shadow             |
| `xl`      | `12`           | Extra large shadow       |
| `2xl`     | `16`           | Very large shadow        |
| `3xl`     | `24`           | Extra extra large shadow |
| `inner`   | `1`            | Inner shadow effect      |

For example:
- Using `shadow-sm` applies a shadow with an elevation of **1px**.
- Using `shadow-lg` applies a shadow with an elevation of **8px**.

## Arbitrary Shadow Values 🎯

The wind plugin supports arbitrary values for shadows, allowing you to specify custom shadow sizes dynamically. This is done using the `shadow-[value]` syntax, where value is the desired shadow size in px.

Examples:
- `shadow-[8]` applies a shadow with an elevation of **8px**.
- `shadow-[20]` applies a shadow with an elevation of **20px**.

This feature is ideal for creating custom designs where the default sizes are not sufficient.

## Managing Shadows Dynamically

The **WindTheme** class provides methods to check, retrieve, customize, and remove shadow sizes dynamically.

### Checking if a Shadow Size Exists

To verify if a specific shadow size is defined:

```dart
bool exists = WindTheme.hasShadowSize('lg');
print(exists); // Output: true
```

### Retrieving a Shadow Size

To fetch the value of a shadow size:

```dart
double size = WindTheme.getShadowSize('xl');
print(size); // Output: 12
```

### Adding or Updating a Shadow Size

You can define a new shadow size or update an existing one:

```dart
// Add a custom shadow size
WindTheme.setShadowSize('custom', 10);

// Update an existing shadow size
WindTheme.setShadowSize('lg', 6);
```

### Removing a Shadow Size

To remove a shadow size if it’s no longer needed:

```dart
WindTheme.removeShadowSize('sm'); // Removes the 'sm' size
```
