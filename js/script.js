// image carousel
$(document).ready(function(){
  $('#image-carousel').slick({
    arrows: false,
    dots: true,
    mobileFirst: true,
    swipeToSlide: true,
    responsive: [
      {
        breakpoint: 600,
        settings: {
          centerMode: true,
          centerPadding: '100px',
          swipeToSlide: true,
        }
      },
      {
        breakpoint: 900,
        settings: {
          arrows: true,
          prevArrow: '<button type="button" class="slick-prev"><ion-icon name="ios-arrow-dropleft-circle"></ion-icon></button>',
          nextArrow: '<button type="button" class="slick-next"><ion-icon name="ios-arrow-dropright-circle"></ion-icon></button>',
          centerMode: true,
          centerPadding: '200px',
          dots: false,
          swipeToSlide: false
        }
      },
      {
        breakpoint: 1200,
        settings: {
          arrows: true,
          prevArrow: '<button type="button" class="slick-prev"><ion-icon name="ios-arrow-dropleft-circle"></ion-icon></button>',
          nextArrow: '<button type="button" class="slick-next"><ion-icon name="ios-arrow-dropright-circle"></ion-icon></button>',
          centerMode: true,
          centerPadding: '300px',
          dots: false,
          swipeToSlide: false
        }
      },
      {
        breakpoint: 1600,
        settings: {
          arrows: true,
          prevArrow: '<button type="button" class="slick-prev"><ion-icon name="ios-arrow-dropleft-circle"></ion-icon></button>',
          nextArrow: '<button type="button" class="slick-next"><ion-icon name="ios-arrow-dropright-circle"></ion-icon></button>',
          centerMode: true,
          centerPadding: '500px',
          dots: false,
          swipeToSlide: false
        }
      }
    ]
  });
});
