<?php
    /**
    * Template Name: Front Page
    */

get_header();
?>

<main class="main-content">
  <section class="m01__hero">
    <figure class="m01__hero-background">
      <img class="m01__hero-background__image" src="<?php echo get_template_directory_uri() ?>/assets/images/Kreative_Web_Background.png"  />
    </figure>
    <div class="m01__hero-content">
      <div class="m01__hero-content__section">
        <img class="m01__hero-content__section-logo" src="<?php echo get_template_directory_uri() ?>/assets/images/Kreative_Logotype_White.png"  />
        <p class="m01__hero-content__section-text" >
          <?php echo esc_html( 'INFUSED WITH CBD + VITAMINS' ) ?>
        </p>
      </div>
      <div class="m01__hero-content__section">
        <p class="m01__hero-content__section-text" >
          <?php echo esc_html( 'A NEW DRINK INDUSED WITH CBD + VITAMINS TO HELP YOU EXPRESS YOUR CREATIVITY + KEEP FOCUSED ON YOUR OWN VISION' ) ?>
        </p>
      </div>
      <div class="m01__hero-content__section">
        <p class="m01__hero-content__section-text" >
          <?php echo esc_html( 'GET Kreative WITH OUT NEW LAUNCH FLAVOUR' ) ?>
        </p>
        <p class="m01__hero-content__section-text m01__hero-content__section-text--flavour-name"><?php echo esc_html( '- BRAIN BERRY -' ) ?></p>
      </div>
      <div class="m01__hero-content__section">
        <p class="m01__hero-content__section--side-text">
          <?php echo esc_html( 'GET KREATIVE WITH OUR NEW LAUNCH FLAVOUR "BRAIN BERRY"' ) ?>
        </p>
        <figure class="m01__hero-content__section--can">
          <img class="m01__hero-content__section--can__image" src="<?php echo get_template_directory_uri() ?>/assets/images/Kreative_BrainBerry_SlimCan_Purple.png" />
        </figure>
      </div>
    </div>
  </section>
</main>




<?php // get_footer(); ?>