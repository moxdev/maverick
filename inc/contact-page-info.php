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
              echo do_shortcode('[mm4-cf]');
            endif; ?>
          </div>

          <div class="contact-info">

          </div>
        </div>
      </section>
    <?php

	}
}

