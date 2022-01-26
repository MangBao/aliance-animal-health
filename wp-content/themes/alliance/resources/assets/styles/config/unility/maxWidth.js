const max = 1000
let p = 0

const maxWidth = {
  none: 'none',
  0: '0',
  xs: '20rem',
  sm: '24rem',
  md: '28rem',
  lg: '32rem',
  xl: '36rem',
  '2xl': '42rem',
  '3xl': '48rem',
  '4xl': '56rem',
  '5xl': '64rem',
  '6xl': '72rem',
  '7xl': '80rem',
  full: '100%',
  min: 'min-content',
  max: 'max-content',
  prose: '65ch'
}

for (let i = 100; i < max; i++) {
  maxWidth[i] = i + 'px'
}

module.exports = {
  maxWidth
}
