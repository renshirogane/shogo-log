"use strict"
new Splide( '.splide' ).mount();

$(".accordion_force_clicked").click(function () {
  $(".accordion_action_clicked").toggleClass('_emergent');
});