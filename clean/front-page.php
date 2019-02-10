<?php
/*
Template Name: main-page-tamplate
Template Post Type: post, page
*/
?>
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





  <div id="fh5co-team">
      <div class="container">
        <div class="row">

          <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <?php if(carbon_get_the_post_meta('name_comand_block')){?>
              <h2 class="section-lead text-center"><?php echo carbon_get_the_post_meta('name_comand_block'); ?></h2>
<?php } ?>



              <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
<?php if(carbon_get_the_post_meta('first_foto_number') && carbon_get_the_post_meta('first_name_number')){?>
                <figure>
                <img src="<?php echo carbon_get_the_post_meta('first_foto_number'); ?>" alt="Участник команды <?php echo carbon_get_the_post_meta('first_name_number'); ?>" class="img-responsive">
                </figure>
  <?php } ?>
 <?php if(carbon_get_the_post_meta('first_name_number')){?>
                <h3><?php echo carbon_get_the_post_meta('first_name_number'); ?></h3>
  <?php } ?>
  <?php if(carbon_get_the_post_meta('first_text_number')){?>
                <p><?php echo carbon_get_the_post_meta('first_text_number'); ?>
                </p>
 <?php } ?>
                <ul class="fh5co-social">
 <?php
 $table = carbon_get_post_meta( $post->ID, 'slide_socialspy', 'complex' );
//print_r( $data );
 if ( ! empty( $table ) ):
?>
<?php foreach ( $table as $tr ): ?>

<li><a href="<?php echo $tr['social_links'] ?>"><i class="<?php echo $tr['social_icon'] ?>"></i></a></li>

<?php endforeach; ?>
<?php endif; ?>

                 <!--    <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-github"></i></a></li>
                  <li><a href="#"><i class="icon-vk"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-pinterest"></i></a></li>
                  <li><a href="#"><i class="icon-instagram"></i></a></li>
                  <li><a href="#"><i class="icon-skype"></i></a></li> -->

                </ul>
              </div>

              <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
   <?php if(carbon_get_the_post_meta('two_foto_number') && carbon_get_the_post_meta('two_name_number')){?>
                <figure>
                <img src="<?php echo carbon_get_the_post_meta('two_foto_number'); ?>" alt="Участник команды <?php echo carbon_get_the_post_meta('two_name_number'); ?>" class="img-responsive">
                </figure>
    <?php } ?>
<?php if(carbon_get_the_post_meta('two_name_number')){?>
                <h3><?php echo carbon_get_the_post_meta('two_name_number'); ?></h3>
<?php } ?>
<?php if(carbon_get_the_post_meta('two_text_number')){?>
                <p><?php echo carbon_get_the_post_meta('two_text_number'); ?>
                </p>
<?php } ?>

                <ul class="fh5co-social">

 <?php
 $table1 = carbon_get_post_meta( $post->ID, 'slide_socialspytwo', 'complex' );
//print_r( $data );
 if ( ! empty( $table1 ) ):
?>
<?php foreach ( $table1 as $tr1 ): ?>

<li><a href="<?php echo $tr1['social_links_two'] ?>"><i class="<?php echo $tr1['social_icon_two'] ?>"></i></a></li>

<?php endforeach; ?>
<?php endif; ?>
                </ul>
              </div>

       <!--        <div class="clearfix visible-sm-block visible-xs-block"></div> -->

              <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
<?php if(carbon_get_the_post_meta('three_foto_number') && carbon_get_the_post_meta('three_name_number')){?>
                <figure>
                <img src="<?php echo carbon_get_the_post_meta('three_foto_number'); ?>" alt="Участник команды <?php echo carbon_get_the_post_meta('three_name_number'); ?>" class="img-responsive">
                </figure>
<?php } ?>
<?php if(carbon_get_the_post_meta('three_name_number')){?>
                <h3><?php echo carbon_get_the_post_meta('three_name_number'); ?></h3>
   <?php } ?>
   <?php if(carbon_get_the_post_meta('three_text_number')){?>
                <p><?php echo carbon_get_the_post_meta('three_text_number'); ?> </p>
   <?php } ?>
                <ul class="fh5co-social">
 <?php
 $table2 = carbon_get_post_meta( $post->ID, 'slide_socialspythree', 'complex' );
//print_r( $data );
 if ( ! empty( $table2 ) ):
?>
<?php foreach ( $table2 as $tr2 ): ?>

<li><a href="<?php echo $tr2['social_links_three'] ?>"><i class="<?php echo $tr2['social_icon_three'] ?>"></i></a></li>

<?php endforeach; ?>
<?php endif; ?>


                </ul>
              </div>

              <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
    <?php if(carbon_get_the_post_meta('foure_foto_number') && carbon_get_the_post_meta('foure_name_number')){?>
                <figure>
                <img src="<?php echo carbon_get_the_post_meta('foure_foto_number'); ?>" alt="Участник команды <?php echo carbon_get_the_post_meta('foure_name_number'); ?>" class="img-responsive">
                </figure>
    <?php } ?>
    <?php if(carbon_get_the_post_meta('foure_name_number')){?>
                <h3><?php echo carbon_get_the_post_meta('foure_name_number'); ?></h3>
 <?php } ?>
 <?php if(carbon_get_the_post_meta('foure_text_number')){?>
                <p><?php echo carbon_get_the_post_meta('foure_text_number'); ?> </p>
<?php } ?>
                <ul class="fh5co-social">
 <?php
 $table3 = carbon_get_post_meta( $post->ID, 'slide_socialspyfoure', 'complex' );
//print_r( $data );
 if ( ! empty( $table3 ) ):
?>
<?php foreach ( $table3 as $tr3 ): ?>

<li><a href="<?php echo $tr3['social_links_foure'] ?>"><i class="<?php echo $tr3['social_icon_foure'] ?>"></i></a></li>

<?php endforeach; ?>
<?php endif; ?>

                </ul>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div id="fh5co-services">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row">
             <?php if(carbon_get_the_post_meta('name_features_block')){?>
              <h2 class="section-lead text-center"><?php echo carbon_get_the_post_meta('name_features_block'); ?></h2>
<?php } ?>






<?php
 $table_features = carbon_get_post_meta( $post->ID, 'slide_features', 'complex' );
//print_r( $data );
 if ( ! empty( $table_features ) ):
?>
<?php foreach ( $table_features as $tf ): ?>
              <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
                <div class="fh5co-icon to-animate"><i class="<?php echo $tf['features_foto'] ?>"></i></div>
                <div class="fh5co-desc">
                  <h3><?php echo $tf['features_name'] ?></h3>
                  <p><?php echo $tf['features_text'] ?> </p>
                </div>
              </div>


<?php endforeach; ?>
<?php endif; ?>















            </div>
          </div>
        </div>
      </div>
    </div>











<?php get_footer(); ?>