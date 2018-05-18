<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Maverick_Transport_Inc
 */

get_header();
?>

	<div id="primary" class="content-area">
   <main id="main" class="site-main">
     <div class="wrapper">

       <section class="error-404 not-found">
        <article>
          <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Sorry that page can&rsquo;t be found.', 'fuse_eng' ); ?></h1>
          </header><!-- .page-header -->

          <div class="page-content">
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Try another page or use this link to return to the ', 'fuse_eng' ); ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">homepage</a>.</p>

          </div><!-- .page-content -->
        </article>
       </section><!-- .error-404 -->

     </div>
   </main><!-- #main -->
 </div><!-- #primary -->

<?php
get_footer();
