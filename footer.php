<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pochi
 */

?>
<?php $options = get_option('pochi_settings'); ?>

<footer>
	<section>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-logo">
						<img src="<?php echo $options['header-logo']['url'] ?>" alt="<?php echo $options['header-logo']['alt'] ?>">
					</div>
					<div class="contact-link">
						<ul>
							<?php
							$layout = $options['footer-social-icon'];
							if ($layout) : foreach ($layout as $row) { ?>
									<li><a href="<?php echo $row['link']; ?>"><i class="<?php echo $row['icon']; ?> fa-2x"></i></a></li>
							<?php    }
							endif; ?>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</footer>
<!-- footer-area-start -->

<?php wp_footer(); ?>

</body>

</html>