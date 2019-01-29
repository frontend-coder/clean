<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

<!--
								<h3>Paragraph</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								<ul class="fh5co-list-check">
									<li>Far far away</li>
									<li>The word mountains</li>
									<li>Far from the countries</li>
									<li>Bookmarksgrove right</li>
								</ul> -->
							</div>
						<div class="col-md-9 col-md-pull-3">

      <?php  while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('template-parts/content', get_post_format()); ?>
        <?php endwhile; ?>

							</div>

<!-- 							<div class="col-md-9 col-md-pull-3">
								<p class="animate-box">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<p class="animate-box">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<p class="animate-box">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<p class="animate-box">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<p class="animate-box">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<p class="animate-box">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<p class="animate-box">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<p class="animate-box">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div> -->



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
