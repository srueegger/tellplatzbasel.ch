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
		<?php wp_footer(); ?>
	</body>
</html>