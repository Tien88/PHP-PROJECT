let menu = document.querySelector('.header .nav .menu');

document.querySelector('#menu-btn').onclick = () => {
    menu.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.toggle('active');
}