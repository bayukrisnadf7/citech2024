/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#12B28C',
        secondary: '#307B74',
        tertiary: '#D1F16A',
      },
      fontFamily: {
        'poppins': "Poppins, sans-serif",
      }
    },
  },
  plugins: [
    // require('@tailwindcss/line-clamp'),
  ],
}

