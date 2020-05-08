// get the position of subnav
var subnav = document.querySelector('#subnav')
var subnavPos = subnav.offsetTop
// get the windowWidth to use as a check for mobile screens
var windowWidth = window.innerWidth

if (windowWidth > 575) { // if we are not a mobile screen add the listener
  window.addEventListener('scroll', function (e) {
    var windowTop = document.querySelector('html').scrollTop
    if (windowTop > subnavPos - 60) {
      subnav.classList.add('stick-subnav')
      document.querySelector('body').classList.add('headBumper')
    } else {
      subnav.classList.remove('stick-subnav')
    }
  }, { // improve performance
    capture: true,
    passive: true
  })
}
