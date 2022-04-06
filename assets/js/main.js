
// Slider des répartitions horaires hebdomadaire en 1ère et 2ème année

const imgs = document.getElementsByClassName('item');
const sliderLength = imgs.length;
const next = document.getElementById('slider-btn-right');
const previous = document.getElementById('slider-btn-left');
let counter = 0;

function nextSlide(){
    imgs[counter].classList.remove('active');

    if(counter < sliderLength - 1){
        counter++;
    } else {
        counter = 0;
    }

    imgs[counter].classList.add('active');
}

next.addEventListener('click', nextSlide);

function previousSlide(){
    imgs[counter].classList.remove('active');

    if(counter > 0){
        counter--;
    } else {
        counter = sliderLength - 1;
    }

    imgs[counter].classList.add('active');
}

previous.addEventListener('click', previousSlide);




// Menu de navigation

const navOpenToggle = document.getElementById('navOpen-toggle');
const navCloseToggle = document.getElementById('navClose-toggle');
const navMenu = document.getElementById('nav-wrapper');
const navItems = document.querySelector('.navItem');

function openNav(){
    navMenu.classList.remove('navUnactive');
}

navOpenToggle.addEventListener('click', openNav);

function closeNav(){
    navMenu.classList.add('navUnactive');
}

navCloseToggle.addEventListener('click', closeNav);

navItems.addEventListener('click', () => {
    navMenu.classList.add('navUnactive');
});