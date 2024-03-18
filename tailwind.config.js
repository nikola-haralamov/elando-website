import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.php',
        './resources/**/*.js',
        './resources/**/*.ts',
        './resources/**/*.jsx',
        './resources/**/*.tsx',
        './resources/**/*.vue',
        './resources/**/*.svelte',
    ],
    theme: {
        extend: {
            width: {
                '96rem': '96rem',
                '64rem': '64rem',
            },
            height: {
                '96rem': '96rem',
                '64rem': '64rem',
            },
            top: {
                '10rem': '10rem',
                '20rem': '20rem',
                '36rem': '36rem',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [forms],
}
