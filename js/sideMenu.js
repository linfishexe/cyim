const sideMenuBtn = document.querySelector('#side_menu_btn');
const sideMenu = document.querySelector('#side_menu');

sideMenuBtn.addEventListener('click', () => {

    sideMenuBtn.classList.toggle("menu_open");
    sideMenu.style.left = sideMenu.style.left == '100vw' ? 0 : '100vw';
    document.querySelector('body').style.overflow = document.querySelector('body').style.overflow != 'hidden' ? 'hidden' : '';
    document.querySelector('html').style.overflow = document.querySelector('html').style.overflow != 'hidden' ? 'hidden' : '';
    
});