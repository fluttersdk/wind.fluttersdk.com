# Responsive Design with Wind

Responsive design is a core feature of Wind, allowing Flutter developers to adapt their layouts seamlessly across different screen sizes. Inspired by TailwindCSS, Wind makes it easy to define responsive styles using utility classes like `sm:w-full`, `md:w-1/2`, and more. This approach ensures a fluid and dynamic user experience across devices.


## Default Screen Breakpoints

Wind comes with pre-defined screen size breakpoints, making it easy to start building responsive layouts right away:

| Screen Size | Width (pixels) |
|-------------|----------------|
| `sm`        | 768            |
| `md`        | 1024           |
| `lg`        | 1280           |
| `xl`        | 1536           |
| `2xl`       | 3072           |

These breakpoints can be retrieved programmatically using the following code:

```dart
WindTheme.getScreens();
```

## Adding Custom Breakpoints

To add a custom screen size, simply call:

```dart
WindTheme.addScreen('watch', 300);
```

## Updating Custom Breakpoints

To update an existing custom screen size, simply call:

```dart
WindTheme.updateScreen('watch', 400);
```

## Removing Custom Breakpoints

If you need to remove a custom screen size, simply call:

```dart
WindTheme.removeScreen('watch');
```

## Example: Responsive Layout

Here’s an example of building a responsive layout with Wind:

<x-preview path="core/responsive_design" :iframe="false"></x-preview>

```dart
import 'package:flutter/material.dart';
import 'package:fluttersdk_wind/wind.dart';

class ResponsiveDesign extends StatelessWidget {
  const ResponsiveDesign({super.key});

  @override
  Widget build(BuildContext context) {
    return WFlexContainer(
      className: 'w-full h-full justify-center items-center flex-col bg-gray-200',
      children: [
        WCard(
          className: 'sm:w-full p-4 bg-white rounded-lg items-center justify-center',
          child: WText('Full width at small screens.', className: 'text-black'),
        ),
        WCard(
          className: 'md:w-full lg:w-100 p-4 bg-white rounded-lg items-center justify-center',
          child: WText('Full width at medium screens.', className: 'text-black'),
        ),
        WCard(
          className: 'lg:w-full p-4 bg-white rounded-lg items-center justify-center',
          child: WText('Full width at large screens.', className: 'text-black'),
        ),
        WCard(
          className: 'xl:w-full p-4 bg-white rounded-lg items-center justify-center',
          child: WText('Full width at extra large screens.', className: 'text-black'),
        ),
      ],
    );
  }
}
```

### How It Works

#### Breakpoints in Class Names

Wind parses class names like `sm:w-full` or `lg:w-1/2` and applies the corresponding styles when the screen width matches the breakpoint.

#### Dynamic Breakpoint Management

Breakpoints are managed using the WindTheme class. You can customize, add, or remove breakpoints to suit your app’s requirements.

Start building responsive, adaptive layouts in Flutter with Wind today!
