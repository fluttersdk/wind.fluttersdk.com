# State-Based Styling with Wind

Wind allows you to easily manage `hover`, `disabled`, and other state-based styles in Flutter widgets using utility class names. By leveraging the `classNameParser` function, Wind dynamically parses class names based on widget states and applies the corresponding styles efficiently.
z
State-based styling in Wind is inspired by the simplicity of TailwindCSS. With utilities like `hover:bg-blue-500` or `disabled:bg-gray-300`, you can define styles that adapt to a widget's state seamlessly. Wind's `classNameParser` function ensures that these state-based styles are parsed and applied dynamically without the need for complex manual logic.

This feature empowers developers to build interactive and state-aware Flutter widgets while maintaining a clean and declarative style structure.


## Using State-Based Styles

You can now define state-based styles in your Wind stylesheet and apply them to your Flutter widgets. Here's an example of how you can define a state-based style for a button:

<x-preview path="core/state_based_styling"></x-preview>

```dart
class StateBasedStyling extends StatelessWidget {
  const StateBasedStyling({super.key});

  @override
  Widget build(BuildContext context) {
    return WFlexContainer(
      className: 'w-full h-full justify-center items-center flex-col bg-gray-200 gap-4',
      children: [
        AppButton(
          className: 'sm:w-full lg:w-100 bg-primary-500 p-4 rounded-lg items-center justify-center hover:bg-white',
          textClassName: 'text-white hover:text-primary-600',
          text: 'Submit',
        ),
        AppButton(
          className: 'sm:w-full lg:w-100 bg-primary-500 p-4 rounded-lg items-center justify-center disabled:bg-gray-500',
          textClassName: 'text-white disabled:text-black',
          text: 'Submit',
          disabled: true,
        ),
      ],
    );
  }
}
```

## Creating a Stateful Button

Here's an example of how you can use state-based styling in a custom button widget:

```dart
import 'package:flutter/material.dart';
import 'package:fluttersdk_wind/wind.dart';

class AppButton extends StatefulWidget {
  final String? className;
  final String? textClassName;
  final String? text;
  final bool disabled;

  const AppButton({
    super.key,
    this.className,
    this.textClassName,
    this.text,
    this.disabled = false,
  });

  @override
  State<StatefulWidget> createState() => _AppButtonState();
}

class _AppButtonState extends State<AppButton> {
  bool isHovered = false;

  @override
  Widget build(BuildContext context) {
    List<String> states = [];

    if (widget.disabled) {
      states.add('disabled');
    }

    if (isHovered) {
      states.add('hover');
    }

    final String parsedClassName =
    classNameParser(widget.className, states: states);

    final String parsedTextClassName =
    classNameParser(widget.textClassName, states: states);

    return InkWell(
      onHover: (hovered) {
        if (!widget.disabled) {
          setState(() {
            isHovered = hovered;
          });
        }
      },
      onTap: () {
        if (!widget.disabled) {
          print('Button tapped');
        }
      },
      child: WFlexContainer(
        className: parsedClassName,
        children: [
          WText(
            widget.text ?? 'Button',
            className: parsedTextClassName,
          ),
        ],
      ),
    );
  }
}
```

In this example, the `AppButton` widget uses the `classNameParser` function to parse the class names based.


