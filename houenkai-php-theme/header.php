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
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/parts/index.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <title></title>
 
    <link
      href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Noto+Serif+JP&display=swap"
      rel="stylesheet"
    />
    <script src="<?php echo get_template_directory_uri(); ?>/js/lottie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <?php wp_head(); ?>

  </head>
  <body>
  <header>
      <div class="inner">
        <h1>
          <a href="/houenkai-test">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="芳縁会" />
          </a>
        </h1>
        <nav class="menu_pc">
          <ul>
            <li>
              <a href="/houenkai-test/#about">
                芳縁会について
                <span class="header_bottom">ABOUT US</span>
              </a>
            </li>
            <li>
              <a href="/houenkai-test/treat">
                診療内容
                <span class="header_bottom">MEDICAL SERVICE</span>
              </a>
            </li>
            <li>
              <a href="/houenkai-test/clinic">
                訪問地域
                <span class="header_bottom">HOME CARE</span>
              </a>
            </li>
            <li>
              <a href="/houenkai-test/introduction">
                診療所紹介
                <span class="header_bottom">CLINIC</span>
              </a>
            </li>
            <li>
              <a href="/houenkai-test/recruit">
                採用情報
                <span class="header_bottom">RECRUIT</span>
              </a>
            </li>
            <li>
              <img class="nav_parent" src="<?php echo get_template_directory_uri(); ?>/images/yoyaku01.webp" alt="" />
              <a href="/houenkai-test/contact">
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

        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav class="globalMenuSp">
          <ul>
            <!-- <li>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo_white@2x.webp" alt="芳縁会" />
            </li> -->
            <li><a href="/houenkai-test/#about">芳縁会について</a></li>
            <li><a href="/houenkai-test/treat">診療内容</a></li>
            <li><a href="/houenkai-test/clinic">訪問地域</a></li>
            <li><a href="/houenkai-test/introduction">診療所紹介</a></li>
            <li><a href="/houenkai-test/recruit">採用情報</a></li>
            <li><a href="/houenkai-test/contact">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
