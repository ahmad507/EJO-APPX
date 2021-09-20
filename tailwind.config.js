module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    colors:{
      "teal_primary" : "#00bfa6",
      "teal_background" : "#36cbb7",
      "teal_light" : "#e0f2f2",
      "teal_header" : "#a7feeb",
      "blue_ocean" : "#1fb4ff",
      "gray_stone" : "#b7b7b7",
    },
    maxHeight: {
      '0': '0',
      '1/4': '25%',
      '1/2': '50%',
      '3/4': '95%',
      'full': '100%',
     },
    fontFamily:{
      SourceSans :["Source Sans Pro, sans-serif"]
    },
    container :{
      center:true,
      padding: "1rem",
      screens:{
        lg: "1920",
        xl: "1920",
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('daisyui')],
}
