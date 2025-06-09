# WContainer

The **WContainer** widget is a utility-first container widget in the Wind plugin, designed to simplify the creation of styled containers in Flutter applications. You can apply styles using utility classes, making it highly customizable and efficient.

## Supported Utility Classes

The following utility classes can be used with the `WCard` widget:

| **Class Type**          | **Example**                          | **Documentation**                                                                   |
|-------------------------|--------------------------------------|-------------------------------------------------------------------------------------|
| Responsive Design       | `sm:p-4`, `xs:mt-2`                  | [Responsive Design](https://wind.fluttersdk.com/concepts/responsive-design)         |
| Flex-x                  | `flex-1`, `flex-3`                   | [Flex-x](https://wind.fluttersdk.com/flex/flex-x)                                   |
| Flex Fit Classes        | `flex-grow`, `flex-auto`             | [Flex Fit Classes](https://wind.fluttersdk.com/flex/flex-fit)                       |
| Alignment               | `alignment-top-left`                 | [Alignment](https://wind.fluttersdk.com/flex/alignment)                             |
| Padding                 | `p-4`, `p-[11]`                      | [Padding](https://wind.fluttersdk.com/spacing/padding)                              |
| Margin                  | `m-8`, `m-[4]`                       | [Margin](https://wind.fluttersdk.com/spacing/margin)                                |
| Width                   | `w-10`, `w-[30]`                     | [Width](https://wind.fluttersdk.com/sizing/width)                                   |
| Height                  | `h-10`, `h-[30]`                     | [Height](https://wind.fluttersdk.com/sizing/height)                                 |
| Max-Width & Min-Width   | `max-w-10`, `min-w-10`               | [Max-Width & Min-Width](https://wind.fluttersdk.com/sizing/max-width-min-width)     |
| Max-Height & Min-Height | `max-h-10`, `min-h-10`               | [Max-Height & Min-Height](https://wind.fluttersdk.com/sizing/max-height-min-height) |
| Background Color        | `bg-red-500`, `bg-green`             | [Background Color](https://wind.fluttersdk.com/backgrounds/background-color)        |
| Border Width            | `border-4`, `border-[6]`             | [Border Width](https://wind.fluttersdk.com/borders/border-width)                    |
| Border Color            | `border-red-500`, `border-[#1abc9c]` | [Border Color](https://wind.fluttersdk.com/borders/border-color)                    |
| Border Radius           | `rounded-lg`, `rounded-full`         | [Border Radius](https://wind.fluttersdk.com/borders/border-radius)                  |
| Shadow                  | `shadow-sm`, `shadow-lg`             | [Shadow](https://wind.fluttersdk.com/effects/shadow)                                |
| Display Classes         | `hide`, `show`, `sm:hide`            | [Display](/layout/display)                                                          |

## Example

<x-preview path="widgets/wcontainer" size="md" class="min-h-64"></x-preview>

```dart
WContainer(
  className: 'bg-gray-200 p-4 rounded-lg',
  child: WText('This is a container', className: 'text-lg text-gray-700'),
);
```

The above example HTML equivalent is:

```html
&lt;div class=&quot;bg-gray-200 p-4 rounded-lg&quot;&gt;
  &lt;span class=&quot;text-lg text-gray-700&quot;&gt;This is a container&lt;/span&gt;
&lt;/div&gt;
```
