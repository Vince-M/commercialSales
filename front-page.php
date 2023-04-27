<?php get_header(); ?>

<!-- HERO
=================================================== -->
<section class="hero feature" aria-labelledby="hero_section">
  <div class="hero__index" style="
    background-image: url(<?php the_field( 'front_page_hero' ); ?>);" >
          <div class="hero__index--headline">
            <h1 class="hero__index--headline"><?php the_field( 'front_page_header' ); ?></h1>
            <h4 class="hero__index--subhead"><?php the_field( 'front_page_subhead' ); ?></h4>
            <a href="<?php echo site_url( 'contact' ); ?>"><button class="button btn btn--yellow">Find Out How</button></a>

            <section class="header-down-arrow">
              <img src="<?php echo get_theme_file_uri( 'img/downarrow.svg' ); ?>" width="50" alt="">
            </section> <!-- header-down-arrow -->
          </div>
  </div> <!-- hero__index -->
</section> <!-- hero feature -->
<!-- ============================================== -->

<!-- BULK ORDER
=================================================== -->
  <section class="index__bulkOrder container">
    <h3 class="bulk__header"><?php the_field( 'front_page_bulk_order_intro_head' ); ?></h3>
    <p class="page__intro"><?php the_field( 'front_page_bulk_order_intro' ); ?></p>
  </section> <!-- index__bulkOrder container -->
<!-- ============================================== -->

<!-- PRODUCTS
=================================================== -->
  <section class="indexProducts index__fullWidth" style="background: url(<?php the_field( 'front_page_products_img' ); ?>) no-repeat; background-position: top center; background-size: cover;">
    <div class="container index__fullWidth--text">
      <h2 class="index__fullWidth--head"><?php the_field( 'front_page_products_header' ); ?></h2>
      <h5 class="index__fullWidth--subHead"><?php the_field( 'front_page_prodcuts_subheader' ); ?></h5>
      <h6 class="index__fullWidth--subText"><?php the_field( 'front_page_products_text' ); ?></h6>
      <a href="<?php echo site_url( 'contact' ); ?>"><button class="button btn btn--white">Contact</button></a>
    </div> <!-- container index__fullWidth--text -->
  </section> <!-- indexProducts index__fullWidth -->
<!-- ============================================== -->

<!-- PRODUCT GRID
=================================================== -->
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

    <?php wp_reset_postdata() ?>

  </section> <!-- product__cards container -->
<!-- ============================================== -->

<!-- SOLUTIONS
=================================================== -->
  <section class="indexSolutions index_fullWidth">
    <div class="solutionsText">
      <div class="container index__fullWidth--solutions">
        <h2 class="indexSolutions__head">Solutions</h2>
        <h5 class="indexSolutions__subHead">300+ years of experience shipping products to the north.</h5>
        <h6 class="indexSolutions__subText">Reach out to the Commercial Sales team, see what solution would be most suitable for you.</h6>
        <button class="button btn btn--dark"><a href="<?php echo site_url( 'contact' ); ?>" class="btn__contact">Contact</a></button>
      </div> <!-- ourCustomers__pullOut--text -->
      <div class="indexSolutions__background"></div> <!-- ourCustomers__pullOut -->
    </div><!-- solutionsText -->
  </section> <!-- indexSolutions index_fullWidth -->
<!-- ============================================== -->

<!-- TRANSPORT
=================================================== -->
<section class="transport container row">
    <div class="air">
      <figure>
        <?php 
          $image = get_field('air_transport_img');
          if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; 
        ?>
        <figcaption class="transport__caption"><?php the_field( 'air_transport_text' ); ?></figcaption>
      </figure>
    </div>
    <div class="iceRoad">
    <figure>
        <?php 
          $image = get_field('iceroad_transport_img');
          if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; 
        ?>
        <figcaption class="transport__caption"><?php the_field( 'iceroad_text' ); ?></figcaption>
      </figure>
    </div>
  </section>
<!-- ============================================== -->

<!-- CTA SECTION
=================================================== -->
<?php get_template_part( 'template-parts/cta' ); ?>
<!-- ============================================== -->

<!-- WAREHOUSE
=================================================== -->

<!-- ============================================== -->

<?php get_footer(); ?>