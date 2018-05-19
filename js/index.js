// Control nav side menu
const closeMenu = () => {
  document.body.style.overflow = "inherit" 
  document.querySelector('nav.main-menu').classList.remove('visible')
}

document.querySelector('a.bars').addEventListener('click', (e)=>{
  document.body.style.overflow = "hidden"
  document.querySelector('nav.main-menu').classList.add('visible')
})

document.querySelector('a.close').addEventListener('click', closeMenu)
