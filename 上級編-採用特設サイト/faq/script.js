"use strict"

// Accordionとハンバーガーメニューのイベントリスナーはそのまま
$(".accordion_force_clicked").click(function () {
  var faqBox = $(this).closest(".faq__box");
  faqBox.find(".accordion_action_clicked_icon").toggleClass('_emergent');
  faqBox.find(".accordion_action_clicked").slideToggle();
});

$(".hamburger_force_clicked").click(function () {
  $(".hamburger_action_clicked").toggleClass('_emergent');
});