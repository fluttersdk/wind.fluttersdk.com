# Flex-x (Custom Flex Factor) 🎯

The `flex-x` utility allows you to define custom flex factors for child widgets. This determines how much space the child widget takes relative to its siblings.

## Syntax

Use `flex-[x]`, where x is a number representing the flex factor.

## Usage

<x-preview path="flex/flex_x"></x-preview>

```dart
WFlexContainer(
  className: 'flex-row bg-gray-200',
  children: [
    WCard(
      className: 'flex-2 bg-blue-500',
      child: WText('Flex 2'),
    ),
    WCard(
      className: 'flex-1 bg-green-500',
      child: WText('Flex 1'),
    ),
  ],
);
```
