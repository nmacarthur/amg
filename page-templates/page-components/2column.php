<?php     
if(get_row_layout() == '2column'):
        // 2Column
        $title = get_sub_field('2column_title');
        $background_color = get_sub_field('2column_background_color');
        ?>
    <div class="wrapper" style="background-color:<?php echo $background_color ?>;" data-animation="intro">
        <div class="container">
            <div class="row padding">
            
                <div class="col-md-6 offset-md-3">
                    <h2 class="centered"><?php echo $title ?></h2>
                </div>
            </div>
            <?php if( have_rows('2column_icon_repeater') ): ?>
                <?php while ( have_rows('2column_icon_repeater') ) : the_row(); 
                    // display a sub field value
                    $icon = get_sub_field('icon_1');
                    $text = get_sub_field('text');
                    $icon_2 = get_sub_field('icon_1_2'); 
                    $text_2 = get_sub_field('text_2');
                ?>
                <div class="row padding">
                    <div class="col-md-1 offset-md-1 icon__row"><img class="icon" src="<?php echo $icon['url'] ?>"/></div>
                    <div class="col-md-4 text__row"><?php echo $text; ?></div>
                    <div class="col-md-1 icon__row"><img class="icon" src="<?php echo $icon_2['url'] ?>"/></div>
                    <div class="col-md-4 text__row"><?php echo $text_2; ?></div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if( have_rows('2column_icon_repeater_2') ): ?>
                <?php while ( have_rows('2column_icon_repeater_2') ) : the_row(); 
                    // display a sub field value
                    $icon = get_sub_field('icon');
                    $text = get_sub_field('text');
                    $icon_2 = get_sub_field('icon_2'); 
                    $text_2 = get_sub_field('text_2');
                ?>
                <div class="row padding">
                    <div class="col-md-1 offset-md-1 icon__row"><img class="icon" src="<?php echo $icon['url'] ?>"/></div>
                    <div class="col-md-4 text__row"><?php echo $text; ?></div>
                    <div class="col-md-1 icon__row"><img class="icon" src="<?php echo $icon_2['url'] ?>"/></div>
                    <div class="col-md-4 text__row"><?php echo $text_2; ?></div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
