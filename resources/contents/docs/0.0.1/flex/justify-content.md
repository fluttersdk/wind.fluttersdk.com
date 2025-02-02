# Justify Content 🛠️

The justify content property aligns children along the main axis, allowing you to control their positioning and spacing.

## Available Classes

| **Class**         | **MainAxisAlignment**            | **Description**                      |
|-------------------|----------------------------------|--------------------------------------|
| `justify-center`  | `MainAxisAlignment.center`       | Center items along the main axis     |
| `justify-start`   | `MainAxisAlignment.start`        | Align items to the start             |
| `justify-end`     | `MainAxisAlignment.end`          | Align items to the end               |
| `justify-between` | `MainAxisAlignment.spaceBetween` | Space items evenly with gaps         |
| `justify-around`  | `MainAxisAlignment.spaceAround`  | Space items with padding around them |
| `justify-evenly`  | `MainAxisAlignment.spaceEvenly`  | Distribute items equally             |

## Usage

<x-preview path="flex/justify_content"></x-preview>

```dart
WFlexContainer(
  className: 'flex-row justify-between bg-gray-200',
  children: [
    WCard(className: 'bg-blue-500 w-16 h-16', child: WText('Card 1')),
    WCard(className: 'bg-green-500 w-16 h-16', child: WText('Card 2')),
    WCard(className: 'bg-red-500 w-16 h-16', child: WText('Card 3')),
  ],
);
```
