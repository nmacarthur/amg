<?php 
    if(get_row_layout() == '1column'):

    
                $one_column_text = get_sub_field('1column_text');
                $background_color = get_sub_field('1column_color');
        
        ?>        
    <div class="wrapper" data-animation="intro" style="background-color:<?php echo $background_color;?>;">
        <div class="container">
        
            <div class="row icon_section" >
                <div class="col-md-<?php echo get_sub_field('1column_column_width') ?>">
                    
                    <?php echo $one_column_text ?>
                </div>
                <div class="col-md-6 icon_column">
                <?php if( have_rows('1column_icon_repeater') ): ?>
                <?php while ( have_rows('1column_icon_repeater') ) : the_row(); 
                    // display a sub field value
                    $icon = get_sub_field('icon_one');
                    $text = get_sub_field('text');
                ?>
                <div class="row padding">
                    <div class="col-md-2 offset-md-2 icon__row"><img class="icon" src="<?php echo $icon['url']; ?>"/></div>
                    <div class="col-md-8 text__row"><?php echo $text; ?></div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php if(get_sub_field('1column_text_section')):
                    $text_section = get_sub_field('1column_text_section');
                    ?>
                    <div class="row padding">
                    <div class="col-md-10 offset-md-2">
                        <?php echo $text_section; ?> 
                    </div>
                    </div>
                <? endif?>
                </div>
            </div>

        </div>
    </div>

<?php endif; ?>
