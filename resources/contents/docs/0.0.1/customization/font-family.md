# Font Family Customization

The wind plugin makes it simple to customize the **font family** of your Flutter application. It leverages the [Google Fonts package](https://pub.dev/packages/google_fonts), providing access to a vast library of fonts without additional configuration. By default, wind uses the **Inter** font family, but you can easily change this for both body and display text.

This page covers how to update font families using the `WindTheme` class. For applying fonts to your Flutter theme, refer to the [Binding the Flutter Theme](/getting-started/binding-the-flutter-theme) page.

## Default Font: Inter

When you create a new application using wind, the default font family is set to **Inter**. It’s a versatile sans-serif font, but you can replace it with any font supported by **Google Fonts** to match your design requirements.

## Customizing Fonts with WindTheme 🎨

The WindTheme class provides methods to configure both body and display fonts. These settings define the fonts used across your app for text-heavy content and headings.

### Body Font

The **body font** is the primary font used for general text content throughout the application.

#### Setting the Body Font

You can update the body font using the setBodyFontString method:

```dart
WindTheme.setBodyFontString('Roboto');
```

After this, all text styled with the body font will default to **Roboto**.

#### Retrieving the Current Body Font

To check which body font is currently set:

```dart
String currentBodyFont = WindTheme.getBodyFontString();
print('Current body font: $currentBodyFont'); // Output: 'Roboto'
```

### Display Font

The **display font** is typically used for large, prominent text, such as headings or titles.

#### Setting the Display Font

You can set a custom display font using the setDisplayFontString method:

```dart
WindTheme.setDisplayFontString('Lobster');
```

If no display font is set, the body font is used as a fallback.

#### Retrieving the Current Display Font

To retrieve the currently set display font:

```dart
String currentDisplayFont = WindTheme.getDisplayFontString();
print('Current display font: $currentDisplayFont'); // Output: 'Lobster'
```

## Binding Fonts to Flutter Theme 🎯

To apply the configured fonts globally in your Flutter application, you need to bind them to the Flutter `ThemeData`. This is done using the `WindTheme.toThemeData` method, which integrates the font settings with Flutter’s theme system.

For detailed guidance on applying fonts using this method, visit the [Binding the Flutter Theme](/getting-started/binding-the-flutter-theme) page.
