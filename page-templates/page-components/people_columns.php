
<?php     
    if(get_row_layout() == 'people_columns'):

        $title = get_sub_field('people_columns_title');    
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
                <?php if( have_rows('people_columns_repeater') ): ?>
                <div class='row block__center'>
                    <?php while ( have_rows('people_columns_repeater') ) : the_row(); 
                            $people_image = get_sub_field('image');
                            $people_name = get_sub_field('name'); 
                            $people_role = get_sub_field('role'); 
                            $people_email = get_sub_field('email'); 
                            $people_phone = get_sub_field('phone'); 
                            $people_count += 1;
                        ?>
                        <div class="col-md-3 person" data-toggle="modal" data-target="#<?php echo $people_count; ?>" style="cursor: pointer;">
                            <img class="people__image" src="<?php echo $people_image['url'] ?>"/>
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
                                        <img class="people__image" src="<?php echo $people_image['url'] ?>"/>
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

<?php endif; ?>