<?php
/**
 * Template Name: Recuruit
 */
?>

<?php get_header(); ?>
<section class="recruit_title title_line">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/recruit_text01.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/recruit_text01.webp,
            <?php echo get_template_directory_uri(); ?>/images/recruit_text01@2x.webp 2x
          "
          alt="recruit"
        />
      </section>
      <section class="recruit_main">
        <div class="recruit_left">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/recruit_text02.webp"
            srcset="
              <?php echo get_template_directory_uri(); ?>/images/recruit_text02.webp,
              <?php echo get_template_directory_uri(); ?>/images/recruit_text02@2x.webp 2x
            "
            alt="recruit"
          />

          <img
            src="<?php echo get_template_directory_uri(); ?>/images/recruit_text03.webp"
            srcset="
              <?php echo get_template_directory_uri(); ?>/images/recruit_text03.webp,
              <?php echo get_template_directory_uri(); ?>/images/recruit_text03@2x.webp 2x
            "
            alt="recruit"
            class="recruit_text"
          />
        </div>
        <div class="recruit_right scroll_right">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/recruit_img@2x.webp"
            srcset="<?php echo get_template_directory_uri(); ?>/images/recruit_img@2x.webp, <?php echo get_template_directory_uri(); ?>/images/recruit_img@2x.webp 2x"
            alt="recruit"
          />
        </div>
      </section>
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/recruit01.webp"
        srcset="<?php echo get_template_directory_uri(); ?>/images/recruit01.webp, <?php echo get_template_directory_uri(); ?>/images/recruit01@2x.webp 2x"
        alt="recruit"
        class="back_img"
      />
      <section class="recruit_select">
        <div class="doctor">
          <a href="#doctor"
            ><p>医師 <br /><span class="dli-chevron-down"></span></p
          ></a>
        </div>
        <div class="nurse">
          <a href="#nurse">
            <p>看護師 <br /><span class="dli-chevron-down"></span></p>
          </a>
        </div>
        <div class="medicalclerk">
          <a href="#medicalclerk">
            <p>医療事務 <br /><span class="dli-chevron-down"></span></p>
          </a>
        </div>
        <div class="caremanager">
          <a href="#caremanager">
            <p>ケアマネージャー <br /><span class="dli-chevron-down"></span></p>
          </a>
        </div>
      </section>

      <section class="recruit_occupation">
        <div class="recruit_occupation_box doctor" id="doctor">
          <div class="title">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/recruit06_1.webp"
              srcset="<?php echo get_template_directory_uri(); ?>/images/recruit06_1.webp, <?php echo get_template_directory_uri(); ?>/images/recruit06_1@2x.webp2x"
              alt="recruit"
            />
          </div>
        </div>
        <table>
          <tr>
            <td>募集職種</td>
            <td>医師</td>
          </tr>
          <tr class="big_table">
            <td>給与</td>
            <td>
              常勤・非常勤 <br />
              詳しくは面談にて<br />
              ※当法人規定に依り優遇します。
            </td>
          </tr>
          <tr class="big_table">
            <td>勤務時間</td>
            <td>詳しくは面談にて</td>
          </tr>
          <tr class="big_table">
            <td>待遇等</td>
            <td>詳しくは面談にて</td>
          </tr>
        </table>
        <div class="form">
          <a href="/houenkai-test/contact"
            ><div class="back">
              <span class="dli-chevron-round-right back_color"></span>
            </div>
            <p>エントリーフォーム</p></a
          >
        </div>
        <div class="recruit_occupation_box nurse">
          <div class="recruit_occupation_box doctor" id="nurse">
            <div class="title">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/recruit05_1.webp"
                srcset="
                  <?php echo get_template_directory_uri(); ?>/images/recruit05_1.webp,
                  <?php echo get_template_directory_uri(); ?>/images/recruit05_1@2x.webp2x
                "
                alt="recruit"
              />
            </div>
          </div>
          <table>
            <tr>
              <td>募集職種</td>
              <td>正看護師・准看護師</td>
            </tr>
            <tr class="big_table">
              <td>給与</td>
              <td>
                常勤 （月額）220,000円～ <br />
                非常勤 （時給）1,500円〜<br />
                経験者は当法人規定に依り優遇します
              </td>
            </tr>
            <tr class="big_table">
              <td>勤務時間</td>
              <td>
                （外来） 8：30～17：30 <br />
                （訪問診療）9：00～18：00 <br />
                ※時間調整、可能 <br />
                ※オンコール対応の場合は、別途手当支給
              </td>
            </tr>
            <tr>
              <td>休日休暇</td>
              <td>土日祝休み・年次有給休暇・特別休暇・慶弔休暇有り</td>
            </tr>
            <tr>
              <td>待遇</td>
              <td>
                昇給年1回、賞与年2回、交通費補助有り、諸手当、マイカー通勤可
              </td>
            </tr>
            <tr>
              <td>福利厚生</td>
              <td>各種社会保険完備、定期健康診断、制服貸与</td>
            </tr>
          </table>
          <div class="form">
            <a href="/houenkai-test/contact"
              ><div class="back">
                <span class="dli-chevron-round-right back_color"></span>
              </div>
              <p>エントリーフォーム</p></a
            >
          </div>
        </div>
        <div class="recruit_occupation_box medicalclerk">
          <div class="recruit_occupation_box doctor" id="medicalclerk">
            <div class="title">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/recruit04_1.webp"
                srcset="
                  <?php echo get_template_directory_uri(); ?>/images/recruit04_1.webp,
                  <?php echo get_template_directory_uri(); ?>/images/recruit04_1@2x.webp 2x
                "
                alt="recruit"
              />
            </div>
          </div>
          <table>
            <tr>
              <td>募集職種</td>
              <td>事務職員</td>
            </tr>
            <tr class="big_table">
              <td>給与</td>
              <td>
                （月給）160,000円 ～ <br />
                経験者は当法人規定に依り優遇します
              </td>
            </tr>
            <tr class="big_table">
              <td>勤務時間</td>
              <td>
                （外来） 8：30～17：30 <br />
                （訪問診療）9：00～18：00 <br />
                ※オンコール対応の場合は、別途手当支給
              </td>
            </tr>
            <tr>
              <td>休日休暇</td>
              <td>土日祝休み・年次有給休暇・特別休暇・慶弔休暇有り</td>
            </tr>
            <tr>
              <td>待遇</td>
              <td>
                昇給年1回、賞与年2回、交通費補助有り、諸手当、マイカー通勤可
              </td>
            </tr>
            <tr>
              <td>福利厚生</td>
              <td>各種社会保険完備、定期健康診断、制服貸与</td>
            </tr>
          </table>
          <div class="form">
            <a href="/houenkai-test/contact"
              ><div class="back">
                <span class="dli-chevron-round-right back_color"></span>
              </div>
              <p>エントリーフォーム</p></a
            >
          </div>
        </div>
        <div class="recruit_occupation_box caremanager">
          <div class="recruit_occupation_box doctor" id="caremanager">
            <div class="title">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/recruit_text_03.webp"
                srcset="
                  <?php echo get_template_directory_uri(); ?>/images/recruit_text_03.webp    1x,
                  <?php echo get_template_directory_uri(); ?>/images/recruit_text_03@2x.webp 2x
                "
                alt="recruit"
              />
            </div>
          </div>
          <table>
            <tr>
              <td>募集職種</td>
              <td>ケアマネージャー</td>
            </tr>
            <tr class="big_table">
              <td>給与</td>
              <td>
                （月額）220,000円～ <br />
                経験者は当法人規定に依り優遇します
              </td>
            </tr>
            <tr class="big_table">
              <td>勤務時間</td>
              <td>
                9：00～18：00 <br />
                ※時間調整、可能 <br />
                ※オンコール対応の場合は、別途手当支給
              </td>
            </tr>
            <tr>
              <td>休日休暇</td>
              <td>土日祝休み・年次有給休暇・特別休暇・慶弔休暇有り</td>
            </tr>
            <tr>
              <td>待遇</td>
              <td>
                昇給年1回、賞与年2回、交通費補助有り、諸手当、マイカー通勤可
              </td>
            </tr>
            <tr>
              <td>福利厚生</td>
              <td>各種社会保険完備、定期健康診断、制服貸与</td>
            </tr>
          </table>
          <div class="form">
            <a href="/houenkai-test/contact"
              ><div class="back">
                <span class="dli-chevron-round-right back_color"></span>
              </div>
              <p>エントリーフォーム</p></a>
          </div>
        </div>
      </section>
      <?php get_footer(); ?> 

