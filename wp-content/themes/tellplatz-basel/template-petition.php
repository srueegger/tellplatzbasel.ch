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
					<?php
					$btn1 = get_field('petition_btn1');
					$btn2 = get_field('petition_btn2');
					$link_target1 = $btn1['target'] ? $btn1['target'] : '_self';
					$link_target2 = $btn2['target'] ? $btn2['target'] : '_self';
					?>
					<a href="<?php echo $btn1['url']; ?>" target="<?php echo $link_target1; ?>" class="button"><i class="fas fa-pencil"></i><?php echo $btn1['title']; ?></a>
					<a href="<?php echo $btn2['url']; ?>" target="<?php echo $link_target2; ?>" class="button button-outline"><i class="fas fa-cloud-download-alt"></i><?php echo $btn2['title']; ?></a>
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