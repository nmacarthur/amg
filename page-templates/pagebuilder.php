<?php 

/**
 * Template Name: Page Builder
 *
 * @package understrap
 */

    get_header();

    while ( have_posts() ) : the_post();

    ?>

<!--Splash-->
<?php if( have_rows('splash') ): 
    while ( have_rows('splash') ) : the_row();

    $layout = get_row_layout();

    if($layout == 'splash_layout'){
        $splash_image = get_sub_field('splash_image');
        $splashText = get_sub_field('splash_text');
    }

    endwhile;
    ?>
    <div class="wrapper splash" data-animation="intro-reverse" style="background-image: url('<?php echo $splash_image['url'] ?>')">
        <div class="splash__overlay"></div>
        <div class="overlay__img"  ></div>
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
<?php endif; ?>

<!-- Into Blurb -->
<?php if( get_field('intro_blurb') ): 
        $blurbText = get_field('intro_blurb');
    ?>
    <div class="wrapper" data-animation="intro">
        <div class="container ">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <?php if ( $blurbText ): ?>
                        <?php echo $blurbText ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<!--Tri Field-->
<?php if( have_rows('tri_field') ): ?>
    <?php while ( have_rows('tri_field') ) : the_row();

            $layout = get_row_layout();

            if($layout == 'tri_field_layout'):
                $tri_field_text = get_sub_field('tri_field_text');
                $background_color = get_sub_field('background_color');
            endif;
                ?>
    <div class="wrapper tri_field" data-animation="intro" style="background-color:<?php echo $background_color ?>;">
        <div class="container">
            <div class="row">
            
                <div class="col-md-10 offset-md-1">
                   <?php echo $tri_field_text ?>
                </div>
            </div>
            <?php if( have_rows('tri_field_image_repeater') ): ?>
                <div class="row">

                <?php while ( have_rows('tri_field_image_repeater') ) : the_row(); 

                    // display a sub field value
                    $image_repeater_image = get_sub_field('image_repeater_image');
                    $image_repeater_text = get_sub_field('image_repeater_text'); 
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
        <?php endwhile; ?>
    </div>
<?php endif; ?>


<!-- Two Column Icon Section -->

<?php if (have_rows('two_column_icon_section')): ?>
    <?php while ( have_rows('two_column_icon_section') ) : the_row();

                $layout = get_row_layout();

                if($layout == 'two_column_icon_section_layout'):
                    $title = get_sub_field('title');
                    $background_color = get_sub_field('background_color');
                ?>
    <div class="wrapper" style="background-color:<?php echo $background_color ?>;" data-animation="intro">
        <div class="container">
            <div class="row padding">
            
                <div class="col-md-6 offset-md-3">
                    <h2 class="centered"><?php echo $title ?></h2>
                </div>
                <?php endif; ?>
            </div>
            <?php if( have_rows('icon_repeater') ): ?>
                <?php while ( have_rows('icon_repeater') ) : the_row(); 
                    // display a sub field value
                    $icon = get_sub_field('icon_one');
                    $text = get_sub_field('text');
                    $icon_2 = get_sub_field('icon_two'); 
                    $text_2 = get_sub_field('text_two');
                ?>
                <div class="row padding">
                    <div class="col-md-1 offset-md-1 icon__row"><img class="icon" src="<?php echo $icon['url'] ?>"></img></div>
                    <div class="col-md-4 text__row"><?php echo $text?></div>
                    <div class="col-md-1 icon__row"><img class="icon" src="<?php echo $icon_2['url'] ?>"></img></div>
                    <div class="col-md-4 text__row"><?php echo $text_2?></div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if( have_rows('icon_repeater_two') ): ?>
                <div class="row padding">
                <?php while ( have_rows('icon_repeater_two') ) : the_row(); 
                    // display a sub field value
                    $icon = get_sub_field('icon_one');
                    $text = get_sub_field('text');
                    $icon_2 = get_sub_field('icon_two'); 
                    $text_2 = get_sub_field('text_two');
                ?>
                <div class="row">
                    <div class="col-md-1 offset-md-1"><img class="icon" src="<?php echo $icon['url'] ?>"></img></div>
                    <div class="col-md-4"><?php echo $text?></div>
                    <div class="col-md-1"><img class="icon" src="<?php echo $icon_2['url'] ?>"></img></div>
                    <div class="col-md-4"><?php echo $text_2?></div>
                </div>
                <?php endwhile; ?>
                </div> 
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<!-- One column Icon Section -->

