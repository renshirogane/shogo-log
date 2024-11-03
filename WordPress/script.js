"use strict";

$(document).ready(function() {
  const logoImg = $(".header-symbol img");
  const originalSrc = logoImg.attr("src"); // 初期のロゴ画像を保存

  // ハンバーガーメニューがクリックされた時の処理
  $(".hamburger_force_clicked").click(function () {
    // ハンバーガーメニューのクラスをトグル
    $(".hamburger_action_clicked").toggleClass('_emergent');

    // メニューが開いたかどうかを確認
    const isMenuOpen = $(".hamburger_action_clicked").hasClass("_emergent");

    if (isMenuOpen) {
      logoImg.attr("src", "/wp-content/themes/TETOTE/img/シンボル_黒.png");
    } else {
      logoImg.attr("src", originalSrc); // メニューが閉じたとき元のロゴ画像に戻す
    }
  });

  // <html> タグのクラスを確認してSplideの設定を分ける
  if ($("section").hasClass("archive-blog")) {
    // page-archive-blog 用の Splide.js 設定
    const splide = new Splide(".splide", {
      pauseOnHover: false, // カーソルが乗っても停止しない
      pauseOnFocus: false, // フォーカスを当てても停止しない
      interval: 2000, // 自動再生の間隔
      speed: 1000, // スライドの移動速度
      perPage: 1, // デフォルトの表示枚数
    }).mount();
  } else {
    // その他のページ用の Splide.js 設定
    const splide = new Splide(".splide", {
      type: "loop", // スライダーをループさせる
      pauseOnHover: false, // カーソルが乗っても停止しない
      pauseOnFocus: false, // フォーカスを当てても停止しない
      interval: 2000, // 自動再生の間隔
      speed: 1000, // スライドの移動速度
      perPage: 3, // デフォルトの表示枚数
      breakpoints: {
        1040: {
          perPage: 1, // 1040px未満では1枚だけ表示
        },
      },
    }).mount();
  }
});

// 目次（サイドバー）をスクロールで追従させる
const sections = $(".interview__box");
const navLinks = $(".interview__index a");
const $index = $(".interview__index"); // .interview__index 要素を取得
const $inner = $(".interview__inner"); // .interview__inner 要素を取得

// 初期位置を設定
function setIndexPosition() {
  const innerOffset = $inner.offset().top; // .interview__inner の上端の位置
  $index.css({
    position: "absolute",
    top: innerOffset
  });
}

// ページの読み込み時に目次の位置を設定
$(document).ready(function() {
  setIndexPosition();
});

$(window).on("scroll", function () {
  let currentSectionId = "";

  // スクロール位置の取得
  const scrollTop = $(window).scrollTop();
  const indexHeight = $index.outerHeight(); // 目次の高さを取得
  const innerOffset = $inner.offset().top; // .interview__inner の上端の位置
  const innerHeight = $inner.outerHeight(); // .interview__inner の高さを取得

  // 目次の新しい位置を計算
  let newIndexTop = scrollTop;

  // .interview__inner の上端と下端の範囲を制限
  if (newIndexTop < innerOffset) {
    newIndexTop = innerOffset; // 上端を超えない
  } else if (newIndexTop + indexHeight > innerOffset + innerHeight) {
    newIndexTop = innerOffset + innerHeight - indexHeight; // 下端を超えない
  }

  // 目次の位置を更新
  $index.css({
    position: "absolute",
    top: newIndexTop
  });

  sections.each(function () {
    const sectionTop = $(this).offset().top;
    if (scrollTop >= sectionTop - 50) {
      currentSectionId = $(this).attr("id");
    }
  });

  navLinks.each(function () {
    const href = $(this).attr("href").substring(1);
    if (href === currentSectionId) {
      $(this).addClass("active"); // 現在のセクションに対応するリンクを強調表示
    } else {
      $(this).removeClass("active");
    }
  });
});

// 目次リンクをクリックしたときにスクロールさせる
navLinks.click(function (e) {
  e.preventDefault();
  const targetId = $(this).attr("href");
  const targetOffset = $(targetId).offset().top;

  $("html, body").animate({ scrollTop: targetOffset }, 500);
});


// Accordionとハンバーガーメニューのイベントリスナー
$(".accordion_force_clicked").click(function () {
  var faqBox = $(this).closest(".faq__box");
  faqBox.find(".accordion_action_clicked_icon").toggleClass('_emergent');
  faqBox.find(".accordion_action_clicked").slideToggle();
});
