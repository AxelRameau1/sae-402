<?php 
    get_header(); 
?>
        


    <!-- Main -->


    <main class="">



    <article class="flex flex-col gap-10 py-10 bg-blue lg:bg-white">
      <h2 class="text-center font-titre text-[32px] md:text-[36px] lg:text-[48px]"><?php the_field('titre_explication'); ?></h2>
      <article class="flex flex-col lg:flex-row gap-10">
        <!-- Card -->
        <section class="flex flex-col gap-5 justify-center items-center  px-10 py-10 md:px-40 lg:px-10">
          <img src="<?php the_field('img_card1_explication'); ?>" alt="">
          <img src="<?php the_field('marqueur_explication_e1'); ?>" alt="">
          <div class="flex flex-col gap-[10px]">
            <h3 class="text-center font-bold uppercase text-base md:text-2xl lg:text-[28px]"><?php the_field('titre_card1_explication'); ?></h3>
            <p class="md:text-[20px] lg:text-[24px]"><?php the_field('desc_card1_explication'); ?></p>
          </div>
        </section>
    
        <!-- Card -->

        <section class="relative flex flex-col gap-5 justify-center items-center  px-10 py-10 md:px-40 lg:px-10">
          <img src="<?php the_field('img_card2_explication'); ?>" alt="">

          <!-- lottie -->
          <dotlottie-player src="https://lottie.host/90e3fa8b-d7e7-48fb-8ed6-bea0693b017b/jyb0k0GSxw.json"
            class="w-52 h-52 absolute top-20 right-10 md:right-44 lg:-right-5 lg:top-24 xl:right-0 xl:top-28 2xl:right-8 2xl:top-36"
            background="transparent" speed="1" direction="1" playMode="normal" loop autoplay>
          </dotlottie-player>

          <img src="<?php the_field('img2_card2_explication'); ?>" alt="">
          <img src="<?php the_field('marqueur_explication_e2'); ?>"
            alt="">
          <div class="flex flex-col gap-[10px]">
            <h3 class=" font-bold uppercase text-base md:text-2xl lg:text-[28px] text-center"><?php the_field('titre_card2_explication'); ?></h3>
            <p class="md:text-[20px] lg:text-[24px]"><?php the_field('desc_card2_explication'); ?></p>
          </div>
        </section>

        <!-- Card -->
        <section class="flex flex-col gap-5 justify-center items-center  px-10 py-10 md:px-40 lg:px-10">
          <img class="w-[500px] " src="<?php the_field('img_card3_explication'); ?>"
            alt="Image de notre personnage principal, sous-marin, violet">
          <img src="<?php the_field('marqueur_e3_explication'); ?>"
            alt="Indication afin de dire à quelle étape de l'explication du jeu on est, Étape 3">
          <div class="flex flex-col gap-[10px]">
            <h3 class=" font-bold uppercase text-base md:text-2xl lg:text-[28px] text-center"><?php the_field('titre_card3_explication'); ?></h3>
            <p class="md:text-[20px] lg:text-[24px]" id="gale"><?php the_field('desc_card3_explication'); ?></p>
          </div>
        </section>

      </article>
    </article>

    <!-- Section Galerie -->

    <div id="default-carousel" class="relative w-full " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-[500px]">
          <!-- Item 1 -->
          <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="<?php the_field('img_carousel_1'); ?>"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="<?php the_field('img_carousel_2'); ?>"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 3 -->
          <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="<?php the_field('img_carousel_3'); ?>"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
          class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 group cursor-pointer"
          data-carousel-prev>
          <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-2 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button"
          class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group"
          data-carousel-next>
          <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-2 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>
      

      <!-- Section CTA -->

    <article class="relative flex flex-col md:flex-row justify-center items-center gap-5 py-10 bg-blue text-noir">
      <section class="flex flex-col justify-center items-center gap-5 md:pl-10 md:pr-72 px-20 md:py-10">
        <section class="text-center flex flex-col gap-5">
          <h2 class="uppercase font-titre text-[32px] md:text-[36px] lg:text-[48px]"><?php the_field('titre_cta'); ?></h2>
          <p class="text-justify md:text-[20px] lg:text-[24px]"><?php the_field('description_cta'); ?></p>
        </section>
        <section class="flex flex-col justify-center">
          <img class="" src="<?php the_field('note_etoiles_image'); ?>" alt="stars">
          <section class="flex items-center gap-2">
            <p class="font-bold md:text-[20px] lg:text-[24px]"><?php the_field('note_du_jeu'); ?></p>
            <section class="w-1 h-1 rounded-full bg-black"></section>
            <p class="md:text-[20px] lg:text-[24px]"><?php the_field('nombre_utilisateur'); ?></p>
          </section>
        </section>

      </section>
      <section class="hidden md:flex">
        <img class="absolute z-30 right-0 top-10 xl:top-10" src="<?php the_field('telephone_cta'); ?>" alt="image de téléphone">
      </section>
      <section class="flex flex-col gap-5 justify-center items-center md:hidden">
        <a href="<?php the_field('lien_app_store'); ?>"><img class="w-46" src="<?php the_field('bouton_app_store'); ?>" alt="DOWNLOAD on the App Store"></a>
        <a href="<?php the_field('lien_google_play'); ?>"><img class="w-46" src="<?php the_field('bouton_google_play'); ?>" alt="Get it on Google play"></a>
        <p class="md:text-[20px] lg:text-[24px]"><?php the_field('nombre_telechargement'); ?></p>
      </section>
    </article>


    <!-- Section Avis -->

    <article id="avis" class="flex flex-col gap-10 py-10">
      <h2 class="text-center font-titre text-[32px] md:text-[36px] lg:text-[48px]"><?php the_field('titre_avis'); ?></h2>

      <section class="flex flex-col gap-10 justify-center text-blanc px-10 py-5 bg-db rounded-lg mx-10">
        <section class="flex flex-col gap-5">
          <section class="flex justify-between items-center">
            <div class="flex flex-row gap-5 ">
              <img class="w-16 h-16 border-2 overflow-hidden border-blue rounded-full" src="<?php the_field('image_utilisateur_1'); ?>"
                alt="Image de profil de l'utilisateur">
              <div class="md:flex flex-col gap-[5px] hidden">
                <h3 class="font-bold uppercase text-base md:text-2xl lg:text-[28px]"><?php the_field('nom_utilisateur_1'); ?></h3>
                <p class="text-gray-200 md:text-[20px] lg:text-[24px]"><?php the_field('date_de_publication1'); ?></p>
              </div>
            </div>
            <img src="<?php the_field('note_utilisateur_en_etoiles1'); ?>" alt="note utilisateur">
          </section>
          <p class="md:text-[20px] lg:text-[24px]"><?php the_field('commentaire_utilisateur_1'); ?></p>
        </section>

        <div class="flex flex-col gap-[5px] md:hidden">
          <h3 class="font-bold uppercase text-base md:text-2xl lg:text-[28px]"><?php the_field('nom_utilisateur_1'); ?></h3>
          <p class="text-gray-200 md:text-[20px] lg:text-[24px]"><?php the_field('date_de_publication1'); ?></p>
        </div>
      </section>

      <section class="flex flex-col gap-10 justify-center text-blanc px-10 py-5 bg-db rounded-lg mx-10">
        <section class="flex flex-col gap-5">
          <section class="flex justify-between items-center">
            <div class="flex flex-row gap-5">
              <img class="w-16 h-16 border-2 overflow-hidden border-blue rounded-full" src="<?php the_field('image_utilisateur_2'); ?>"
                alt="Image de profil de l'utilisateur">
              <div class="md:flex flex-col gap-[5px] hidden">
                <h3 class="font-bold uppercase text-base md:text-2xl lg:text-[28px]"><?php the_field('nom_utilisateur_2'); ?></h3>
                <p class="text-gray-200 md:text-[20px] lg:text-[24px]"><?php the_field('date_publication_utilisateur2'); ?></p>
              </div>
            </div>
            <img src="<?php the_field('note_utilisateur_en_etoiles1'); ?>" alt="note utilisateur">
          </section>
          <p class="md:text-[20px] lg:text-[24px]"><?php the_field('commentaire_utilisateur_2'); ?></p>
        </section>

        <div class="flex flex-col gap-[5px] md:hidden">
          <h3 class="font-bold uppercase text-base md:text-2xl lg:text-[28px]"><?php the_field('nom_utilisateur_2'); ?></h3>
          <p class="text-gray-200 md:text-[20px] lg:text-[24px]"><?php the_field('date_publication_utilisateur2'); ?></p>
        </div>
      </section>
    </article>


     <!-- Section FAQ -->
     <article class="relative flex gap-10 lg:pl-96 xl:pl-[500px] justify-center my-10 overflow-hidden">
      <img class="absolute left-0 top-1/2 lg:ml-20 xl:ml-32 hidden lg:flex " src="<?php the_field('image_sous-marin_faq'); ?>" alt="">
      <article id="faq" class="flex flex-col gap-10 justify-center my-10">
        <h2 class="text-center font-titre text-[32px] md:text-[36px] lg:text-[48px]"><?php the_field('titre_faq'); ?></h2>
        <!-- Conteneur de card -->
        <article class="flex flex-col gap-10">
          <!-- Card -->
          <section
            class="flex flex-col px-10 py-10 gap-5 bg-db justify-center items-center mx-10 rounded-lg text-blanc">
            <h3 class=" font-bold uppercase text-base md:text-2xl lg:text-[28px]"><?php the_field('question1'); ?></h3>
            <img class="w-12 h-12" src="<?php the_field('bouton-bas'); ?>" alt="bouton ouvrir">
          </section>
          <!-- Card -->
          <section
            class="flex flex-col px-10 py-10 gap-5 bg-db justify-center items-center mx-10 rounded-lg text-blanc">
            <h3 class=" font-bold uppercase text-base md:text-2xl lg:text-[28px]"><?php the_field('question2'); ?></h3>
            <p class="md:text-[20px] lg:text-[24px]"><?php the_field('reponse2'); ?></p>
            <img class="w-12 h-12" src="<?php the_field('bouton_fermer'); ?>" alt="bouton fermer">
          </section>
          <!-- Card -->
          <section
            class="flex flex-col px-10 py-10 gap-5 bg-db justify-center items-center mx-10 rounded-lg text-blanc">
            <h3 class=" font-bold uppercase text-base md:text-2xl lg:text-[28px]"><?php the_field('question1'); ?></h3>
            <p class="md:text-[20px] lg:text-[24px]"><?php the_field('reponse1'); ?></p>
            <img class="w-12 h-12" src="<?php the_field('bouton_fermer'); ?>" alt="bouton fermer">
          </section>
        </article>
      </article>
    </article>


    <!-- Section MàJ -->

    <article id="maj" class="flex flex-col gap-10 py-10">
      <h2 class="text-center font-titre text-[32px] md:text-[36px] lg:text-[48px]"><?php the_field('titre_maj'); ?></h2>
      <article class="flex flex-wrap justify-center md:px-10 gap-10 mb-10">
        <!-- CARD -->
        <div
          class="img-maj bg-cover w-4/5 md:w-2/5 aspect-video flex flex-col justify-end pb-[10px] px-[10px] rounded-lg cursor-pointer hover:border-4 border-noir">
          <!-- Image en BG -->
          <div class="flex bg-noir py-[10px] rounded-lg items-center justify-between px-[10px] mx-2">
            <a class="bg-db text-blanc px-[10px] py-[5px] rounded-lg" href=""> NEW !</a>
            <p class="text-blanc uppercase md:text-[20px] lg:text-[24px]"><?php the_field('info_card1_maj'); ?></p>
          </div>
        </div>

        <!-- CARD -->
        <div
          class="img-compet bg-cover w-4/5 md:w-2/5 aspect-video flex flex-col justify-end pb-[10px] px-[10px] rounded-lg cursor-pointer hover:border-4 border-noir">
          <!-- Image en BG -->
          <div class="flex bg-noir py-[10px] rounded-lg items-center justify-between px-[10px] mx-2">
            <a class="bg-db text-blanc px-[10px] py-[5px] rounded-lg" href=""> EVENT</a>
            <p class="text-blanc uppercase md:text-[20px] lg:text-[24px]"><?php the_field('info_card2_maj'); ?></p>
          </div>
        </div>

        <!-- CARD -->
        <div
          class="img-maj1 bg-cover w-4/5 md:w-2/5 aspect-video flex flex-col justify-end pb-[10px] px-[10px] rounded-lg cursor-pointer hover:border-4 border-noir">
          <!-- Image en BG -->
          <div class="flex bg-noir py-[10px] rounded-lg items-center justify-between px-[10px] mx-2">
            <a class="bg-db text-blanc px-[10px] py-[5px] rounded-lg uppercase" href=""> MàJ</a>
            <p class="text-blanc uppercase md:text-[20px] lg:text-[24px]"><?php the_field('info_card3_maj'); ?></p>
          </div>
        </div>

        <!-- CARD -->
        <div
          class="img-maj2 bg-cover w-4/5 md:w-2/5 aspect-video flex flex-col justify-end pb-[10px] px-[10px] rounded-lg cursor-pointer hover:border-4 border-noir">
          <!-- Image en BG -->
          <div class="flex bg-noir py-[10px] rounded-lg items-center justify-between px-[10px] mx-2">
            <a class="bg-db text-blanc px-[10px] py-[5px] rounded-lg uppercase" href=""> Màj</a>
            <p class="text-blanc uppercase md:text-[20px] lg:text-[24px]"><?php the_field('info_card4_maj'); ?></p>
          </div>
        </div>
      </article>
    </article>
    </main>

<?php get_footer(); ?>