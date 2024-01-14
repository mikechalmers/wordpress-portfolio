<section class="container">
    <div class="image-container">
        <div class="image-box">
            <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); 
                        the_post_thumbnail();
                    endwhile; 
                else: 
                    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
                endif; 
            ?>
            hiya
        </div>
    </div>
</section>