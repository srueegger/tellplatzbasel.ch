<?php
/* Template Name: Testimonials */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post()
?>
<div id="site_page">
	<?php tpb_page_title( get_the_title(), 2 ); ?>
	<div class="container testimonial-page">
		<?php
		/* Unterstützer ausgeben */
		$args = array(
			'numberposts' => -1,
			'post_type' => 'tpb-testimonials',
			'post_status' => 'publish',
			'orderby' => 'rand',
			'order' => 'ASC'
		);
		$testimonials = get_posts( $args );
		if(!empty( $testimonials )) {
			global $post;
			foreach( $testimonials as $post ) {
				setup_postdata( $post );
				get_template_part( 'templates/loop', 'testimonialspage' );
			}
			wp_reset_postdata();
		}
		?>
	</div>
	<div class="testimonial-page-mobile">
		<?php if(!empty( $testimonials )) {
			global $post;
			foreach( $testimonials as $post ) {
				setup_postdata( $post );
				get_template_part( 'templates/loop', 'testimonialsmobilepage' );
			}
			wp_reset_postdata();
		}
		?>
	</div>
</div>
<div id="testimonial_image_wrapper">
	<div class="wrapper">
		<span class="close" role="button"><i class="far fa-times-octagon"></i></span>
		<img src="">
		<h5></h5>
		<h6></h6>
	</div>
</div>
<?php
endwhile; endif;
get_footer();