
<?php
/**
 * Template Name: blog_all
 */
?>
	
	<?php

get_header();

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
    'posts_per_page' => 20 // 表示件数の指定
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





    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;
get_footer();?>