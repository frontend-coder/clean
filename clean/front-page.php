
<?php get_header(); ?>

<?php if( is_front_page() && get_theme_mod('clean_home_category') ): ?>

   <div id="fh5co-portfolio">

        <?php $query = new WP_Query( array(
            'posts_per_page' => get_theme_mod('clean_colichestvo'),
            'category_name' => get_theme_mod('clean_home_category'),
        ) ); ?>

        <?php if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) :
         $query->the_post(); ?>

  <?php get_template_part('template-parts/content', 'preview'); ?>


        <?php $i++; endwhile; ?>
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>
   <?php endif; ?>
        <!-- end is_front_page() && get_theme_mod('clean_home_category') ): -->


<div class="fh5co-intro text-center">
    <div class="fh5co-portfolio">
<div class="container">
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <!-- no posts  --><?php the_content(); ?>
 <?php endwhile; ?>
<!-- no navigations -->
    <?php else: ?>
 <!-- no posts found -->
   <?php endif; ?>
</div>
</div>
</div>

<?php get_footer(); ?>