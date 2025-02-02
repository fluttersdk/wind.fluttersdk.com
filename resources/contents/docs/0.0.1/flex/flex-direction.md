# Flex Direction 🎯

The flex direction determines whether the children are laid out horizontally (row) or vertically (column).

## Available Classes

| **Class**  | **Value** | **Description**   |
|------------|-----------|-------------------|
| `flex-row` | `row`     | Horizontal layout |
| `flex-col` | `column`  | Vertical layout   |

## Usage

<x-preview path="flex/flex_direction"></x-preview>

```dart
WFlexContainer(
  className: 'flex-row w-full h-40 bg-gray-100',
  children: [
    WCard(className: 'bg-blue-500 w-1/3 h-full', child: WText('Card 1')),
    WCard(className: 'bg-green-500 w-1/3 h-full', child: WText('Card 2')),
    WCard(className: 'bg-red-500 w-1/3 h-full', child: WText('Card 3')),
  ],
);
```
