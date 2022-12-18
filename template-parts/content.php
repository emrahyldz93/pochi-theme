<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pochi
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="title-content">
		<span><?php the_category('-'); ?></span>
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="project-image">
		<?php the_post_thumbnail('large', array('class' => ' img-fluid  ')); ?>
	</div>


	<p><?php the_content(); ?></p>





</article><!-- #post-<?php the_ID(); ?> -->