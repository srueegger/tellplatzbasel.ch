<?php
$image = get_field( 'cpt_image' );
$height = get_field( 'testimonial_height' );
?>
<div class="row">
	<div class="column column-50">
		<div style="min-height: <?php echo $height; ?>px;" class="testimonial-image">
			<picture>
				<source srcset="<?php echo $image['sizes']['testimonial-page']; ?> 1x, <?php echo $image['sizes']['testimonial-page-2x']; ?> 2x">
				<img loading="lazy" src="<?php echo $image['sizes']['testimonial-page']; ?>" alt="<?php echo $image['alt']; ?>">
			</picture>
			<div data-name="<?php the_title(); ?>" data-job="<?php the_field( 'testimonial_job' ); ?>" data-image="<?php echo $image['sizes']['fullwidth-desktop']; ?>" class="image-hover-element">
				<i class="far fa-search-plus"></i>
			</div>
		</div>
	</div>
	<div class="column column-50">
		<blockquote class="testimonial">
			<?php the_field( 'testimonial_quote' ); ?>
			<footer><?php the_title( '<strong>', '</strong>' ); ?> | <?php the_field( 'testimonial_job' ); ?></footer>
		</blockquote>
	</div>
</div>