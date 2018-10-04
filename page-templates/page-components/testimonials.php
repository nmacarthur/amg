<!-- Testimonials -->
<?php   
  if(get_row_layout() == 'testimonials'):
        $bg_color = get_sub_field('testimonials_background_color');
        ?>
        <div class="wrapper padding" data-animation="intro" style="background-color:<?php echo $bg_color ?>">
                <?php if( have_rows('testimonials_repeater') ):
                    $count2 = 0;

                    ?>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            
                    <div class="carousel-inner">
                    <?php while ( have_rows('testimonials_repeater') ) : the_row(); 
                            $count += 1;
                            $testimonial_image = get_sub_field('image');
                            $testimonial_text = get_sub_field('text'); 
                        ?>
                <div id="<?php echo $count; ?>" class="carousel-item <?php if(get_sub_field('first_slide')): echo "active"; endif;?>">
                <div class="container">
                    <div class='row block__center'>
                        <div class='col-md-2'>
                            <img class="testimonial__img" src="<?php echo $testimonial_image['url'] ?>" />
                        </div>
                        <div class="col-md-7 offset-md-1">
                            <?php echo $testimonial_text ?>
                        </div>
                    </div>
                </div>
                </div>

                <?php endwhile; ?>
                </div>
                <div class="container">
                    <div class='row'>
                        <ol class="col-md-4 offset-md-4 carousel-indicators">
                        <?php while ( have_rows('testimonials_repeater') ) : the_row(); ?>
                            <li data-target="#carouselExampleSlidesOnly" data-slide-to="<?php echo $count2; ?>" class="<?php if($count2 == 1): echo "active"; endif;?>"></li>
                            <?php $count2 += 1 ?>
                        <?php endwhile; ?>
                        </ol>
                    </div>    
                </div>
            </div>
                
                <?php endif; ?>
            </div>

<?php endif; ?>