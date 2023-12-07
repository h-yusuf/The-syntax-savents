/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
   "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: "#0C4B6E"
      },
      fontFamily: {
      'poppins': ['Poppins',  'sans-serif'],
      'roboto': ['Roboto'],
      }

    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

