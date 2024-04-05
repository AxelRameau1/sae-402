<?php wp_footer() ?>


                      <!-- Footer -->

    <footer class="relative py-10 flex flex-col gap-10 md:gap-5">

        <div class="flex justify-center ">
        <a href="">
            <h2 class="bg-saumon py-5 px-10 md:px-40 md:py-12 text-blanc hover:bg-noir hover:text-blanc duration-300 font-titre text-[32px] md:text-[36px] lg:text-[48px]">
            <?php the_field('titre_du_footer'); ?></h2>
        </a>
        </div>
        <?php
          wp_nav_menu(
          array(
            'theme_location' => 'footer-menu',
            'container' => false,
            'menu_class' => 'flex flex-col md:flex-row md:justify-center items-center gap-5 md:gap-10 mb-10',
          )
          );
        ?>
        <ul class="flex gap-5 justify-center items-center">
        <li><a href=""><img class="w-10" src="<?php the_field('icon_fb'); ?>" alt="lien vers Facebook"></a></li>
        <li><a href=""><img class="w-10" src="<?php the_field('icon_discord'); ?>" alt="lien vers notre Discord"></a></li>
        <li><a href=""><img class="w-10" src="<?php the_field('icon_youtube'); ?>" alt="lien vers Youtube"></a></li>
        <li><a href=""><img class="w-10" src="<?php the_field('icon_x'); ?>" alt="lien vers notre X"></a></li>
        <li><a href=""><img class="w-10" src="<?php the_field('icon_insta'); ?>" alt="lien vers notre Insta"></a></li>
        </ul>
        <p class="text-center text-noir md:text-[20px] lg:text-[24px]"><?php the_field('copyright_site'); ?></p>
        <a class="absolute right-8 top-14 md:right-10 md:top-20 rounded-full w-12 h-12 bg-db hover:bg-saumon duration-300 text-blanc text-4xl flex justify-center items-center"
        href="#ban"><ion-icon name="arrow-up-outline"></ion-icon></a>
        
    </footer>
    





                          <!-- SCRIPT -->




<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

<!-- Fonction de Scroll Smooth -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Animation de scroll smooth sur les ancres -->
<script>
  $(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function () {

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
</script>
<!-- Script Flowbite -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>   

