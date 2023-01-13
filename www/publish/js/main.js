
console.log("hi")

var swiper = new Swiper(".main-s1-swiper", {
    navigation: {
        nextEl: ".s1--swiper-button-next",
        prevEl: ".s1--swiper-button-prev",
      },
  });
var swiper = new Swiper(".main-s4-swiper", {
    slidesPerView: 1.1,
    spaceBetween: 10,
    navigation: {
        nextEl: ".s4--swiper-button-next",
        prevEl: ".s4--swiper-button-prev",
      },
    breakpoints: {
        // when window width is >= 480px
        480: {
          slidesPerView: 2.4,
          spaceBetween: 20
        },
        // when window width is >= 480px
        767: {
          slidesPerView: 3,
          spaceBetween: 30
        },
        // when window width is >= 640px
        1024: {
          slidesPerView: 4,
          spaceBetween: 30
        }
      }
  });