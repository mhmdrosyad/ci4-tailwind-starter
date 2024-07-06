/** @type {import('tailwindcss').Config} */
const withMT = require("@material-tailwind/html/utils/withMT");
module.exports = withMT({
  content: [
    './app/Views/**/*.php',
    './public/**/*.html'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
})

