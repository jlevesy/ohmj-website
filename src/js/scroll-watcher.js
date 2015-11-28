'use strict';

function scrollClass(element, underClass, threshold) {
  $(window).scroll(function() {
    $(element).toggleClass(underClass, $(window).scrollTop() <= threshold)
  })
}

$(function() {
  scrollClass(
    '.navbar',
    'navbar-transparent',
    450
  );
});
