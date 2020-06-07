const burger = document.querySelector('.burger');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
});
const navSlide = () => {
    const slideBurger = document.querySelector('.burger');
    const slidePages = document.querySelector('.nav-links');

    slideBurger.addEventListener('click', () => {
        slidePages.classList.toggle('nav-active');
    });
}
navSlide();