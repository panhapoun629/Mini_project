module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: '#008040',
        info: '#0E2B5C',
        fill: '#F9F9F9',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
