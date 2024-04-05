<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abyss</title>
    
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <?php wp_head(); ?> 


     <!-- Input.css -->
    <style type="text/tailwindcss">
      @tailwind base;
      @tailwind components;
      @tailwind utilities;

      @layer base {
              :root {
                  --ff-titre: "VT323";
                  --ff-corps:"Inter", sans-serif;
                  /* primitives */
                  --dark-blue: 223 63 37;
                  --blue: 202 84 81 ;
                  --saumon:1 100 73;
                  --noir:223 18 16;
                  --blanc:225 100 99;

                  /* sémantiques */
              }
      }

      @layer components { 
          h1 {
              @apply font-titre text-[48px] md:text-[64px]
          }
          h2 {
              @apply font-titre text-[32px] md:text-[36px] lg:text-[48px]
          }
          h3 {
              @apply font-bold uppercase text-base md:text-2xl lg:text-[28px]
          }
      }
      </style>

    <!-- Tailwind config Fichier -->
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors:{
            "db": "hsl(var(--dark-blue)/ <alpha-value>)",
            "blue":"hsl(var(--blue)/ <alpha-value>)",
            "saumon":"hsl(var(--saumon)/ <alpha-value>)",
            "blanc":"hsl(var(--blanc)/ <alpha-value>)",
            "noir":"hsl(var(--noir)/ <alpha-value>)",
          },
          fontFamily:{
            "titre":"var(--ff-titre)",
            "corps":"var(--ff-corps)",
          },
          backgroundImage: {
            "jeu": "url('assets/illu_du_jeu.png')",
            "màj": "url('assets/pixel1.jpg')",
            "theme": "url('assets/pixel2.jpg')",
            "compet": "url('assets/esport.jpeg')",
          },
        },
      },
     plugins: [],
    }
    </script>

    <!-- Background-image -->
    <style>
       .img-maj{
        background-image: url("<?php the_field('bg_image_maj'); ?>")  ;
       }
       .img-compet{
        background-image: url("<?php the_field('bg_compet_maj'); ?>")  ;
       }
       .img-maj1{
        background-image: url("<?php the_field('bg_maj1_maj'); ?>")  ;
       }
       .img-maj2{
        background-image: url("<?php the_field('bg_image_maj'); ?>")  ;
       }
    </style>

    <!-- font titre -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <!-- font text -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class=" font-corps">





<header>

<nav class="fixed flex justify-center md:justify-between w-full bg-blanc z-50 py-5 px-10">
  <a class="hidden md:flex" href="https://p5play.org/"><img class="w-44" src="<?php the_field('support_by_p5play'); ?>" alt=""></a>
    <?php
      wp_nav_menu(
      array(
        'theme_location' => 'header-menu',
        'container' => false,
        'menu_class' => 'flex justify-center gap-10 lg:flex-row md:gap-5 md:justify-end',
      )
      );
    ?>
    </nav>
    

    <section id="ban" class="flex flex-col gap-10 text-noir px-10 pb-10 pt-32">
      <div class="flex flex-col lg:flex-row justify-center items-center lg:justify-between lg:px-40 gap-10 text-noir">
        <img class="flex w-fit lg:hidden" src="<?php the_field('her_img'); ?>" alt=""> 
        <div class="flex flex-col gap-10 text-noir lg:w-2/5">
          <h1 class="font-titre text-[48px] md:text-[64px] text-saumon"><?php the_field('her_titre'); ?></h1>
          <p class="md:text-[20px] lg:text-[24px]"><?php the_field('her_desc'); ?></p>
        </div>
        <img class="hidden lg:flex w-fit lg:w-96" src="<?php the_field('her_img'); ?>" alt=""> 
      </div>
        
        <div class="flex justify-center">
        <dotlottie-player src="https://lottie.host/1c8863cf-8698-49fe-88df-d833719b2426/oKU4KKI9xa.json"
          class="w-64 h-64" background="transparent" speed="1" direction="1" playMode="normal" loop autoplay>
        </dotlottie-player>
      </div>
    </section>


  </header>


