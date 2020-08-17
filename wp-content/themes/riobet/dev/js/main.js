'use strict';

const   overlay = document.querySelector('.overlay'),
        popups = document.querySelectorAll('.popup'),
        body = document.querySelector('body'),
        closeModalLink = document.querySelectorAll('.closeModal');

const viewModal = modalSelector => {

    const modal = document.querySelector(modalSelector);

    modal.classList.add('active');
    overlay.style.display = 'block';
    body.classList.add('hidden');


}

const hideModal = () => {
    popups.forEach(popup => popup.classList.remove('active'));
    overlay.style.display = 'none';
    body.classList.remove('hidden');
}

overlay.addEventListener('click', () => {
    hideModal();
})

closeModalLink.forEach(close => {
    close.addEventListener('click', e => {
        e.preventDefault();
        hideModal();
    })
})
 
const  viewModalLink = document.querySelectorAll('.viewModalLink');

viewModalLink.forEach(btn => {
    btn.addEventListener('click', e => {
        e.preventDefault();
        body.classList.add('hidden');
        const thisModal = btn.getAttribute('data-modal');
        viewModal(`.${thisModal}`);
    })
})

//slider

const sliderF = () => {
    let slideIndex = 1,
    offset = 0;

    const   sliderWrapper = document.querySelector('.slider'),
        slides = sliderWrapper.querySelectorAll('.slider__item'),
        sliderInner = sliderWrapper.querySelector('.slider__inner'),
        prev = sliderWrapper.querySelector('.slider__prev'),
        next = sliderWrapper.querySelector('.slider__next'),
        width = window.getComputedStyle(sliderWrapper).width;

    sliderInner.style.width = 100 * slides.length + '%';
    sliderInner.style.display = 'flex';
    sliderInner.style.transition = '0.9s';

    sliderWrapper.style.overflow = 'hidden';

    slides.forEach(slide => slide.style.width = width);



    setInterval(()=>{
    if (offset == getNumber(width) * (slides.length - 1) ){
        offset = 0;
        slideIndex = 1;
    } else {
        offset += getNumber(width);
        slideIndex++;
    }

    sliderInner.style.transform = `translateX(-${offset}px)`;

    }, 3500)

    next.addEventListener('click', e => {
    e.preventDefault();
    if (offset == getNumber(width) * (slides.length - 1) ){
        offset = 0;
        slideIndex = 1;
    } else {
        offset += getNumber(width);
        slideIndex++;
    }

    sliderInner.style.transform = `translateX(-${offset}px)`;
    });

    prev.addEventListener('click', e => {
    e.preventDefault();
    if (offset == 0){
        offset = getNumber(width) * (slides.length - 1);
        slideIndex = slides.length; 
    } else {
        offset -= getNumber(width);
        slideIndex--;
    }

    sliderInner.style.transform = `translateX(-${offset}px)`;
    });
}

sliderF();

function getNumber(str) {
    return +str.replace(/\D/g, '');
}

//window.addEventListener('resize', () => {sliderF();});