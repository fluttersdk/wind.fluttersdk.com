# Padding

The padding utility in **Wind** allows you to define spacing inside a widget using dynamic class names. Padding values are calculated based on the **Pixel Factor** defined in the `WindTheme`. If you need more information about how the Pixel Factor works, visit the [Pixel Factor](/customization/pixel-factor) documentation page.

## Syntax

Padding is applied using the following class prefixes:

| **Class**    | **Description**                                | **Example**        |
|--------------|------------------------------------------------|--------------------|
| `p-[value]`  | Padding on all sides.                          | `p-4` or `p-[6]`   |
| `px-[value]` | Padding on the horizontal sides (left, right). | `px-4` or `px-[6]` |
| `py-[value]` | Padding on the vertical sides (top, bottom).   | `py-4` or `py-[6]` |
| `pt-[value]` | Padding on the top side.                       | `pt-4` or `pt-[6]` |
| `pb-[value]` | Padding on the bottom side.                    | `pb-4` or `pb-[6]` |
| `pl-[value]` | Padding on the left side.                      | `pl-4` or `pl-[6]` |
| `pr-[value]` | Padding on the right side.                     | `pr-4` or `pr-[6]` |

### How Values Are Calculated

#### Predefined Sizes

Dynamic padding is calculated using the size value multiplied by the Pixel Factor.
- Example: `p-4` → 4 (size) * 4 (Pixel Factor) = **16px**.
 
#### Arbitrary Values

Arbitrary sizes bypass the Pixel Factor and use the specified value directly.

- Example: `p-[6]` → **6px**.

## Examples

### Applying Padding with Pixel Factor

<x-preview path="spacing/padding" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'p-4 bg-gray-200',
  child: WText('This container has 16px padding.'),
)
```

In this example, the padding is set to **16px** using the `p-4` class.

### Using Arbitrary Padding Values

<x-preview path="spacing/padding_arbitrary" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'p-[10] bg-gray-200',
  child: WText('This container has 10px padding.'),
)
```

Here, the padding is directly set to **10px**, bypassing the Pixel Factor.

### Applying Specific Side Padding

<x-preview path="spacing/padding_specific" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'pt-4 pr-[8] pl-2 pb-[12] bg-gray-200',
  child: WText('Custom side-specific padding applied.'),
)
```

In this example:
- `pt-4` sets the top padding to **16px**.
- `pr-[8]` sets the right padding to **8px**.
- `pl-2` sets the left padding to **8px**.
- `pb-[12]` sets the bottom padding to **12px**.

