# Binding the Flutter Theme

By binding the **Wind theme** to your Flutter application, you can seamlessly integrate your app’s default styles with Wind’s powerful theming system. This ensures that your app benefits from Wind’s utility-first approach while remaining consistent with Flutter’s Material design principles. 🎨✨

Wind now supports two methods for binding themes:
1. **Dynamic Mode:** using `toThemeCallback`, which adapts to runtime changes like light/dark mode transitions automatically.
2. **Static Mode:** using `toThemeData`, which offers a simpler setup but requires manual updates for runtime changes (e.g., switching themes).

## Using toThemeCallback for Dynamic Binding

`toThemeCallback` dynamically updates the theme in response to runtime changes like light or dark mode toggling. This ensures your app always reflects the correct theme state without manual intervention.

```dart
class MyApp extends StatelessWidget {
  final Widget Function(BuildContext) appCallback;

  const MyApp({super.key, required this.appCallback});

  @override
  Widget build(BuildContext context) {
    return appCallback(context);
  }
}

void main() {
  runApp(MyApp(
    appCallback: (context) {
      return MaterialApp(
        theme: WindTheme.toThemeCallback(
          context,
          primarySwatch: Colors.blue,
          bodyFontString: 'Roboto',
          displayFontString: 'Lobster',
        ),
      );
    },
  ));
}
```

In this example, toThemeCallback detects and applies the appropriate theme based on the application’s brightness settings at runtime. Perfect for dynamic theme transitions! 🌗

## Using toThemeData for Static Binding

If you don’t need runtime adaptability, `toThemeData` provides a simpler way to bind the Wind theme. This method statically applies the theme to your application. However, if the brightness changes during runtime, you need to manually update the theme by calling `WindTheme.setType`.

```dart
void main() {
  runApp(MaterialApp(
    theme: WindTheme.toThemeData(
      primarySwatch: Colors.green,
      bodyFontString: 'Open Sans',
      displayFontString: 'Pacifico',
      backgroundColor: Colors.grey.shade200,
      brightness: Brightness.light,
    ),
  ));
}
```

If you need to switch to dark mode at runtime

```dart
WindTheme.setType(Brightness.dark);
```

This manual intervention ensures that the Wind theme reflects the new brightness state.

## Customization Parameters

Both `toThemeData` and `toThemeCallback` methods allow you to customize the Material theme. Here’s a list of available parameters:

| Parameter          	           | Description                                        	 | Default Value                            	 |
|--------------------------------|------------------------------------------------------|--------------------------------------------|
| `textTheme`          	         | Custom TextTheme for the app’s typography.      	    | Typography.material2021().englishLike  	   | 
| `bodyFontString`     	         | Font family for body text.                      	    | WindTheme.getBodyFontString()          	   | 
| `displayFontString`  	         | Font family for display text (e.g., headings).  	    | WindTheme.getDisplayFontString()       	   |
| `primarySwatch`      	         | Primary color swatch for the app.               	    | WindTheme.getMaterialColor('primary')  	   |
| `accentColor`        	         | Secondary accent color.                         	    | WindTheme.getColor('secondary')        	   |
| `cardColor`          	         | Background color for cards.                     	    | WindTheme.getColor('white')            	   |
| `backgroundColor`    	         | Default background color for the app.           	    | WindTheme.getColor('gray', shade: 50)  	   |
| `errorColor`         	         | Color used for error states.                    	    | WindTheme.getColor('red')              	   |
| `brightness`         	         | Overall brightness (light or dark mode).        	    | WindTheme._type                        	   |

Choose the method that best suits your application’s needs and enjoy the seamless integration of Wind with Flutter’s Material design system. 🌟
