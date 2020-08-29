<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post()
?>
<div id="front-header">
	<div class="container">
		<div class="row">
			<div class="column">
				<div class="first">
					<h2>Tellplatz-Beizen sollen draussen am Abend länger offen bleiben!</h2>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
					<button class="button js_scroll_to" data-scrollto="#petition" type="button"><i class="fas fa-pencil"></i>Jetzt unterschreiben</button>
					<button class="button button-outline js_scroll_to" data-scrollto="#questions" type="button"><i class="fas fa-question"></i>Argumente</button>
				</div>
			</div>
		</div>
	</div>
	<div class="second">
		<picture>
			<source media="(min-width: 80em)" srcset="https://via.placeholder.com/1920x1080 1x, https://via.placeholder.com/3840x2160 2x">
			<source media="(min-width: 40em)" srcset="https://via.placeholder.com/726x504 1x, https://via.placeholder.com/1452x1008 2x">
			<source srcset="https://via.placeholder.com/333x386 1x, https://via.placeholder.com/666x772 2x">
			<img loading="lazy" src="https://via.placeholder.com/333x386" alt="">
		</picture>
		<div class="scroll-down js_scroll_to" data-scrollto="#petition" role="button">
			<span><i class="fal fa-chevron-double-up"></i>Mehr erfahren</span>
		</div>
	</div>
</div>
<div id="petition">
	<?php tpb_page_title( 'Jetzt Unterschreiben' ); ?>
	<div class="container mt-45">
		<div class="row">
			<div class="column">
				<div class="mobile-padding two-columns">
					<h4 class="bold">Unterstütze uns</h4>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
					<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
					<div id="sharing_container" class="mb-25"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-image with-background-primary">
		<picture>
			<source media="(min-width: 80em)" srcset="https://via.placeholder.com/1920x1080 1x, https://via.placeholder.com/3840x2160 2x">
			<source media="(min-width: 40em)" srcset="https://via.placeholder.com/726x504 1x, https://via.placeholder.com/1452x1008 2x">
			<source srcset="https://via.placeholder.com/333x386 1x, https://via.placeholder.com/666x772 2x">
			<img loading="lazy" src="https://via.placeholder.com/333x386" alt="">
		</picture>
	</div>
	<div id="questions">
		<?php tpb_page_title( 'Fragen?' ); ?>
		<div class="container mt-45">
			<div class="row">
				<div class="column">
					<h4 class="bold">Warum soll länger offen sein?</h4>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<h4 class="bold">Was sind die Vorteile fürs Quartier?</h4>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<h4 class="bold">Lorem Ipsum?</h4>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="full-image with-background">
		<picture>
			<source media="(min-width: 80em)" srcset="https://via.placeholder.com/1920x1080 1x, https://via.placeholder.com/3840x2160 2x">
			<source media="(min-width: 40em)" srcset="https://via.placeholder.com/726x504 1x, https://via.placeholder.com/1452x1008 2x">
			<source srcset="https://via.placeholder.com/333x386 1x, https://via.placeholder.com/666x772 2x">
			<img loading="lazy" src="https://via.placeholder.com/333x386" alt="">
		</picture>
	</div>
</div>
<?php
endwhile; endif;
get_footer();