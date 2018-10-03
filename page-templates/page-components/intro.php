<!-- Into Blurb -->
<?php 
    if(get_row_layout() == 'intro_blurb'):

    if( get_field('intro_blurb') ): 
        $blurbText = get_field('intro_blurb_intro_blurb');
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
    endif; 
    endif; ?>