<?php
/**
 * Template Name: clinic
 */
?>

<?php get_header(); ?>
<section class="clinic_title title_line">
        <img
          class="clinic_title_text01"
          src="<?php echo get_template_directory_uri(); ?>/images/clinic_text01.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/clinic_text01.webp,
            <?php echo get_template_directory_uri(); ?>/images/clinic_text01@2x.webp 2x
          "
          alt="訪問診療"
        />
      </section>
      <section class="clinic_main">
        <div class="clinic_top_wrap">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/clinic_top.webp"
            srcset="<?php echo get_template_directory_uri(); ?>/images/clinic_top.webp 1x, <?php echo get_template_directory_uri(); ?>/images/clinic_top@2x.webp 2x"
            alt="clinic"
            class="clinic_top"
          />
        </div>
        <img
          class="clinic_main_2 scroll_up"
          src="<?php echo get_template_directory_uri(); ?>/images/clinic01.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/clinic01.webp,
            <?php echo get_template_directory_uri(); ?>/images/clinic01@2x.webp 2x
          "
          alt="clinic01"
        />
        <h2 class="clinic_main_3">当院にご相談ください。</h2>
        <div class="clinic_main_4">
          <p class="clinic_main_4_1">
            通院が困難な方、要介護・寝たきりの方・がん・老衰・末期・難病など在宅で緩和ケアを希望される方、ご自宅や施設での療養を希望される方、病院ではなく最後まで住み慣れた場所で過ごしたい方、在宅医療が必要な方
          </p>
        </div>
      </section>
      <section class="clinic_feature">
        <!-- <img src="images/clinic02.webp" alt="clinic02"> -->
        <p class="c_text_furi">はちまん</p>
        <div class="clinic_feature_1_1"></div>
        <h1 class="clinic_feature_1_2">芳縁在宅診療所八幡の特徴</h1>
        <p class="clinic_feature_2">
          芳縁会では、24 時間365日の緊急往診体制で医師や看護師が直接患者様のご自宅を訪れ、その場で適切な医療サービスを提供します。定期的にご自宅での生活環境や生活習慣も把握し、よりパーソナライズされたケアを提供します。
        </p>
        <!-- <img src="images/clinic03.webp" alt="clinic03"> -->
        <div class="clinic_feature_3">
          <p class="clinic_feature_3_1">24時間365日対応</p>
          <p class="clinic_feature_3_1">薬の処方</p>
          <p class="clinic_feature_3_1 clinic_feature_3_2">高齢・がん・難病の患者にも対応</p>
          <p class="clinic_feature_3_1">末期の看取り</p>
        </div>
        <div class="scroll_up">
          <img
            class="clinic_feature_4"
            src="<?php echo get_template_directory_uri(); ?>/images/clinic04.webp"
            srcset="
            <?php echo get_template_directory_uri(); ?>/images/clinic04.webp,
            <?php echo get_template_directory_uri(); ?>/images/clinic04@2x.webp 2x
          "
            alt="clinic04 scroll_up"
          />
        </div>
        <h2 class="clinic_feature_5">ご自宅で可能な処置について</h2>
        <!-- 検査  薬の処方箋発行  喀痰吸引  経管栄養  点滴注射<br>
              酸素投与  人工呼吸器  胃瘻交換  気管カニューレ交換<br>
              褥瘡処置  中心静脈栄養  緩和ケア  看取り -->
        <img
          class="clinic_feature_6"
          src="<?php echo get_template_directory_uri(); ?>/images/clinic04_1.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/clinic04_1.webp,
            <?php echo get_template_directory_uri(); ?>/images/clinic04_1@2x.webp 2x
          "
          alt="clinic"
        />
        <img
          class="clinic_feature_6 clinic_feature_6_2"
          src="<?php echo get_template_directory_uri(); ?>/images/clinic04_2.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/clinic04_2.webp,
            <?php echo get_template_directory_uri(); ?>/images/clinic04_2@2x.webp 2x
          "
          alt="clinic"
        />

      </section>
      <section class="top_area c_area">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_text_07.webp" 
        srcset="
            <?php echo get_template_directory_uri(); ?>/images/top_text_07.webp,
            <?php echo get_template_directory_uri(); ?>/images/top_text_07@2x.webp 2x
          "
        alt="" class="top_clinic_title" />
        <div class="area_text">
          <p>
          「芳縁在宅診療所八幡」では、以下の診察エリアを訪問いたします。<br />
            お住まいが診察エリアの範囲外の方も、遠慮なく一度お問い合わせください。
          </p>
        </div>
        <div class="top_area_box area_color ">
          <img src="<?php echo get_template_directory_uri(); ?>/images/clinic05.webp" 
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/clinic05.webp,
            <?php echo get_template_directory_uri(); ?>/images/clinic05@2x.webp 2x
          "
          alt="" class="top_area_map c_map" />
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
      <?php get_footer(); ?> 
