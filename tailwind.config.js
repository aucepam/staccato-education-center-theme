/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    './*.{html,php,js}',
    './template-parts/*.{html,php,js}'
  ],
  safelist: [{
    pattern: /(btn|input|tab|pagination|pswp|icon|duotone-icon|title-icon|shape|card|carousel|gallery|disclosure|video)-([a-zA-Z]+)/
  }],
  theme: {
    extend: {
      fontFamily: {
        'serif': ['Unbounded', 'Inter', '-apple-system', 'system-ui', 'Segoe UI', 'Roboto', ...defaultTheme.fontFamily.serif],
        'sans': ['Manrope', 'Inter', '-apple-system', 'system-ui', 'Segoe UI', 'Roboto', ...defaultTheme.fontFamily.sans]
      },
      backgroundImage: {
        'outline': 'url("../assets/shapes/outline.svg")',
        'line': 'url("../assets/shapes/line.svg")',
        'divider': 'url("../assets/shapes/divider.svg")',
        'divider-wavy': 'url("../assets/shapes/divider-wavy.svg")',
        'underline': 'url("../assets/shapes/underline.svg")',
        'underline-wavy': 'url("../assets/shapes/underline-wavy.svg")',
        'list-picture': 'url("../assets/icons/list-picture.svg")'
      },
      animation: {
        slideIn: 'slideIn .8s cubic-bezier(0.22,1,0.36,1)'
      },
      keyframes: {
        slideIn: {
          '0%': { transform: 'translateY(12px)', opacity: 0 },
          '100%': { transform: 'translateY(0px)', opacity: 1 }
        }
      }
    }
  },
  plugins: []
}

