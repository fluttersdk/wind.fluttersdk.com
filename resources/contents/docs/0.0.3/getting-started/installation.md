# Get started with wind

Wind enables seamless styling in Flutter by interpreting class names directly in your widget trees, transforming them into optimized designs.

## Try it out

To get a feel for how Wind works, try the [Wind Playground](https://zapp.run/edit/zmhm06e5mhn0?theme=dark&lazy=false&entry=lib/main.dart&file=lib/main.dart).

<iframe src="https://zapp.run/edit/zdvq06uzdvr0?theme=dark&amp;lazy=false" style="width:100%;border:0;overflow:hidden;aspect-ratio:1.5"></iframe>

## Installation

To get started, run the following command in your terminal:

```bash
flutter pub add fluttersdk_wind
```

Or add the following to your `pubspec.yaml`:

```yaml
dependencies:
  fluttersdk_wind: ^0.0.3
```

Then run `flutter pub get`.

## Usage

Below is an example of how to use the Wind plugin to style your Flutter widgets. 

This example demonstrates creating a card component with various text elements, each styled using Wind classes:

```dart
WCard(
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
)
```
## Binding the Flutter theme (optional)

By binding the Wind theme to your Flutter application, you can merge the colors and styles of your application with the Wind plugin.

This optional step is necessary if you want to use the Wind theme in your app but we recommend it to ensure a consistent design.

Let's look at [Binding the Flutter theme](/getting-started/binding-the-flutter-theme) page to see how to bind the Wind theme to your Flutter application.
