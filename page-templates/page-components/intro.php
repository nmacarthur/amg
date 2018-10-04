<!-- Into Blurb -->
<?php 
    if(get_row_layout() == 'intro_blurb'):

      $blurbText = get_sub_field('intro_blurb_text');
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
    
<?php 

    endif; ?>