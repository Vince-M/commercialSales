<?php get_header(); ?>

    <!-- HERO
    =================================================== -->
    <section class="hero__pages" role="banner" data-type="background" data-speed="2">
        <?php pageBanner(); ?>
      </section> <!-- hero__pages -->
    <!-- ============================================== -->

    <!-- PAGE INTRO
    =================================================== -->
      <section class="pageIntro">
          <div class="page__headBkgd">
            <h1 class="page__heading container"><?php the_title(); ?></h1>
          </div>

        <!-- CONTENT
        =================================================== -->
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

          <?php endwhile; else: ?>

          <p>Sorry, no pages found</p>

          <?php endif; ?>

      </section> <!-- pageIntro -->


      <!-- PRODUCT GRID
      =================================================== -->
      <div class="productCardHead container row">
        <h3>We offer quality products, at wholesale prices!</h3>
        <h5>Our team of dedicated individuals are here to help source, procure and ship your requirements into communities across Northern Canada, year round!</h5>
      </div>

      <section class="product__cards container" aria-labelledby="product_cards">
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