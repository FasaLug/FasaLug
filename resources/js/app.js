import './bootstrap';
import 'iconify-icon';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';


var swiper = new Swiper(".swiper", {
    slidesPerView: 2,
    grabCursor: true,
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
    },
  });
