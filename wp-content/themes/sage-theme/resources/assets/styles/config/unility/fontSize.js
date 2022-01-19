const { rem, lineHeight } = require('../utils')
const fontSize = {
  xs: ['0.75rem', { lineHeight: '1' }],
  sm: ['0.875rem', { lineHeight: '1.25' }],
  base: ['16px', { lineHeight: '1.44' }],
  lg: ['1.125rem', { lineHeight: '1.75' }],
  xl: ['1.25rem', { lineHeight: '1.75' }],
  '2xl': ['1.5rem', { lineHeight: '2' }],
  '3xl': ['1.875rem', { lineHeight: '2.25' }],
  '4xl': ['2.25rem', { lineHeight: '2.5' }],
  '5xl': ['3rem', { lineHeight: '1' }],
  '6xl': ['3.75rem', { lineHeight: '1' }],
  '7xl': ['4.5rem', { lineHeight: '1' }],
  '8xl': ['6rem', { lineHeight: '1' }],
  '9xl': ['8rem', { lineHeight: '1' }],
  'h1': ['52px', { lineHeight: '1.15'}],
  'h2': ['36px', { lineHeight: '1.11' }],
  'h3': ['26px', { lineHeight: '1.15' }],
  'h4': ['20px', { lineHeight: '1.46' }],
  'h5': ['22px', { lineHeight: '1.27' }],
  'h6': ['18px', { lineHeight: '1.33' }],
  'txtLogo': ['22px', { lineHeight: '2.09' }],
  'p': ['18px', { lineHeight: '1.33' }],
  'a': ['16px', { lineHeight: '1.25' }],
  'h1-md': ['50px', { lineHeight: '1.15' }],
  'h2-md': ['1.875rem', { lineHeight: '1.08333' }],
  'h3-md': ['1.625rem', { lineHeight: '1.38462' }],
  'h4-md': ['1.75rem', { lineHeight: '1.21429' }],
  'h5-md': ['1.5rem', { lineHeight: '1.33333' }],
  'h6-md': ['1.25rem', { lineHeight: '1.35' }],
  'btn': ['.875em', { lineHeight: '1.2' }]

}
module.exports = {
  fontSize
}
