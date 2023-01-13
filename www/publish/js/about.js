
var swiper = new Swiper(".about-s2-swiper", {
    slidesPerView: 1.1,
    spaceBetween: 10,
    navigation: {
        nextEl: ".s2--swiper-button-next",
        prevEl: ".s2--swiper-button-prev",
      },
      scrollbar: {
        el: ".swiper-scrollbar",
      },

    breakpoints: {
        // when window width is >= 480px
        480: {
          slidesPerView: 1.1,
          spaceBetween: 10
        },
        // when window width is >= 480px
        767: {
          slidesPerView: 2.1,
          spaceBetween: 20
        },
        // when window width is >= 640px
        1024: {
          slidesPerView: 2.5,
          spaceBetween: 20
        },
        1580: {
          slidesPerView: 3,
          spaceBetween: 20
        }
      }
  });