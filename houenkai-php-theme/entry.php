<?php
/**
 * Template Name: Entry
 */
?>

<?php get_header(); ?>


      <section class="entry_title"></section>
      <div class="entry_form_title"></div>

      <section class="entry_form">
        <div class="entry_top">
      <img
          src="<?php echo get_template_directory_uri(); ?>/images/entry_1.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/entry_1.webp,
            <?php echo get_template_directory_uri(); ?>/images/entry_1@2x.webp 2x
          "
          alt="recruit"
        />
        </div>

        <div class="entry_top2">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/entry_2.webp"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/entry_2.webp,
            <?php echo get_template_directory_uri(); ?>/images/entry_2@2x.webp 2x
          "
          alt="recruit"
        /></div>

      <?php echo do_shortcode('[mwform_formkey key="39"]'); ?>



      


        <div class="entry_form_celect">
          <div class="entry_form_left"></div>
          <div class="entry_form_right"></div>
        </div>
        <div class="entry_form_name">
          <div class="entry_form_left"></div>
          <div class="entry_form_right"></div>
        </div>
        <div class="entry_form_kana">
          <div class="entry_form_left"></div>
          <div class="entry_form_right"></div>
        </div>
        <div class="entry_form_age">
          <div class="entry_form_left"></div>
          <div class="entry_form_right"></div>
        </div>
        <div class="entry_form_gender">
          <div class="entry_form_left"></div>
          <div class="entry_form_right"></div>
        </div>
        <div class="entry_form_tel">
          <div class="entry_form_left"></div>
          <div class="entry_form_right"></div>
        </div>
        <div class="entry_form_mail">
          <div class="entry_form_left"></div>
          <div class="entry_form_right"></div>
        </div>
        <div class="entry_form_yubin">
          <div class="entry_form_left"></div>
          <div class="entry_form_right"></div>
        </div>
        <div class="entry_form_address">
          <div class="entry_form_left"></div>
          <div class="entry_form_right"></div>
        </div>
        <div class="entry_form_career">
          <div class="entry_form_left"></div>
          <div class="entry_form_right"></div>
        </div>
        <div class="entry_form_qa">
          <div class="entry_form_left"></div>
          <div class="entry_form_right"></div>
        </div>
  
      </section>
      <?php get_footer(); ?> 

