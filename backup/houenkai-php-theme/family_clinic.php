<?php
/**
 * Template Name: family
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
            <a href="#news">
                お知らせ
                <span class="header_bottom">NEWS</span>
              </a>
            </li>
            <li>
              <a href="#information">
                診療案内
                <span class="header_bottom">INFORMATION</span>
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
            <li><a href="#news">お知らせ</a></li>
            <li><a href="#information"> 訪問診療 </a></li>
                <li><a href="#director"> 院長紹介 </a></li>
                <li><a href="#feature">診療の特徴</a></li>
                <li><a href="#clinic">アクセス </a></li>
          </ul>
        </nav>
      </div>
    </header>



    <main>
      <section class="title_line">
        <div class="clinic_top0">
          <div class="clinic_top1 clinic_top1_fa">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/fa_01@2x.png"
              srcset="<?php echo get_template_directory_uri(); ?>/images/fa_01@2x.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_01@2x.png 2x"
              alt="clinic"
            />
          </div>
          <div class="clinic_top2 family_top">
            <h2>
              <span class="family_title">信頼され結ばれる</span><br />
              ご縁を大切にします。
            </h2>
            <div class="clinic_top03">
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
            <p>地域の医療を支え、心温かい診療を行います。</p>
            <div class="clinic_top04">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/fa_02.png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/fa_02.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_02@2x.png 2x"
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
          <p class="top_news_title"></p>
         <a href="/news-all-family"><img src="<?php echo get_template_directory_uri(); ?>/images/top_text09@2x.webp"
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
    'category_name'  => 'family' // カテゴリースラッグを指定
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



      <div class="profile_00" id="information">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/fa_09.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/fa_09.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_09@2x.png 2x"
          alt="clinic"
          class="profile_001"
        />
      </div>

      <div class="top_infomation">
        <div class="top_information01">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/fa_10.png"
            srcset="<?php echo get_template_directory_uri(); ?>/images/fa_10.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_10@2x.png 2x"
            alt="clinic"
          />
          <p>
            患者さまに寄り添う診療を心がけて、地域の方々の健康を支えます。<br />
            「体調不良・気になる症状」があればお気軽にご相談ください。
          </p>
        </div>
        <div class="top_information02">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/fa_03.png"
            srcset="<?php echo get_template_directory_uri(); ?>/images/fa_03.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_03@2x.png 2x"
            alt="clinic"
          />
        </div>
      </div>

      <div class="family_top2">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/fa_11.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/fa_11.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_11@2x.png 2x"
          alt="clinic"
        />
        <p>
          健康診断、予防接種など、幅広い治療に対応します。<br />
          皆様の健康を第一に考えています。
        </p>
      </div>

      <div class="family_top3">
        <h3>
          こんな症状はありませんか？ <br />
          気になる症状があればご相談ください
        </h3>
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/fa_12.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/fa_12.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_12@2x.png 2x"
          alt="clinic"
          class="pc_img"
        />
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/fa_13.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/fa_13.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_13@2x.png 2x"
          alt="clinic"
          class="md_none"
        />
      </div>

      <div class="family_top4" id="director">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/fa_04@2x.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/fa_04@2x.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_04@2x.png 2x"
          alt="clinic"
          class="pc_img"
        />
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/fa_14@2x.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/fa_14@2x.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_14@2x.png 2x"
          alt="clinic"
          class="md_none"
        />
      </div>

      <div class="profile_00">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/c_011.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/c_011.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_011@2x.png 2x"
          alt="clinic"
          class="profile_001"
        />
      </div>

      <div class="top_profile_box01 fa_top_profile_box01 scroll_up" >
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/fa_05.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/fa_05.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_05@2x.png 2x"
          alt="clinic"
        />

        <div class="profile_box_right1 profile_box_right_fa">
          <p class="profile_position">院長</p>
          <p class="profile_name1 profile_name1_fa"><span>もりした</span>じょう</p>
          <p class="profile_name">森下　城</p>
          <p>
            神奈川県の藤沢市出身です。<br /><br />

            20年以上の医師経験と知識で、心身の健康維持に取り組みます。<br />
            患者さまの生活や環境に合わせた医療を提供します。<br />
            最先端の医療を提供出来るよう、研鑽を続けております。
          </p>
        </div>
      </div>

      <div class="profile_top0">
        <div class="profile_top1">
          <h3>経歴</h3>
          <p>
            <span>1999年</span>信州大学医学部卒業<br />
            <span class="pro_span"></span>東京大学医学部付属病院　研修<br />
            <span  class="pro_span"></span>JR東京総合病院　研修<br />
           <span>2001年</span>東北大学心療内科 <br />
           <span>2002年</span>北上病院消化器内科医長<br />
           <span>2003年</span>東北大学　便通異常・腹痛の診療/研究<br />
           <span>2014年</span>佐々木胃腸科副院長<br />
           <span>2020年</span>公立黒川病院内科科長
          </p>
        </div>
        <div class="profile_top2">
          <h3>資格</h3>
          <p>
            医学博士<br />
            日本内科学会認定内科医<br />
            日本消化器病学会消化器病専門医<br />
            日本消化管学会消化管専門医<br />
            東北大学大学院医学系研究科非常勤講師<br />
            日本医師会認定産業医<br />
            認知症サポート医<br />
            厚生労働省オンライン診療研修修了
          </p>
        </div>
      </div>

      <div class="profile_00">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/c_012.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/c_012.png 1x, <?php echo get_template_directory_uri(); ?>/images/c_012@2x.png 2x"
          alt="clinic"
          class="profile_001"
          id="feature"
        />
      </div>
      <section class="c_f_00">
        <div class="c_f_main scroll_up">
          <div class="c_f_con family_con">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/fa_06.png"
              srcset="<?php echo get_template_directory_uri(); ?>/images/fa_06.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_06@2x.png 2x"
              alt="clinic"
            />
            <h2>家族みんなのかかりつけ医</h2>
            <p>
              お子様からご高齢の方まで、ご家族全員の健康を支えます。一人ひとりの健康状態やライフステージに合わせた診療をします。
            </p>
            <div class="test__box">
              <a href="#modaal-box" class="modaal-btn">▶︎　診療内容一覧</a>
              <div id="modaal-box" style="display: none">【診療内容】
・高血圧症、糖尿病、脂質異常症などの生活習慣病
・狭心症、心筋梗塞、脳梗塞のフォローアップ
・不整脈、心不全などの循環器疾患
・急性上気道炎、急性気管支炎、肺炎、気管支喘息、慢性閉塞性肺疾患（COPD）などの呼吸器疾患
・頻尿や尿路感染症などの泌尿器系疾患
・睡眠時無呼吸症候群（CPAP）
・花粉症などのアレルギー疾患
・逆流性食道炎、慢性胃炎、胃潰瘍、十二指腸潰瘍、ヘリコバクターピロリ感染症、感染性胃腸炎、機能性ディスペプシア、過敏性腸症候群、脂肪肝、ウイルス性慢性肝炎、肝硬変などの消化器疾患
・不眠症
・認知症
・小児の各種疾患
・発熱外来
※内科一般の診療をしています
              </div>
            </div>
          </div>

          <div class="c_f_con family_con">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/fa_07.png"
              srcset="<?php echo get_template_directory_uri(); ?>/images/fa_07.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_07@2x.png 2x"
              alt="clinic"
            />
            <h2>予防から健康を支えます</h2>
            <p>
              予防接種・健康診断・病気の早期発見を行い、皆さまの健康をサポートします。日々の体調についてご相談ください。
            </p>
            <div class="test__box test__box2">
              <a href="#modaal-box2" class="modaal-btn"
                >▶︎　予防接種・健康診断一覧</a
              >
              <div id="modaal-box2" style="display: none">【予防接種】
・おたふく
・日本脳炎
・MR（麻疹・風疹）
・水痘
・2種混合
・B型肝炎
・ポリオ
・高齢者肺炎球菌
・帯状疱疹
・狂犬病
・HPV感染症（子宮頸がん予防）９価
※自費診療、一部助成有り
              
              【検査】
・血液検査
貧血検査、肝機能検査、脂質検査、血糖検査、HbA1c検査、ホルモン検査、抗体検査（ヘリコバクターピロリや膠原病特異的抗体など）
・尿検査
・心電図検査
・胸腹部レントゲン検査
・腹部超音波検査
・聴力検査
・視力検査
・長谷川式簡易知能検査（HDS-R）

【各種抗体検査】
・風疹
・麻疹
・おたふく
・水痘帯状ヘルペス
・B型肝炎
・C型肝炎
・コロナウイルス
・コロナワクチン

【その他】
・前立腺癌マーカー（PSA）
・ABO式血液型
・RH＋ABO血液型
・コロナウイルス抗原定性（自費）
・コロナウイルスPCR検査（自費）
              </div>
            </div>
          </div>

          <div class="c_f_con family_con">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/fa_08.png"
              srcset="<?php echo get_template_directory_uri(); ?>/images/fa_08.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_08@2x.png 2x"
              alt="clinic"
            />
            <h2>連携病院への紹介</h2>
            <p>
              患者様のご希望に添い、連携病院や専門のクリニックのご紹介もいたします。
            </p>

            <div class="test__box test03 test__box3">
              <a href="#modaal-box3" class="modaal-btn">▶︎　連携病院一覧</a>
              <div id="modaal-box3" style="display: none">【連携病院】
              ・東北大学病院
              ・東北労災病院
              ・東北公済病院
              ・JCHO仙台病院
              ・仙台医療センター
              ・仙台オープン病院
              ・仙台厚生病院
              ・仙台循環器病センター
              ・仙台徳州会病院
              ・県立こども病院
              ・大崎市民病院

              【文書】
              ・各種診断書
              ・主治医意見書
              ・医療要否意見書
              ※診断書についても対応しております
              詳しくはご相談ください
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ------------------------------------------- -->

      <div class="profile_00" id="clinic"  >
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/fa_18.png"
          srcset="<?php echo get_template_directory_uri(); ?>/images/fa_18.png 1x, <?php echo get_template_directory_uri(); ?>/images/fa_18@2x.png 2x"
          alt="clinic"
          class="profile_001"
        /></div>
      <section class="clinic_main2 c_map_01"  >

        <div class="clinic_feature2">
          <div class="clinic_left">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3129.7742615882275!2d140.91132187648617!3d38.33105797992099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f89813c0d6bfa43%3A0x1f288b792cb67860!2z6Iqz57iB44OV44Kh44Of44Oq44O844Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1698655765413!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <td class="c_circle">◯</td>
                <td>ー</td>
              </tr>
              <tr>
                <td>14:00 - 17:00</td>
                <td class="c_circle">◯</td>
                <td class="c_circle">◯</td>
                <td>ー</td>
                <td class="c_circle">◯</td>
                <td class="c_circle">◯</td>
                <td>ー</td>
                <td>ー</td>
              </tr>
            </table>

            <p class="holiday">休診日 … 日曜・祝日</p>
            <div class="clinic_tel">
              <p>
                <a href="tel:022-375-8023">TEL：　022-375-8023</a> <br />
                FAX：　<span class="clinic_tel_p">022-375-8168</span>
              </p>
            </div>

            <div class="clinic_map clinic_map_hachi">
              <p>
                〒980-3108<br />
                宮城県仙台市泉区松陵４丁目２-５
              </p>
            </div>
          </div>
        </div>
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
                <a href="#news">お知らせ</a>
                </li>
                <li>
                  <a href="#information"> 診療案内 </a>
                </li>
                <li>
                  <a href="#director"> 院長紹介 </a>
                </li>
                <li>
                <a href="#feature">診療の特徴</a>
                </li>
                <li>
                <a href="#clinic"> アクセス </a>
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