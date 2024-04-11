import './bootstrap';
import 'iconify-icon';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';


var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    slidesPerView: 3,
    grabCursor: true,
    centeredSlides: true,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
