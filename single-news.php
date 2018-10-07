<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>



			<!-- Do the left sidebar check -->

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>
			

				<div class="wrapper splash" data-animation="intro-reverse" style="background-image: url('http://amg.local/wp-content/uploads/2018/10/iStock-157719744.jpg')">
					<div class="splash__overlay"></div>
					<div class="overlay__img" style="background-image:url('http://amg.local/wp-content/uploads/2018/07/cta_background-1.png')" ></div>
					<div class="container splash__container">
						<div class="row splash__row">
							<div class="col-md-10 offset-md-1 splash__row">
									<h1 class="splash__text">Adviser Update</h1>
							</div>
						</div>
					</div>
				</div>

						<div class="wrapper" data-animation="intro">
						<div class="container ">
							<div class="row">
								<div class="col-md-10 offset-md-1">
								<?php get_template_part( 'loop-templates/content', 'single' ); ?>
								</div>
							</div>
						</div>
					</div>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->


<?php get_footer(); ?>
