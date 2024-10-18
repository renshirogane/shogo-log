"use strict"

// ハンバーガーメニューのイベントリスナーはそのまま
$(".hamburger_force_clicked").click(function () {
  $(".hamburger_action_clicked").toggleClass('_emergent');
});