<?php
/**
 * Template Name: Form
 */
?>

<?php get_header(); ?>
<section class="clinic_title title_line">
        <img
          class="clinic_title_text01"
          src="<?php echo get_template_directory_uri(); ?>/images/form_text01.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/form_text01.webp 1x,
            <?php echo get_template_directory_uri(); ?>/images/form_text01@2x.webp 2x
          "
          alt="訪問診療"
        />
      </section>
      <section class="clinic_main form_wrap">
      <div class="form_main">
      <h2 class="clinic_main_3 form_title">訪問診療の申し込み用紙はこちら</h2>
          <p>
          こちらの用紙を印刷していただき、医院にお持ちいただくか、FAXにてお送りください。<br>
          ご不明な点などありましたら、お気軽にお問い合わせください。<br><br>
          </p>
          <p class="form_tel">TEL : 022-341-2882　<br class="br_no2">FAX : 022-341-8896</p>


          <div class="clinic_feature_3 form_download button001">
          <a href="<?php echo get_template_directory_uri(); ?>/pdf/form_sheet.pdf"  class="clinic_feature_3_1 form_d" target="_blank">申し込み用紙ダウンロード</a>
        </div>

        <div class="Form_img">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/form_sheet.png"
            srcset="<?php echo get_template_directory_uri(); ?>/images/form_sheet.png 1x, <?php echo get_template_directory_uri(); ?>/images/form_sheet.png 2x"
            alt="訪問診療で地域医療の問題を解決します。"
          />
        </div>
        </div>

     
      </section>
      
      <?php get_footer(); ?> 
