# Flex Fit Classes 🛠️

The flex fit property allows you to control how children are sized within a flex container.

## Available Classes

| **Class**   | **FlexFit**     | **Description**                      |
|-------------|-----------------|--------------------------------------|
| `flex-grow` | `FlexFit.tight` | Child widget expands to fill space   |
| `flex-auto` | `FlexFit.loose` | Child widget takes up required space |

## Usage

<x-preview path="flex/flex_fit"></x-preview>

```dart
WFlexContainer(
  className: 'flex-row bg-gray-100',
  children: [
    WCard(
      className: 'flex-grow bg-blue-500',
      child: WText('Grow'),
    ),
    WCard(
      className: 'flex-auto bg-green-500',
      child: WText('Auto'),
    ),
  ],
);
```

In this example:
- `flex-grow` ensures the first card expands to fill available space.
- `flex-auto` ensures the second card only occupies the space it requires.
