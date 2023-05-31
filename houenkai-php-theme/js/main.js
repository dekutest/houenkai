document.addEventListener("DOMContentLoaded", function () {
  const animation = bodymovin.loadAnimation({
    container: document.getElementById("lottie"), //index.htmlで指定したid
    renderer: "svg", // 描画形式
    loop: true, // true→ループ/false→1回
    autoplay: true, // 自動再生
    path: "/animation/data.json", // jsonのパスを指定
  });
});
