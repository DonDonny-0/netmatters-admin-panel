import './bootstrap';

let navbar = document.querySelector('.thenav');
let navbarToggle = document.querySelector('.navbar');

$(document).ready(function() {

  $(navbarToggle).click(function () {
    $(navbar).slideToggle();
    $(navbarToggle).removeClass('top-15');
    $(navbarToggle).addClass('top-0');

  })
})

// navbarToggle.addEventListener('click', () => {
//   if (navbar.classList.contains('collapse')) {
//     navbar.classList.remove('collapse');
//     navbar.classList.add('visible');
//   }
//   else {
//     navbar.classList.remove('visible');
//     navbar.classList.add('collapse');
//   }
// })
