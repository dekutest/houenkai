<?php
/**
 * Template Name: hachiman
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
      <div class="inner inner_hachi">
        <h1 class="header_img1">
          <a href="/houen-zaitakusinnryoujyo-hachiman">
            <img src="<?php echo get_template_directory_uri(); ?>/images/c_016.png"
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/c_016.png 1x,
            <?php echo get_template_directory_uri(); ?>/images/c_016@2x.png 2x" alt="芳縁会" />
          </a>
        </h1>
        <nav class="menu_pc">
          <ul>
          <li>
            <a href="#news">
                お知らせ
                <span class="header_bottom">NEWS</span>
              </a>
            </li>
            <li>
              <a href="#homecare">
                訪問診療
                <span class="header_bottom">HOME CARE</span>
              </a>
            </li>
            <li>
              <a href="#director">
                院長紹介
                <span class="header_bottom">CLINIC DIRECTOR</span>
              </a>
            </li>
            <li>
            <a href="#feature">
              診療の特徴
                <span class="header_bottom">MEDICAL FEATURE</span>
              </a>
            </li>
            <li>
              <a href="#clinic">
                診療所
                <span class="header_bottom">CLINIC</span>
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
            <li><a href="https://houen-zaitaku.jp/houen-zaitakusinnryoujyo-hachiman/#news">お知らせ</a></li>
            <li><a href="https://houen-zaitaku.jp/houen-zaitakusinnryoujyo-hachiman/#homecare"> 訪問診療 </a></li>
                <li><a href="https://houen-zaitaku.jp/houen-zaitakusinnryoujyo-hachiman/#director"> 院長紹介 </a></li>
                <li><a href="https://houen-zaitaku.jp/houen-zaitakusinnryoujyo-hachiman/#feature">診療の特徴</a></li>
                <li><a href="https://houen-zaitaku.jp/houen-zaitakusinnryoujyo-hachiman/#clinic"> 診療所 </a></li>
                <li><a href="/application-form"> 診療申し込み用紙 </a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <section class="title_line">
        <div class="clinic_top0">
          <div class="clinic_top1">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/c_01.png"
              srcset="<?php echo get_template_directory_uri(); ?>/images/c_01.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_01@2x.png 2x"
              alt="clinic"
            />
          </div>
          <div class="clinic_top2">
            <h2>
              <span>在宅診療で</span><br />
              地域のご縁を繋ぎます。
            </h2>
            <div class="clinic_top03">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/c_05.png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/c_05.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_05@2x.png 2x"
                alt="clinic"
              />
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/c_03.png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/c_03.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_03@2x.png 2x"
                alt="clinic"
              />
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/c_04.png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/c_04.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_04@2x.png 2x"
                alt="clinic"
              />
            </div>
            <p>
              「緊急時」は24時間対応（訪問診療）<br />
              患者様の環境や生活習慣に合わせて、医療を提供します
            </p>
            <div class="clinic_top04">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/c_02.png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/c_02.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_02@2x.png 2x"
                alt="clinic"
              />
            </div>
          </div>
        </div>
      </section>

      <div class="profile_00" id="news">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/c_015.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/c_015.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_015@2x.png 2x"
          alt="clinic"
          class="profile_001"
        />
      </div>

      <article class="top_news">
        <div class="top_news_wrapper top_news_wrapper_c">
          <div class="top_news_up">
            <p class="top_news_title">最新のお知らせをご案内します</p>
         <a href="/news-all-hachiman"><img src="<?php echo get_template_directory_uri(); ?>/images/top_text09@2x.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text09@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text09@2x.webp 2x"
          alt="お知らせ一覧" class="top_news_link" />
          </a>
          </div>
          <div class="news_box">
        <div class="news-box-wrapper">
<ul>
<?php
  $args = array(
    'posts_per_page' => 5,      // 表示件数の指定
    'category_name'  => 'hachiman' // カテゴリースラッグを指定
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ): // ループの開始
  setup_postdata( $post ); // 記事データの取得
?>
  <li class="news-text">
	 <div class="news-day"><?php the_date('Y.m.d'); ?></div>
	  <div class="news-blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div> 
	</li>
	  <?php
  endforeach; // ループの終了
  wp_reset_postdata(); // 直前のクエリを復元する
?>
</ul>
		
		</div>

          </div>
        </div>
      </article>


      <section class="clinic_main c_top_main_00" id="homecare">
        <div class="clinic_top_wrap">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/c_010.png"
            srcset="<?php echo get_template_directory_uri(); ?>/images/c_010.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_010@2x.png 2x"
            alt="clinic"
            class="clinic_top"
          />
        </div>

        <div class="clinic_main_4 clinic_main_4_hachi">
          <p class=" clinic_main_hachi">
          通院が困難な方、要介護・寝たきりの方・がん・老衰・難病など在宅で緩和ケアを希望される方、ご自宅や施設での療養を希望される方、病院ではなく最後まで住み慣れた場所で過ごしたい方はご相談ください。

          </p>
        </div>
      </section>
      <section class="clinic_feature">
        <!-- <img src="images/clinic02.webp" alt="clinic02"> -->
        <div class="clinic_feature_1_1"></div>
        <h1 class="clinic_feature_1_2 clinic_feature_1_2_2">芳縁会の特徴</h1>
        <p class="clinic_feature_2">
          芳縁会では、24 時間365
          日の緊急往診体制で医師や看護師が直接患者様のご自宅を訪れ、その場で適切な医療サービスを提供します。定期的にご自宅での生活環境や生活習慣も把握し、よりパーソナライズされたケアを提供します。
        </p>
        <!-- <img src="images/clinic03.webp" alt="clinic03"> -->
        <div class="clinic_feature_3">
          <p class="clinic_feature_3_1">24時間365日対応</p>
          <p class="clinic_feature_3_1">薬の処方</p>
          <p class="clinic_feature_3_1 clinic_feature_3_1_2">高齢・がん・難病の患者にも対応</p>
          <p class="clinic_feature_3_1">末期の看取り</p>
        </div>

        <h2 class="clinic_feature_5">ご自宅で可能な処置について</h2>
        <!-- 検査  薬の処方箋発行  喀痰吸引  経管栄養  点滴注射<br>
              酸素投与  人工呼吸器  胃瘻交換  気管カニューレ交換<br>
              褥瘡処置  中心静脈栄養  緩和ケア  看取り -->
        <img
          class="clinic_feature_6"
          src="<?php echo get_template_directory_uri(); ?>/images/clinic04_1.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/clinic04_1.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/clinic04_1@2x.webp 2x
          "
          alt="ご自宅で可能な処置について"
        />
        <img
          class="clinic_feature_6 clinic_feature_6_2"
          src="<?php echo get_template_directory_uri(); ?>/images/clinic04_2.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/clinic04_2.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/clinic04_2@2x.webp 2x
          "
          alt="ご自宅で可能な処置について"
        />
      </section>

      <div class="profile_00 profile_00_p">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/c_011.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/c_011.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_011@2x.png 2x"
          alt="clinic"
          class="profile_001"
        />
      </div>

      <div class="top_profile_box01 scroll_up" id="director">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/c_06.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/c_06.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_06@2x.png 2x"
          alt="clinic"
        />

        <div class="profile_box_right1 profile_box_right1_c scroll_up">
          <p class="profile_position">院長</p>
          <p class="profile_name1"><span class="c_name01">やなぎさわ</span>　<span class="c_name02">てるゆき</span></p>
          <p class="profile_name">柳澤 輝行</p>
          <p>
            「病気と薬」について患者様に丁寧でわかりやすい説明を心がけております。薬理学の研究、教育、出版、市民への伝言活動とともに、友との語らいやFacebook、学びの継続を心がけ、地域医療と訪問診療に邁進します。<br /><br />

            狭心症治療薬「ニコランジルのカリウムチャネル開口作用」の発見。「カルシウム拮抗薬・強心薬ピモベンダン」の研究。
          </p>
          <div class="profile_line profile_line1">
            <p>経歴</p>
            <div class="profile_line_img profile_line_img_c"></div>
          </div>
          <table class="profile_table profile_table_c">
            <tr>
              <td>1982年</td>
              <td class="td_right">東北大学医学部卒業</td>
            </tr>
            <tr>
              <td>1995年</td>
              <td class="td_right">東北大学医学部教授</td>
            </tr>
            <tr>
              <td>2016年</td>
              <td class="td_right">東北大学医学部名誉教授</td>
            </tr>
            <tr>
              <td>2023年</td>
              <td class="td_right">芳縁在宅診療所八幡 院長</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="profile_00" id="feature">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/c_012.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/c_012.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_012@2x.png 2x"
          alt="clinic"
          class="profile_001"
        />
        <p>「強化型在宅療養支援診療所」として認定を受けています</p>
      </div>
      <section class="c_f_00">
        <div class="c_f_main scroll_up">
          <div class="c_f_con">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/c_07.png"
              srcset="<?php echo get_template_directory_uri(); ?>/images/c_07.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_07@2x.png 2x"
              alt="clinic"
            />
            <h2>24時間365日、緊急往診</h2>
            <p>
              24時間、常時往診・訪問看護の体制を整えております。夜間でも、医師または看護師が伺います。入院することも可能です。
            </p>
          </div>

          <div class="c_f_con">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/c_09.png"
              srcset="<?php echo get_template_directory_uri(); ?>/images/c_09.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_09@2x.png 2x"
              alt="clinic"
            />
            <h2>自宅でも安心の医療サービス</h2>
            <p>
              専門の医師と看護師が自宅に伺い、診療を行います。生活習慣病の予防と管理、慢性疾患の診療など幅広く対応しています。
            </p>
          </div>

          <div class="c_f_con">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/c_08.png"
              srcset="<?php echo get_template_directory_uri(); ?>/images/c_08.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_08@2x.png 2x"
              alt="clinic"
            />
            <h2>患者に寄り添う医療</h2>
            <p>
              患者様の健康と安心を最優先に考えます。病気に向き合う患者様一人ひとりに寄り添い、心から安心できよう取り組みます。
            </p>
          </div>
        </div>
        <div class="c_f_main2">
          <h4>「強化型在宅療養支援診療所」として</h4>
          <p>
            <span>
              ・在宅を担当する常勤医師が3名以上在籍 <br />
              ・「緊急時」は24時間対応<br />
              ・夜間も医師または看護師が伺い診察・治療対応<br />
              ・受け入れ可能な病床を確保、入院できる体制を整備<br
            /></span>
            ・提携する診療所と最適な医療を提供<br />
            <span class="font_small">（あおぞら診療所ほっこり仙台、ひとつぶ診療所、星内科小児科）</span>
          </p>
        </div>
      </section>

      <div class="profile_00" >
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/c_017.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/c_017.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_017@2x.png 2x"
          alt="clinic"
          class="profile_001"
        /></div>
      <section class="clinic_main2 c_map_01" id="clinic" id="#hachiman">

        <div class="clinic_feature2">
          <div class="clinic_left">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3132.405174276992!2d140.8501351764842!3d38.27009958347242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a29600a471f3b%3A0xc1cfb81a7c37ff12!2z6Iqz57iB5Zyo5a6F6Ki655mC5omA5YWr5bmh!5e0!3m2!1sja!2sjp!4v1696917730049!5m2!1sja!2sjp"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="clinic_right clinic_right_hachi">
            <p class="clinic_right_hachi_p">一般外来（内科・外科）</p>

            <table>
              <tr>
                <td class="c_title">診療時間</td>
                <td>月</td>
                <td>火</td>
                <td>水</td>
                <td>木</td>
                <td>金</td>
                <td>土</td>
                <td>日</td>
              </tr>
              <tr>
                <td>9:00 - 12:00</td>
                <td class="c_circle">◯</td>
                <td class="c_circle">◯</td>
                <td class="c_circle">◯</td>
                <td class="c_circle">◯</td>
                <td class="c_circle">◯</td>
                <td>ー</td>
                <td>ー</td>
              </tr>
              <tr>
                <td>13:00 - 18:00</td>
                <td class="c_circle">◯</td>
                <td class="c_circle">◯</td>
                <td class="c_circle">◯</td>
                <td class="c_circle">◯</td>
                <td class="c_circle">◯</td>
                <td>ー</td>
                <td>ー</td>
              </tr>
            </table>

            <p class="holiday">休診日 … 土日・祝日</p>
            <div class="clinic_tel">
              <p>
                <a href="tel:022-341-2882">TEL：　022-341-2882</a> <br />
                FAX：　<span class="clinic_tel_p">022-341-8896</span>
              </p>
            </div>

            <div class="clinic_map clinic_map_hachi">
              <p>
                〒980-0871<br />
                宮城県仙台市青葉区八幡２丁目３-６グラシアスはちまん1F
              </p>
            </div>
          </div>
        </div>
      </section>




      <section class="top_area c_area c_area_houmon">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_text_07.webp" 
        srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text_07.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text_07@2x.webp 2x
          "
        alt="訪問可能エリア" class="top_clinic_title" />
        <div class="area_text">
          <p>
          「芳縁在宅診療所八幡」では、以下の診察エリアを訪問いたします。<br class="hid" />
            お住まいが診察エリアの範囲外の方も、遠慮なく一度お問い合わせください。
          </p>
        </div>
        <div class="top_area_box area_color ">
          <img src="<?php echo get_template_directory_uri(); ?>/images/clinic05.webp" 
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/clinic05.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/clinic05@2x.webp 2x
          "
          alt="訪問可能エリア" class="top_area_map c_map" />
          <div class="top_area_box_right top_area_box_right2">
            <div class="top_area_box_right_up top_area_box_right_up2">仙台市全域<br>
名取市、多賀城市、塩釜市、富谷市</div>
            <p class="top_area_box_right_mid top_area_box_right_mid2">
            診療受付日<br>
            定期訪問<br>
            月曜日～金曜日<br>
            【午前】<span>9：00～12：00</span><br>
            【午後】13：00～18：00<br>
            ※24時間365日、緊急往診対応
            </p>
          </div>
        </div> 
      </section>

      <div class="form_button_wrap">
       <a href="/application-form"> <img src="<?php echo get_template_directory_uri(); ?>/images/form_button.webp" 
        srcset="
            <?php echo get_template_directory_uri(); ?>/images/form_button.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/form_button@2x.webp 2x
          "
        alt="診療の申し込み用紙" />
        </a>
        </div>

      <!-- ------------------------------------------- -->

    

    </main>

<footer>
      <div class="footer_inner">
        <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/images/footer05.webp" alt="TOP" class="footer_upper" /></a>

        <div class="footer_mid">
          <div class="footer_left footer_left_hachi">
            <a href="/houen-zaitakusinnryoujyo-hachiman"><img src="<?php echo get_template_directory_uri(); ?>/images/c_016.png"
            srcset="<?php echo get_template_directory_uri(); ?>/images/c_016.png 1x,<?php echo get_template_directory_uri(); ?>/images/c_016@2x.png 2x" alt="ロゴ" class="footer_logo " /></a>
            <p>
              〒980-0871<br>宮城県仙台市青葉区八幡2丁目3 - 6 グラシアスはちまん 1F
            </p>
            <p>
            <a href="tel:022-341-2882">
              Tel.<span class="footer_lg"> 022-341-2882</span
              ><br class="br_none1" /></a>
              Fax. 022-341-8896
            </p>
            <p>24時間365日、緊急往診対応</p>
          </div>
          <div class="footer_center footer_center_hachi">
            <nav>
              <ul>
              <li>
                <a href="#news">お知らせ</a>
                </li>
                <li>
                  <a href="#homecare"> 訪問診療 </a>
                </li>
                <li>
                  <a href="#director"> 院長紹介 </a>
                </li>
                <li>
                <a href="#feature">診療の特徴</a>
                </li>
                <li>
                <a href="#clinic"> 診療所 </a>
                </li>
                <li>
                <a href="/application-form"> 診療申し込み用紙 </a>
                </li>
                <li class="contact_footer">
                  <img class="nav_parent" src="<?php echo get_template_directory_uri(); ?>/images/yoyaku01.webp"
                  srcset="<?php echo get_template_directory_uri(); ?>/images/yoyaku01.webp 1x,
                  <?php echo get_template_directory_uri(); ?>/images/yoyaku01@2x.webp 2x"
                  
                  alt="予約" />
                  <a href="tel:022-341-2882">
                    <span class="nav_child child01 nav_child_f">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/yoyaku02.webp"
                      srcset="<?php echo get_template_directory_uri(); ?>/images/yoyaku02.webp 1x,
                  <?php echo get_template_directory_uri(); ?>/images/yoyaku02@2x.webp 2x"
                   alt="TEL" />
                    </span>
                  </a>
                  <a href="https://lin.ee/P0nzIlj">
                    <span class="nav_child child02 nav_child_f">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/yoyaku03.webp"
                      srcset="<?php echo get_template_directory_uri(); ?>/images/yoyaku03.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/yoyaku03@2x.webp 2x"
                      alt="LINE" />
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
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>



</body>
