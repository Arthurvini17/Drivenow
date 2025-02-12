
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
                azul1: '#00BFFF',
                azul2: '#87CEFA',
                azul3: '#87CEEB',
                fundobranco: '#FFFFFF',
                fundoescuro: '#000000',
                textobranco: 'FFFFFF',
                textocinza: '#808080',
            },
        },
    },
    plugins: [
        require('daisyui')
    ]
}
