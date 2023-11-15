
<?php
/**
 * Template Name: blog_all_family
 */
?>
	
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
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/parts/index.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/modaal/modaal.css" />




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
      <div class="inner  inner_family">
        <h1 class="header_img2">
          <a href="/houen-family-clinic">
            <img src="<?php echo get_template_directory_uri(); ?>/images/fa_16.png"
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/fa_16.png 1x,
            <?php echo get_template_directory_uri(); ?>/images/fa_16@2x.png 2x" alt="芳縁会" />
          </a>
        </h1>
        <nav class="menu_pc fa_header">
          <ul>
          <li>
            <a href="https://houen-zaitaku.jp/houen-family-clinic/#news">
                お知らせ
                <span class="header_bottom">NEWS</span>
              </a>
            </li>
            <li>
              <a href="https://houen-zaitaku.jp/houen-family-clinic/#information">
                診療案内
                <span class="header_bottom">INFORMATION</span>
              </a>
            </li>
            <li>
              <a href="https://houen-zaitaku.jp/houen-family-clinic/#director">
                院長紹介
                <span class="header_bottom">CLINIC DIRECTOR</span>
              </a>
            </li>
            <li>
            <a href="https://houen-zaitaku.jp/houen-family-clinic/#feature">
              診療の特徴
                <span class="header_bottom">MEDICAL FEATURE</span>
              </a>
            </li>
            <li>
              <a href="https://houen-zaitaku.jp/houen-family-clinic/#clinic">
                アクセス
                <span class="header_bottom">ACCESS</span>
              </a>
              <li>
              <a href="tel:022-375-8023">
              <img class="nav_parent nav_parent02" src="<?php echo get_template_directory_uri(); ?>/images/fa_15.png"
              srcset="
            <?php echo get_template_directory_uri(); ?>/images/fa_15.png 1x,
            <?php echo get_template_directory_uri(); ?>/images/fa_15@2x.png 2x" alt="ご予約" />
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
            <li><a href="https://houen-zaitaku.jp/houen-family-clinic/#news">お知らせ</a></li>
            <li><a href="https://houen-zaitaku.jp/houen-family-clinic/#information"> 訪問診療 </a></li>
                <li><a href="https://houen-zaitaku.jp/houen-family-clinic/#director"> 院長紹介 </a></li>
                <li><a href="https://houen-zaitaku.jp/houen-family-clinic/#feature">診療の特徴</a></li>
                <li><a href="https://houen-zaitaku.jp/houen-family-clinic/#clinic">アクセス </a></li>
          </ul>
        </nav>
      </div>
    </header>

<main>

	<?php


if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
 <div class="container container_dis" id=container>
        <div class="news_contents blog">
            <div class="news_content">
                <h2 class="blog_title"><?php the_title(); ?></h2>
    <?php the_content() ?>

    <ul>
<?php
$args = array(
  'posts_per_page' => 40, // 表示件数の指定
  'category_name'  => 'family' // カテゴリースラッグを指定
);
  $posts = get_posts( $args );
  foreach ( $posts as $post ): // ループの開始
  setup_postdata( $post ); // 記事データの取得
?>	  
  <li class="news-text blog_all">
	  <div class="news-blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div> 
      <div class="news-day"><?php the_date('Y.m.d'); ?></div>

	</li>
	  <?php
  endforeach; // ループの終了
  wp_reset_postdata(); // 直前のクエリを復元する
?>
</ul>
			</div>
	 </div>
</div>





    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;?>
</main>


<footer>
      <div class="footer_inner">
        <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/images/footer05.webp" alt="TOP" class="footer_upper" /></a>

        <div class="footer_mid">
          <div class="footer_left footer_left_hachi">
            <a href="/houen-family-clinic"><img src="<?php echo get_template_directory_uri(); ?>/images/fa_17.png"
            srcset="<?php echo get_template_directory_uri(); ?>/images/fa_17.png 1x,<?php echo get_template_directory_uri(); ?>/images/fa_17@2x.png 2x" alt="ロゴ" class="footer_logo " /></a>
            <p>
              〒980-3108<br>宮城県仙台市泉区松陵４丁目２-５
            </p>
            <p>
            <a href="tel:022-375-8023">
              Tel.<span class="footer_lg"> 022-375-8023</span
              ><br class="br_none1" /></a>
              Fax. 022-375-8168
            </p>
          </div>
          <div class="footer_center footer_center_family">
            <nav>
              <ul>
              <li>
                <a href="https://houen-zaitaku.jp/houen-family-clinic/#news">お知らせ</a>
                </li>
                <li>
                  <a href="https://houen-zaitaku.jp/houen-family-clinic/#information"> 診療案内 </a>
                </li>
                <li>
                  <a href="https://houen-zaitaku.jp/houen-family-clinic/#director"> 院長紹介 </a>
                </li>
                <li>
                <a href="https://houen-zaitaku.jp/houen-family-clinic/#feature">診療の特徴</a>
                </li>
                <li>
                <a href="https://houen-zaitaku.jp/houen-family-clinic/#clinic"> アクセス </a>
                </li>
              
                <li class="contact_footer">
                  <a href="tel:022-375-8023">
                    <span class="nav_child  nav_child_f nav_child_family">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/fa_15.png"
                      srcset="<?php echo get_template_directory_uri(); ?>/images/fa_15.png 1x,
                  <?php echo get_template_directory_uri(); ?>/images/fa_15@2x.png 2x"
                   alt="TEL" />
                    </span>
                  </a>
                    </span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="footer_bottom">
          <img src="<?php echo get_template_directory_uri(); ?>/images/footer02.webp" alt="Copyright"
          srcset="<?php echo get_template_directory_uri(); ?>/images/footer02.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/footer02@2x.webp 2x"
          />
        </div>
      </div>
      <div class="footer_bottom_c"></div>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lottie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
     <!-- jquery -->
     <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    ></script>
    <!-- modaal.jsが下 -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/modaal/modaal.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>



</body>
</html>