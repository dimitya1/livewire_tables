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
            primary: '#007bff',
            secondary: '#5a6268',
            success: '#218838',
            danger: '#c82333',
            warning: '#e0a800',
            info: '#138496',
        },
    },
  },
  plugins: [],
}
