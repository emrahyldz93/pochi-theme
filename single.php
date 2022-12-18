<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pochi
 */

get_header();
?>

<main id="primary" class="single-main">
	<div class="container p-60 p-0">
		<div class="row">
			<div class="col-xl-8 col-lg-12">
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());

				
					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
						
					 else:
						comment_form();
					 endif;

				endwhile; // End of the loop.
				?>
			</div>
			<div class="col-xl-4 col-lg-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
