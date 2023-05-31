$(function () {
  $(".hamburger").click(function () {
    $(this).toggleClass("active");

    if ($(this).hasClass("active")) {
      $(".globalMenuSp").addClass("active");
    } else {
      $(".globalMenuSp").removeClass("active");
    }
  });
});
//メニュー内を閉じておく
$(function () {
  $(".globalMenuSp a[href]").click(function () {
    $(".globalMenuSp").removeClass("active");
    $(".hamburger").removeClass("active");
  });
});

// ページの読み込み時に scrollAnimationFunc を実行するように変更
$(document).ready(function () {
  var scrollAnimationElm = document.querySelectorAll(
    ".scroll_up , .scroll_left , .scroll_right"
  );
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 150;
      if (
        window.innerHeight >
        scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin
      ) {
        scrollAnimationElm[i].classList.add("on");
      }
    }
  };

  // ページが読み込まれた時とスクロールした時に scrollAnimationFunc を実行
  scrollAnimationFunc();
  $(window).scroll(scrollAnimationFunc);
});

$(window).on("load", function () {
  $("#lottie").delay(3000).fadeOut("slow"); //ローディング画面を1.5秒（1500ms）待機してからフェードアウト
});
