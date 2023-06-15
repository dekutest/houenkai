<?php
/**
 * Template Name: Top page
 */
?>
<?php get_header(); ?>
<div id="lottie" class="l-animation"></div>

<section class="top_title">
        <img class="top_title_img" src="<?php echo get_template_directory_uri(); ?>/images/top01@2x.webp"
        srcset="
            <?php echo get_template_directory_uri(); ?>/images/top01@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top01@2x.webp 2x"
             alt="芳縁会" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_title@2x.webp"
        srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_title@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_title@2x.webp 2x"
             alt="質の高い医療で縁ある人に貢献する" class="top_title_text" />
        <!-- <h1 class="top_title_text">
        質の高い医療で <br>
        <span class="title_lg">縁</span><span class="title_md">ある人に</span><span class="title_lg"> 貢献 </span><span
          class="title_md"> する。</span>
      </h1> -->
        <a href="/clinic">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top12@2x.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/top12@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top12@2x.webp 2x"
             alt="訪問診療を行っています" class="top_title_info" />
        </a>
        <div class="top_sub">
          <a href="/#about"
            ><img src="<?php echo get_template_directory_uri(); ?>/images/top09@2x.webp"
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top09@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top09@2x.webp 2x"
            alt="芳縁会について" class="top_sub_img"
          /></a>
          <a href="/medical-service"
            ><img src="<?php echo get_template_directory_uri(); ?>/images/top10@2x.webp"
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top10@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top10@2x.webp 2x"
            alt="診療内容" class="top_sub_img"
          /></a>
          <a href="/recruit"
            ><img src="<?php echo get_template_directory_uri(); ?>/images/top11@2x.webp"
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top11@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top11@2x.webp 2x"
            alt="採用情報" class="top_sub_img"
          /></a>
        </div>
      </section>
      <!-- <section class="top_sub">
    </section> -->
      <section class="promise">
        <div class="promise_wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top_text10.webp" 
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text10.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text10@2x.webp 2x"
          alt="在宅医療を提供します。" class="promise_left" />

          <img src="<?php echo get_template_directory_uri(); ?>/images/top_text11@2x.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text11@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text11@2x.webp 2x"
          alt="外来、訪問診療、多言語診察、自費診療" class="promise_right" />
        </div>
      </section>
      <!-- ---------about---------------- -->
      <section class="top_about" id="about">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/top_text_08.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text_08.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text_08@2x.webp 2x"
          alt="医療法人芳縁会について"
          class="top_about_title_img"
        />
        <div class="top_about_wrapper">
          <div class="top_about_box01 about_box">
            <div class="box_left">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/top_text_01@2x.webp"
                srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text_01@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text_01@2x.webp 2x"
                alt="Concept"
                class="top_about_upper01"
              />
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/top_text12@2x.webp"
                srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text12@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text12@2x.webp 2x"
                alt="縁ある人に貢献する"
                class="top_box_title01"
              />
              <p class="top_box_text">
                出会った患者様とそのご家族に対して、最善の医療を提供し<br
                  class="hidd"
                />
                生活の質の向上を目指します。<br />
                一人ひとりの関わりを大切にし、皆様の健康と幸せに貢献します。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/top02@2x.png" 
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top02@2x.png 1x,
            <?php echo get_template_directory_uri(); ?>/images/top02@2x.png 2x" 
            alt="芳縁会メンバー" class="box_right scroll_up" />
          </div>

          <div class="top_about_box02 about_box">
            <div class="box_left">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/top_text_02@2x.webp"
                srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text_02@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text_02@2x.webp 2x"
                alt="Mission"
                class="top_about_upper02"
              />
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/top_text13@2x.webp"
                srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text13@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text13@2x.webp 2x"
                alt="芳縁会の目指す未来。"
                class="top_box_title02"
              />
              <p class="top_box_text">
                年齢、性別、人種、国籍、信仰、社会的地位に関係なく、<br
                  class="hidd"
                />
                全ての人々が平等に医療サービスを受けることができ、<br
                  class="hidd"
                />
                不安がなく最期まで幸せに生きることができる社会の実現。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/top03@2x.webp" 
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top03@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top03@2x.webp 2x"
            alt="芳縁会の目指す未来。" class="box_right scroll_up" />
          </div>

          <div class="top_about_box03 about_box">
            <div class="box_left">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/top_text_03@2x.webp"
                srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text_03@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text_03@2x.webp 2x"
                alt="Value"
                class="top_about_upper03"
              />
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/top_text14@2x.webp"
                srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text14@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text14@2x.webp 2x"
                alt="地域の方と連携し、患者様の支えになる。"
                class="top_box_title03"
              />
              <p class="top_box_text">
                私たちがただ一方的に医療サービスを提供するだけでなく、<br
                  class="hidd"
                />
                家族や地域の人々と共に問題を解決し、互いに支え合いながら、<br
                  class="hidd"
                />
                より健康で豊かな地域社会を創り上げることです。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/top04@2x.webp" 
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top04@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top04@2x.webp 2x"
            alt="医療サービス" class="box_right scroll_up" />
          </div>
        </div>
      </section>

      <!-- ----------------greetimg-------------- -->

      <section class="top_greeting">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/top05@2x.webp" alt="" class="top_greeting_img"> -->

        <div class="top_greeting_box">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/top_text_04.png"
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text_04.png 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text_04@2x.png 2x"
            alt="理事長挨拶"
            class="top_greeting_box_img"
          />
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/top_text15.png"
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text15.png 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text15@2x.png 2x"
            alt="挨拶文"
            class="top_greeting_box_text"
          />
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/top_text17@2x.webp"
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text17@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text17@2x.webp 2x"
            alt="挨拶文"
            class="top_greeting_box_text top_greeting_box_text2"
          />
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/top_text16@2x.webp"
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text16@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text16@2x.webp 2x"
            alt="挨拶文"
            class="top_greeting_box_text top_greeting_box_text3"
          />
        </div>
      </section>

      <section class="top_profile">
        <div class="top_profile_wrapper">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/top_text_05@2x.webp"
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text_05@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text_05@2x.webp 2x"
            alt="理事長プロフィール"
            class="top_section_title"
          />
          <div class="top_profile_box">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top06@2x.png" 
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top06@2x.png 1x,
            <?php echo get_template_directory_uri(); ?>/images/top06@2x.png 2x"
            alt="ジャ・ウェンティン" class="profile_box_left" />
            <div class="profile_box_right">
              <p class="profile_position">理事長</p>
              <p class="profile_name">ジャ・ウェンティン</p>
              <div class="profile_line">
                <p>経歴</p>
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/top14@2x.webp" alt="" class="profile_line_img"> -->
                <div class="profile_line_img"></div>
              </div>
              <p class="from">中国 湖南省出身</p>
              <table class="profile_table">
                <tr>
                  <td>2011年</td>
                  <td class="td_right">東北大学医学部卒</td>
                </tr>
                <tr>
                  <td>2011年</td>
                  <td class="td_right">東北大学病院　初期研修医</td>
                </tr>
                <tr>
                  <td>2013年</td>
                  <td class="td_right">東北大学病院　脳神経外科医員</td>
                </tr>
                <tr>
                  <td></td>
                  <td class="td_right">
                    東北地方中核病院（総合病院）　<br class="app" />
                    脳神経外科
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td class="td_right">広南病院　脳神経外科</td>
                </tr>
                <tr>
                  <td>2020年</td>
                  <td class="td_right">芳縁在宅診療所 院長</td>
                </tr>
                <tr>
                  <td>2022年</td>
                  <td class="td_right">医療法人芳縁会 理事長</td>
                </tr>
              </table>

              <div class="profile_line">
                <p>所属</p>
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/top14@2x.webp" alt="" class="profile_line_img"> -->
                <div class="profile_line_img"></div>
              </div>
              <p>日本脳神経外科学会</p>
              <p>日本脳卒中学会</p>
              <a href="https://www.youtube.com/playlist?list=PLXRXgR7U1Kq9BwItATa0gBZclkw29vR2l" target="_blank" rel="noopener" ><img src="<?php echo get_template_directory_uri(); ?>/images/top15@2x.webp"
              srcset="
            <?php echo get_template_directory_uri(); ?>/images/top15@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top15@2x.webp 2x"
              alt="出演ラジオ" class="radio_link" /></a>
            </div>
          </div>
        </div>
      </section>
      <section class="top_clinic">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_text_06@2x.webp" 
        srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text_06@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text_06@2x.webp 2x"
        alt="診療所情報" class="top_clinic_title" />
        <div class="top_clinic_box">
          <div class="top_clinic_box_upper">
            <a href="/clinic/#hachiman"><img
              src="<?php echo get_template_directory_uri(); ?>/images/top07@2x.webp"
              srcset="
            <?php echo get_template_directory_uri(); ?>/images/top07@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top07@2x.webp 2x"
              alt="芳縁在宅診療所八幡"
              class="top_clinic_box_upper_img scroll_up"
            />
            </a>
            <a href="/clinic/#family"><img
              src="<?php echo get_template_directory_uri(); ?>/images/top08@2x.webp"
              srcset="
            <?php echo get_template_directory_uri(); ?>/images/top08@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top08@2x.webp 2x"
              alt="芳縁ファミリークリニック"
              class="top_clinic_box_upper_img scroll_up"
            />
            </a>
          </div>
          <a href="/clinic"
            ><img src="<?php echo get_template_directory_uri(); ?>/images/top16@2x.png" 
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top16@2x.png 1x,
            <?php echo get_template_directory_uri(); ?>/images/top16@2x.png 2x"
            alt="詳細について" class="top_clinic_btn"
          /></a>
        </div>
      </section>
      <section class="top_area">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_text_07@2x.webp"
        srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text_07@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top_text_07@2x.webp 2x"
        alt="訪問可能エリア" class="top_clinic_title" />
        <div class="top_area_box">
          <img src="<?php echo get_template_directory_uri(); ?>/images/clinic05@2x.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/clinic05@2x.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/clinic05@2x.webp 2x"
             alt="訪問可能エリア" class="top_area_map" />
          <div class="top_area_box_right">
            <div class="top_area_box_right_up">訪問診療の可能地域</div>
            <p class="top_area_box_right_mid">
              仙台市全域<br />
              名取市、多賀城市、塩釜市、富谷市
            </p>

            <a href="/home-care"><img src="<?php echo get_template_directory_uri(); ?>/images/top16.webp" 
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/top16.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/top16@2x.webp 2x"
            alt="詳細について" class="top_clinic_btn" /></a>
          </div>
        </div>
      </section>
      <article class="top_news">
        <div class="top_news_wrapper">
          <div class="top_news_up">
            <p class="top_news_title">最新のお知らせをご案内します</p>
         <a href="/news-all"><img src="<?php echo get_template_directory_uri(); ?>/images/top_text09@2x.webp"
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
    'posts_per_page' => 5 // 表示件数の指定
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
      <?php get_footer(); ?> 
