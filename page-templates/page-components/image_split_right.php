<?php 
    if(get_row_layout() == 'image_split_right'):
                            
        $image_split_text = get_sub_field('image_split_right_image_split_text');
        $image_split_image = get_sub_field('image_split_right_image_split_image');
        $background_color = get_sub_field('image_split_right_background_color');

        ?>
        
    <div class="wrapper imgsplit--right" data-animation="intro" style="background-color:<?php echo $background_color ?>;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                <?php if ( $image_split_text ): ?>
                                <h2 class="imgsplit__text"><?php echo $image_split_text ?></h2>
                            <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if ($image_split_image): ?>
            <div class="col-md-5 imgsplit__img imgsplit__img--right" style="background-image:url('<?php echo $image_split_image['url'] ?>')">
            </div>
        <?php endif; ?>
    </div>
<?php endif;?>
