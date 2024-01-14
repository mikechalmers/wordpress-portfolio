<?php /* Template Name: Maintenance */ ?>

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
        <a href="/"><img class="title-image" src="<?php bloginfo('template_directory'); ?>/images/michaelchalmers3.png" /></a>
    </header>

<section class="container">
    <div class="image-container">
        <div class="image-box">
            <img src="<?php bloginfo('template_directory'); ?>/images/big3.jpg" id="landing" class="image-fit" alt="hi">
        </div>
    </div>
</section>

<script>
        const images = [
            "img1",
            "img2",
            "img3",
            "img4",
            "img5"
        ];
        const randomImage = Math.floor(Math.random() * images.length);
        console.log(images[randomImage])
        document.getElementById("landing").src = "<?php bloginfo('template_directory'); ?>/images/" + images[randomImage] + ".jpg";
    ;
</script>
<?php wp_footer(); ?>
</body>
</html>