<?php get_header(); ?>

    <!-- HERO
    =================================================== -->
      <section class="hero__pages" role="banner" data-type="background" data-speed="2">
        <div style="background: url(<?php the_field( 'hero_page' ); ?>) 
              no-repeat; 
              background-position: top; 
              background-size: cover; 
              left: 51%; padding: 0; 
              position: relative; 
                -webkit-transform: translateX(-51%); 
              transform: translateX(-51%); 
              margin-top: 0px; 
              margin-bottom: 0px;  
              height: 450px;">
          </div>
      </section> <!-- hero__pages -->
    <!-- ============================================== -->

    <!-- PAGE INTRO
    =================================================== -->
    <section class="pageIntro">
        <div class="page__headBkgd">
          <h1 class="page__heading container">Commercial Sales Products</h1>
        </div>
    <!-- ============================================== -->

    <!-- CONTENT
    =================================================== -->

      <div class="container row product__head">
      
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php 
            $image = get_field('product_image');
            if( !empty( $image ) ): ?>
                <img class="product__heading--icon" src="<?php echo esc_url($image['url']); ?>" width="58" height="54" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?> <h2 class="product__heading"><?php the_title(); ?></h2>
      </div>
    </section> <!-- pageIntro -->

        <div>
          <?php the_content(); ?>

          <?php endwhile; else: ?>

          <p>Sorry, no pages found</p>

          <?php endif; ?>
        </div>

      </div>
        
      <!-- ============================================== -->

      </section> <!-- pageIntro -->
    <!-- ============================================== -->

<?php get_footer(); ?>