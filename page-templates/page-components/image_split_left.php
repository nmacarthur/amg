<!--Image Split Left-->
<?php     if(get_row_layout() == 'image_split_left'):

            $image_split_text = get_sub_field('image_split_left_image_split_text');
            $image_split_image = get_sub_field('image_split_left_image_split_image');
            $background_color = get_sub_field('image_split_left_background_color');

            $check_section_title = get_sub_field('image_split_left_check_section_title');
            ?>
    <div class="wrapper imgsplit" data-animation="intro" style="background-color:<?php echo $background_color ?>;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                
                        <h2 class="imgsplit__text"><?php echo $image_split_text ?></h2>
                     
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4><?php echo $check_section_title ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                <?php if( have_rows('image_split_left_check_repeater_left') ):
                    while ( have_rows('image_split_left_check_repeater_left') ) : the_row(); 
                        $text = get_sub_field('text');
                    ?>
                    <div class="check__container"><i class="fas fa-check"></i><p class="check"><?php echo $text ?></p></div>
                    <?php endwhile;?>
                    <?php endif; ?>
                </div>
                <div class="col-md-3">
                <?php if( have_rows('image_split_left_check_repeater_right') ):
                    while ( have_rows('image_split_left_check_repeater_right') ) : the_row(); 
                        $text = get_sub_field('text');
                    ?>
                    <div class="check__container"><i class="fas fa-check"></i><p class="check"><?php echo $text ?></p></div>
                    <?php endwhile;?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if ($image_split_image): ?>
            <div class="col-md-5 offset-md-7 imgsplit__img" style="background-image:url('<?php echo $image_split_image['url'] ?>'); background-size:cover;">
            </div>
        <?php endif; ?>
      
    </div>
<?php endif;?>