<!-- Investment Table -->
<?php 

    if(get_row_layout() == 'investment_table'):

        $investment_text = get_sub_field('investment_table_text');
        $background_color = get_sub_field('investment_table_background_color');

        $column_one_title = get_sub_field('investment_table_column_one_title');
        $column_two_title = get_sub_field('investment_table_column_two_title');
        $column_three_title = get_sub_field('investment_table_column_three_title');
        $column_four_title = get_sub_field('investment_table_column_four_title');

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