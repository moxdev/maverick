<?php
/**
 * Displays Contact page sections
 *
 * @package Maverick_Transport_Inc
 */

function maverick_contact_page_section() {
	if ( function_exists( 'get_field' ) ) {
    ?>
      <section class="contact">
        <div class="wrapper">
          <div class="form-wrapper">
            <?php if( function_exists( 'mm4_you_contact_form' ) ) :
              echo do_shortcode('[mm4-cf-short]');
            endif; ?>
          </div>

          <?php if( function_exists( 'acf_add_options_page' ) ) :
            $name           = get_field( 'company_name', 'global-information' );
            $address        = get_field( 'address', 'global-information' );
            $city           = get_field( 'city', 'global-information' );
            $state          = get_field( 'state', 'global-information' );
            $zip            = get_field( 'zip', 'global-information' );
            $phone          = get_field( 'phone', 'global-information' );
            $fax            = get_field( 'fax', 'global-information' );
            $email          = get_field( 'email', 'global-information' );
            $hours          = get_field( 'hours_of_operation', 'global-information' );
            $sidebar_header = get_field( 'sidebar_header' );

            if( $name || $address || $city || $state || $zip || $phone || $fax || $email || $hours ) : ?>

              <aside class="sidebar-contact-information">
                <div itemscope itemtype="http://schema.org/Organization">

                  <?php if ( $sidebar_header ): ?>

                    <h2><?php echo wp_kses_post( $sidebar_header ); ?></h2>

                  <?php endif; ?>

                  <div class="address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                      <span itemprop="streetAddress"><?php echo esc_html( $address ); ?></span><br>
                      <span itemprop="addressLocality"><?php echo esc_html( $city ); ?>, </span>
                      <span itemprop="addressRegion"><?php echo esc_html( $state ); ?></span>
                      <span itemprop="postalCode"><?php echo esc_html( $zip ); ?></span>
                  </div>

                  <?php if ( $phone ): ?>
                    <div class="phone" itemprop="telephone">
                      <a href="tel:<?php echo esc_html( $phone ); ?>"> <?php echo esc_html( $phone ); ?></a>

                      <?php if ( $fax ): ?>
                        <span class="fax" itemprop="faxNumber"><?php echo esc_html( $fax ); ?></span>
                      <?php endif; ?>

                    </div>
                  <?php endif; ?>

                  <?php if ( $hours ): ?>
                    <div class="hours" itemprop="openingHours"><?php echo wp_kses_post( $hours ); ?></div>
                  <?php endif; ?>

                </div>
              </aside>

            <?php endif ?>

          <?php endif; ?>

        </div>
      </section>
    <?php

	}
}

