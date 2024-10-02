"use strict"

"use strict"
const splide = new Splide(".splide", {
  type: "loop", // スライダーをループさせる
  pauseOnHover: false, // カーソルが乗っても停止しない
  pauseOnFocus: false, // フォーカスを当てても停止しない
  interval: 2000, // 自動再生の間隔
  speed: 1000, // スライドの移動速度
  perPage: 3, // デフォルトの表示枚数
  breakpoints: {
    1080: {
      perPage: 1, // 1015px未満では1枚だけ表示
      focus: 'center', // スライドを中央に配置
    },
  },
}).mount();


// ハンバーガーメニューのイベントリスナーはそのまま
$(".hamburger_force_clicked").click(function () {
  $(".hamburger_action_clicked").toggleClass('_emergent');
});


