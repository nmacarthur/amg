<!--3 Column Section  -->
<?php    if(get_row_layout() == 'three_column_section'):
        $image_split_title = get_sub_field('three_column_section_title');

    ?>
    <div class="wrapper threecolumnsection" data-animation="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2 class="threecolumnsection__title"><?php echo $image_split_title ?></h2>
                </div>
            </div>
            <?php if( have_rows('three_column_section_repeater') ) : ?>
            <div class="row padding">
            <div class='col-md-12 flex'>
                <?php while ( have_rows('three_column_section_repeater') ) : the_row(); 
                    $threecolumn_image = get_sub_field('image');
                ?>
                    <img class="threecolumn_image" src="<?php echo $threecolumn_image['url'] ?>" />
                <?php endwhile; ?>
                </div>

            </div>
            <?php endif; ?>
            <div class="row padding">
            <?php if(get_sub_field('three_column_section_column_1')): 
                $threecolumn_column1 = get_sub_field('three_column_section_column_1');
                ?>
                <div class="col-md-6">
                    <?php echo $threecolumn_column1 ?>
                </div>  
            <?php endif; ?>
            <?php if(get_sub_field('three_column_section_column_2')): 
                $threecolumn_column2 = get_sub_field('three_column_section_column_2');
                ?>
                <div class="col-md-6">
                    <?php echo $threecolumn_column2 ?>
                </div>
            <?php endif; ?>
            </div>
            <?php if(get_sub_field('three_column_section_text')): 
                $threecolumn_text = get_sub_field('three_column_section_text');
                ?>
            <div class="row">
                <div class="col-md-12">
                    <?php echo $threecolumn_text ?>
                </div>
            </div>
            <?php endif; ?>
        </div>

    </div>

<?php endif; ?>
