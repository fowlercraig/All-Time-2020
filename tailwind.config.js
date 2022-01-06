const defaultTheme = require('tailwindcss/defaultTheme')

const round = (num) =>
  num
    .toFixed(7)
    .replace(/(\.[0-9]+?)0+$/, '$1')
    .replace(/\.0$/, '')
const rem = (px) => `${round(px / 16)}rem`
const em = (px, base) => `${round(px / base)}em`
const brand = '#D16603';

module.exports = {
  purge: {
    content: [
      './*.php',
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
      },
    },
    aspectRatio: {
      1: '1',
      2: '2',
      3: '3',
      4: '4',
      5: '5',
      6: '6',
      7: '7',
      9: '9',
      16: '16',
      21: '21',
    },
    extend: {
      inset: {
        '1/2': '50%',
      },
      translate: {
        '1/2': '50%',
      },
      colors: {
        'brand' : {
          DEFAULT: '#D16603',
          'beige': '#FBF7F3',
        },
      },
      typography: (theme) => ({
        DEFAULT: {
          css: {
            color: theme('colors.gray.800'),
            a: {
              color: theme('colors.current'),
            },
            h1: {
              color: theme('colors.current'),
            },
            h2: {
              color: theme('colors.current'),
            },
            h3: {
              color: theme('colors.current'),
            }
          },
        },
      }),
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        'brand': ['Overpass Mono', ...defaultTheme.fontFamily.sans],
        'eyebrow': ['typeka', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {
    extend: {
      translate: ['active', 'group-hover'],
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require("@tailwindcss/forms")({
      strategy: 'class',
    }),
  ],
};
