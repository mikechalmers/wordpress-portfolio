<div class="slideshow-container">

    <?php
    $fields = CFS()->get('images');
    foreach ($fields as $field) {
        $image_id = $field['image'];
        $image_url = wp_get_attachment_image_src($image_id, 'full')[0];
        $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
        ?>
                    <div class="mySlides fade">
                        <img src="<?php echo $image_url; ?>" class="slide" alt="<?php echo $alt_text; ?>" />
                    </div>
                
            <?php }
    ?>

    <?php if (!empty(get_the_content())): ?>
            <div class="mySlides fade">
                <div class="blurb">
                    <?php the_content(); ?>
                </div>
            </div>
    <?php endif; ?>

    <h1><?php the_title(); ?></h1>

    <a class="prev" onclick="plusSlides(-1)"><img class="direction" src="<?php bloginfo('template_directory'); ?>/images/left.png" alt="Previous Image" /></a>
    <a class="next" onclick="plusSlides(1)"><img class="direction" src="<?php bloginfo('template_directory'); ?>/images/right.png" alt="Next Image" /></a>
</div>