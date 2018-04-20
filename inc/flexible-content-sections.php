<?php
/**
 * Displays flexible sections
 *
 * @package Maverick_Transport_Inc
 */

function maverick_flexble_content_sections() {
  if( function_exists('get_field') ) {

    if( have_rows('flexible_content') ):

      while ( have_rows('flexible_content') ) : the_row();

        if( get_row_layout() == 'gray_section' ):

          $gray_section_content = get_sub_field('gray_section_content'); ?>

            <section class="gray-section">
              <div class="wrapper">
                <?php echo wp_kses_post( $gray_section_content ); ?>
              </div>
            </section>

          <?php

        elseif( get_row_layout() == 'white_section' ):

          $white_section_content = get_sub_field('white_content_section'); ?>

            <section class="white-section">
              <div class="wrapper">
                <?php echo wp_kses_post( $white_section_content ); ?>
              </div>
            </section>

          <?php

        elseif( get_row_layout() == 'call_to_action_section' ):
          $cta_background_image  = get_sub_field('cta_background_image');
          $call_to_action_content = get_sub_field('call_to_action_content'); ?>

            <section class="cta-section">
              <figure class="bkg-image">
                <img src="<?php echo esc_url( $cta_background_image['sizes']['call-to-action-img'] ); ?>" alt="<?php echo esc_attr( $cta_background_image['alt'] ); ?>" description="<?php echo esc_attr( $cta_background_image['description'] ); ?>">
              </figure>

              <div class="cta-wrapper">
                <div class="cta-inner-wrapper">
                  <?php echo wp_kses_post( $call_to_action_content ); ?>
                </div>
              </div>
            </section>

          <?php

        endif;

      endwhile;

    endif;
  }
}

