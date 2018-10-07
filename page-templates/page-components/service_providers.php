<!--Service Providers-->
<?php 
       if(get_row_layout() == 'service_providers'):

        $service_providers_title = get_sub_field('service_providers_title');
    ?>

    <div class="wrapper service_providers" data-animation="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
               
                    <?php if( $service_providers_title ): ?>
                        <h1 class="service_providers__title"><?php echo $service_providers_title ?></h1>
                    <?php endif; ?>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-1 "></div>
                    <?php if( have_rows('service_providers_repeater') ):

                        while ( have_rows('service_providers_repeater') ) : the_row(); 
                            $service_providers_subtitle = get_sub_field('subtitle');
                            $service_providers_image = get_sub_field('image'); 
                            $service_providers_link = get_sub_field('link'); 

                        ?>
                        <div class="col-md-2 flex-col justify-content-center">
                            <a href="<?php echo $service_providers_link['url']; ?>" >
                                <img class="service_providers__image" src="<?php echo $service_providers_image['url'] ?>"/>
                            </a>
                            <p class="service_providers__subtitle"><?php echo $service_providers_subtitle ?></p>
                        </div>
                        <?php endwhile;?>
                        <?php endif; ?>
                        <div class="col-md-1"></div>

                    </div>

        </div>
    </div>

<?php endif; ?>