<?php if (have_rows('one_column_icon_section')): ?>
<?php while ( have_rows('one_column_icon_section') ) : the_row(); ?>
        <?php 
                     $layout = get_row_layout();

                    if($layout == 'one_column_icon_section_layout'):
                        $one_column_text = get_sub_field('text');
                        $background_color = get_sub_field('color');
                    endif;
                        ?>
    <div class="wrapper" data-animation="intro" style="background-color:<?php echo $background_color;?>;">
        <div class="container">
        
            <div class="row icon_section" >
                <div class="col-md-<?php echo get_sub_field('column_width') ?>">
                    
                    <?php echo $one_column_text ?>
                </div>
                <div class="col-md-6 icon_column">
                <?php if( have_rows('icon_repeater') ): ?>
                <?php while ( have_rows('icon_repeater') ) : the_row(); 
                    // display a sub field value
                    $icon = get_sub_field('icon_one');
                    $text = get_sub_field('text');
                ?>
                <div class="row padding">
                    <div class="col-md-2 offset-md-2 icon__row"><img class="icon" src="<?php echo $icon['url'] ?>"></img></div>
                    <div class="col-md-8 text__row"><?php echo $text?></div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php if(get_sub_field('text_section')):
                    $text_section = get_sub_field('text_section');
                    ?>
                    <div class="row padding">
                    <div class="col-md-10 offset-md-2">
                        <?php echo $text_section ?> 
                    </div>
                    </div>
                <? endif?>
                </div>
            </div>

        </div>
    </div>
    <?php endwhile ?>

<?php endif; ?>


<!-- Small_Img slider -->

<?php if(have_rows('sml_img_slider')):?>
    <div class="wrapper" data-animation="intro">
        <div class="container">
            <div class="row">
            <?php while ( have_rows('sml_img_slider') ) : the_row();

                $layout = get_row_layout();

                if($layout == 'small_image_slider_layout'):
                    $title = get_sub_field('sml_img_title');
                    ?>
                <h3><?php echo $title ?></h3>
                <?php endif; ?>
                </div>
                <?php if( have_rows('sml_img_repeater') ): ?>
                <div class="row">
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php while ( have_rows('sml_img_repeater') ) : the_row(); 
                        // display a sub field value
                        $sml_img_repeater_image = get_sub_field('sml_img_repeater_image');
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
                <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>

<!--Icon Section-->
<?php if (have_rows('icon_section')): ?>
    <?php while ( have_rows('icon_section') ) : the_row();

        $layout = get_row_layout();

        if($layout == 'icon_section_layout'){
            $icon_text = get_sub_field('icon_text');
            $background_color = get_sub_field('background_color');
        }
        ?>
    <div class="wrapper icon_section" data-animation="intro" style="background-color:<?php echo $background_color ?>;">
    
        <div class="container">
        <?php if( $icon_text ): ?>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <?php echo $icon_text ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('icon_section_repeater') ): ?>
         <div class="row">
            <?php while ( have_rows('icon_section_repeater') ) : the_row(); 
                $icon_section_subtitle = get_sub_field('icon_section_subtitle');
                $icon_section_image = get_sub_field('icon_section_image'); 
            ?>
            <div class="col-md-3">
                <div class="icon_section__image" style="background-image: url('<?php echo $icon_section_image['url'] ?>');" ></div>
                <h4 class="icon_section__subtitle"><?php echo $icon_section_subtitle ?></h4>
            </div>
            <?php endwhile;?>
        </div>
        <?php endif; ?>
        </div>
    <?php endwhile; ?>
    </div>
<?php endif; ?>


