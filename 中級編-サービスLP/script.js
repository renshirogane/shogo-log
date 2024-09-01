"use strict"
new Splide('.splide', {
  type: 'loop',
  perPage: 2,
  speed: 400,
  spaceBetween: 20,
  pagination: {
      el: '.splide__pagination',
      type: 'bullets'
  },
  navigation: true,
  breakpoints: {
    1015: {
      perPage: 1, // 1015px未満の表示枚数
    },
  },
}).mount();

// Accordionとハンバーガーメニューのイベントリスナーはそのまま
$(".accordion_force_clicked").click(function () {
  $(".accordion_action_clicked_icon").toggleClass('_emergent');
  $(".accordion_action_clicked").slideToggle();
});

$(".hamburger_force_clicked").click(function () {
  $(".hamburger_action_clicked").toggleClass('_emergent');
});