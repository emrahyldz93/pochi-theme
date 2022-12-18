<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pearl
 */

get_header();
$meta = get_post_meta(get_the_ID(), 'metabox_options', true);

?>

<section id="s-project">
	<div class="container-fluid">
		<div class="row">
			<?php

			if (have_posts()) :

				while (have_posts()) : the_post(); ?>
					<div class="col-xl-7 col-lg-12">
						<div class="project-image">
							<div class=" PortfolioGallery">
								<div class="swiper-wrapper">

									<?php

									$gallery = $meta['portfolio-gallery'];
									$images = explode(',', $gallery);

									foreach ($images as $row) { ?>
										<div class="swiper-slide">
											<img class="img-fluid" src="<?php echo wp_get_attachment_url($row) ?>" alt="<?php the_title(); ?>">

										</div>

									<?php }	?>


								</div>
								<div class="swiper-button-next"><i class="fas fa-long-arrow-alt-right fa-2x"></i> </div>
								<div class="swiper-button-prev"><i class="fas fa-long-arrow-alt-left fa-2x"></i></div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-12 p-30">
						<div class="title-content">
							<?php
							$terms = get_terms('field', $args);
							foreach ($terms as $term) { ?>
								<span><?php echo $term->name; ?></span>

							<?php  } ?>

							<h1><?php the_title(); ?></h1>
							<p><?php the_excerpt(); ?></p>
						</div>
						<div class="project-time">
							<?php
							$layout = $meta['information-group'];

							if ($layout) : foreach ($layout as $row) { ?>
									<div class="service-box">
										<div class="service-icon">
											<i class="<?php echo $row['information-icon'] ?>"></i>
										</div>
										<div class="service-content">
											<h3><?php echo $row['information-title'] ?></h3>
											<p><?php echo $row['information-content'] ?></p>
										</div>
									</div>


							<?php    }
							endif; ?>


						</div>
						<div class="project-detail">
							<p>
								<?php the_content(); ?>
							</p>
							<a href="<?php echo $meta['portfolio-view-project']['url'] ?>" class="project-button">View Project</a>
						</div>
					</div>
			<?php endwhile;

			endif;

			?>
		</div>
	</div>
</section>


<?php
get_footer();
