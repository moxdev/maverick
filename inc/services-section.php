<?php
/**
 * Displays Services Page Section
 *
 * @package Maverick_Transport_Inc
 */

function maverick_services_section() {
	if ( function_exists( 'get_field' ) ) {
    if( have_rows('services') ): ?>

      <section class="services">
        <div class="wrapper">

          <?php while( have_rows('services') ): the_row();

            $services_image   = get_sub_field('services_image');
            $services_content = get_sub_field('services_content');

            ?>

            <div class="services-inner-wrapper">

              <?php if ( $services_image ): ?>

                <figure class="services-image">

                  <img src="<?php echo esc_url( $services_image['sizes']['services-img'] ); ?>" alt="<?php echo esc_attr( $services_image['alt'] ); ?>" description="<?php echo esc_attr( $services_image['description'] ); ?>">

                </figure>

              <?php endif; ?>

              <?php if ( $services_content ): ?>

                <div class="services">

                  <?php echo wp_kses_post( $services_content ); ?>

                </div>

              <?php endif; ?>

            </div>

          <?php endwhile; ?>

        </div>
      </section>

    <?php endif;
	}
}

