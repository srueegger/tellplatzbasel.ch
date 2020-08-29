<?php
/* Template Name: Petition */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post()
?>
<div id="site_page">
	<?php tpb_page_title( get_the_title(), 2 ); ?>
	<div class="container mt-25">
		<div class="row">
			<div class="column">
				<div class="mobile-padding">
					<a href="#" target="_self" class="button"><i class="fas fa-pencil"></i>Petition jetzt unterschreiben</a>
					<a href="#" target="_blank" class="button button-outline"><i class="fas fa-cloud-download-alt"></i>Unterschriftenbogen herunterladen</a>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
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