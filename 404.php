<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pochi
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 text-center">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pochi' ); ?></h1>
					</div>
				</div>
			</div>
		

		
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
