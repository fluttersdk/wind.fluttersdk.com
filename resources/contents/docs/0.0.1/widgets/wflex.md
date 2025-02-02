# WFlex

The **WFlex** widget in the Wind plugin provides a utility-driven approach to building flexible layouts in Flutter. It simplifies handling alignment, spacing, and direction by leveraging utility classes, similar to how TailwindCSS works in web development.

## Supported Utility Classes

The following utility classes can be used with the `WFlex` widget:

| **Class Type**    | **Example**                       | **Documentation**                               |
|-------------------|-----------------------------------|-------------------------------------------------|
| Responsive Design | `sm:flex-row`, `xs:flex-col`      | [Responsive Design](concepts/responsive-design) |
| Flex Direction    | `flex-row`, `flex-col`            | [Flex Direction](flex/flex-direction)           |
| Justify Content   | `justify-center`, `justify-start` | [Justify Content](flex/justify-content)         |
| Align Items       | `items-center`, `items-start`     | [Align Items](flex/align-items)                 |
| Axis Sizes        | `axis-max`, `axis-min`            | [Axis Sizes](flex/axis-sizes)                   |
| Gap (Spacing)     | `gap-2`, `gap-[4]`                | [Gap (Spacing)](flex/gap)                       |
| Overflow          | `overflow-scroll`                 | [Overflow](layout/overflow)                     |

## Example

<x-preview path="widgets/wflex" size="md" class="min-h-64"></x-preview>

```dart
WFlex(
  className: 'flex-col justify-center items-center gap-4',
  children: [
    WContainer(className: 'w-10 h-10 bg-blue-500'),
    WContainer(className: 'w-10 h-10 bg-green-500'),
  ],
);
```

The above example HTML equivalent is:

```html
&lt;div class=&quot;flex flex-col justify-center items-center gap-4&quot;&gt;
  &lt;div class=&quot;w-10 h-10 bg-blue-500&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;w-10 h-10 bg-green-500&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
```
