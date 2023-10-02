<!DOCTYPE html>
<html lang="ja">
  <head>
	  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JY2M63FWNL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JY2M63FWNL');
</script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" id="favicon" />
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
<meta name="theme-color" content="#fff">



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
 
    <?php wp_head(); ?>


  </head>
  <body>
  <header  id="top">
      <div class="inner">
        <h1>
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/logo.png 1x,
            <?php echo get_template_directory_uri(); ?>/images/logo@2x.png 2x" alt="芳縁会" />
          </a>
        </h1>
        <nav class="menu_pc">
          <ul>
            <li>
              <a href="/#about">
                芳縁会について
                <span class="header_bottom">ABOUT US</span>
              </a>
            </li>
            <li>
              <a href="/medical-service">
                診療内容
                <span class="header_bottom">MEDICAL SERVICE</span>
              </a>
            </li>
            <li>
            <a href="/clinic">
                診療所
                <span class="header_bottom">CLINIC</span>
              </a>
            </li>
            <li>
            <a href="/home-care">
              訪問診療
                <span class="header_bottom">HOME CARE</span>
              </a>
            </li>
            <li>
              <a href="/recruit">
                採用情報
                <span class="header_bottom">RECRUIT</span>
              </a>
            </li>
            <li>
              <a href="/application-form">
                診療申し込み用紙
                <span class="header_bottom">APPLICATION FORM</span>
              </a>
            <li>
              <img class="nav_parent" src="<?php echo get_template_directory_uri(); ?>/images/yoyaku01.webp"
              srcset="
            <?php echo get_template_directory_uri(); ?>/images/yoyaku01.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/yoyaku01@2x.webp 2x" alt="ご予約" />
              <a href="tel:022-341-2882">
                <span class="nav_child child01">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/yoyaku02.webp"
                  srcset="<?php echo get_template_directory_uri(); ?>/images/yoyaku02.webp 1x,
                  <?php echo get_template_directory_uri(); ?>/images/yoyaku02@2x.webp 2x" alt="TEL" />
                </span>
              </a>
              <a href="https://lin.ee/P0nzIlj">
                <span class="nav_child child02">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/yoyaku03.webp"
                  srcset="<?php echo get_template_directory_uri(); ?>/images/yoyaku03.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/yoyaku03@2x.webp 2x"
             alt="LINE" />
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
            <li><a href="/#about">芳縁会について</a></li>
            <li><a href="/medical-service">診療内容</a></li>
            <li><a href="/clinic">診療所</a></li>
            <li><a href="/home-care">訪問診療</a></li>
            <li><a href="/recruit">採用情報</a></li>
            <li><a href="/application-form">診療申し込み用紙</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
