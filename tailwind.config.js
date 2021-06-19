module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily :{
            'sans': ['"Open Sans"']
        },
        colors: {
            black: '#222222'
        },
        lineHeight: {
            'loose': '40px'
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],

  corePlugins: {
    preflight: false,
   }
}
