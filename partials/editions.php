<section class="container">
    <div class="editions-container">
        <?php
            get_header();
            
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
        ?>
        <div class="single-edition">
            <div class="edition-image">
                <div class="edition-link">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large', array('class' => 'edition-fit')); ?>
                    </a> 
                </div>
            </div>
            <div class="edition-text">
                <p class="edition-title"><?php the_title() ?></p>
                <?php the_content(); ?>
            </div>
        </div>
        

        <?php
                endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
        ?>
    </div>
</section>