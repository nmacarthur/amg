<?php
/** The template for the splash component */
    $splash = get_field('splash');
    echo "YO";
            // check if the flexible content field has rows of data
        // check if the flexible content field has rows of data
    if( have_rows('splash') ):
        //print_r($splash);

        // loop through the rows of data
    while ( have_rows('splash') ) : the_row();

            $layout = get_row_layout();

            if($layout == 'splash_layout'){
                $splash_image = get_sub_field('splash_image');
                $splashText = get_sub_field('splash_text');
            }

    endwhile;

    // no layouts found

    endif;
    ?>
           <div class="wrapper splash" style="background-image: url('<?php echo $splash_image['url'] ?>')">
    <div class="splash__overlay"/>
        <img class="overlay__img" src="http://localhost/wordpress/wp-content/uploads/2018/07/ring.png"/>
    </div>
        <div class="container splash__container">
            <div class="row">
                <div class="col-md-6 offset-md-2">
                    <?php if ($splashText): ?>
                        <h1 class="splash__text"><?php echo $splashText ?></h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php ?>