<!--Image Split Left-->
<?php if( have_rows('img_split--left')): ?>
    <?php while ( have_rows('img_split--left') ) : the_row();

        $layout = get_row_layout();

        if($layout == 'img_split--left_layout'):
            $image_split_text = get_sub_field('image_split_text');
            $image_split_image = get_sub_field('image_split_image');
            $background_color = get_sub_field('background_color');

            $check_section_title = get_sub_field('check_section_title');
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
                <?php if( have_rows('check_repeater_left') ):
                    while ( have_rows('check_repeater_left') ) : the_row(); 
                        $text = get_sub_field('text');
                    ?>
                    <div class="check__container"><i class="fas fa-check"></i><p class="check"><?php echo $text ?></p></div>
                    <?php endwhile;?>
                    <?php endif; ?>
                </div>
                <div class="col-md-3">
                <?php if( have_rows('check_repeater_right') ):
                    while ( have_rows('check_repeater_right') ) : the_row(); 
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
        <?php
            endif; ?>
            <?php endwhile; ?>
    </div>
<?php endif;?>

<!--Image Split Right-->
<?php if( have_rows('img_split--right')): ?>
    <?php while ( have_rows('img_split--right') ) : the_row();
                        $layout = get_row_layout();

                        if($layout == 'img_split--right_layout'):
                            
                            $image_split_text = get_sub_field('image_split_text');
                            $image_split_image = get_sub_field('image_split_image');
                            $background_color = get_sub_field('background_color');

                            ?>
                            
                            <?php endif; ?>
                        <?php endwhile; ?>
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

<!-- Investment Table -->
<?php if( have_rows('investment_table')): ?>
    <?php while ( have_rows('investment_table') ) : the_row();
    $layout = get_row_layout();

    if($layout == 'investment_table_layout'):
        $investment_text = get_sub_field('investment_text');
        $background_color = get_sub_field('background_color');

        $column_one_title = get_sub_field('column_one_title');
        $column_two_title = get_sub_field('column_two_title');
        $column_three_title = get_sub_field('column_three_title');
        $column_four_title = get_sub_field('column_four_title');

        ?>
        
     

    <div class="wrapper" data-animation="intro" style="background-color:<?php echo $background_color ?>;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $investment_text ?>
                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="row">
                        <div class="col-6"><p class="bold"><?php echo $column_one_title ?></p></div>
                        <div class="col-6"><p class="bold"><?php echo $column_two_title ?></p></div>
                        <div class="line"></div>
                        <?php if( have_rows('investment_table_repeater') ):
                            while ( have_rows('investment_table_repeater') ) : the_row(); 
                                $column_one = get_sub_field('column_one');
                                $column_two = get_sub_field('column_two');
                            ?>
                        <div class="col-6 vertical_center--parent"><?php echo $column_one ?></div>
                        <div class="col-6 vertical_center--parent"><?php echo $column_two ?></div>
                        <div class="line"></div>

                        <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                            <div class="col-6"><p class="bold"><?php echo $column_three_title ?></p></div>
                            <div class="col-6"><p class="bold"><?php echo $column_four_title ?></p></div>
                            <div class="line"></div>

                            <?php if( have_rows('investment_table_repeater') ):
                                while ( have_rows('investment_table_repeater') ) : the_row(); 
                                    $column_three = get_sub_field('column_three');
                                    $column_four = get_sub_field('column_four');
                                ?>
                        <div class="col-6 vertical_center--parent"><?php echo $column_three ?></div>
                        <div class="col-6 vertical_center--parent" ><?php echo $column_four ?></div>
                    <div class="line"></div>

                <?php endwhile; ?>
            <?php endif; ?>
                </div>
            </div>
            
            </div>

        </div>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>

<?php endif; ?>


<?php if(have_rows('2columns')): ?>
    <div class="wrapper" data-animation="intro">
            <div class="container">
                <div class="row">
                <?php   
                    while ( have_rows('2columns') ) : the_row();
                    $layout = get_row_layout();

                    if( $layout == '2columns_layout' ):

                        $column1 = get_sub_field('column1');
                        $column2 = get_sub_field('column2'); ?>

                <div class="col-md-6">
                    <?php echo $column1 ?>
                </div>
                <div class="col-md-6">
                   <?php echo $column2 ?>
                </div>
                <?php endif; endwhile; ?>
                </div>

            </div>
    </div>          

