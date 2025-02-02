import defaultTheme from 'tailwindcss/defaultTheme';

const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './resources/**/*.md',
    ],
    safelist: [
        'max-w-screen-xs',
        'max-w-screen-sm',
        'max-w-screen-md',
        'max-w-screen-lg',
        'max-w-screen-xl',
        'max-w-screen-2xl',
    ],
    theme: {
        extend: {
            colors: {
                'primary': {
                    DEFAULT: '#0986E0',
                    50: '#A5D7FB',
                    100: '#92CFFB',
                    200: '#6ABDF9',
                    300: '#43ACF7',
                    400: '#1C9BF6',
                    500: '#0986E0',
                    600: '#0766AA',
                    700: '#054574',
                    800: '#02253E',
                    900: '#000508',
                    950: '#000000'
                },
                secondary: colors.gray,
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                'screen-xs': '375px',
            }
        },
    }
    ,
    plugins: [
        require("nightwind")
    ],
};
