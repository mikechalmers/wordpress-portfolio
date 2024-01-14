<section class="container">

<?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();

            if ( get_field('vimeo_link') ): ?>

                <div class="vimeo-container">
                    <iframe src="https://player.vimeo.com/video/<?php the_field('vimeo_link') ?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:calc(100% - 120px); padding-top: 80px; padding-bottom: 40px; border-sizing: border-box;" title="<?php the_title(); ?>"></iframe>
                    <script src="https://player.vimeo.com/api/player.js"></script>
                </div>
            <?php else: 

                if( get_field('use_slider') ): 
                    include 'single-slider.php';
                elseif( CFS()->get( 'images' ) ):
                    include 'new-single-slider.php';
                else: ?>

                    <div class="image-container">
                        <div class="image-box">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                <?php endif;
            endif;
        endwhile; 
    else: 
        _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
    endif; 
?>

</section>