<?php endif; ?>


<!--Service Providers-->
<?php if (have_rows('service_providers')): ?>
    <div class="wrapper service_providers" data-animation="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                <?php while ( have_rows('service_providers') ) : the_row();

                    $layout = get_row_layout();

                    if( $layout == 'service_providers_layout' ):
                        $service_providers_title = get_sub_field('service_providers_title');
                    endif;
                    
                    ?>
                    <?php if( $service_providers_title ): ?>
                        <h1 class="service_providers__title"><?php echo $service_providers_title ?></h1>
                    <?php endif; ?>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-1 "></div>
                    <?php if( have_rows('service_providers_repeater') ):

                        while ( have_rows('service_providers_repeater') ) : the_row(); 
                            $service_providers_subtitle = get_sub_field('service_providers_subtitle');
                            $service_providers_image = get_sub_field('service_providers_image'); 
                        ?>
                        <div class="col-md-2 flex-col">
                            <img class="service_providers__image" src="<?php echo $service_providers_image['url'] ?>"></img>
                            <p class="service_providers__subtitle"><?php echo $service_providers_subtitle ?></p>
                        </div>
                        <?php endwhile;?>
                        <?php endif; ?>
                        <div class="col-md-1"></div>

                    </div>
                    <?php endwhile;?>

        </div>
    </div>

<?php endif; ?>


<!--3 Column Section  -->
<?php if (have_rows('threecolumnsection')): ?>
    <div class="wrapper threecolumnsection" data-animation="intro">
    <?php while ( have_rows('threecolumnsection') ) : the_row();

        $layout = get_row_layout();

        if($layout == 'threecolumnsection_layout'):
            $image_split_title = get_sub_field('threecolumnsection_title');
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2 class="threecolumnsection__title"><?php echo $image_split_title ?></h2>
                </div>
            </div>
            <?php if( have_rows('threecolumnsection_repeater') ) : ?>
            <div class="row padding">
            <div class='col-md-12 flex'>
                <?php while ( have_rows('threecolumnsection_repeater') ) : the_row(); 
                    $threecolumn_image = get_sub_field('threecolumn_image');
                ?>
                    <img class="threecolumn_image" src="<?php echo $threecolumn_image['url'] ?>" />
                <?php endwhile; ?>
                </div>

            </div>
            <?php endif; ?>
            <div class="row padding" />
            <?php if(get_sub_field('threecolumn_column1')): 
                $threecolumn_column1 = get_sub_field('threecolumn_column1');
                ?>
                <div class="col-md-6">
                    <?php echo $threecolumn_column1 ?>
                </div>  
            <?php endif; ?>
            <?php if(get_sub_field('threecolumn_column2')): 
                $threecolumn_column2 = get_sub_field('threecolumn_column2');
                ?>
                <div class="col-md-6">
                    <?php echo $threecolumn_column2 ?>
                </div>
            <?php endif; ?>
            </div>
            <?php if(get_sub_field('threecolumn_text')): 
                $threecolumn_text = get_sub_field('threecolumn_text');
                ?>
            <div class="row" />
                <div class="col-md-12">
                    <?php echo $threecolumn_text ?>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <?php endif; ?>
        <?php endwhile; ?>
    </div>

<?php endif; ?>


<!-- People 2 column -->

