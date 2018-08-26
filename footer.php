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

<script>

var TPD = '';
  jQuery(document).ready(function($) {
		  
	  $('a.reset').on('click', function(e){
		  e.preventDefault();
		  $('form.wpcf7-form').trigger("reset");
		  $('input.age').hide();
		  $('.deathFields').hide();
		  $('.tpdFields').hide();
		  $('.sciFields').hide();
		  $('.adviser-fee-fields').hide();
	  });
	  
	  $('form.wpcf7-form').find('br').remove();
	  
	  $( "form.wpcf7-form" ).submit(function( event ) {
		  console.log('yo');
		  //window.location = 'https://www.webmerge.me/merge/21549/i3mm8c?_use_get=1&download=1&' + $(this).serialize();
	  });	
	  
	  $( "form.test" ).submit(function( event ) {
		  //window.location = 'https://www.webmerge.me/merge/25657/8wf8vm?_use_get=1&download=1&' + $(this).serialize();
	  });
	  
	  $('form.wpcf7-form input[type=submit]').attr('disabled', 'disabled');	
	  
	  $('form.wpcf7-form input, form.wpcf7-form select').change(function(){
	  
		  var gender = String($('select[name=gender]').val());
		  var smokerStatus = String($('select[name=smokerStatus]').val());
		  var age = $('input[name=age]').val();
		  var benefitPeriod = $('select[name=benefitPeriod]').val();
		  var waitingPeriod = $('select[name=waitingPeriod]').val();
		  var SCI = $('input[name=sciOccupation]').val();	
		  
		  //Dealing with time
	  	var timeNow = moment();
	  	var dob = moment($('input[name=birth-day]').val()+'-'+$('input[name=birth-month]').val()+'-'+$('input[name=birth-year]').val(), 'DD-MM-YYYY');
	  	$('input[name=dobFormatted]').val($('input[name=birth-day]').val() +'/'+ $('input[name=birth-month]').val() +'/'+ $('input[name=birth-year]').val());
	  	var ageNextBirthday = timeNow.diff(dob, 'years') + 1;
	  	$('input[name=age]').val(ageNextBirthday);
	  	if($('input[name=year]').val() != '') {
	  		$('input[name=age]').show();
	  	}
	  
		  $('input[name=genderText]').val($("select[name=gender] option:selected").text());
		  $('input[name=statePercent]').val(($("select[name=state] option:selected").val() * 100).toFixed(2) - 100);
	  
		  var deathAge = deathAgeIndex[gender][smokerStatus][ageNextBirthday];
		  $('input[name=deathAgeIndex]').val(deathAge);
		  
		  var tpdAge = tpdAgeIndex[gender][smokerStatus][ageNextBirthday];
		  $('input[name=tpdAgeIndex]').val(tpdAge);
		  
		  var sciAge = sciAgeIndex[benefitPeriod][waitingPeriod][gender][ageNextBirthday];
		  $('input[name=sciAgeIndex]').val(sciAge);  	
		  
		  var TPDOccupationIndex = TPDOccupationCategory["Total & Permanent Disablement (TPD)"][""+$('select[name=occupational-category]').val()+""];
		
		var SCIOccupationIndex = SCIOcuupationCategory["Salary Continuance Insurance (SCI)"][""+$('select[name=occupational-category]').val()+""];	
				  
		  $.each($(':checkbox'), function(){
			  if($(this).val() == 'Death') {
				if($(this).is(':checked')) { 
					$('.deathFields').show(); 
					
				}
				else { 
					$('.deathFields').hide(); $('input.deathCover').val(''); $('input.death').val(''); 
				}
			}
			if($(this).val() == 'Total & Permanent Disablement (TPD)') {
				if($(this).is(':checked')) { 
					$('.tpdFields').show(); 
					$('input[name=tpdLoading]').val(TPDOccupationIndex);
				}
				else { 
					$('.tpdFields').hide(); 
					$('input.tpdCover').val(''); 
					$('input.tpd').val(''); 
					$('input[name=tpdLoading]').val('N/A');
				}
			}
			if($(this).val() == 'Salary Continuance Insurance (SCI)') {
				if($(this).is(':checked')) { 
					if($('select#state').val() == '') {
						alert('You must select your state');
						$('select#state').parent('div').css('background', '#ffdbdb');
					} else {
						$('div.state').css('background', '#fff');
					}
					$('.sciFields').show();
					$('input[name=waiting-period-text]').val($("#waiting option:selected").text());
					$('input[name=benefit-period-text]').val($("#benefit option:selected").text());
					$('input[name=sciLoading]').val(SCIOccupationIndex);
					$('input[name=salaryText]').val($('input[name=salary]').val());
				}
				else { 
					$('.sciFields').hide(); $('input.sciCover').val(''); 
					$('input.sci').val('');
					$('input[name=waiting-period-text]').val('N/A');
					$('input[name=benefit-period-text]').val('N/A');
					$('input[name=statePercent]').val('N/A');
					$('input[name=salaryText]').val('N/A');
					$('input[name=sciLoading]').val('N/A');
				}
			}
			if($(this).val() == 'Tick to add Insurance Service Fee payable to adviser') {
				if($(this).is(':checked')) { 
					$('.adviser-fee-fields').show(); 
				}
				else { 
					$('.adviser-fee-fields').hide(); $('input.fees').val(''); $('input.fees').val(''); $('input.fee-percentage').val(''); 
				}	
			}
		  });
		
		  
		  var deathAmount = $('input[name=deathAgeIndex]').val() / 1000 * $('input[name=death-insurance]').val().replace(/,/g,'');
		var tpdAmount = $('input[name=tpdAgeIndex]').val() / 1000 * $('input[name=tpd-insurance]').val().replace(/,/g,'') * TPDOccupationIndex;
		var sciAmount = ($('input[name=monthly-sci-benefit]').val().replace(/,/g,'') * ($('input[name=sciAgeIndex]').val() / 100) * SCIOccupationIndex) * $('select[name=state]').val();
		var total = deathAmount + tpdAmount + sciAmount;
		
		var serviceFee = ($('input.fee-percentage').val() / 100) * total;
		$('input[name=insurance-service-fee]').val(serviceFee.toFixed(2));
		if(serviceFee == '0.00') {
			$('input[name=insurance-service-fee]').val('N/A');
			$('input[name=insurance-service-fee-total]').val('N/A');
		} else {
			$('input[name=insurance-service-fee-total]').val((serviceFee + total).toFixed(2));		
		}
		
		addCommas($('input[name=death-insurance]'), $('input[name=death-insurance]').val());
		addCommas($('input[name=tpd-insurance]'), $('input[name=tpd-insurance]').val());
		addCommas($('input[name=monthly-sci-benefit]'), $('input[name=monthly-sci-benefit]').val());
		addCommas($('input[name=salary]'), $('input[name=salary]').val());
		addCommas($('input[name=salaryText]'), $('input[name=salaryText]').val());
		
		if(deathAmount !== 0) {
			$('input.death').val(deathAmount.toFixed(2));
			$('input[name=deathInsuranceText]').val($('input.deathCover').val());
			$('input[name=deathTotalText]').val($('input.death').val());
			addCommas($('input[name=deathTotalText]'), $('input[name=deathTotalText]').val());
		} else {
			$('input.death').val('');
			$('input[name=deathInsuranceText]').val('N/A');
			$('input[name=deathTotalText]').val('N/A');
		}
		if(tpdAmount !== 0) {
			$('input.tpd').val(tpdAmount.toFixed(2));
			$('input[name=tpdInsuranceText]').val($('input.tpdCover').val());
			$('input[name=tpdTotalText]').val($('input.tpd').val());
			addCommas($('input[name=tpdTotalText]'), $('input[name=tpdTotalText]').val());
		} else {
			$('input.tpd').val('');
			$('input[name=tpdInsuranceText]').val('N/A');
			$('input[name=tpdTotalText]').val('N/A');
		}
		if(sciAmount !== 0) {
			$('input.sci').val(sciAmount.toFixed(2));
			$('input[name=sciInsuranceText]').val($('input.sciCover').val());
			$('input[name=sciTotalText]').val($('input.sci').val());
			addCommas($('input[name=sciTotalText]'), $('input[name=sciTotalText]').val());
		} else {
			$('input.sci').val('');
			$('input[name=sciInsuranceText]').val('N/A');
			$('input[name=sciTotalText]').val('N/A');
		}
		if(total !== 0) {
			$('form.wpcf7-form input[type=submit]').removeAttr('disabled');
		}
		$('input.total').val((deathAmount + tpdAmount + sciAmount).toFixed(2));
								
		
		if($("#state option:selected").text() !== 'Please select') {
			$('input[name=state-text]').val($("#state option:selected").text());
		}
		$('input[name=tpd-jobs-text]').val($("#tpdJobs option:selected").text());
		$('input[name=sci-jobs-text]').val($("#sciJobs option:selected").text());
		$('input[name=occupation-category-text]').val($("#occupationCategory option:selected").text());
		$('input[name=smoker-text]').val($("#smokerSelect option:selected").text());
		
		$('input[name=tpd-death]').val((deathAmount + tpdAmount).toFixed(2));
		if($('input[name=tpd-death]').val() == '0.00') {
			$('input[name=tpd-death]').val('N/A')
		} else {
			addCommas($('input[name=tpd-death]'), $('input[name=tpd-death]').val());
		}
		
		addCommas($('input.death'), $('input.death').val());
		addCommas($('input.tpd'), $('input.tpd').val());
		addCommas($('input.sci'), $('input.sci').val());
		addCommas($('input.total'), $('input.total').val());
		addCommas($('input[name=insurance-service-fee]'), $('input[name=insurance-service-fee]').val());
		addCommas($('input[name=insurance-service-fee-total]'), $('input[name=insurance-service-fee-total]').val());
		
		var fullDate = new Date();
		var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) :  + (fullDate.getMonth()+1);
		var currentDate = fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
		$('input[name=date]').val(currentDate);
		
		function addCommas(input, value) {
			var commaremoved = value.replace(/,/g,'');
			input.val(commaremoved.replace(/\B(?=(\d{3})+(?!\d))/g, ","));
		}
	});
  });
  
</script>

</body>

</html>

