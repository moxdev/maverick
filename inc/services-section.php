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

         <ul class="services-listing">

         <?php while( have_rows('services') ): the_row();

           $services_image                = get_sub_field('services_image');
           $service_title                 = get_sub_field('service_title');
           $service_read_more_description = get_sub_field('service_read_more_description');
           $service_full_description      = get_sub_field('service_full_description');
           $service_button_url            = get_field('service_button_url');
           $service_button_text           = get_field('service_button_text');
           ?>

           <li>

             <div>
               <div class="icon-header-wrapper">
                 <img class="icon" src="<?php echo esc_attr( $services_image['url'] ); ?>" alt="<?php echo esc_attr( $services_image['alt'] ); ?>">
                 <h2><?php echo wp_kses_post( $service_title ); ?></h2>
               </div>

               <div class="services-content">
                 <?php echo wp_kses_post( $service_read_more_description ); ?>
               </div>

               <div class="services-desc">
                 <?php echo wp_kses_post( $service_full_description ); ?>

                 <?php if( $service_button_url ): ?>

                  <a class="btn" href="<?php echo esc_url( $service_button_url ); ?>"><?php echo wp_kses_post( $service_button_text ); ?></a>

                 <?php endif; ?>

               </div>
             </div>

           </li>

         <?php endwhile; ?>

         </ul>

         <?php if( $service_button_url ): ?>

          <div class="button-wrapper">
            <a class="btn" href="<?php echo esc_url( $service_button_url ); ?>"><?php echo wp_kses_post( $service_button_text ); ?></a>
          </div>

         <?php endif; ?>

       </div>
     </section>

   <?php endif;
 }
}

