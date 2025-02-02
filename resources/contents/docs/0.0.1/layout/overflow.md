# Overflow

The overflow scroll utility allows you to make content scrollable when it exceeds the available space.

## Available Classes

| **Class**         | **Description**                               |
|-------------------|-----------------------------------------------|
| `overflow-scroll` | Makes content scrollable when overflow occurs |

## Usage

<x-preview path="flex/scrollable_overflow"></x-preview>

```dart
WFlexContainer(
  className: 'overflow-scroll flex-col bg-gray-100 h-64',
  children: List.generate(
    20,
    (index) => WCard(
      className: 'bg-gray-200 w-full h-10',
      child: WText('Item $index', className: 'text-black'),
    ),
  ),
);
```
