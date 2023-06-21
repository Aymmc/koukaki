console.log('ok');
const slidebas = document.querySelector('.verslebas')
window.addEventListener('scroll',() =>{
const {scrollTop, clientHeight} = 
document.documentElement; 
const topElementToTopViewport = 
slidebas.getBoundingClientRect().top;

if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.8){
    slidebas.classList.add('animationbas')
    slidebas.classList.add('fadeInOpacity')
}
})

const slidebass = document.querySelector('.verslebass')
window.addEventListener('scroll',() =>{
const {scrollTop, clientHeight} = 
document.documentElement; 
const topElementToTopViewport = 
slidebas.getBoundingClientRect().top;

if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.8){
    slidebass.classList.add('animationbas')
}
})
const slidebasss = document.querySelector('.verslebasss')
window.addEventListener('scroll',() =>{
const {scrollTop, clientHeight} = 
document.documentElement; 
const topElementToTopViewport = 
slidebas.getBoundingClientRect().top;

if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.8){
    slidebasss.classList.add('animationbas')
}
})

// Sideswiper 


var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 70,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
console.log(Swiper)
// Paralaxe image 


// const Paralaxenuage1 = document.querySelector('.nuage1')
// window.addEventListener('scroll', () =>{

//   const{scrollTop , clientHeight} = 
//   document.documentElement; 
//   const paralaxviewport1 = Paralaxenuage1.getBoundingClientRect().top;
//   if(scrollTop > (scrollTop + paralaxviewport1).toFixed() - clientHeight ){
//     Paralaxenuage1.classList.add('paralaxenuage')
//   }

// })
// const Paralaxenuage2 = document.querySelector('.nuage2')
// window.addEventListener('scroll', () =>{

//   const{scrollTop , clientHeight} = 
//   document.documentElement; 
//   const paralaxviewport2 = Paralaxenuage2.getBoundingClientRect().top;
//   if(scrollTop > (scrollTop + paralaxviewport2).toFixed() - clientHeight ){
//     Paralaxenuage2.classList.add('paralaxenuage')
//   }

// })

// Paralaxe titre 
// const Paralaxetitre = document.querySelector('.nuage1')
// window.addEventListener('scroll', () =>{

//   const{scrollTop , clientHeight} = 
//   document.documentElement; 
//   const paralaxtitre1 = Paralaxetitre.getBoundingClientRect().top;
//   if(scrollTop > (scrollTop + paralaxtitre1).toFixed() ){
//     Paralaxetitre.classList.add('paralaxenuage')
//   }
// })
// Menu 

const button = document.querySelector('.buttonmenu');
const nav = document.querySelector('.navnewmenu');
const backdrop = document.querySelector('.backdrop');
const remove = document.querySelector('.site-main');
const remove2 = document.querySelector('footer');
const remove3 = document.querySelector('.phpfooter');
button.addEventListener('click', () => {
  nav.classList.toggle('open');
  remove.classList.toggle('remove');
  remove2.classList.toggle('remove');
  remove3.classList.toggle('remove');

});

backdrop.addEventListener('click', () => {
  nav.classList.remove('open');
  remove.classList.remove('remove');
  remove2.classList.remove('remove');
  remove3.classList.remove('remove');
});

// button burger 
button.addEventListener('click', ()=> {
  button.classList.toggle('activee');

});


// Paralaxe nuage
const nuage1= document.querySelector('.nuage1')
const nuage2= document.querySelector('.nuage2')
window.addEventListener("scroll", () => {
  // Récupérer la valeur de défilement en pixels
  let scrollValue = window.scrollY;

  // Calculer la valeur de déplacement horizontal en fonction du défilement
  let translateValue = scrollValue * 0.25; // Ajustez ce facteur selon votre préférence

  // Appliquer la translation aux éléments d'image
  nuage1.style.transform = `translateX(-${translateValue}px)`;
  nuage2.style.transform = `translateX(-${translateValue}px)`;
});


// Animation menu 
const animemenu = document.querySelectorAll('.animation');

button.addEventListener('click', () => {
  animemenu.forEach(function(element) {
    element.classList.toggle('animationbas');
  });
});