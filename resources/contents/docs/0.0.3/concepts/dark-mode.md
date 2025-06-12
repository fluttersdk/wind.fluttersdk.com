# Dark Mode 🌙

Wind plugin introduces a seamless Dark Mode feature, enabling you to switch between light and dark themes effortlessly. With Wind, widgets automatically adapt to dark mode by inverting their colors, ensuring a smooth and visually pleasing experience without requiring additional coding. 🎉

## How It Works

When you enable Dark Mode using Wind, the plugin dynamically inverts all color palettes for your widgets created with Wind. This includes flipping light shades to dark shades and vice versa. For example:
- Light colors like `bg-gray-200` transform into their darker counterparts (eg: `bg-gray-800`).
- Text and background colors adjust for optimal readability.

All of this happens under the hood, managed by the WindTheme class, which recalculates and applies the darkened colors. This ensures consistency across your app’s design.

## Example: Enabling Dark Mode

Here’s how you can implement and test Dark Mode in your app:

<x-preview path="core/dark_mode" size="sm" class="min-h-80"></x-preview>

```dart
import 'package:flutter/material.dart';
import 'package:fluttersdk_wind/wind.dart';

class DarkMode extends StatefulWidget {
  const DarkMode({super.key});

  @override
  State<DarkMode> createState() => _DarkModeState();
}

class _DarkModeState extends State<DarkMode> {
  darkMode() {
    setState(() {
      WindTheme.setType(Brightness.dark);
    });
  }

  @override
  Widget build(BuildContext context) {
    return WFlexContainer(
      className: 'w-full h-full justify-center flex-col items-center bg-gray-200 gap-4',
      children: [
        WFlex(
          className: 'w-full justify-center items-center gap-4',
          children: [
            WCard(
              className: 'shadow-lg rounded-lg p-4 bg-white',
              child: WFlex(
                className: 'flex-col axis-min gap-2 items-start',
                children: [
                  WText('12', className: 'text-4xl leading-6 font-bold text-black'),
                  WText('Active users on the website', className: 'text-black leading-4'),
                ],
              ),
            ),
            WCard(
              className: 'shadow-lg rounded-lg p-4 bg-green-500',
              child: WFlex(
                className: 'flex-col axis-min gap-2 items-start',
                children: [
                  WText('12', className: 'text-4xl leading-6 font-bold text-white'),
                  WText('Active users on the website', className: 'text-white leading-4'),
                ],
              ),
            ),
          ],
        ),
        WindTheme.getType() == Brightness.dark
            ? WText('You are in dark mode now.', className: 'text-black')
            : MaterialButton(onPressed: darkMode, child: Text('Enable Dark Mode')),
      ],
    );
  }
}
```

In this example:
- `WindTheme.setType(Brightness.dark)` is called to switch the app to Dark Mode.
- All widgets built with Wind automatically invert their colors.

## Customizing Dark Mode Behavior 🛠️

Not every color in your app may need to invert during Dark Mode. Wind gives you control over which colors stay constant.

### Preventing Color Changes

You can specify static colors that remain unchanged in Dark Mode using the `WindTheme.addStaticColor` method. For instance:

```dart
WindTheme.addStaticColor('primary');
WindTheme.addStaticColor('secondary');
```

Upgrade your app’s user experience with a simple toggle. 🌟 Start using Wind’s Dark Mode today and bring your designs to life in every environment!
