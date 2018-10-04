<!--Tri Field-->
    
    <?php     
    if(get_row_layout() == 'trifield'):

        $tri_field_text = get_sub_field('trifield_text');
        $background_color = get_sub_field('trifield_background_color');
                    ?>
        <div class="wrapper tri_field" data-animation="intro" style="background-color:<?php echo $background_color ?>;">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-10 offset-md-1">
                    <?php echo $tri_field_text ?>
                    </div>
                </div>
                <?php if( have_rows('trifield_image_repeater') ): ?>
                    <div class="row">

                    <?php while ( have_rows('trifield_image_repeater') ) : the_row(); 

                        // display a sub field value
                        $image_repeater_image = get_sub_field('image');
                        $image_repeater_text = get_sub_field('text'); 
                    ?>
                    <div class="col-md-6 col-lg-3  card__container">
                        <div class="card">
                            <div class="card-body">
                                <?php echo $image_repeater_text ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
