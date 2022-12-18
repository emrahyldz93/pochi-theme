<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pochi
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="project-image">
		<?php the_post_thumbnail('large', array('class' => ' img-fluid  ')); ?>
	</div>


	<p><?php the_content(); ?></p>


</article><!-- #post-<?php the_ID(); ?> -->