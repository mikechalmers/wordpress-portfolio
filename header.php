<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
    <title>
        <?php wp_title(' '); ?>
        <?php 
            if(wp_title(' ', false)) { echo ' - '; }
            if ( is_single() && 'post' == get_post_type() ) {echo 'by ';}
        ?>
        Michael Chalmers
    </title>
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68311671-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-68311671-1');
        </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-SSY1JPX05S"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-SSY1JPX05S');
        </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
</head>

<body class="fullheight">
    <header id="topbar" class="topbar">
        <a href=<?php echo get_home_url(); ?>><img class="title-image" src="<?php bloginfo('template_directory'); ?>/images/michaelchalmers5.png" /></a>
    </header>
