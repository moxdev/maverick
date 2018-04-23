<?php
/**
 * Displays Feature Load Section with read more dropdowns
 *
 * @package Maverick_Transport_Inc
 */

function maverick_featured_load_page_sections() {
	if ( function_exists( 'get_field' ) ) {
    if( have_rows('featured_load') ): ?>

      <section class="featured-load">
        <div class="wrapper">

          <?php while( have_rows('featured_load') ): the_row();

            $featured_load_image             = get_sub_field('featured_load_image');
            $featured_load_shown_section     = get_sub_field('featured_load_shown_section');
            $featured_load_read_more_section = get_sub_field('featured_load_read_more_section');

            ?>

            <div class="featured-load-inner-wrapper">

              <?php if ( $featured_load_image ): ?>

                <figure class="featured-load-image">

                  <?php if ( $featured_load_image ): ?>
                    <img src="<?php echo esc_url( $featured_load_image['sizes']['featured-load-img'] ); ?>" alt="<?php echo esc_attr( $featured_load_image['alt'] ); ?>" description="<?php echo esc_attr( $featured_load_image['description'] ); ?>">
                  <?php endif; ?>

                </figure>

              <?php endif; ?>

              <?php if ( $featured_load_shown_section ): ?>

                <div class="featured-load">

                  <span class="featured-load-shown-section">
                    <?php echo wp_kses_post( $featured_load_shown_section ); ?>
                  </span>

                  <?php if ( $featured_load_read_more_section ): ?>

                    <span class="featured-load-section-read-more">
                        <a href="#" class="read-more-btn">Read more &gt;</a>
                        <div class="read-more-dropdown">
                            <span><?php echo wp_kses_post( $featured_load_read_more_section ); ?></span>
                        </div>
                    </span>

                  <?php endif; ?>

                </div>

              <?php endif; ?>

            </div>

          <?php endwhile; ?>

        </div>
      </section>

    <?php endif;
	}
}

