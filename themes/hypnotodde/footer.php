
		</div>
		<!-- /wrapper -->

			<!-- footer -->
			<footer class="footer" role="contentinfo">
			<div class="wrapper footer-container">

				<div class="footer-item social-network">
				<?php
					$args=array(
					'page_id' => 34,
					‘post_type’ => ‘post’,
					‘post_status’ => ‘publish’,
					‘posts_per_page’ => 1,
					‘caller_get_posts’=> 1
					);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<div class="title-container">
							<h3>Mes réseaux sociaux</h3>
						</div>
						<ul>
							<?php if( get_field('url_facebook') != '' ): ?>
								<li><a href="<?php echo the_field('url_facebook') ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook-icon.svg" alt="">
								</a></li>
							<?php endif; ?>
							<?php if( get_field('url_twitter') != '' ): ?>
								<li><a href="<?php echo the_field('url_twitter') ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter-icon.svg" alt="">
								</a></li>
							<?php endif; ?>
							<?php if( get_field('url_linkedin') != '' ): ?>
								<li><a href="<?php echo the_field('url_linkedin') ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin-icon.svg" alt="">
								</a></li>
							<?php endif; ?>
							<?php if( get_field('url_pinterest') != '' ): ?>
								<li><a href="<?php echo the_field('url_pinterest') ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/pinterest-icon.svg" alt="">
								</a></li>
							<?php endif; ?>
							<?php if( get_field('url_youtube') != '' ): ?>
								<li><a href="<?php echo the_field('url_youtube') ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/youtube-icon.svg" alt="">
								</a></li>
							<?php endif; ?>
							<?php if( get_field('url_instagram') != '' ): ?>
								<li><a href="<?php echo the_field('url_instagram') ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram-icon.svg" alt="">
								</a></li>
							<?php endif; ?>
						</ul>
						<?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
				</div>

				<div class="footer-item white-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo_b.png" alt="">
				</div>


				<div class="footer-item footer-info">
					<!-- copyright -->
					<p class="copyright">
						&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>, tous droits réservés.
					</p>

					<?php wp_nav_menu( array( 'theme_location' => 'menu-juridique' ) ); ?>
					<?php if( current_user_can( 'manage_options' ) ) { ?>
						<a href="<?php echo home_url(); ?>/wp-admin/">Page d'administration</a>
					<?php } ?>
					<a href="#"><img class='scroll-up' src="<?php echo get_template_directory_uri(); ?>/img/scroll-up.svg" alt=""></a>
					<!-- /copyright -->
					</div>
				</div>
			</footer>
			<!-- /footer -->

	</body>
</html>
