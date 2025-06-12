# Alignment

The **wind** plugin supports alignment utilities to position widgets within their containers. These utilities provide a simple way to define alignment across various directions, such as top-left, center, and bottom-right. These alignments integrate seamlessly with Flutter’s Alignment system.

## Available Classes

| **Class**                 | **Flutter Alignment**    | **Description**             |
|---------------------------|--------------------------|-----------------------------|
| `alignment-top-left`      | `Alignment.topLeft`      | Aligns to the top-left      |
| `alignment-top-center`    | `Alignment.topCenter`    | Aligns to the top-center    |
| `alignment-top-right`     | `Alignment.topRight`     | Aligns to the top-right     |
| `alignment-center-left`   | `Alignment.centerLeft`   | Aligns to the center-left   |
| `alignment-center`        | `Alignment.center`       | Aligns to the center        |
| `alignment-center-right`  | `Alignment.centerRight`  | Aligns to the center-right  |
| `alignment-bottom-left`   | `Alignment.bottomLeft`   | Aligns to the bottom-left   |
| `alignment-bottom-center` | `Alignment.bottomCenter` | Aligns to the bottom-center |
| `alignment-bottom-right`  | `Alignment.bottomRight`  | Aligns to the bottom-right  |

## Usage

<x-preview path="flex/alignments" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'alignment-center bg-gray-200 w-full h-full',
  child: WText('Centered Text', className: 'text-black'),
);
```

This example centers the text both horizontally and vertically within the container.

<x-preview path="flex/alignment_top_left" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'alignment-top-left bg-gray-200 w-full h-64',
  child: WText('Top-Left Text', className: 'text-black'),
);
```

Here, the text aligns to the top-left corner of the container.

## Example

You can combine alignment classes with other flex and style utilities for more complex layouts.

<x-preview path="flex/alignment_complex" size="md" class="min-h-64"></x-preview>

```dart
WFlexContainer(
  className: 'flex-row justify-evenly items-center w-full h-64 bg-gray-100',
  children: [
    WContainer(
      className: 'alignment-top-left bg-blue-500 w-32 h-32',
      child: WText('Top-Left', className: 'text-white'),
    ),
    WContainer(
      className: 'alignment-center bg-green-500 w-32 h-32',
      child: WText('Center', className: 'text-white'),
    ),
    WContainer(
      className: 'alignment-bottom-right bg-red-500 w-32 h-32',
      child: WText('Bottom-Right', className: 'text-white'),
    ),
  ],
);
```

In this example:
- The first container aligns its content to the top-left.
- The second container centers its content.
- The third container aligns its content to the bottom-right.
