# Shadow

The `shadow-` prefix allows you to apply shadow effects to elements. **Wind** supports both predefined shadow sizes and arbitrary values for ultimate flexibility in styling.

## Syntax

```text
shadow-[size]
shadow-[[value]]
```

- **size:** Refers to a predefined shadow size available in WindTheme (e.g., sm, lg, xl).
- **value:** An arbitrary pixel value for the shadow size.

## Predefined Sizes

The `WindTheme` class includes a set of default shadow sizes mapped to descriptive keys. These sizes can be applied directly in your application for consistent shadow effects.

| **Class**   | **Shadow Effect**  | **Explanation**       |
|-------------|--------------------|-----------------------|
| `shadow-sm` | Small shadow       | Subtle shadow         |
| `shadow-lg` | Large shadow       | Prominent shadow      |
| `shadow-xl` | Extra large shadow | Very prominent shadow |

For the full list of predefined shadow sizes, refer to the [Customizing Shadows](/customization/shadows) page.

## Arbitrary Values

Custom shadow sizes can be applied using the `shadow-[[value]]` syntax, where value is the desired shadow size in px.

| **Class**     | **Shadow Effect** | **Explanation**            |
|---------------|-------------------|----------------------------|
| `shadow-[8]`  | 8px               | Custom shadow size of 8px  |
| `shadow-[20]` | 20px              | Custom shadow size of 20px |

## Example: Applying Shadows

<x-preview path="effects/shadow" size="md" class="min-h-64"></x-preview>

```dart
WCard(
  className: 'shadow-lg p-4 bg-white',
  child: WText('Large Shadow', className: 'text-gray-700'),
)
```

In this example, the shadow effect is set to **lg** from the WindTheme.

## Example: Custom Shadow Size

<x-preview path="effects/shadow_custom" size="md" class="min-h-64"></x-preview>

```dart
WCard(
  className: 'shadow-[6] p-4 bg-white',
  child: WText('Custom Shadow', className: 'text-gray-700'),
)
```

Here, the shadow size is set to an arbitrary value of **6px**.
