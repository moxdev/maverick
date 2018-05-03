<?php
/**
 * Displays the custom header image and title hero section
 *
 * @package Maverick_Transport_Inc
 */

function maverick_custom_header_section() {
  if( is_front_page() && function_exists( 'get_field' ) ) {

    $hero_title    = get_field( 'home_hero_title' );
    $hero_btn_text = get_field( 'home_hero_button_text' );
    $hero_btn_link = get_field( 'home_hero_button_url' );
    $image_collage = get_field( 'image_collage' ); ?>

    <?php if ( $hero_title || $image_collage ) : ?>

      <section class="home-hero">

      <?php if ( $image_collage ):

        while( have_rows( 'image_collage' ) ): the_row();

          $left_top_image     = get_sub_field( 'left_top_image' );
          $right_top_image    = get_sub_field( 'right_top_image' );
          $left_bottom_image  = get_sub_field( 'left_bottom_image' );
          $right_bottom_image = get_sub_field( 'right_bottom_image' ); ?>

          <div class="image-collage-wrapper">

            <figure class="feature-img img-1">
              <img src="<?php echo esc_url( $left_top_image['sizes']['home-collage-img'] ); ?>" alt="<?php echo esc_attr( $left_top_image['alt'] ); ?>" description="<?php echo esc_attr( $left_top_image['description'] ); ?>">
            </figure>

            <figure class="feature-img img-2">
              <img src="<?php echo esc_url( $right_top_image['sizes']['home-collage-img'] ); ?>" alt="<?php echo esc_attr( $right_top_image['alt'] ); ?>" description="<?php echo esc_attr( $right_top_image['description'] ); ?>">
            </figure>

            <figure class="feature-img img-3">
              <img src="<?php echo esc_url( $left_bottom_image['sizes']['home-collage-img'] ); ?>" alt="<?php echo esc_attr( $left_bottom_image['alt'] ); ?>" description="<?php echo esc_attr( $left_bottom_image['description'] ); ?>">
            </figure>

            <figure class="feature-img img-4">
              <img src="<?php echo esc_url( $right_bottom_image['sizes']['home-collage-img'] ); ?>" alt="<?php echo esc_attr( $right_bottom_image['alt'] ); ?>" description="<?php echo esc_attr( $right_bottomm_image['description'] ); ?>">
            </figure>

          </div>

        <?php

        endwhile; ?>

      <?php endif; ?>

      <?php if ( $hero_title ): ?>

        <div class="title-wrapper">
          <div class="title-inner-wrapper">
            <div class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></div>
            <a class="btn" href="<?php echo wp_kses_post( $hero_btn_link ); ?>"><?php echo wp_kses_post( $hero_btn_text ); ?></a>
          </div>
        </div>

      <?php endif; ?>

      </section>

    <?php endif; ?>

    <?php

  } elseif ( is_home() || is_archive() || is_single() ) {
    $news_feature_img = get_the_post_thumbnail( get_option( 'page_for_posts' ), 'feature-img' ); ?>

    <section class="hero">
      <figure class="feature-img">
        <?php echo $news_feature_img; ?>
      </figure>
    </section>

    <?php

  } elseif ( is_page() && has_post_thumbnail() ) { ?>

    <section class="hero">

      <?php if ( function_exists( 'get_field' ) ) :
        $hero_title = get_field( 'hero_title' ); ?>

        <figure class="feature-img">
          <?php the_post_thumbnail('feature-img'); ?>
        </figure>

        <div class="title-wrapper">
          <div class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></div>
        </div>

      <?php endif; ?>

    </section>

    <?php
  }
}


