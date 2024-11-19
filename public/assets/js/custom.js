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


function closeCard() {
    var card = document.querySelector('.ind-chat');
    card.style.display = 'none';
}


function openPopup() {
    var popupContainer = document.getElementById('popupContainer');
    popupContainer.style.display = 'flex';
}

function closePopup() {
    var popupContainer = document.getElementById('popupContainer');
    popupContainer.style.display = 'none';
}





//css riki

// function myFunctioning() {
//     alert("Successfully send massage");
//  }


// $(document).ready(function() {
//     var $navbar = $('.navbar');
//     var $navbarToggler = $('.navbar-toggler');

//     $navbarToggler.on('click', function() {
//       $navbar.toggleClass('navbar-mobile-scroll');
//     });

//     $(window).scroll(function() {
//       var scrollPosition = $(this).scrollTop();
//       var isMobile = $navbarToggler.is(':visible'); // Memeriksa apakah tombol toggler terlihat (mode mobile)
//       var isNavbarMobileScroll = $navbar.hasClass('navbar-mobile-scroll');

//       if (isMobile && isNavbarMobileScroll) {
//         if (scrollPosition > 80) {
//           $navbar.addClass('navbar-scroll');
//         } else {
//           $navbar.removeClass('navbar-scroll');
//         }
//       } else {
//         if (scrollPosition > 80) {
//           $navbar.addClass('navbar-scroll');
//         } else {
//           $navbar.removeClass('navbar-scroll');
//         }
//       }
//     });
//   });


