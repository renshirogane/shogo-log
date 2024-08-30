"use strict"
new Splide( '.splide' ).mount();

$(".accordion_force_clicked").click(function () {
  $(".accordion_action_clicked_icon").toggleClass('_emergent');
  $(".accordion_action_clicked").slideToggle();
});