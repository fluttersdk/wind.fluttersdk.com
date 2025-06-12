# Pixel Factor Customization

The **Pixel Factor** feature in the wind plugin is designed to emulate the behavior of the **rem unit in CSS**, providing a scalable and flexible way to manage sizes across your Flutter application. By adjusting the Pixel Factor, you can uniformly scale all size-related values, making it easier to adapt your UI to different resolutions or design requirements.

## What is Pixel Factor? 📏

Similar to CSS’s rem unit, the Pixel Factor in wind acts as a **base unit multiplier**. All size values in your application (e.g., font sizes, spacing, and padding) are calculated relative to this factor, enabling consistent scaling.

**Default Value:** The Pixel Factor is set to `4.0` by default.

**Customization:** You can change this value using methods provided by the `WindTheme` class.

## How Pixel Factor Works

The Pixel Factor determines the base size of the rem unit, which is used to calculate actual size values in your application. For example, the rem equivalent in wind is derived by multiplying the Pixel Factor by 4. This relationship ensures a predictable scaling system.

### Example Calculation

If the Pixel Factor is `4.0` (default), then:

`1 rem = 4.0 * 4 = 16.0`

### This means:

A `2xl` font size with a multiplier of `1.5` will calculate to:

`1.5 (Font Size) * 4.0 (Pixel Factor) * 4 = 24.0`

## Managing Pixel Factor with WindTheme 🎨

The **WindTheme** class provides methods to get and set the Pixel Factor and calculate derived values like the rem factor.

### Getting the Current Pixel Factor

To retrieve the current Pixel Factor value:

```dart
double currentFactor = WindTheme.getPixelFactor();
print('Current Pixel Factor: $currentFactor'); // Output: 4.0 (default)
```

### Setting a Custom Pixel Factor

To adjust the Pixel Factor, use the **setPixelFactor** method:

```dart
WindTheme.setPixelFactor(6.0);
print(WindTheme.getPixelFactor()); // Output: 6.0
```

This change will scale all size-related values proportionally.
