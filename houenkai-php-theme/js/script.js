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

//scroll_effect
$(window).scroll(function () {
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
  window.addEventListener("load", scrollAnimationFunc);
  window.addEventListener("scroll", scrollAnimationFunc);
});
