<section class="gallery-container">

    <div class="gallery">

        <?php
            get_header();
            
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
        ?>
        <div class="item">
            <?php if( get_field('has_content') ): ?>
                <a href="<?php the_permalink(); ?>">
            <?php endif; ?>

            <?php if( get_field('video') ): ?>
                <video width="100%" autoplay playsinline loop muted>
                    <source src="<?php the_field('video'); ?>" type="video/mp4" />
                    Oh dear, your browser doesn't support the video tag.
                </video>
            <?php else: ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>

            <?php if( get_field('has_content') ): ?>
                <p><?php the_title() ?></p>
                </a> 
            <?php endif; ?>
            
        </div>

        <?php
                endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
        ?>
        

    </div>

</section>