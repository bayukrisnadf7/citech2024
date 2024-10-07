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
        primary: '#12B28C', // tambahkan warna primary sesuai kebutuhan Anda
      },
    },
  },
  plugins: [],
}

