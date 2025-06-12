# Margin

The margin utility in **Wind** allows you to define spacing outside a widget dynamically. Margins can be applied to all sides or specific sides using predefined class prefixes. Margin values are calculated using the **Pixel Factor** in the `WindTheme`. For more details, see the [Pixel Factor](/customization/pixel-factor) documentation page.

## Syntax

Margins are applied using the following class prefixes:

| **Class**    | **Description**                               | **Example**        |
|--------------|-----------------------------------------------|--------------------|
| `m-[value]`  | Margin on all sides.                          | `m-4` or `m-[6]`   |
| `mx-[value]` | Margin on the horizontal sides (left, right). | `mx-4` or `mx-[6]` |
| `my-[value]` | Margin on the vertical sides (top, bottom).   | `my-4` or `my-[6]` |
| `mt-[value]` | Margin on the top side.                       | `mt-4` or `mt-[6]` |
| `mb-[value]` | Margin on the bottom side.                    | `mb-4` or `mb-[6]` |
| `ml-[value]` | Margin on the left side.                      | `ml-4` or `ml-[6]` |
| `mr-[value]` | Margin on the right side.                     | `mr-4` or `mr-[6]` |

### How Values Are Calculated

#### Predefined Sizes

Dynamic margin is calculated using the size value multiplied by the Pixel Factor.
- Example: `m-4` → 4 (size) * 4 (Pixel Factor) = **16px**.
 
#### Arbitrary Values

Arbitrary sizes bypass the Pixel Factor and use the specified value directly.

- Example: `m-[6]` → **6px**.

## Examples

### Applying Margin with Pixel Factor

<x-preview path="spacing/margin" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'm-4 bg-gray-200',
  child: WText('This container has 16px margin.'),
)
```

In this example, the margin is set to **16px** using the `m-4` class.

### Using Arbitrary Margin Values

<x-preview path="spacing/margin_arbitrary" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'm-[10] bg-gray-200',
  child: WText('This container has 10px margin.'),
)
```

Here, the margin is directly set to **10px**, bypassing the Pixel Factor.

### Applying Specific Side Margin

<x-preview path="spacing/margin_specific" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'mt-4 mr-[8] ml-2 mb-[12] bg-gray-200',
  child: WText('Custom side-specific margin applied.'),
)
```

In this example:
- `mt-4` sets the top margin to **16px**.
- `mr-[8]` sets the right margin to **8px**.
- `ml-2` sets the left margin to **8px**.
- `mb-[12]` sets the bottom margin to **12px**.

