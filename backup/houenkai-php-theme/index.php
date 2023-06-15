
    <?php wp_head(); ?>
	
	<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
 <div class="container container_dis" id=container>
        <div class="news_contents blog">
            <div class="news_content">
                <h2 class="blog_title"><?php the_title(); ?></h2>
    <?php the_content() ?>
			</div>
	 </div>
</div>



    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;
get_footer();?>