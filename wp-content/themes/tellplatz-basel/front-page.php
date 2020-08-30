<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
$first_image = get_field( 'front_first_image' );
$second_image = get_field( 'front_second_img' );
$third_image = get_field( 'front_third_img' );
?>
<div id="front-header">
	<div class="container">
		<div class="row">
			<div class="column">
				<div class="first">
					<h2><?php the_field( 'front_first_title' ); ?></h2>
					<?php the_field( 'front_first_txt' ); ?>
					<button class="button js_scroll_to" data-scrollto="#petition" type="button"><i class="fas fa-pencil"></i><?php the_field( 'front_first_btn1' ); ?></button>
					<button class="button button-outline js_scroll_to" data-scrollto="#questions" type="button"><i class="fas fa-question"></i><?php the_field( 'front_first_btn2' ); ?></button>
				</div>
			</div>
		</div>
	</div>
	<div class="second">
		<picture>
			<source media="(min-width: 80em)" srcset="<?php echo $first_image['sizes']['fullwidth-desktop']; ?> 1x, <?php echo $first_image['sizes']['fullwidth-desktop-2x']; ?> 2x">
			<source media="(min-width: 40em)" srcset="<?php echo $first_image['sizes']['fullwidth-tablet']; ?> 1x, <?php echo $first_image['sizes']['fullwidth-tablet-2x']; ?> 2x">
			<source srcset="<?php echo $first_image['sizes']['fullwidth-mobile']; ?> 1x, <?php echo $first_image['sizes']['fullwidth-mobile-2x']; ?> 2x">
			<img src="<?php echo $first_image['sizes']['fullwidth-mobile']; ?>" alt="<?php echo $first_image['alt']; ?>">
		</picture>
		<div class="scroll-down js_scroll_to" data-scrollto="#petition" role="button">
			<span><i class="fal fa-chevron-double-up"></i><?php the_field( 'front_first_scrolldown' ); ?></span>
		</div>
	</div>
</div>
<div id="petition">
	<?php tpb_page_title( get_field( 'front_second_maintitle' ) ); ?>
	<div class="container mt-45">
		<div class="row">
			<div class="column">
				<div class="mobile-padding">
					<h4 class="bold"><?php the_field( 'front_second_title' ); ?></h4>
					<?php
					the_field( 'front_second_txt' );
					echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' );
					?>
					<div id="sharing_container" class="mb-25"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-image with-background-primary">
		<picture>
			<source media="(min-width: 80em)" srcset="<?php echo $second_image['sizes']['fullwidth-desktop']; ?> 1x, <?php echo $second_image['sizes']['fullwidth-desktop-2x']; ?> 2x">
			<source media="(min-width: 40em)" srcset="<?php echo $second_image['sizes']['fullwidth-tablet']; ?> 1x, <?php echo $second_image['sizes']['fullwidth-tablet-2x']; ?> 2x">
			<source srcset="<?php echo $second_image['sizes']['fullwidth-mobile']; ?> 1x, <?php echo $second_image['sizes']['fullwidth-mobile-2x']; ?> 2x">
			<img loading="lazy" src="<?php echo $second_image['sizes']['fullwidth-mobile']; ?>" alt="<?php echo $second_image['alt']; ?>">
		</picture>
	</div>
	<div id="questions">
		<?php
		tpb_page_title( get_field( 'front_third_title' ) );
		if( have_rows( 'front_third_questions' ) ) {
			echo '<div class="container mt-45">';
			while( have_rows( 'front_third_questions' ) ) {
				the_row();
				get_template_part( 'templates/loop', 'questions' );
			}
			echo '</div>';
		}
		?>
	</div>
	<div class="full-image with-background">
		<picture>
			<source media="(min-width: 80em)" srcset="<?php echo $third_image['sizes']['fullwidth-desktop']; ?> 1x, <?php echo $third_image['sizes']['fullwidth-desktop-2x']; ?> 2x">
			<source media="(min-width: 40em)" srcset="<?php echo $third_image['sizes']['fullwidth-tablet']; ?> 1x, <?php echo $third_image['sizes']['fullwidth-tablet-2x']; ?> 2x">
			<source srcset="<?php echo $third_image['sizes']['fullwidth-mobile']; ?> 1x, <?php echo $third_image['sizes']['fullwidth-mobile-2x']; ?> 2x">
			<img loading="lazy" src="<?php echo $third_image['sizes']['fullwidth-mobile']; ?>" alt="<?php $third_image['alt']; ?>">
		</picture>
	</div>
</div>
<?php
endwhile; endif;
get_footer();