# Gap (Spacing) 🌌

The wind plugin provides a set of predefined gap values for consistent spacing across your app. You can use these values to add space between elements, create margins, or define padding.

## Available Classes

| **Key**       | **Value (px)**                                         | **Description**           |
|---------------|--------------------------------------------------------|---------------------------|
| `gap-value`   | `4 (value) * 4 (pixel factor) * 4 (rem factor) = 16px` | Predefined gap value      |
| `gap-[value]` | `8 (value) = 8px`                                      | Arbitrary gap value in px |

# Usage

<x-preview path="flex/gap"></x-preview>

```dart
WFlexContainer(
  className: 'flex-row gap-4 bg-gray-100',
  children: [
    WCard(className: 'bg-blue-500 w-16 h-16', child: WText('Card 1')),
    WCard(className: 'bg-green-500 w-16 h-16', child: WText('Card 2')),
    WCard(className: 'bg-red-500 w-16 h-16', child: WText('Card 3')),
  ],
);
```

<x-preview path="flex/gap_dynamic"></x-preview>

```dart
WFlexContainer(
  className: 'gap-[8] flex-row bg-gray-200',
  children: [
    WCard(className: 'bg-blue-500 w-16 h-16', child: WText('Card 1')),
    WCard(className: 'bg-green-500 w-16 h-16', child: WText('Card 2')),
    WCard(className: 'bg-red-500 w-16 h-16', child: WText('Card 3')),
  ],
);
```
