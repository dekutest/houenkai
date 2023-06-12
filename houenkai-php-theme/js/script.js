$(function () {
  $(".hamburger").click(function () {
    $(this).toggleClass("active");

    if ($(this).hasClass("active")) {
      $(".globalMenuSp").addClass("active");
      $("body").addClass("fixed"); // bodyにfixedクラスを追加
    } else {
      $(".globalMenuSp").removeClass("active");
      $("body").removeClass("fixed"); // bodyからfixedクラスを削除
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

$(function () {
  $('a[href*="#"]:not(.no-scroll)').click(function (event) {
    var speed = 500;
    var href = $(this).attr("href");
    var hash = href.indexOf("#");
    var target;
    if (hash != -1) {
      var targetId = href.substr(hash + 1);
      target = $("#" + targetId);
    } else {
      target = $(href == "#" || href == "" ? "html" : href);
    }
    var header = $("header").height();
    var position = target.offset().top - header;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    event.preventDefault();
  });
});

$(function () {
  var webStorage = function () {
    if (sessionStorage.getItem("access")) {
      // 2回目以降のアクセス時の処理
      $("#lottie").addClass("animation_no");
    } else {
      // 初回アクセス時の処理
      $(window).on("load", function () {
        $("#lottie").delay(3000).fadeOut("slow");
      });
      sessionStorage.setItem("access", "true"); // セッションストレージにデータを保存
    }
  };
  webStorage();
});
