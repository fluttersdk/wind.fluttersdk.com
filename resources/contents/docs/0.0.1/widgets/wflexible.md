# WFlexible

The **WFlexible** widget in the Wind plugin is a utility-first wrapper for Flutter’s Flexible widget. It allows for dynamic and responsive layout management by leveraging utility classes.

## Supported Utility Classes

The following utility classes can be used with the `WFlexible` widget:

| **Class Type**    | **Example**              | **Documentation**                                |
|-------------------|--------------------------|--------------------------------------------------|
| Responsive Design | `sm:`, `xs:`, `md:` ...  | [Responsive Design](/concepts/responsive-design) |
| Flex-x            | `flex-1`, `flex-2` ...   | [Flex-x](/flex/flex-x)                           |
| Flex Fit Classes  | `flex-grow`, `flex-auto` | [Flex Fit Classes](/flex/flex-fit)               |

## Example

<x-preview path="widgets/wflexible" size="md" class="min-h-64"></x-preview>

```dart
WFlexible(
  className: 'flex-1 flex-grow',
  child: WText('Flexible Child', className: 'text-blue-500 text-center'),
);
```

The above example HTML equivalent is:

```html
&lt;div class=&quot;flex-1 flex-grow&quot;&gt;
  Child
&lt;/div&gt;
```
