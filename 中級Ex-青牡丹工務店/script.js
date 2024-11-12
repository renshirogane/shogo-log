"use strict";

$(document).ready(function() {


  const modalControls = [
    {
      closeButton: document.querySelector('#modal1 .close-button'), // close-buttonを参照
      close: document.querySelector('#modal1 .close'), // closeを参照
      modal: document.getElementById('modal1'),
      mask: document.getElementById('mask1'),
      newsContentBox: document.getElementById('newsContentBox1')
    },
    {
      closeButton: document.querySelector('#modal2 .close-button'),
      close: document.querySelector('#modal2 .close'),
      modal: document.getElementById('modal2'),
      mask: document.getElementById('mask2'),
      newsContentBox: document.getElementById('newsContentBox2')
    },
    {
      closeButton: document.querySelector('#modal3 .close-button'),
      close: document.querySelector('#modal3 .close'),
      modal: document.getElementById('modal3'),
      mask: document.getElementById('mask3'),
      newsContentBox: document.getElementById('newsContentBox3')
    }
  ];
  
  modalControls.forEach(control => {
    // モーダルを表示
    control.newsContentBox.addEventListener('click', function () {
      control.modal.classList.remove('hidden');
      control.mask.classList.remove('hidden');
    });
  
    // close-buttonでモーダルを閉じる
    control.closeButton.addEventListener('click', function (event) {
      event.stopPropagation(); // 他のクリックイベントへの伝播を防止
      control.modal.classList.add('hidden');
      control.mask.classList.add('hidden');
    });
  
    // closeでモーダルを閉じる
    control.close.addEventListener('click', function (event) {
      event.stopPropagation(); // 他のクリックイベントへの伝播を防止
      control.modal.classList.add('hidden');
      control.mask.classList.add('hidden');
    });
  });
  


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
