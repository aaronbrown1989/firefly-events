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
          centerPadding: '100px'
        }
      },
    ]
  });
});
