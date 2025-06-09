# WFlexContainer

The **WFlexContainer** widget in the Wind plugin is a utility-first flexible container. It enables developers to create responsive layouts with ease using predefined classes, similar to the HTML `&lt;div&gt;` with TailwindCSS utility classes.

## Supported Utility Classes

Below are the utility classes supported by `WFlexContainer`, along with documentation links and examples.

| **Class Type**          | **Example**                                    | **Documentation**                                        |
|-------------------------|------------------------------------------------|----------------------------------------------------------|
| Responsive Design       | `sm:flex-col`, `xs:flex-row`                   | [Responsive Design](/concepts/responsive-design)         |
| Flex Direction          | `flex-row`, `flex-col`                         | [Flex Direction](/flex/flex-direction)                   |
| Justify Content         | `justify-center`, `justify-between`            | [Justify Content](/flex/justify-content)                 |
| Align Items             | `items-start`, `items-center`                  | [Align Items](/flex/align-items)                         |
| Axis Sizes              | `axis-max`, `axis-min`                         | [Axis Sizes](/flex/axis-sizes)                           |
| Gap (Spacing)           | `gap-2`, `gap-[4]`                             | [Gap (Spacing)](/flex/gap)                               |
| Flex-x                  | `flex-1`, `flex-2` ...                         | [Flex-x](/flex/flex-x)                                   |
| Flex Fit Classes        | `flex-grow`, `flex-auto`                       | [Flex Fit Classes](/flex/flex-fit)                       |
| Alignment               | `alignment-top-left`, `alignment-center-right` | [Alignment](/flex/alignment)                             |
| Padding                 | `p-4`, `px-[6]`, `py-2`                        | [Padding](/spacing/padding)                              |
| Margin                  | `m-8`, `mx-[4]`, `my-2`                        | [Margin](/spacing/margin)                                |
| Width                   | `w-10`, `w-[30]`                               | [Width](/sizing/width)                                   |
| Height                  | `h-10`, `h-[30]`                               | [Height](/sizing/height)                                 |
| Max-Width & Min-Width   | `max-w-10`, `min-w-[50]`                       | [Max-Width & Min-Width](/sizing/max-width-min-width)     |
| Max-Height & Min-Height | `max-h-10`, `min-h-[50]`                       | [Max-Height & Min-Height](/sizing/max-height-min-height) |
| Background Color        | `bg-red-500`, `bg-[#1abc9c]`                   | [Background Color](/backgrounds/background-color)        |
| Border Width            | `border-4`, `border-[6]`                       | [Border Width](/borders/border-width)                    |
| Border Color            | `border-red-500`, `border-[#1abc9c]`           | [Border Color](/borders/border-color)                    |
| Border Radius           | `rounded-lg`, `rounded-full`                   | [Border Radius](/borders/border-radius)                  |
| Overflow                | `overflow-scroll`                              | [Overflow](/layout/overflow)                             |
| Shadow                  | `shadow-md`, `shadow-lg`                       | [Shadow](/effects/shadow)                                |
| Display Classes         | `hide`, `show`, `sm:hide`                      | [Display](/layout/display)                               |#

# Example

<x-preview path="widgets/wflexcontainer" size="md" class="min-h-64"></x-preview>

```dart
WFlexContainer(
  className: 'flex-col items-center justify-center gap-4 bg-gray-200',
  children: [
    WContainer(
      className: 'w-16 h-16 bg-blue-500',
      child: WText('Child 1', className: 'text-white'),
    ),
    WContainer(
      className: 'w-16 h-16 bg-green-500',
      child: WText('Child 2', className: 'text-white'),
    ),
  ],
);
```

The above example HTML equivalent is:

```html
&lt;div class=&quot;flex flex-col items-center justify-center gap-4 bg-gray-200&quot;&gt;
  &lt;div class=&quot;w-16 h-16 bg-blue-500&quot;&gt;Child 1&lt;/div&gt;
  &lt;div class=&quot;w-16 h-16 bg-green-500&quot;&gt;Child 2&lt;/div&gt;
&lt;/div&gt;
```
