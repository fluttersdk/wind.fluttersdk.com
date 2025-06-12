<?php

return [
    'version' => '0.0.4',
    'fallback_version' => '0.0.3',
    'preview_url' => env('DOCS_PREVIEW_URL', 'http://localhost:9000'),

    'pages' => [
        [
            'title' => 'Getting Started',
            'children' => [
                [
                    'title' => 'Installation',
                    'description' => 'Learn how to install the Flutter wind plugin and set up your project.',
                    'path' => 'getting-started/installation',
                ],
                [
                    'title' => 'Binding the Flutter theme',
                    'description' => 'By binding the Wind theme to your Flutter app, you can easily change your app\'s appearance.',
                    'path' => 'getting-started/binding-the-flutter-theme',
                ],
            ],
        ],
        [
            'title' => 'Core Concepts',
            'children' => [
                [
                    'title' => 'Utility-first',
                    'description' => 'How the utility-first approach works in Wind.',
                    'path' => 'concepts/utility-first',
                ],
                [
                    'title' => 'State-Based Styling',
                    'description' => 'How to use state-based styling in Wind.',
                    'path' => 'concepts/state-based-styling',
                ],
                [
                    'title' => 'Responsive Design',
                    'description' => 'How to create responsive designs with Wind.',
                    'path' => 'concepts/responsive-design',
                ],
                [
                    'title' => 'Dark Mode',
                    'description' => 'How to enable dark mode in your Wind project.',
                    'path' => 'concepts/dark-mode',
                ],
            ],
        ],
        [
            'title' => 'Widgets',
            'children' => [
                [
                    'title' => 'WFlex',
                    'description' => 'How to use the WFlex widget in your Wind project.',
                    'path' => 'widgets/wflex',
                ],
                [
                    'title' => 'WFlexContainer',
                    'description' => 'How to use the WFlexContainer widget in your Wind project.',
                    'path' => 'widgets/wflexcontainer',
                ],
                [
                    'title' => 'WFlexible',
                    'description' => 'How to use the WFlexible widget in your Wind project.',
                    'path' => 'widgets/wflexible',
                ],
                [
                    'title' => 'WText',
                    'description' => 'How to use the WText widget in your Wind project.',
                    'path' => 'widgets/wtext',
                ],
                [
                    'title' => 'WCard',
                    'description' => 'How to use the WCard widget in your Wind project.',
                    'path' => 'widgets/wcard',
                ],
                [
                    'title' => 'WContainer',
                    'description' => 'How to use the WContainer widget in your Wind project.',
                    'path' => 'widgets/wcontainer',
                ],
            ],
        ],
        [
            'title' => 'Customization',
            'children' => [
                [
                    'title' => 'Colors',
                    'description' => 'How to customize the colors in your Wind project.',
                    'path' => 'customization/colors',
                ],
                [
                    'title' => 'Pixel Factor',
                    'description' => 'How to customize the pixel factor in your Wind project.',
                    'path' => 'customization/pixel-factor',
                ],
                [
                    'title' => 'Font-Family',
                    'description' => 'How to customize the font-family in your Wind project.',
                    'path' => 'customization/font-family',
                ],
                [
                    'title' => 'Font-Size',
                    'description' => 'How to customize the font-size in your Wind project.',
                    'path' => 'customization/font-size',
                ],
                [
                    'title' => 'Font-Weight',
                    'description' => 'How to customize the font-weight in your Wind project.',
                    'path' => 'customization/font-weight',
                ],
                [
                    'title' => 'Line-Height',
                    'description' => 'How to customize the line-height in your Wind project.',
                    'path' => 'customization/line-height',
                ],
                [
                    'title' => 'Rounded Corners',
                    'description' => 'How to customize the rounded corners in your Wind project.',
                    'path' => 'customization/rounded-corners',
                ],
                [
                    'title' => 'Shadows',
                    'description' => 'How to customize the shadows in your Wind project.',
                    'path' => 'customization/shadows',
                ],
                [
                    'title' => 'Letter Spacing',
                    'description' => 'How to customize the letter spacing in your Wind project.',
                    'path' => 'customization/letter-spacing',
                ],
            ],
        ],
        [
            'title' => 'Typography',
            'children' => [
                [
                    'title' => 'Font Size',
                    'description' => 'How to customize the font size in your Wind project.',
                    'path' => 'typography/font-size',
                ],
                [
                    'title' => 'Font Weight',
                    'description' => 'How to customize the font weight in your Wind project.',
                    'path' => 'typography/font-weight',
                ],
                [
                    'title' => 'Font Style',
                    'description' => 'How to customize the font style in your Wind project.',
                    'path' => 'typography/font-style',
                ],
                [
                    'title' => 'Text Alignment',
                    'description' => 'How to customize the text alignment in your Wind project.',
                    'path' => 'typography/text-align',
                ],
                [
                    'title' => 'Text Color',
                    'description' => 'How to customize the text color in your Wind project.',
                    'path' => 'typography/text-color',
                ],
                [
                    'title' => 'Text Decoration',
                    'description' => 'How to customize the text decoration in your Wind project.',
                    'path' => 'typography/text-decoration',
                ],
                [
                    'title' => 'Text Transform',
                    'description' => 'How to customize the text transform in your Wind project.',
                    'path' => 'typography/text-transform',
                ],
                [
                    'title' => 'Line Height',
                    'description' => 'How to customize the line height in your Wind project.',
                    'path' => 'typography/line-height',
                ],
                [
                    'title' => 'Letter Spacing',
                    'description' => 'How to customize the letter spacing in your Wind project.',
                    'path' => 'typography/letter-spacing',
                ],
            ],
        ],
        [
            'title' => 'Backgrounds',
            'children' => [
                [
                    'title' => 'Background Color',
                    'description' => 'How to customize the background color in your Wind project.',
                    'path' => 'backgrounds/background-color',
                ],
            ],
        ],
        [
            'title' => 'Sizing',
            'children' => [
                [
                    'title' => 'Width',
                    'description' => 'How to customize the width in your Wind project.',
                    'path' => 'sizing/width',
                ],
                [
                    'title' => 'Max-Width & Min-Width',
                    'description' => 'How to customize the max-width and min-width in your Wind project.',
                    'path' => 'sizing/max-width-min-width',
                ],
                [
                    'title' => 'Height',
                    'description' => 'How to customize the height in your Wind project.',
                    'path' => 'sizing/height',
                ],
                [
                    'title' => 'Max-Height & Min-Height',
                    'description' => 'How to customize the max-height and min-height in your Wind project.',
                    'path' => 'sizing/max-height-min-height',
                ],
            ],
        ],
        [
            'title' => 'Spacing',
            'children' => [
                [
                    'title' => 'Padding',
                    'description' => 'How to customize the padding in your Wind project.',
                    'path' => 'spacing/padding',
                ],
                [
                    'title' => 'Margin',
                    'description' => 'How to customize the margin in your Wind project.',
                    'path' => 'spacing/margin',
                ],
            ],
        ],
        [
            'title' => 'Layout',
            'children' => [
                [
                    'title' => 'Display',
                    'description' => 'How to control visibility using display classes like hide and show.',
                    'path' => 'layout/display',
                ],
                [
                    'title' => 'Overflow',
                    'description' => 'How to customize the overflow in your Wind project.',
                    'path' => 'layout/overflow',
                ],
            ],
        ],
        [
            'title' => 'Effects',
            'children' => [
                [
                    'title' => 'Shadow',
                    'description' => 'How to customize the shadow in your Wind project.',
                    'path' => 'effects/shadow',
                ],
            ],
        ],
        [
            'title' => 'Borders',
            'children' => [
                [
                    'title' => 'Border Width',
                    'description' => 'How to customize the border width in your Wind project.',
                    'path' => 'borders/border-width',
                ],
                [
                    'title' => 'Border Color',
                    'description' => 'How to customize the border color in your Wind project.',
                    'path' => 'borders/border-color',
                ],
                [
                    'title' => 'Border Radius',
                    'description' => 'How to customize the border radius in your Wind project.',
                    'path' => 'borders/border-radius',
                ],
            ],
        ],
        [
            'title' => 'Flex',
            'children' => [
                [
                    'title' => 'Flex Direction',
                    'description' => 'How to customize the flex direction in your Wind project.',
                    'path' => 'flex/flex-direction',
                ],
                [
                    'title' => 'Justify Content',
                    'description' => 'How to customize the justify content in your Wind project.',
                    'path' => 'flex/justify-content',
                ],
                [
                    'title' => 'Align Items',
                    'description' => 'How to customize the align items in your Wind project.',
                    'path' => 'flex/align-items',
                ],
                [
                    'title' => 'Gap',
                    'description' => 'How to customize the gap in your Wind project.',
                    'path' => 'flex/gap',
                ],
                [
                    'title' => 'Axis Sizes',
                    'description' => 'How to customize the axis sizes in your Wind project.',
                    'path' => 'flex/axis-sizes',
                ],
                [
                    'title' => 'Flex Fit',
                    'description' => 'How to customize the flex fit in your Wind project.',
                    'path' => 'flex/flex-fit',
                ],
                [
                    'title' => 'Flex-x',
                    'description' => 'How to customize the flex-x in your Wind project.',
                    'path' => 'flex/flex-x',
                ],
                [
                    'title' => 'Alignments',
                    'description' => 'How to customize the alignments in your Wind project.',
                    'path' => 'flex/alignment',
                ],
            ],
        ],
        [
            'title' => 'Examples',
            'children' => [
                [
                    'title' => 'Product Grid',
                    'description' => 'This example demonstrates how to create a product grid layout using Wind.',
                    'path' => 'example/product-grid',
                ],
            ],
        ],
    ],
];
