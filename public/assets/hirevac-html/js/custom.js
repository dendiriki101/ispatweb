// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// nice select
$(document).ready(function () {
    $('select').niceSelect();
});



$(window).scroll(function() {
    if ($(this).scrollTop() > 80) {
      $('.navbar').addClass('navbar-scroll');
    } else {
      $('.navbar').removeClass('navbar-scroll');
    }
  });

  // Tambahkan event handler untuk mengubah warna navbar saat tombol toggler diklik
  $('.navbar-toggler').on('click', function() {
    $('.navbar').toggleClass('navbar-mobile-scroll');
  });