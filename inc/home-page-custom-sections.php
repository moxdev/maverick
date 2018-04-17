<?php
/**
 * Home page custom sections
 *
 * @package Maverick_Transport_Inc
 */

function maverick_home_page_sections() {
	if ( function_exists( 'get_field' ) ) {
    if( have_rows( 'home_custom_sections' ) ): ?>

      <?php while( have_rows('home_custom_sections') ): the_row();
        $home_icon_section        = get_sub_field( 'home_icon_section' );
        $home_testimonial_section = get_sub_field( 'home_testimonial_section' );
        $learn_more_video_section = get_sub_field( 'learn_more_video_section' );

        if ( $home_icon_section ) :

          while( have_rows('home_icon_section') ): the_row();
            $home_icon_section_background_image = get_sub_field('home_icon_section_background_image');
            $home_icon_section_content          = get_sub_field('home_icon_section_content');
            $home_icon_section_icons            = get_sub_field('home_icon_section_icons');
            $home_icon_section_button_text      = get_sub_field('home_icon_section_button_text');
            $home_icon_section_button_url       = get_sub_field('home_icon_section_button_url'); ?>

            <section class="home-icon">
              <figure class="bkg-image">
                <img src="<?php echo esc_url( $home_icon_section_background_image['url'] ); ?>" alt="<?php echo esc_attr( $home_icon_section_background_image['alt'] ); ?>" description="<?php echo esc_attr( $home_icon_section_background_image['description'] ); ?>">
              </figure>

              <div class="wrapper">
                <div class="content-wrapper">
                  <?php echo wp_kses_post( $home_icon_section_content ); ?>
                </div>

                <?php if( have_rows('home_icon_section_icons') ): ?>

                <div class="icon-wrapper">
                  <?php while( have_rows('home_icon_section_icons') ): the_row();
                    $icon       = get_sub_field('icon');
                    $icon_title = get_sub_field('icon_title'); ?>

                  <?php if( !empty( $icon ) ) : ?>

                    <div class="icon-inner-wrapper">

                      <img src="<?php echo esc_url( $icon['sizes'][''] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" description="<?php echo esc_attr( $icon['description'] ); ?>">

                      <?php echo wp_kses_post( $icon_title ); ?>

                    </div>

                  <?php endif; ?>

                  <?php endwhile; ?>
                </div>

                <?php endif; ?>

                <?php if ( $home_icon_section_button_text ) : ?>

                  <div class="button-wrapper">
                    <a class="btn" href="<?php echo wp_kses_post( $home_icon_section_button_url ); ?>"><?php echo wp_kses_post( $home_icon_section_button_text ); ?></a>
                  </div>

                <?php endif; ?>

              </div><!-- wrapper -->
            </section><!-- home-icon-section -->

          <?php endwhile;

        endif;

        if ( $home_testimonial_section ) :

          if( have_rows('home_testimonial_section') ):

            while( have_rows('home_testimonial_section') ): the_row();

            $testimonial_background_image = get_sub_field( 'testimonial_background_image' );
            $testimonial_header           = get_sub_field( 'testimonial_header' );
            $testimonial_button_text      = get_sub_field( 'testimonial_button_text' );
            $testimonial_button_url       = get_sub_field( 'testimonial_button_url' );
            $testimonial                  = get_posts( array('post_type' => 'testimonials', 'posts_per_page' => -1) ); ?>

            <section class="home-testimonial">

              <figure class="bkg-image">
                <img src="<?php echo esc_url( $testimonial_background_image['url'] ); ?>" alt="<?php echo esc_attr( $testimonial_background_image['alt'] ); ?>" description="<?php echo esc_attr( $testimonial_background_image['description'] ); ?>">
              </figure>

              <div class="wrapper">
                <div class="inner-wrapper">

                  <h2><?php echo wp_kses_post( $testimonial_header ); ?></h2>

                  <div class="divider">
                    <span class="quote">"</span>
                  </div>

                  <?php if ($testimonial) {
                      // WP_Query arguments
                      $args = array(
                        'post_type'   => array( 'testimonials' ),
                        'post_status' => array( 'publish' ),
                        'nopaging'    => true,
                        'order'       => 'DESC',
                        'orderby'     => 'date',
                      );
                      // The Query
                      $testimonials = new WP_Query( $args );
                      // The Loop
                      if ( $testimonials->have_posts() ) { ?>

                        <div class="testimonial">
                          <div class="testimonial-carousel">

                          <?php while ( $testimonials->have_posts() ) {
                              $testimonials->the_post();

                              ?>

                              <div class="cell">
                                <div class="cell-wrapper">
                                  <?php the_content(); ?>
                                </div>
                              </div><!-- cell -->

                            <?php

                          } ?>

                          </div><!-- testimonial-carousel -->
                        </div><!-- testimonial -->

                      <?php
                      }
                      // Restore original Post Data
                      wp_reset_postdata();
                  } ?>

                  <?php if ( $testimonial_button_text ) : ?>

                    <div class="button-wrapper">
                      <a class="btn" href="<?php echo wp_kses_post( $testimonial_button_url ); ?>"><?php echo wp_kses_post( $testimonial_button_text ); ?></a>
                    </div>

                  <?php endif; ?>

                </div>
              </div><!-- wrapper -->
            </section><!-- home-testimonial -->

            <?php endwhile;

          endif;

        endif;

      endwhile;

    endif;
	}
}
