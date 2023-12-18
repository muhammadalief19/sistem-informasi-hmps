/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            keyframes: {
                float: {
                    "0%, 100%": { transform: "translate(0px, 50px)" },
                    "50%": { transform: "translate(0px, 0px)" },
                },
            },
            animation: {
                float: "float 4s ease-in-out infinite",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
    darkMode: "class",
};
