			</main>
			<footer id="site_footer">
				<div class="container">
					<div class="row">
						<div class="column">
							<?php
							$args = array(
								'theme_location' => 'footer-menu',
								'container_id' => 'footer_menu_container',
								'container_class' => 'mobile-padding',
								'depth' => 0
							);
							wp_nav_menu($args);
							?>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<script data-search-pseudo-elements type='text/javascript' src='https://kit.fontawesome.com/79013a0f8d.js' id='fontawesome-script-js'></script>
		<?php wp_footer(); ?>
	</body>
</html>