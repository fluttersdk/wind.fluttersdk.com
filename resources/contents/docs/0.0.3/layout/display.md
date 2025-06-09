# Display (Visibility) Classes

Wind supports utility classes that allow you to control widget visibility based on screen size. This enables responsive
UI behaviors without conditional Dart code.

## Supported Classes

| **Class** | **Description**                    |
|-----------|------------------------------------|
| `hide`    | Hides the widget                   |
| `hidden`  | Alias for `hide`, behaves the same |
| `show`    | Forces the widget to be visible    |

You can prefix visibility classes with responsive breakpoints like `sm:`, `md:`, `lg:`, etc.

## How It Works

Wind uses the `DisplayParser` internally to parse the class names and decide whether the widget should be rendered. If
the className includes a `hide`/`hidden` and the screen conditions match, the widget is replaced with
`SizedBox.shrink()`.

This behavior is supported automatically in:

- `WText`
- `WFlexible`
- `WContainer`
- `WCard`

So you can control visibility purely with class names.

## Usage

<x-preview path="layouts/display"></x-preview>

```dart
WFlexContainer(
  className: 'flex-col bg-gray-100 h-64 justify-center items-center gap-4',
  children: [
    WFlexible(
      className: 'hide lg:show',
      child: WText('Visible on large and larger screens'),
    ),
    WFlexible(
      className: 'hide md:show',
      child: WText('Visible on medium and larger screens'),
    ),
    WFlexible(
      className: 'show md:hide',
      child: WText('Visible on only small screens'),
    ),
  ],
);
```

## Helper Functions

You can also control visibility in Dart code using Wind’s built-in screen helpers.

### wScreen

Returns true if the screen width is greater than or equal to the given breakpoint.

```dart
wScreen(context, 'md') // true on medium and larger screens
```

### wScreenOnly

Returns true only if the screen size matches the exact range for the given breakpoint.

```dart
wScreenOnly(context, 'sm') // true only on small screens
```

### wAnyScreenOnly

Checks if the screen matches any of the given breakpoints exclusively.

```dart
wAnyScreenOnly(context, ['sm', 'md']) // true on small or medium only
```
