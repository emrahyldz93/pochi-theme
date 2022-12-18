<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pochi
 */
get_header();
?>

<main id="primary" class="">

				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', 'page');


					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
				<?php
				$args = array(
					'before'            => '<div class="page-links-XXX"><span class="page-link-text">' . __('More pages: ', 'pochi') . '</span>',
					'after'             => '</div>',
					'link_before'       => '<span class="page-link">',
					'link_after'        => '</span>',
					'next_or_number'    => 'next',
					'separator'         => ' | ',
					'nextpagelink'      => __('Next &raquo', 'pochi'),
					'previouspagelink'  => __('&laquo Previous', 'pochi'),
				);

				wp_link_pages($args);
				?>
	
</main><!-- #main -->


<?php
get_footer();
