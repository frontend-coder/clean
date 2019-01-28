<?php get_header(); ?>










<?php if( is_front_page() && get_theme_mod('clean_home_category') ): ?>
   <div id="fh5co-portfolio">

        <?php $query = new WP_Query( array(
            'category_name' => get_theme_mod('clean_home_category'),
        ) ); ?>

        <?php if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) :
         $query->the_post(); ?>
            <?php
            if( has_post_thumbnail() ){
                $img_url = get_the_post_thumbnail_url();
            }else{
                $img_url = 'https://picsum.photos/1280/864';
            }
            ?>

            <div class="fh5co-portfolio-item <?php if( $i % 2 == 0 ) echo 'fh5co-img-right'; ?>">
                <div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php echo $img_url; ?>);"></div>
                <div class="fh5co-portfolio-description">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(''); ?>
                    <p><a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read more', 'clean'); ?></a></p>
                </div>
            </div>

        <?php $i++; endwhile; ?>
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>

   <?php endif; ?>










		<div id="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<h2 class="section-lead text-center">Leadership</h2>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
								<figure>
								<img src="images/user.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive">
								</figure>
								<h3>Will Barrow</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								<ul class="fh5co-social">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
								<figure>
								<img src="images/user_2.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive">
								</figure>
								<h3>Max Conversion</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								<ul class="fh5co-social">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul>
							</div>
							<div class="clearfix visible-sm-block visible-xs-block"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
								<figure>
								<img src="images/user_3.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive">
								</figure>
								<h3>Hanson Deck</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								<ul class="fh5co-social">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
								<figure>
								<img src="images/user.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive">
								</figure>
								<h3>Sue Shei</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								<ul class="fh5co-social">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
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
							<h2 class="section-lead text-center">Features</h2>
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-present"></i></div>
								<div class="fh5co-desc">
									<h3>100% Free</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-eye"></i></div>
								<div class="fh5co-desc">
									<h3>Retina Ready</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
							<div class="clearfix visible-sm-block visible-xs-block"></div>
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-crop"></i></div>
								<div class="fh5co-desc">
									<h3>Fully Responsive</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-speedometer"></i></div>
								<div class="fh5co-desc">
									<h3>Lightweight</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
							<div class="clearfix visible-sm-block visible-xs-block"></div>
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-heart"></i></div>
								<div class="fh5co-desc">
									<h3>Made with Love</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-umbrella"></i></div>
								<div class="fh5co-desc">
									<h3>Eco Friendly</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
							<div class="clearfix visible-sm-block visible-xs-block"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>