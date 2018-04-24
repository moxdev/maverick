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

         <ul class="box-container">

         <?php while( have_rows('services') ): the_row();

           $thumb_img           = get_sub_field('thumbnail_img');
           $lightbox_img        = get_sub_field('lightbox_img');
           $service_title       = get_sub_field('service_title');
           $service_content     = get_sub_field('service_content');
           $service_description = get_sub_field('service_description');

           ?>

           <li class="box">

             <a href="<?php echo $lightbox_img['url']; ?>" class="glightbox">
               <img src="<?php echo $thumb_img['url']; ?>" alt="<?php echo $thumb_img['alt']; ?>" />
               <div class="serivce-info">

               <?php if ( $service_title ): ?>

                <h2><?php echo wp_kses_post( $service_title ); ?></h2>

               <?php endif; ?>

               <?php if ( $service_content ): ?>

                <?php echo wp_kses_post( $service_content ); ?>

               <?php endif; ?>

               </div>

               <div class="glightbox-desc">

                 <h2><?php  echo wp_kses_post( $service_title ); ?></h2>

                 <?php echo wp_kses_post( $service_description ); ?>

                  <!-- <a href="/contact">Qoute</a> -->
               </div>
             </a>

           </li>

         <?php endwhile; ?>

         </ul>

       </div>
     </section>

   <?php endif;
 }
}

