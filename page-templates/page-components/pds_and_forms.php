<?php     
    if(get_row_layout() == 'pds_and_forms'):

        $title = get_sub_field('pds_and_forms_title');    
        $line = get_sub_field('pds_and_forms_line');
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
                <?php if(have_rows('pds_and_forms_repeater')): ?>
                <?php while(have_rows('pds_and_forms_repeater')): the_row(); 
                    $text = get_sub_field('text');
                    $link = get_sub_field('link');
                    ?>
                    <div class="row padding">
                        <div class="col-md-8">
                            <?php echo $text; ?>
                        </div>
                        <div class="col-md-2 offset-md-2">
                            <?php echo $link ?>
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
