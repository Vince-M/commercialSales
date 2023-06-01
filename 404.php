<?php
/*
  Template Name: 404 Template
  */
?>

<?php get_header(); ?>

    <!-- HERO
    =================================================== -->
    <section class="hero__pages--404" role="banner" data-type="background" data-speed="2" style="
              background: url(<?php echo get_theme_file_uri('img/hero-404_1920x800.jpg'); ?>) no-repeat;
              background-position: center; left: 50%; padding: 0; position: relative; -webkit-transform: translateX(-50%);
              transform: translateX(-50%); margin-top: 0px; margin-bottom: 0px; height: 400px;">>
        </section>
    <!-- ============================================== -->

    <!-- PAGE INTRO
    =================================================== -->
      <section class="pageIntro">


        <!-- CONTENT
        =================================================== -->
          <div class="container row">
            <div class="error-404 error__404--section">
              <h2 class="oops">Oops!</h2>
              <h2>Page not found!</h2>
              <h3>Unfortunately, the page you tried to reach does not exist on this site.</h3>
              <h4>Use the links below to visit our Product pages.</h4>
            </div>

            <hr class="section-divider">
          </div>

          

          

      </section> <!-- pageIntro -->


      <!-- PRODUCT GRID
      =================================================== -->
 

      <section class="product__cards container row" aria-labelledby="product_cards">
        <?php
          $productCards = new WP_Query(array(
            'posts_per_page'    =>  -1,
            'post_type'         =>  'product',
            'order'             =>  'ASC'

          ));

          while($productCards->have_posts()) {
            $productCards->the_post(); 

            get_template_part( 'template-parts/card', 'links' );

           }
        ?>
        
      </section> <!-- product__cards container -->
    <!-- ============================================== -->

    <!-- CTA SECTION
    =================================================== -->
      <?php get_template_part( 'template-parts/cta' ); ?>
    <!-- ============================================== -->

<?php get_footer(); ?>