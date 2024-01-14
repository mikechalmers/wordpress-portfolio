<section class="container">
    <div class="info-box">
        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                    the_content();
                endwhile; 
            else: ?>
                <div class="404">
                    Sorry, there's not a page here. Maybe you could try the <a href="/">homepage</a>.
                </div>
            <?php endif; 
        ?>
    </div> 
</section>

