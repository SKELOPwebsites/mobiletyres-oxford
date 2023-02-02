const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'site': {
                    100: '#EE7272',
                    200: '#EF5A5A',
                    300: '#ee4848',
                    400: '#EE3939',
                }
            },
            fontFamily: {
                // 'poppins': ['Poppins', ...defaultTheme.fontFamily.sans],
                // 'open-sans': ['OpenSans', ...defaultTheme.fontFamily.sans],
                'montserrat': ['Montserrat', ...defaultTheme.fontFamily.sans]
            },
        },
    },
    plugins: [],
}
