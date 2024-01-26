/** @type {import('tailwindcss').Config} */
export default {
    content: [
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
            },
            height: {
                '96rem': '96rem',
            },
            top: {
                '36rem': '36rem',
            }
        },
    },
    plugins: [],
}
