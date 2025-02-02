```dart
return Scaffold(
  backgroundColor: wColor('gray-100'),
  body: const WFlexContainer(
    className:
    'w-full h-full flex-col justify-center items-center overflow-scroll',
    children: [
      WFlex(
        className:
        'w-full items-center justify-center',
        children: [
          FlutterLogo(size: 100),
        ],
      ),
      WCard(
        className:
        'bg-white w-120 sm:w-full mt-10 px-6 py-12 shadow sm:shadow-none rounded-lg sm:rounded-none',
        child: WText(
          'This is a sample widget',
          className:
          'text-center text-gray-600',
        ),
      ),
    ],
  ),
)
```
