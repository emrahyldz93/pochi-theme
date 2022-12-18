<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pochi
 */

?>

<div class="container p-60">
	<div class="row">
		<div class="col-xl-12">

			
			<h1 class="page-title"><?php esc_html_e('Nothing Found', 'pochi'); ?></h1>
			

			<div class="page-content">
				<?php
				if (is_home() && current_user_can('publish_posts')) :

					printf(
						'<p>' . wp_kses(
							/* translators: 1: link to WP admin new post page. */
							__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pochi'),
							array(
								'a' => array(
									'href' => array(),
								),
							)
						) . '</p>',
						esc_url(admin_url('post-new.php'))
					);

				elseif (is_search()) :
				?>

					<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'pochi'); ?></p>
				<?php
					get_search_form();

				else :
				?>

					<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'pochi'); ?></p>
				<?php
					get_search_form();

				endif;
				?>
			</div><!-- .page-content -->
		</div>

	</div>
</div>