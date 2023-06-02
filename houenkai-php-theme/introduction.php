<?php
/**
 * Template Name:Introduction
 */
?>

<?php get_header(); ?>

<section class="clinic_title title_line">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/intro_text_01.webp 1x,"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/intro_text_01.webp    1x,
            <?php echo get_template_directory_uri(); ?>/images/intro_text_01@2x.webp 2x
          "
          alt="clinic"
        />
      </section>
      <section class="clinic_main2 scroll_up" id="hachiman">
        <div class="title">
          <p>ほうえん</p>
          <h1>芳縁在宅診療所八幡</h1>
        </div>

        <div class="clinic_feature2">
          <div class="clinic_left">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/intro01.webp"
              srcset="<?php echo get_template_directory_uri(); ?>/images/intro01.webp 1x, <?php echo get_template_directory_uri(); ?>/images/intro01@2x.webp 2x"
              alt="clinic"
            />
          </div>
          <div class="clinic_right">
            <h2>「24時間365日、緊急往診」</h2>
            <p>内科・外科</p>

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
                TEL：　022-341-2882 <br />
                FAX：　022-341-8896
              </p>
            </div>

            <div class="clinic_map">
              <p>
                〒980-0871<br />
                宮城県仙台市青葉区八幡２丁目３-６グラシアスはちまん1F
              </p>
              <a href="https://goo.gl/maps/U7GpUJ1SJcUtuvDR6" target="_blank" rel="noopener"
                ><img
                  src="<?php echo get_template_directory_uri(); ?>/images/intro02.webp"
                  srcset="<?php echo get_template_directory_uri(); ?>/images/intro02.webp 1x, <?php echo get_template_directory_uri(); ?>/images/intro02@2x.webp 2x"
                  alt="clinic"
              /></a>
            </div>
          </div>
        </div>
      </section>

      <section class="clinic_main2 section2 scroll_up"  id="family">
        <div class="title">
          <p>ほうえん</p>
          <h1>芳縁ファミリークリニック</h1>
        </div>

        <div class="clinic_feature2">
          <div class="clinic_left">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/intro03.webp"
              srcset="<?php echo get_template_directory_uri(); ?>/images/intro03.webp 1x, <?php echo get_template_directory_uri(); ?>/images/intro03@2x.webp 2x"
              alt="clinic"
            />
          </div>
          <div class="clinic_right">
            <h2>「院内処方が、とても便利！」</h2>
            <p>内科・外科</p>

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
                TEL：　022-375-8023<br />
                FAX：　022-375-8168
              </p>
            </div>

            <div class="clinic_map">
              <p>
                〒981-3108<br />
                宮城県仙台市泉区松陵４丁目２-５
              </p>
              <a href="https://goo.gl/maps/QmSMkTrTrUQvtYQT9" target="_blank" rel="noopener"
                ><img
                  src="<?php echo get_template_directory_uri(); ?>/images/intro02.webp"
                  srcset="<?php echo get_template_directory_uri(); ?>/images/intro02.webp 1x, <?php echo get_template_directory_uri(); ?>/images/intro02@2x.webp 2x"
                  alt="clinic"
              /></a>
            </div>
          </div>
        </div>
      </section>
      <?php get_footer(); ?> 
