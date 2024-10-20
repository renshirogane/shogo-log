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
      logoImg.attr("src", "./img/シンボル_黒.png"); // メニューが開いたとき黒いロゴに変更
    } else {
      logoImg.attr("src", originalSrc); // メニューが閉じたとき元のロゴ画像に戻す
    }
  });

  // <html> タグのクラスを確認してSplideの設定を分ける
  if ($("html").hasClass("page-archive-blog")) {
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
