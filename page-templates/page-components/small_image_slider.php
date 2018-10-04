<!-- Small_Img slider -->

<?php if(get_row_layout() == 'small_image_slider'):

    $title = get_sub_field('small_image_slider_title');

    ?>
    <div class="wrapper" data-animation="intro">
        <div class="container">
            <div class="row">
                <h3><?php echo $title; ?></h3>
                </div>
                <?php if( have_rows('small_image_slider_repeater') ): ?>
                <div class="row">
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php while ( have_rows('small_image_slider_repeater') ) : the_row(); 
                        // display a sub field value
                        $sml_img_repeater_image = get_sub_field('repeater_image');
                    ?>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $sml_img_repeater_image['url'] ?>" alt="">
                    </div>

                    <?php endwhile; ?>
                    </div>
                        <a class="carousel-control-prev controls" onClick="back()"href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    </div>
                    <?php endif; ?>

        </div>
    </div>
<?php endif; ?>
