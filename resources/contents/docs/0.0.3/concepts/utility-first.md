# Utility-first

Utility-first is a design methodology that prioritizes the creation of small, single-purpose utility classes that can be composed to build complex designs.

Wind flutter plugin is a utility-first design system that provides a set of utility classes that can be used to build any design, directly in your Flutter project.

## Flutter demo

Traditional design systems often require you to write custom styles for every component in your application. This can be time-consuming and can lead to inconsistencies in your design.

<x-preview path="core/utility_first_flutter"></x-preview>

```dart
import 'package:flutter/material.dart';

class UtilityFirstFlutter extends StatelessWidget {
  const UtilityFirstFlutter({super.key});

  @override
  Widget build(BuildContext context) {
    return Card(
      margin: const EdgeInsets.all(16),
      color: Colors.black,
      elevation: 8,
      shape: RoundedRectangleBorder(
        borderRadius: BorderRadius.circular(8),
      ),
      child: Padding(
        padding: const EdgeInsets.all(16),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          mainAxisSize: MainAxisSize.min,
          children: [
            const Text(
              '12',
              style: TextStyle(
                  fontSize: 36,
                  fontWeight: FontWeight.bold,
                  color: Colors.white,
                  height: 1.5),
            ),
            const SizedBox(height: 4),
            const Text(
              'Active users on the website',
              style: TextStyle(
                  fontSize: 14,
                  fontWeight: FontWeight.normal,
                  color: Colors.white),
            ),
            const SizedBox(height: 4),
            Text(
              'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
              style: TextStyle(
                fontSize: 12,
                color: Colors.grey[300],
              ),
            ),
          ],
        ),
      ),
    );
  }
}
```

## Wind flutter plugin

With wind flutter plugin, you can build complex designs using utility classes directly in your Flutter project. This allows you to create consistent designs across your application without writing custom styles for every component.

<x-preview path="core/utility_first_wind"></x-preview>

```dart
import 'package:flutter/material.dart';
import 'package:fluttersdk_wind/wind.dart';

class UtilityFirstWind extends StatelessWidget {
  const UtilityFirstWind({super.key});

  @override
  Widget build(BuildContext context) {
    return WCard(
      className: 'shadow-lg rounded-lg m-4 p-4 bg-black',
      child: WFlex(
        className: 'flex-col axis-min gap-2 items-start',
        children: [
          WText('12', className: 'text-4xl leading-6 font-bold text-white'),
          WText('Active users on the website',
              className: 'text-white leading-4'),
          WText(
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            className: 'text-gray-300 text-xs',
          )
        ],
      ),
    );
  }
}

```
