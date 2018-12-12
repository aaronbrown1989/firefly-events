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

// facebook embedded widget

$(window).on('resize', function() {
  resizeFbPlugin();
});

$(window).on('load', function() {
  resizeFbPlugin();
});

function resizeFbPlugin() {
  const containerWidth = Number($(".embedded-media").width()).toFixed(0);
  const containerHeight = Number($(".embedded-media").height()).toFixed(0);
  const iframeSrc = 'https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpg%2Fnetmatters&tabs=timeline&width=' + containerWidth +'&height=' + containerHeight + '&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId'
  $('#facebook-feed').attr('src', iframeSrc).attr('width', containerWidth).attr('height', containerHeight);
}
