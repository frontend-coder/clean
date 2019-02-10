<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Clean
 */

get_header();
?>

		<div id="fh5co-content">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-3 col-md-push-9 animate-box">
<?php get_sidebar(); ?>
							</div>
						<div class="col-md-9 col-md-pull-3">

   <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('template-parts/content', 'page'); ?>
        <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


<?php get_footer(); ?>