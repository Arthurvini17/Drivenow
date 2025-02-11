
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    theme: {
        extend: {
            colors: {
                marrom: '#230c02',
                cinzacolor: '#eedcc6',
                brancocolor: '#fff5e9',
            },
        },
    },
    plugins: [
        require('daisyui')
    ]
}
