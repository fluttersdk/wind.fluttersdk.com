# Axis Sizes 🌟

The `WindTheme` class includes a set of default axis sizes mapped to descriptive keys. These sizes can be applied directly in your application for consistent axis spacing.

## Available Classes

| **Class**  | **MainAxisSize**   | **Description**                          |
|------------|--------------------|------------------------------------------|
| `axis-max` | `MainAxisSize.max` | Children take up all available space     |
| `axis-min` | `MainAxisSize.min` | Children take up only the required space |

## Usage

<x-preview path="flex/axis_sizes"></x-preview>

```dart
WFlexContainer(
  className: 'axis-max flex-row bg-gray-400',
  children: [
    WCard(className: 'bg-blue-500 w-20 h-20', child: WText('Card 1')),
    WCard(className: 'bg-green-500 w-20 h-20', child: WText('Card 2')),
  ],
);
```

In this example, axis-max ensures that the flex container stretches to occupy all available space along the main axis.

<x-preview path="flex/axis_sizes_min"></x-preview>

```dart
WFlexContainer(
  className: 'axis-min flex-row bg-gray-400',
  children: [
    WCard(className: 'bg-blue-500 w-20 h-20', child: WText('Card 1')),
    WCard(className: 'bg-green-500 w-20 h-20', child: WText('Card 2')),
  ],
);
```

In this example, axis-min ensures that the flex container only occupies the space required by its children.

