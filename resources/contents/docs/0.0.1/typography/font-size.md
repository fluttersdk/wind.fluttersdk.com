# Font-Size

The **Font Size** utility in the Wind plugin allows you to dynamically control text size with predefined or custom values. Font sizes can also be [customized in the theme configuration](/customization/font-size) for maximum flexibility.

## Syntax

Font sizes are defined using the `text-` prefix followed by a predefined size or an arbitrary value.

### Predefined Font Sizes

Predefined font sizes are based on the **REM Factor** and [**Pixel Factor**](/customization/pixel-factor). The final size is calculated as:

```text
Size (REM) * REM Factor (default: 4) * Pixel Factor (default: 4) = Final Size in px
```

| Class       | REM   | Calculated px | Description       |
|-------------|-------|---------------|-------------------|
| `text-xs`   | 0.75  | 12px          | Extra small       |
| `text-sm`   | 0.875 | 14px          | Small             |
| `text-base` | 1     | 16px          | Base size         |
| `text-lg`   | 1.125 | 18px          | Large             |
| `text-xl`   | 1.25  | 20px          | Extra large       |
| `text-2xl`  | 1.5   | 24px          | Very large        |
| `text-3xl`  | 1.875 | 30px          | Extra extra large |
| `text-4xl`  | 2.25  | 36px          | Huge              |
| `text-5xl`  | 3     | 48px          | Massive           |
| `text-6xl`  | 4     | 64px          | Gigantic          |

For example:

- `font-2xl` → 1.5 * 4 * 4 = **24px**
- `font-5xl` → 3 * 4 * 4 = **48px**

### Arbitrary Font Sizes

You can also set custom sizes using arbitrary values:

- `text-[value]` → The value is treated as pixels (e.g., text-[22] = **22px**).

## Examples

### Applying Predefined Font Sizes

<x-preview path="typography/font_size" size="md" class="min-h-64"></x-preview>

```dart
WText('Extra Small Text', className: 'text-xs'); // 12px
WText('Base Text', className: 'text-base');     // 16px
WText('Large Text', className: 'text-lg');      // 18px
WText('Gigantic Text', className: 'text-6xl');  // 64px
```

### Using Arbitrary Font Sizes

<x-preview path="typography/font_size_arbitrary" size="md" class="min-h-64"></x-preview>

```dart
WText('Custom Size Text', className: 'text-[22]'); // 22px
WText('Small Custom Size', className: 'text-[8]'); // 8px
```

## Customizing Font Sizes

You can customize the predefined font sizes through the Customizing Font Sizes configuration. This allows you to define your own sizes and classes.

```dart
WindTheme.setFontSize('giant', 5); // Adds a custom size 'giant' with 5rem
```

After defining this, you can use it in your components:

```dart
WText('Giant Text', className: 'text-giant'); // 5 * 4 * 4 = 80px
```

Learn more about customization: **[Customizing Font Sizes](/customization/font-size)**
