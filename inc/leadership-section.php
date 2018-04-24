<?php
/**
 * Displays Leadsership Section with read more dropdowns
 *
 * @package Maverick_Transport_Inc
 */

function maverick_leadership_page_sections() {
	if ( function_exists( 'get_field' ) ) {
    if( have_rows('leadership') ): ?>

      <section class="leadership">

          <?php while( have_rows('leadership') ): the_row();

            $team_member_image                 = get_sub_field('team_member_image');
            $team_member_bio_shown_section     = get_sub_field('team_member_bio_shown_section');
            $team_member_bio_read_more_section = get_sub_field('team_member_bio_read_more_section');

            ?>

            <div class="bio-inner-wrapper">

              <figure class="team-member">

                <?php if ( $team_member_image ): ?>
                  <img src="<?php echo esc_url( $team_member_image['sizes']['team-bio-img'] ); ?>" alt="<?php echo esc_attr( $team_member_image['alt'] ); ?>" description="<?php echo esc_attr( $team_member_image['description'] ); ?>">
                <?php endif; ?>

              </figure>

              <?php if ( $team_member_bio_shown_section ): ?>

                <div class="team-bio-section">

                  <span class="team-bio-shown-section">
                    <?php echo wp_kses_post( $team_member_bio_shown_section ); ?>
                  </span>

                  <?php if ( $team_member_bio_read_more_section ): ?>

                    <span class="team-bio-section-read-more">
                        <a href="#" class="read-more-btn">Read more &gt;</a>
                        <div class="read-more-dropdown">
                            <span><?php echo wp_kses_post( $team_member_bio_read_more_section ); ?></span>
                        </div>
                    </span>

                  <?php endif; ?>

                </div>

              <?php endif; ?>

            </div>

          <?php endwhile; ?>

      </section>

    <?php endif;
	}
}

