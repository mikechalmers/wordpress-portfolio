<div class="slideshow-container">

    <?php
        $fields = CFS()->get( 'images' );
        foreach ( $fields as $field ) { ?>
            <div class="mySlides fade">
                <img src="<?php echo $field['image']; ?>" class="slide" alt="<?php echo $field['alt_text']; ?>" />
            </div>
            
        <?php }
    ?>

    <?php if ( !empty( get_the_content() ) ): ?>
        <div class="mySlides fade">
            <div class="blurb">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endif; ?>

    <a class="prev" onclick="plusSlides(-1)"><img class="direction" src="<?php bloginfo('template_directory'); ?>/images/left.png" /></a>
    <a class="next" onclick="plusSlides(1)"><img class="direction" src="<?php bloginfo('template_directory'); ?>/images/right.png" /></a>
</div>