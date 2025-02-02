# Customizing Rounded Corners

The **wind** plugin makes it easy to manage and customize corner radii for your Flutter application using the WindTheme class. With pre-defined sizes, dynamic arbitrary values, and programmatic access, you can tailor the design to meet your needs effortlessly.

## Default Rounded Sizes 🎨

The `WindTheme` class comes with a set of pre-defined rounded sizes that are easy to use and consistent across your application. Below is a table listing these sizes, their rem values, and the calculated px values based on the **default pixel factor (4.0) and rem factor (4.0)**.

| **Key**      | **Value (rem)** | **Calculated px** | **Description**        |
|--------------|-----------------|-------------------|------------------------|
| `none`       | `0`             | `0px`             | No rounding            |
| `default`    | `0.25`          | `4px`             | Default rounding       |
| `sm`         | `0.125`         | `2px`             | Small rounding         |
| `md`         | `0.375`         | `6px`             | Medium rounding        |
| `lg`         | `0.5`           | `8px`             | Large rounding         |
| `xl`         | `0.75`          | `12px`            | Extra large rounding   |
| `2xl`        | `1`             | `16px`            | Very large rounding    |
| `3xl`        | `1.5`           | `24px`            | Extra extra large      |
| `full`       | `9999`          | Infinite          | Fully rounded corners  |

**The px values are calculated as:**

```text
{px} = {rem} * {pixel factor (4.0)} * {rem factor (4.0)}
```

For example, `rounded-lg` results in **0.5 * 4 * 4 = 8px**.

## Arbitrary Rounded Values 🎯

In addition to the pre-defined sizes, the wind plugin supports arbitrary values for dynamic rounding. This is done using the `rounded-[value]` syntax, where value represents the desired radius in px.

Examples:
- `rounded-[7]` applies a radius of **7px**.
- `rounded-[20]` applies a radius of **20px**.

This feature is perfect for achieving unique designs beyond the standard options.

## Accessing and Managing Rounded Sizes

The WindTheme class provides methods to check, retrieve, customize, and remove rounded sizes dynamically.

### Checking if a Rounded Size Exists

You can verify if a specific size is defined using the `hasRoundedSize` method:

```dart
bool exists = WindTheme.hasRoundedSize('lg');
print(exists); // Output: true
```
### Retrieving a Rounded Size

To fetch the rem value of a defined size, use the `getRoundedSize` method:

```dart
double size = WindTheme.getRoundedSize('xl');
print(size); // Output: 0.75
```


### Adding or Updating a Rounded Size

Use the `setRoundedSize` method to define a new size or update an existing one:

```dart
// Add a new size
WindTheme.setRoundedSize('4xl', 2);

// Update an existing size
WindTheme.setRoundedSize('lg', 0.6);
```

### Removing a Rounded Size

If a size is no longer needed, it can be removed using `removeRoundedSize`:

```dart
WindTheme.removeRoundedSize('sm'); // Removes the 'sm' size
```

## Practical Examples

### Using Pre-defined Sizes

```dart
WContainer(
  className: 'rounded-xl bg-gray-100',
  child: WText('Pre-defined Rounded Corners'),
);
```

This applies a corner radius of **12px** (calculated as 0.75 * 4 * 4).

### Using Arbitrary Values

```dart
WContainer(
  className: 'rounded-[15] bg-gray-200',
  child: WText('Arbitrary Rounded Corners'),
);
```

This applies a corner radius of **15px**.

### Customizing Rounded Sizes

```dart
// Add a custom size
WindTheme.setRoundedSize('custom', 1.25); // Adds 'rounded-custom'

// Use the custom size
WContainer(
  className: 'rounded-custom bg-gray-300',
  child: WText('Custom Rounded Corners'),
);

// Remove the custom size
WindTheme.removeRoundedSize('custom');
```
