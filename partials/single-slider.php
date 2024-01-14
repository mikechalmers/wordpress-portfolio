<div class="slideshow-container">

    <?php if( get_field('image_1') ): 
        $image = get_field('image_1');
    ?>
        
        <div class="mySlides fade">
            <img src="<?php echo esc_url($image['url']); ?>" class="slide" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>

    <?php if( get_field('image_2') ): 
        $image = get_field('image_2');
    ?>
        <div class="mySlides fade">
            <img src="<?php echo esc_url($image['url']); ?>" class="slide" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>

    <?php if( get_field('image_3') ): 
        $image = get_field('image_3');
    ?>
        <div class="mySlides fade">
            <img src="<?php echo esc_url($image['url']); ?>" class="slide" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>

    <?php if( get_field('image_4') ): 
        $image = get_field('image_4');
    ?>
        <div class="mySlides fade">
            <img src="<?php echo esc_url($image['url']); ?>" class="slide" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>

    <?php if( get_field('image_5') ): 
        $image = get_field('image_5');
    ?>
        <div class="mySlides fade">
            <img src="<?php echo esc_url($image['url']); ?>" class="slide" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>

    <?php if( get_field('image_6') ): 
        $image = get_field('image_6');
    ?>
        <div class="mySlides fade">
            <img src="<?php echo esc_url($image['url']); ?>" class="slide" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>

    <?php if( get_field('image_7') ): 
        $image = get_field('image_7');
    ?>
        <div class="mySlides fade">
            <img src="<?php echo esc_url($image['url']); ?>" class="slide" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>

    <?php if( get_field('image_8') ): 
        $image = get_field('image_8');
    ?>
        <div class="mySlides fade">
            <img src="<?php echo esc_url($image['url']); ?>" class="slide" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>

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