/*===== MENU SHOW Y HIDDEN =====*/
const navMenu = document.getElementById('nav-menu'),
    toggleMenu = document.getElementById('nav-toggle'),
    closeMenu = document.getElementById('nav-close')

// SHOW MENU
toggleMenu.addEventListener('click', ()=>{
    navMenu.classList.toggle('show')
})

// HIDDEN MENU
closeMenu.addEventListener('click', ()=>{
    navMenu.classList.remove('show')
})

// Easy Scroll Dots js 
 src="../dist/easyScrollDots.js">

// Easy Scroll Dots init
easyScrollDots({
  'fixedNav': false,
  'fixedNavId': '',
  'fixedNavUpward': false,
  'offset': 0
});


