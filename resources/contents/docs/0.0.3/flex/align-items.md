# Align Items 🧭

The align items property aligns children along the cross axis, allowing you to control their positioning and spacing.

## Available Classes

| **Class**        | **CrossAxisAlignment**        | **Description**                   |
|------------------|-------------------------------|-----------------------------------|
| `items-start`    | `CrossAxisAlignment.start`    | Align items at the start          |
| `items-end`      | `CrossAxisAlignment.end`      | Align items at the end            |
| `items-center`   | `CrossAxisAlignment.center`   | Center items along the cross-axis |
| `items-baseline` | `CrossAxisAlignment.baseline` | Align items to their baseline     |
| `items-stretch`  | `CrossAxisAlignment.stretch`  | Stretch items to fill cross-axis  |

## Usage

<x-preview path="flex/align_items" size="md" class="min-h-64"></x-preview>

```dart
WFlexContainer(
  className: 'flex-row items-center bg-gray-100 h-64',
  children: [
    WCard(className: 'bg-blue-500 h-16', child: WText('Card 1')),
    WCard(className: 'bg-green-500 h-16', child: WText('Card 2')),
    WCard(className: 'bg-red-500 h-16', child: WText('Card 3')),
  ],
);
```