<?php if(have_rows('people_columns')): ?>
    <?php while(have_rows('people_columns')): the_row();
        $layout = get_row_layout();

        if( $layout == 'people_columns_layout' ):
            $title = get_sub_field('title');    
    ?>
        <div class="wrapper" data-animation="intro">
            <div class="container">
                <?php if($title): ?>
                    <div class="row">
                        <div class='col-md-10 offset-md-1'>
                            <?php echo $title ?>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                <?php endif; ?>
                <?php if( have_rows('people_repeater') ): ?>
                <div class='row block__center'>
                    <?php while ( have_rows('people_repeater') ) : the_row(); 
                            $people_image = get_sub_field('people_image');
                            $people_name = get_sub_field('people_name'); 
                            $people_role = get_sub_field('people_role'); 
                            $people_email = get_sub_field('people_email'); 
                            $people_phone = get_sub_field('people_phone'); 
                            $people_count += 1;
                        ?>
                        <div class="col-md-3 person" data-toggle="modal" data-target="#<?php echo $people_count; ?>" style="cursor: pointer;">
                            <img class="people__image" src="<?php echo $people_image['url'] ?>"></img>
                            <p class="people__name"><?php echo $people_name ?></p>
                            <p class="people__role"><?php echo $people_role ?></p>
                            <?php if($people_email): ?>
                            <p class="people__details"><span class="icon envelope"><i class="fas fa-envelope"></i></span><?php echo $people_email ?></p>
                            <?php endif; ?>
                            <?php if($people_phone): ?>
                            <p class="people__details"><span class="icon phone"><i class="fas fa-phone"></i></span><?php echo $people_phone ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Modal -->
                <div class="modal fade" id="<?php echo $people_count; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal__close" data-dismiss="modal"><i class="fas fa-times"></i>
                                </div>
                                <div class="modal-body row">
                                    <div class="col-md-4">
                                        <img class="people__image" src="<?php echo $people_image['url'] ?>"></img>
                                        <button class="btn btn-primary btn-contact" >CONTACT</button>
                                    </div>
                                    <div class="col-md-8">
                                        <?php echo get_sub_field('modal_text'); ?>
                                    </div>                      
                                </div>
                            </div>
                    </div>
                </div>
                <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif ?>
    <?php endwhile; ?>
<?php endif; ?>

<!-- Testimonials -->

<?php if(have_rows('testimonials')): ?>
    <?php while(have_rows('testimonials')): the_row();
            $layout = get_row_layout();
            if( $layout == 'testimonials_layout' ):
                $bg_color = get_sub_field('bg_color');
        ?>
        <div class="wrapper padding" data-animation="intro" style="background-color:<?php echo $bg_color ?>">
                <?php if( have_rows('testimonial_repeater') ):
                    $count2 = 0;

                    ?>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            
                    <div class="carousel-inner">
                    <?php while ( have_rows('testimonial_repeater') ) : the_row(); 
                            $count += 1;
                            $testimonial_image = get_sub_field('testimonial_image');
                            $testimonial_text = get_sub_field('testimonial_text'); 
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
                        <?php while ( have_rows('testimonial_repeater') ) : the_row(); ?>
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
    <?php endwhile; ?>
<?php endif; ?>

<!-- PDs & Forms -->

<?php if(have_rows('pds_and_forms')): ?>
    <?php while(have_rows('pds_and_forms')): the_row();
            $layout = get_row_layout();

            if( $layout == 'pds_and_forms_layout' ):
                $title = get_sub_field('title');    
                $line = get_sub_field('line');
        ?>
        <div class="wrapper pds" data-animation="intro">
            <div class="container">
                <?php if($title): ?>
                <div class="row padding">
                    <div class="col-md-12">
                        <?php echo $title; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(have_rows('pds_repeater')): ?>
                <?php while(have_rows('pds_repeater')): the_row(); 
                    $text = get_sub_field('text');
                    $link = get_sub_field('link');
                    ?>
                    <div class="row padding">
                        <div class="col-md-8">
                            <?php echo $text; ?>
                        </div>
                        <div class="col-md-2 offset-md-2">
                            <a class="btn btn-secondary" href="<?php echo $link['url'] ?>">Download</a>
                        </div>
                    </div>
            <?php endwhile; ?>
            <?php endif; ?>
                <div class="row padding">
                <?php if($line): ?>
                    <div class="line line--primary"></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php endif; ?>
    <?php endwhile ?>
<?php endif; ?>



<?php 
    endwhile; // end of the loop.

    get_footer();

?>