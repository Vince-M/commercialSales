

  <div class="product-card">
    <a href="<?php the_permalink(); ?>">
      <div class="product__card product__card1">
        <div class="product__card--content">
            <div class="product__card--image">
            <?php 
              $image = get_field('product_image');
              if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" width="82" height="69" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; 
              ?>

            </div>
            <p><?php the_title(); ?></p>
        </div> <!-- product__card--content -->
      </div> <!-- product__card -->
    </a>
  </div>
