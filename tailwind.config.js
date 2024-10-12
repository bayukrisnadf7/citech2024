/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#12B28C', 
        secondary: '#307B74',
        tertiary: '#D1F16A',
      },
    },
  },
  plugins: [
    // require('@tailwindcss/line-clamp'),
    require('flowbite/plugin')
  ],
}

