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

    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

