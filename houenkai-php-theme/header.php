<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/2x/favicon.ico" id="favicon" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/apple-touch-icon-180x180.webp"
    />

    <head>
<title><?php wp_title('｜', true, 'right'); ?></title>
<meta name="robots" content="index, follow">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<meta name="format-detection" content="telephone=no">

<!--ファビコンやブックマークアイコンの指定-->
<link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" />
<meta name="thumbnail" content="<?php echo get_template_directory_uri(); ?>/metathum.jpg" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">


    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Noto+Serif+JP&display=swap"
      rel="stylesheet"
    />
    <script>
      (function (d) {
        var config = {
            kitId: "stt1muk",
            scriptTimeout: 3000,
            async: true,
          },
          h = d.documentElement,
          t = setTimeout(function () {
            h.className =
              h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
          }, config.scriptTimeout),
          tk = d.createElement("script"),
          f = false,
          s = d.getElementsByTagName("script")[0],
          a;
        h.className += " wf-loading";
        tk.src = "https://use.typekit.net/" + config.kitId + ".js";
        tk.async = true;
        tk.onload = tk.onreadystatechange = function () {
          a = this.readyState;
          if (f || (a && a != "complete" && a != "loaded")) return;
          f = true;
          clearTimeout(t);
          try {
            Typekit.load(config);
          } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s);
      })(document);
    </script>
    <?php wp_head(); ?>

  </head>

  <body>
    <header>
      <div class="inner">
        <h1>
          <a href="top.html">
           <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="芳縁会" />
          </a>
        </h1>
        <nav>
          <ul>
            <li class="pc">
              <a href="#" class="header_up">
                <span class="header_up_text">芳縁会について</span>
                <span class="header_bottom">ABOUT US</span>
              </a>
            </li>
            <li class="pc">
              <a href="#" class="header_up">
                <span class="header_up_text">診療内容</span>
                <span class="header_bottom">MEDICAL SERVICE</span>
              </a>
            </li>
            <li class="pc">
              <a href="#" class="header_up">
                <span class="header_up_text">訪問地域</span>
                <span class="header_bottom">HOME CARE</span>
              </a>
            </li>
            <li class="pc">
              <a href="#" class="header_up">
                <span class="header_up_text"> 療所紹介</span>
                <span class="header_bottom">CLINIC</span>
              </a>
            </li>
            <li class="pc">
              <a href="#" class="header_up">
                <span class="header_up_text">採用情報</span>
                <span class="header_bottom">RECRUIT</span>
              </a>
            </li>
            <li>
              <img class="nav_parent" src="<?php echo get_template_directory_uri(); ?>/images/yoyaku01.webp" alt="" />
              <a href="#">
                <span class="nav_child child01">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/yoyaku02.webp" alt="" />
                </span>
              </a>
              <a href="#">
                <span class="nav_child child02">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/yoyaku03.webp" alt="" />
                </span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
