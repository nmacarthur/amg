<?php // Splash block

    if(get_row_layout() == 'splash'):
 
        $splash_image = get_sub_field('splash_splash_image');
        $splashText = get_sub_field('splash_splash_text');
        $overlayImg = get_sub_field('splash_overlayImg');
    ?>

    <div class="wrapper splash" data-animation="intro-reverse" style="background-image: url('<?php echo $splash_image['url'] ?>')">
        <div class="splash__overlay"></div>
        <div class="overlay__img" style="background-image:url('<?php echo $overlayImg['url']; ?>');" ></div>
        <div class="container splash__container">
            <div class="row splash__row">
                <div class="col-md-10 offset-md-1 splash__row">
                    <?php if ( $splashText ): ?>
                        <h1 class="splash__text"><?php echo $splashText ?></h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php 
endif; ?>


