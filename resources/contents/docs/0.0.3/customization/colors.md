# Customizing Colors

The wind plugin provides a versatile and easy-to-use color system inspired by **TailwindCSS**, allowing you to create visually consistent and attractive UIs in Flutter. The pre-defined color palette in the WindTheme class includes a broad range of colors, which can be used in utility classes, programmatically with helper functions, or even extended with your own custom colors.

## Color Palette 🎨

The default palette in **WindTheme** includes various color families such as slate, gray, red, indigo, and more. Each color is defined as a MaterialColor, supporting multiple shades from 50 (lightest) to 900 (darkest). The default shade is 500, used when no specific shade is provided (e.g., `bg-indigo` will use the 500 shade of indigo).

| Name       | Color                                                     |
|------------|-----------------------------------------------------------|
| `slate`    | <div class="w-8 h-8 rounded bg-slate-500 shadow"></div>   |
| `gray`     | <div class="w-8 h-8 rounded bg-gray-500 shadow"></div>    |
| `zinc`     | <div class="w-8 h-8 rounded bg-zinc-500 shadow"></div>    |
| `neutral`  | <div class="w-8 h-8 rounded bg-neutral-500 shadow"></div> |
| `stone`    | <div class="w-8 h-8 rounded bg-stone-500 shadow"></div>   |
| `red`      | <div class="w-8 h-8 rounded bg-red-500 shadow"></div>     |
| `orange`   | <div class="w-8 h-8 rounded bg-orange-500 shadow"></div>  |
| `amber`    | <div class="w-8 h-8 rounded bg-amber-500 shadow"></div>   |
| `yellow`   | <div class="w-8 h-8 rounded bg-yellow-500 shadow"></div>  |
| `lime`     | <div class="w-8 h-8 rounded bg-lime-500 shadow"></div>    |
| `green`    | <div class="w-8 h-8 rounded bg-green-500 shadow"></div>   |
| `emerald`  | <div class="w-8 h-8 rounded bg-emerald-500 shadow"></div> |
| `teal`     | <div class="w-8 h-8 rounded bg-teal-500 shadow"></div>    |
| `cyan`     | <div class="w-8 h-8 rounded bg-cyan-500 shadow"></div>    |
| `sky`      | <div class="w-8 h-8 rounded bg-sky-500 shadow"></div>     |
| `blue`     | <div class="w-8 h-8 rounded bg-blue-500 shadow"></div>    |
| `indigo`   | <div class="w-8 h-8 rounded bg-indigo-500 shadow"></div>  |
| `violet`   | <div class="w-8 h-8 rounded bg-violet-500 shadow"></div>  |
| `purple`   | <div class="w-8 h-8 rounded bg-purple-500 shadow"></div>  |
| `fuchsia`  | <div class="w-8 h-8 rounded bg-fuchsia-500 shadow"></div> |
| `pink`     | <div class="w-8 h-8 rounded bg-pink-500 shadow"></div>    |
| `black`    | <div class="w-8 h-8 rounded bg-black shadow"></div>       |
| `white`    | <div class="w-8 h-8 rounded bg-white shadow"></div>       |

## Using Colors in wind 🌟

The colors in the palette can be used in utility classes or programmatically.

#### Utility Classes Example

```dart
WCard(
  className: 'bg-gray-100 rounded-lg items-center justify-center',
  child: WText(
    'Full width at small screens.',
    className: 'text-black',
  ),
);
```

In this example:
* `bg-gray-100` sets the background color to the 100 shade of gray.
* `text-black` sets the text color to black.

#### Using wColor Helper Function

The `wColor` function dynamically retrieves colors from the palette. If no shade is specified, the 500 shade is used by default.

```dart
return Scaffold(
  backgroundColor: wColor('gray-100'), // Sets the background color to gray-100
  body: Center(
    child: Text(
      'Hello, Wind!',
      style: TextStyle(color: wColor('indigo')), // Defaults to indigo-500
    ),
  ),
);
```

## Customizing the Palette 🛠️

If you need a custom color, you can add it to the palette using the addColor method in WindTheme.

#### Adding a Custom Color

##### 1. Define your `MaterialColor`

```dart
MaterialColor customColor = MaterialColor(0xff123456, {
  50: Color(0xffe3e3e3),
  100: Color(0xffd1d1d1),
  200: Color(0xffb3b3b3),
  300: Color(0xff949494),
  400: Color(0xff767676),
  500: Color(0xff123456), // Primary shade
  600: Color(0xff0e2e42),
  700: Color(0xff091b2c),
  800: Color(0xff050c16),
  900: Color(0xff000000),
});
```

##### 2. Add the color to the palette

```dart
WindTheme.addColor('custom', customColor);
```

##### 3. Use your custom color

```dart
// Utility Class Example
WText('Hello, Wind!', className: 'text-custom-500');
```

```dart
// Using wColor Helper Function
Color myCustomShade = wColor('custom-500');
```

### Working with Colors Programmatically

The WindTheme class provides several helper methods for working with colors dynamically.

```dart
// Retrieve a MaterialColor by name
MaterialColor indigo = WindTheme.getMaterialColor('indigo');
```

```dart
// Retrieve a specific shade of a color. Defaults to 500 if no shade is provided:
Color indigoShade = WindTheme.getColor('indigo', shade: 300);
```

```dart
// Check if a color exists in the palette
bool exists = WindTheme.isValidColor('indigo'); // true
bool notExists = WindTheme.isValidColor('random'); // false
```

```dart
// Retrieve all colors in the palette
Map<String, MaterialColor> allColors = WindTheme.getColors();
```
