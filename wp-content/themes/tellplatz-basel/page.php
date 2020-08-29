<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post()
?>
<div id="site_page">
	<?php tpb_page_title( get_the_title(), 2 ); ?>
	<div class="container mt-25">
		<div class="row">
			<div class="column">
				<div class="mobile-padding">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
endwhile; endif;
get_footer();