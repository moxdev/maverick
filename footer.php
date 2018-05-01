<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maverick_Transport_Inc
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

      <div class="left-content">
        <div class="footer-logo">
          <?php the_custom_logo(); ?>
        </div>

        <?php if( function_exists( 'get_field' ) ) :
          $name    = get_field( 'company_name', 'global-information' );
          $address = get_field( 'address', 'global-information' );
          $city    = get_field( 'city', 'global-information' );
          $state   = get_field( 'state', 'global-information' );
          $zip     = get_field( 'zip', 'global-information' );
          $phone   = get_field( 'phone', 'global-information' );
          $fax     = get_field( 'fax', 'global-information' );
          $email   = get_field( 'email', 'global-information' );

          if( $name || $address || $city || $state || $zip || $phone || $fax || $email ) : ?>

            <div class="contact-information ftr-flex-child">
              <div itemscope itemtype="http://schema.org/Organization">
                <span itemprop="name" class="company-name"><?php echo esc_html( $name ); ?></span>
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="streetAddress"><?php echo esc_html( $address ); ?>, </span>
                    <span itemprop="addressLocality"><?php echo esc_html( $city ); ?>, </span>
                    <span itemprop="addressRegion"><?php echo esc_html( $state ); ?></span>
                    <span itemprop="postalCode"><?php echo esc_html( $zip ); ?></span>
                </div>

                <?php if ( $phone ): ?>
                  <span class="footer-tel"><span>Contact Us |</span><span itemprop="telephone"><a href="tel:<?php echo esc_html( $phone ); ?>"> <?php echo esc_html( $phone ); ?></a> </span></span>
                <?php endif; ?>

                  <!-- <span class="footer-fax">Fax: <span itemprop="faxNumber"><?php // echo esc_html( $fax ); ?></span></span> -->
                  <!-- <span class="email"><a href="mailto:<?php // echo esc_html( $email ); ?>" itemprop="email"><?php // echo esc_html( $email ); ?></a></span> -->
              </div>
            </div>

          <?php endif ?>

        <?php endif; ?>

      </div>

      <div class="right-content">
        <nav id="footer-navigation">
          <?php
          wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'menu_id'        => 'footer-menu',
          ) );
          ?>
        </nav><!-- #alt-navigation -->

        <?php if( function_exists( 'get_field' ) ) :
          $social_header = get_field( 'social_header', 'social' );
          $fb            = get_field( 'facebook_url', 'social' );
          $pin           = get_field( 'pinterest_url', 'social' );
          $tw            = get_field( 'twitter_url', 'social' );
          $inst          = get_field( 'instagram_url', 'social' );
          $yt            = get_field( 'youtube_url', 'social' );
          $goo           = get_field( 'google_plus_url', 'social' );
          $link          = get_field( 'linkedin_url', 'social' );

          if( $fb || $pin || $tw || $insta || $yt || $goo || $link ) : ?>

          <div class="social ftr-flex-child">

            <?php if ( $social_header ): ?>
              <h2><?php echo wp_kses_post( $social_header ); ?></h2>
            <?php endif; ?>

            <ul class="social-media">

              <? if ( $fb ): ?>
                <li class="fb">
                  <a href="<?php echo wp_kses_post( $fb ); ?>" target="_blank">Find Us On Facebook</a>
                </li>
              <?php endif; ?>

              <? if ( $link ): ?>
                <li class="linked">
                  <a href="<?php echo wp_kses_post( $link ); ?>" target="_blank">Find Us On LinkedIn</a>
                </li>
              <?php endif; ?>

              <? if ( $tw ): ?>
                <li class="tw">
                  <a href="<?php echo wp_kses_post( $tw ); ?>" target="_blank">Follow Us On Twitter</a>
                </li>
              <?php endif; ?>

              <? if ( $pin ): ?>
                <li class="pin">
                  <a href="<?php echo wp_kses_post( $pin ); ?>" target="_blank">Find Us On Pinterest</a>
                </li>
              <?php endif; ?>

              <? if ( $inst ): ?>
                <li class="insta">
                  <a href="<?php echo wp_kses_post( $inst ); ?>" target="_blank">Find Us On Instagram</a>
                </li>
              <?php endif; ?>

              <? if ( $yt ): ?>
                <li class="yt">
                  <a href="<?php echo wp_kses_post( $yt ); ?>" target="_blank">Watch Us On YouTube</a>
                </li>
              <?php endif; ?>

              <? if ( $goo ): ?>
                <li class="goo">
                  <a href="<?php echo wp_kses_post( $goo ); ?>" target="_blank">Find Us On Google+</a>
                </li>
              <?php endif; ?>

            </ul>
          </div>

          <?php endif; ?>

        <?php endif; ?>
      </div>

		</div><!-- .site-info -->
  </footer><!-- #colophon -->
  
  <nav id="mobile-navigation">

    <?php
      wp_nav_menu( array(
        'theme_location' => 'mobile-menu',
        'menu_id' => 'mobile-menu',
        'container' => '',
      ) );
    ?>

  </nav>
  
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
