// get the position of subnav
var subnav = document.querySelector('#subnav')
var subnavPos = subnav.offsetTop

window.addEventListener('scroll', function (e) {
  var windowTop = document.querySelector('html').scrollTop
  if (windowTop > subnavPos) {
    subnav.classList.add('stick-subnav')
  } else {
    subnav.classList.remove('stick-subnav')
  }
}, { // improve performance
  capture: true,
  passive: true
})
