<?php
$image = get_field('cpt_image');
?>
<div class="testimonial-mobile-image-container">
	<picture>
		<source srcset="<?php echo $image['sizes']['testimonial-page']; ?> 1x, <?php echo $image['sizes']['testimonial-page-2x']; ?> 2x">
		<img src="<?php echo $image['sizes']['testimonial-page']; ?>" alt="<?php echo $image['alt']; ?>">
	</picture>
</div>
<div class="testimonial-mobile-text-container">
	<blockquote>
		<?php the_field( 'testimonial_quote' ); ?>
		<footer><?php the_title( '<strong>', '</strong>' ); ?> | <?php the_field( 'testimonial_job' ); ?></footer>
	</blockquote>
</div>