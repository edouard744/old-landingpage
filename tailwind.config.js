/** @type {import('tailwindcss').Config} **/
export default {
    content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: '#FDFEFE',
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
