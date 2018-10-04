
<?php     
    if(get_row_layout() == '2columns'):    
    ?>
    <div class="wrapper" data-animation="intro">
            <div class="container">
                <div class="row">
                <?php   
                 
                        $column1 = get_sub_field('2columns_column_1');
                        $column2 = get_sub_field('2columns_column_2'); ?>

                <div class="col-md-6">
                    <?php echo $column1 ?>
                </div>
                <div class="col-md-6">
                   <?php echo $column2 ?>
                </div>
                </div>

            </div>
    </div>          

<?php endif; ?>