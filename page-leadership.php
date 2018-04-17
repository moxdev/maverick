<?php
/**
 * Template Name: Leadership
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maverick_Transport_Inc
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <div class="wrapper">

        <?php if( function_exists( 'maverick_leadership_page_sections' ) ) : maverick_leadership_page_sections(); endif; ?>

      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
