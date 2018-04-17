<?php
/**
 * Displays the custom header image and title hero section
 *
 * @package Maverick_Transport_Inc
 */

function maverick_custom_header_section() {
  if( is_front_page() && has_post_thumbnail() ) { ?>

    <section class="hero">

      <?php if ( function_exists( 'get_field' ) ) :
        $hero_title        = get_field( 'home_hero_title' );
        $hero_btn_text     = get_field( 'home_hero_button_text' );
        $hero_btn_link     = get_field( 'home_hero_button_url' ); ?>

        <figure class="feature-img">
          <?php the_post_thumbnail('home-feature-img'); ?>
        </figure>

        <div class="title-wrapper">
          <div class="title-inner-wrapper">
            <div class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></div>
            <a href="<?php echo wp_kses_post( $hero_btn_link ); ?>"><button><?php echo wp_kses_post( $hero_btn_text ); ?></button></a>
          </div>
        </div>

      <?php endif; ?>

    </section>

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


