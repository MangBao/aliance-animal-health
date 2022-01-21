const max = 101
let p
const inset = {
  auto: 'auto',
  'full': '100%',
  '1/2': '50%',
  '1.5': '3px',
  '-235': '-470px',
  '-327': '-654px',
  '-100-per': '-100%'
}

for (let i = 0; i < max; i++) {
  inset[i] = i * 2 + 'px'
  p = i + 'p'
  inset[p] = i + '%'
}
for (let i = -(max); i < 0; i++) {
  inset[i] = i * 2 + 'px'
  p = i + 'p'
  inset[p] = i + '%'
}

module.exports = {
  inset
}
