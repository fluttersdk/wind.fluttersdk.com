# WText

The `WText` widget in **Wind** extends Flutter’s native `Text` widget, offering additional utility-based styling capabilities. This means all parameters available in the Flutter Text widget can also be used with WText. If a parameter conflicts with a utility class, the explicitly passed parameter will override the utility class value. 

The **WText** widget in the **Wind** plugin is analogous to an HTML `span` tag. It allows styling inline text dynamically using utility classes. Below is an example that demonstrates how to use WText with utility classes:

```dart
// HTML Equivalent: &lt;span class=&quot;text-red-500 font-bold text-lg&quot;&gt;Example&lt;/span&gt;
WText('Example', className: 'text-red-500 font-bold text-lg');
```

## Utility Classes

Below is a list of utility classes supported by the `WText` widget. Each class links to the relevant documentation page, and examples are provided for clarity.

| **Class Type**    | **Example**                         | **Documentation**                                |
|-------------------|-------------------------------------|--------------------------------------------------|
| Responsive Design | `sm:text-xl`, `xs:text-sm` ...      | [Responsive Design](/concepts/responsive-design) |
| Text Transform    | `uppercase` ...                     | [Text Transform](/typography/text-transform)     |
| Text Color        | `text-blue-400` ...                 | [Text Color](/typography/text-color)             |
| Font Weight       | `font-bold` ...                     | [Font Weight](/typography/font-weight)           |
| Font Size         | `text-lg`, `text-[18]` ...          | [Font Size](/typography/font-size)               |
| Font Style        | `italic` ...                        | [Font Style](/typography/font-style)             |
| Line Height       | `leading-6`, `leading-[20]` ...     | [Line Height](/typography/line-height)           |
| Text Decoration   | `underline`, `line-through` ...     | [Text Decoration](/typography/text-decoration)   |
| Letter Spacing    | `tracking-wide`, `tracking-[4]` ... | [Letter Spacing](/typography/letter-spacing)     |
| Text Align        | `text-center`, `text-justify` ...   | [Text Align](/typography/text-align)             |
| Padding           | `p-4`, `pb-[6]` ...                 | [Padding](/spacing/padding)                      |

## Examples

### Utility Classes

<x-preview path="widgets/wtext" size="md" class="min-h-64"></x-preview>

```dart
WText('Utility Styled Text', className: 'text-red-500 font-bold text-lg')
```

### Using Explicit Parameters (Overrides Utility Classes)

<x-preview path="widgets/wtext_parameters" size="md" class="min-h-64"></x-preview>

```dart
WText(
  'Explicit Parameters',
  className: 'text-red-500 font-bold text-lg',
  style: TextStyle(color: Colors.green, fontWeight: FontWeight.w300), // Overrides `text-red-500` and `font-bold`
)
```
