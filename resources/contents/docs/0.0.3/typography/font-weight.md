# Font-Weight

The **Font Weight** utility in the Wind plugin allows you to control the weight (thickness) of the text. You can choose from a set of predefined weights or [customize them](/customization/font-weight) to fit your design needs.

## Syntax

You can apply font weights using the `font-` prefix, followed by the weight name. For example:

- `font-bold`
- `font-thin`
- `font-black`


### Predefined Font Weights

The following table lists all predefined font weights available by default:

| **Class**         | **Weight** | **Flutter FontWeight** |
|-------------------|------------|------------------------|
| `font-thin`       | 100        | `FontWeight.w100`      |
| `font-extralight` | 200        | `FontWeight.w200`      |
| `font-light`      | 300        | `FontWeight.w300`      |
| `font-normal`     | 400        | `FontWeight.w400`      |
| `font-medium`     | 500        | `FontWeight.w500`      |
| `font-semibold`   | 600        | `FontWeight.w600`      |
| `font-bold`       | 700        | `FontWeight.w700`      |
| `font-extrabold`  | 800        | `FontWeight.w800`      |
| `font-black`      | 900        | `FontWeight.w900`      |

## Examples

### Applying Font Weights

<x-preview path="typography/font_weight" size="md" class="min-h-64"></x-preview>

```dart
WText('Bold Text', className: 'font-bold');
WText('Thin Text', className: 'font-thin');
WText('Black Text', className: 'font-black');
```

In the above example:
- `font-bold` applies a weight of 700.
- `font-thin` applies a weight of 100.
- `font-black` applies a weight of 900.

## Customizing Font Weight

If the default font weights do not fit your design, you can customize them in the Customizing Font Weight section. This allows you to define your own classes and weights. For example:

```dart
WindTheme.setFontWeight('extraheavy', FontWeight.w950);
```

Now, you can use the `font-extraheavy` class in your WText components.

Learn more about customization: [Customizing Font Weight](/customization/font-weight).

