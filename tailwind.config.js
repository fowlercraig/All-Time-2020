const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    aspectRatio: {
      'none': 0,
      'square': [1, 1],
      '16/9': [16, 9],
      '4/3': [4, 3],
      '3/4': [3, 4],
      '21/9': [21, 9], 
    },
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        'brand': ['Overpass Mono', ...defaultTheme.fontFamily.sans],
        'eyebrow': ['typeka', ...defaultTheme.fontFamily.sans],
      },
      backgroundColor: {
        'night': '#2e3739'
      },
      spacing: {
        'hero': '800px',
        '70vh': '70vh',
        '80vh': '80vh',
        '90vh': '90vh',
      },
      colors: {
        'brand' : {
          default: '#D16603',
          'beige': '#FBF7F3',
        },
      }
    },
    container: {
      center: true,
      padding: {
        default: '1rem',
        sm: '2rem',
      },
    },
  },
  variants: {
    display: ['responsive', 'hover', 'focus', 'dark'],
  },
  plugins: [
    require('@tailwindcss/ui'),
    require('tailwindcss-aspect-ratio'),
  ],
  experimental: {
    uniformColorPalette: true,
    extendedSpacingScale: true,
    extendedFontSizeScale: true,
    darkModeVariant: true
  },
}
