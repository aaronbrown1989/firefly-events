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

  $('#security-carousel').slick({
    arrows: false,
    dots: true,
    mobileFirst: true,
    swipeToSlide: true,
    autoplay: true,
    autoplaySpeed: 4000
  });

  $('#catering-carousel').slick({
    arrows: false,
    dots: true,
    mobileFirst: true,
    swipeToSlide: true,
    autoplay: true,
    autoplaySpeed: 4000
  });

  $('#hosting-carousel').slick({
    arrows: false,
    dots: true,
    mobileFirst: true,
    swipeToSlide: true,
    autoplay: true,
    autoplaySpeed: 4000
  });

  $('.event-carousel').slick({
    adaptiveHeight: false,
    autoplay: true,
    arrows: false,
    dots: true,
    autoplaySpeed:7000,
    mobileFirst:true,
  });
});

// mobile menu
var snapper = new Snap({
  element: document.getElementById('page-content')
});

snapper.settings({
  maxPosition: 275,
  minPosition: -275,
  touchToDrag: false,
  tapToClose: false
});

$('#burger').click(function() {
  if($('body').hasClass("snapjs-right")) {
    snapper.close();
  } else {
    snapper.open('right');
  }
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

// calendar module

let today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();
let selectYear = document.getElementById("year");
let selectMonth = document.getElementById("month");

let months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

let monthAndYear = document.getElementById("monthAndYear");
showCalendar(currentMonth, currentYear);


function next() {
    currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
    currentMonth = (currentMonth + 1) % 12;
    showCalendar(currentMonth, currentYear);
}

function previous() {
    currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
    currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
    showCalendar(currentMonth, currentYear);
}

function jump() {
    currentYear = parseInt(selectYear.value);
    currentMonth = parseInt(selectMonth.value);
    showCalendar(currentMonth, currentYear);
}

function showCalendar(month, year) {

  let firstDay = (new Date(year, month)).getDay();
  let daysInMonth = 32 - new Date(year, month, 32).getDate();

  let tbl = document.getElementById("calendar-body"); // body of the calendar

  // clearing all previous cells
  tbl.innerHTML = "";

  // filing data about month and in the page via DOM.
  monthAndYear.innerHTML = months[month] + " " + year;
  selectYear.value = year;
  selectMonth.value = month;

  // creating all cells
  let date = 1;
  for (let i = 0; i < 6; i++) {
      // creates a table row
      let row = document.createElement("tr");

      //creating individual cells, filing them up with data.
      for (let j = 0; j < 7; j++) {
          if (i === 0 && j < firstDay) {
              let cell = document.createElement("td");
              let cellText = document.createTextNode("");
              cell.appendChild(cellText);
              row.appendChild(cell);
          }  else if (date > daysInMonth) {
              break;
          } else {
              let cell = document.createElement("td");
              let cellText = document.createTextNode(date);
              if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                  cell.classList.add("bg-info");
              } // color today's date
              cell.appendChild(cellText);
              row.appendChild(cell);
              date++;
          }
      }
      tbl.appendChild(row); // appending each row into calendar body.
  }
}
