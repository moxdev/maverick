<?php
/**
 * Template Name: Contact
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

       <?php
       while ( have_posts() ) :
         the_post();

         get_template_part( 'template-parts/content', 'page' );

         // If comments are open or we have at least one comment, load up the comment template.
         if ( comments_open() || get_comments_number() ) :
           comments_template();
         endif;

       endwhile; // End of the loop.
       ?>

     </div>
   </main><!-- #main -->
  </div><!-- #primary -->

  <?php if( function_exists( 'maverick_contact_page_section' ) ) : maverick_contact_page_section(); endif; ?>

<?php

get_footer();
