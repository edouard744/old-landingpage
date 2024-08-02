/** @type {import('tailwindcss').Config} **/
const colors = require('tailwindcss/colors');
export default {
    content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
    theme: {
        colors: {
            ...colors,
            transparent: 'transparent',
            current: 'currentColor',
            white: '#FEFEFE',
            grey: {
                50: '#f9fafb',
                100: '#f3f4f6',
                200: '#e5e7eb',
                300: '#E5E5E5',
                800: '#222934',
                500: '#AEBFCC',
            },

            blue: {
                100: '#FDFEFE',
                200: '#AEC8F4',
                300: '#8197EE',
                400: '#686DEE',
                500: '#4148E6',
                600: '#242BCC',
                700: '#2329B8',
                800: '#282D9A',
                900: '#0E084F',
            },
            // ...
        },
        extend: {},
    },
    plugins: [],
};
