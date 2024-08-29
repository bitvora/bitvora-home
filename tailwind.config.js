/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.{html,js}'],
  theme: {
    container: {
      center: true
    },
    extend: {
      colors: {
        transparent: 'transparent',
        white: '#EFEDF1',
        gold: '#C69A71',
        light: '#9791A1',
        inputBorder: '#4B4653',
        primary: '#5C487F',
        purple: '#9381B1',
        black: '#0D0C0E',
        text: '#312E36'
      }
    }
  },
  plugins: []
};
