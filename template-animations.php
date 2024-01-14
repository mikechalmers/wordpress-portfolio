<?php /* Template Name: Animations */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
    <title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { echo ' - '; } ?>Michael Chalmers</title>
    <?php wp_head(); ?>
</head>
<body class="fullheight">
    <header id="topbar" class="topbar">
        <a href=<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>><img class="title-image" src="<?php bloginfo('template_directory'); ?>/images/michaelchalmers5.png" /></a>
    </header>

    <h1 style="text-align: center; padding-top: 100px; font-size: 1.6em">Analogue-Digital Animation (15 Second Edits)</h1>

    <section class="gallery-container" style="padding-top: 35px;">

        <div class="gallery" style="margin-bottom: 50px;">

            <div class="item">
                <video width="100%" controls playsinline loop>
                    <source src="https://mikechalmers.co.uk/wp-content/uploads/2021/07/Amber_Animation_1_small.mp4" type="video/mp4" />
                    Your browser doesn't support the video tag.
                </video>
            </div>
            <div class="item">
                <video width="100%" controls playsinline loop>
                    <source src="https://mikechalmers.co.uk/wp-content/uploads/2021/07/Ryan_web.mp4" type="video/mp4" />
                    Your browser doesn't support the video tag.
                </video>
            </div>
            <div class="item">
                <video width="100%" controls playsinline loop>
                    <source src="https://mikechalmers.co.uk/wp-content/uploads/2021/05/Bee-Animation-Correct-YT-15sec.mp4" type="video/mp4" />
                    Your browser doesn't support the video tag.
                </video>
            </div>

        </div>

        </section>


    <!-- <video width="100%" controls playsinline loop>
        <source src="https://mikechalmers.co.uk/wp-content/uploads/2021/07/Amber_Animation_1_small.mp4" type="video/mp4" />
        Your browser doesn't support the video tag.
    </video> -->

<?php wp_footer(); ?>
</body>
</html>