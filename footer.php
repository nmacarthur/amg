<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php 
	$cta_line = get_field('cta_line', 'option');
	$cta_buttonText = get_field('cta_buttonText', 'option');
	$cta_img = get_field('cta_img', 'option');
	
	$prefooterlogo = get_field('footer_logo', 'option');
	$prefooterline1 = get_field('footer_line1', 'option');
	$prefooterline2 = get_field('footer_line2', 'option');

	$contactline = get_field('contact_line', 'option');
	$PObox = get_field('pobox', 'option');
	$PhoneNo = get_field('phone_no','option');
	$email = get_field('email', 'option');

	$copyright = get_field('copyright', 'option');

?>

<?php get_sidebar( 'footerfull' ); ?>
<div class="wrapper cta" style="background: url(<?php echo $cta_img['url'] ?>); background-size:cover; background-position:center;" data-animation="intro"/>
	<div class="overlay"></div>
	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<?php if ( $cta_line ): ?>
					<h2 class="bold cta__header"><?php echo $cta_line ?></h2>
				<?php endif; ?>
				<div class="button__container">
					<?php if( $cta_buttonText ): ?>
						<button class="btn btn-secondary cta__button"><?php echo $cta_buttonText ?></button>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wrapper prefooter">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="logo">
					<?php if ( $prefooterlogo ): ?>
						<img class="logo__img" src="<?php echo $prefooterlogo['url'] ?>" />
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-6">
				<?php if ( $prefooterline1 ): ?>
					<h3 class="prefooter__heading"><?php echo $footerline1 ?></h3>
				<?php endif; ?>
				<?php if ( $prefooterline2 ):?>
					<h3 class="prefooter__heading emphasis"><?php echo $footerline2 ?></h3>
				<?php endif; ?>
				<?php if ( $contactline ): ?>
					<p class="prefooter__contact"><?php echo $contactline ?></p>
				<?php endif; ?>
				<?php if ( $PObox ): ?>
					<p class="prefooter__text regular"><span class="icon marker"><i class="fas fa-map-marker-alt"></i></span><?php echo $PObox ?></p>
				<?php endif; ?>
				<?php if ( $PhoneNo ): ?>
					<p class="prefooter__text regular"><span class="icon phone"><i class="fas fa-phone"></i></span><?php echo $PhoneNo ?></p>
				<?php endif; ?>
				<?php if ( $email ): ?>
					<p class="prefooter__text regular"><span class="icon envelope"><i class="fas fa-envelope"></i></span><?php echo $email ?></p>
				<?php endif; ?>
				<p class="prefooter__text emphasis padded">Sign up to our newsletter</p>
			</div>
			<div class="col-md-3">
				<div class="socialicons">
					<span class="icon social"><i class="fab fa-linkedin"></i></span>
					<span class="icon social"><i class="fab fa-facebook"></i></span>
					<span class="icon social"><i class="fab fa-twitter"></i></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<div class="prefooter__line"></div>
			</div>
			<div class="col-md-6 offset-md-3">
			<?php
				wp_nav_menu( array( 
					'theme_location' => 'prefooter-menu', 
					'menu_class' => 'prefooter__links',
					'container' => '' ) ); 
				?>
			</div>
		</div>
	</div>
</div>
<div class="wrapper footer" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-12 site-footer">

				<footer class="site-footer" id="colophon">
					<?php if( $copyright ): ?>
						<p class="footer__text regular">&#169; <?php echo $copyright ?></p>
					<?php endif; ?>
					<?php
						wp_nav_menu( array( 
							'theme_location' => 'footer-menu', 
							'menu_class' => 'footer__links',
							'container' => '' ) ); 
						?>
					</div>
				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<script>
	jQuery(document).ready(function($){
		setUpElements('intro');
		setUpElements('intro-reverse');
		setUpElements('menu__animation');
		window.setTimeout(function(){
		window.setTimeout(function(){
			window.scrollTo(0,0);

			$('.loading').css('opacity', '0');
			$('.loading').css('z-index', '-10');
			window.setTimeout(function(){
				animation('intro-reverse');
				animation('menu__animation');
				window.setTimeout(() => {
					animation('intro');
					emergence.init();
				},0);
			},0)
		},0);

			$('a').click(function(event) {
			event.preventDefault();
			var href = this.href;
			$('.loading').css('z-index', '20');
			$('.loading').css('opacity', '1');
			window.setTimeout(() => {
				window.location = href;
			},500);
		});
	
		},600);
//ss//
	



		function setUpElements(animation){
			var elements = document.querySelectorAll('[data-animation=' + animation + ']');
			for(i = 0; i < elements.length; i++){
				let object = elements[i];
				object.classList.add(animation);
			}
		}

		function animation(animation){
			var elements = document.querySelectorAll('[data-animation=' + animation + ']');
			for(i = 0; i < elements.length; i++){
				let object = elements[i];
				object.style.animationDelay = (i * 200) + "ms";
				window.setTimeout(() => {object.classList.add('animating');
					window.setTimeout(()=>{
						object.classList.remove(animation)},1200)
				},600);
			}
		}		
	
	});
	
	function toggleModal(id){
		var modal = document.getElementById(id);
		jQuery('#'+id).modal('toggle');
	}


</script>

<?php wp_footer(); ?>

</body>

</html>

