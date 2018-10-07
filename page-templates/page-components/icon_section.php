<!--Icon Section-->
<?php     
    if(get_row_layout() == 'icon_section'):
            $icon_text = get_sub_field('icon_section_icon_text');
            $background_color = get_sub_field('icon_section_background_color');
        
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
                $icon_section_subtitle = get_sub_field('icon_label');
                $icon_section_image = get_sub_field('icon'); 
                $icon_section_link = get_sub_field('link');
            ?>
            <div class="col-md-3">
                <a href="<?php echo $icon_section_link['url']; ?>">
                    <div class="icon_section__image" style="background-image: url('<?php echo $icon_section_image['url'] ?>');" ></div>
                    <h4 class="icon_section__subtitle"><?php echo $icon_section_subtitle ?></h4>
                </a>            
            </div>
            <?php endwhile;?>
        </div>
        <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
