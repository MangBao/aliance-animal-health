const { rem, lineHeight } = require('../utils')
const fontSize = {
  xs: ['0.75rem', { lineHeight: '1' }],
  sm: ['0.875rem', { lineHeight: '1.25' }],
  base: ['16px', { lineHeight: '1.44' }],
  lg: [rem(18), { lineHeight: lineHeight(18, 24) }],
  '2lg': [rem(18), { lineHeight: '1.22' }],
  xl: [rem(22), { lineHeight: '1.36' }],
  '2xl': ['1.5rem', { lineHeight: '2' }],
  '3xl': ['1.875rem', { lineHeight: '2.25' }],
  '4xl': ['2.25rem', { lineHeight: '2.5' }],
  '5xl': ['3rem', { lineHeight: '1' }],
  '6xl': ['3.75rem', { lineHeight: '1' }],
  '7xl': ['4.5rem', { lineHeight: '1' }],
  '8xl': ['6rem', { lineHeight: '1' }],
  '9xl': ['8rem', { lineHeight: '1' }],
  'h1': [rem(30), { lineHeight: '1' }],
  'h2': [rem(26), { lineHeight: '1.08' }],
  'h3': [rem(22), { lineHeight: '1.27' }],
  'h4': [rem(20), { lineHeight: '1.2' }],
  'h5': [rem(18), { lineHeight: lineHeight(18, 30) }],
  'h6': ['1.125rem', { lineHeight: '1.67' }],
  'txtLogo': ['22px', { lineHeight: '2.09' }],
  'h1-md': [rem(52), { lineHeight: '1.15'}],
  'h2-md': [rem(36), { lineHeight: '1.11' }],
  'h3-md': [rem(26), { lineHeight: '1.15' }],
  'h4-md': [rem(26), { lineHeight: '1.46' }],
  'h5-md': [rem(22), { lineHeight: '1.27' }],
  'h6-md': [rem(18), { lineHeight: '1.33' }],
  'h7-md': [rem(16), { lineHeight: '1.25' }],
  'p1': [rem(22), { lineHeight: '1.36' }],
  'p2': [rem(18), { lineHeight: '1.33' }],
  'p3': [rem(16), { lineHeight: '1.63' }],
  'btn': ['1rem', { lineHeight: '1.25' }],
  'paragraph-lg': [rem(26), { lineHeight: '1.46' }]
}
module.exports = {
  fontSize
}
