<a href="https://mikechalmers.co.uk/" class="corner-link top-left">Gallery</a>
<a href="https://mikechalmers.co.uk/editions/" class="corner-link bottom-right">Editions</a>
<a href="https://blog.mikechalmers.co.uk" class="corner-link bottom-left">Blog</a>
<a href="https://mikechalmers.co.uk/info/" class="corner-link top-right">Info</a>

<section class="burger">
  <a href="#" id="burger-menu">
    Menu
  </a>
</section>
        
<script>
  var nav = document.getElementById("burger-menu"),
	  links = document.querySelectorAll(".corner-link"),
    menu = document.getElementById("menu-links"),
    topbar = document.getElementById("topbar"),
    closer = document.getElementById("close-mobile-menu");

  nav.addEventListener("click", (e) => {
      e.preventDefault();
      for(let i; i < links.length; i++) {
      links[i].className += " corner-link"; 
  }
  menu.classList.add("open-menu");
  topbar.classList.add("hide-menu");
});

closer.addEventListener("click", (e) => {
  e.preventDefault();
  menu.classList.remove("open-menu");
  topbar.classList.remove("hide-menu");
  });

    
</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

document.addEventListener('keydown', function(e) {
    if(e.keyCode == 37) {
      plusSlides(-1);
    }
  });
  document.addEventListener('keydown', function(e) {
    if(e.keyCode == 39) {
      plusSlides(1);
    }
  });

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (slides.length > 0) {
    if (n > slides.length) {slideIndex = 1}  
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slides[slideIndex-1].style.display = "block";  
  }
}
</script>

<script>console.log("website by websitewizard.net 🧙🏼‍♂️")</script>

<?php wp_footer(); ?>
</body>
</html>