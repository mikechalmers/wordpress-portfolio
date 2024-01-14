<section class="container">
    <div class="image-container">
        <div class="image-box">
            <a href="/gallery/">
            <img src="<?php bloginfo('template_directory'); ?>/images/big3.jpg" id="landing" class="image-fit" alt="a randomly selected landscape by Michael Chalmers">
            </a>
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
        console.log("Random image chosen: ", images[randomImage])
        document.getElementById("landing").src = "<?php bloginfo('template_directory'); ?>/images/" + images[randomImage] + ".jpg";
    ;
</script>