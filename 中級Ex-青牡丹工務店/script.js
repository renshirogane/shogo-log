"use strict";

$(document).ready(function() {

  // ハンバーガーメニューのクリックイベント
  $(".hamburger_force_clicked").click(function() {
    $(".hamburger_action_clicked").toggleClass('_open');
  });

  // header__inner のスクロール追従
  const headerInner = document.querySelector('.header__inner');
  if (headerInner) {
    const headerOffset = headerInner.offsetTop;
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > headerOffset) {
        headerInner.classList.add('fixed');
      } else {
        headerInner.classList.remove('fixed');
      }
    });
  }

  // アコーディオンのクリックイベント
  $(".header__btn_plus").click(function () {
    var headerBox = $(this).closest(".header__box");
    headerBox.find(".header__detail").slideDown(); // 詳細を表示
    headerBox.find(".header__btn_plus").hide(); // プラスボタンを非表示
    headerBox.find(".header__btn_minus").show(); // マイナスボタンを表示
  });

  $(".header__btn_minus").click(function () {
    var headerBox = $(this).closest(".header__box");
    headerBox.find(".header__detail").slideUp(); // 詳細を非表示
    headerBox.find(".header__btn_plus").show(); // プラスボタンを表示
    headerBox.find(".header__btn_minus").hide(); // マイナスボタンを非表示
  });

});
