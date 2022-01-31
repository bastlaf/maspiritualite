AOS.init({disable: 'mobile'});
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    centeredSlides: true,
    spaceBetween: 10,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });



let search1 = document.querySelector('.boxHeader100');
let h1 = document.querySelector('h1');

document.addEventListener('scroll', ()=> {
    
    
    let positionh1 = h1.getBoundingClientRect().top;
    //let scroll = window.pageYOffset; // position du scroll
    
    //console.log(positionh1);
    //console.log(scroll);
    
    if (positionh1 <= 100) {
        search1.classList.add("navFixed");
    } else {
        search1.classList.remove("navFixed");
    }
});















let buttonHamburger = document.querySelector('#btn');
let opacity = document.querySelector('.opacity');

let menu = document.querySelector('#menu');
menu.style.right = '-20rem';

buttonHamburger.addEventListener('click', () => {
    if (menu.style.right === "-20rem") {
        menu.style.right = "0rem";
        buttonHamburger.classList.add('btnMenuResp--active');
        opacity.classList.add('opacity2');
    } else {
        menu.style.right = "-20rem";
        buttonHamburger.classList.remove('btnMenuResp--active');
        opacity.classList.remove('opacity2');
    }
});

opacity.addEventListener('click', () => {
    menu.style.right = "-20rem";
    buttonHamburger.classList.remove('btnMenuResp--active');
    opacity.classList.remove('opacity2');
});

