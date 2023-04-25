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
      <!-- ============================================== -->

      </section> <!-- pageIntro -->
    <!-- ============================================== -->

<?php get_footer(); ?>