<?php /* Template Name: Template contact */ get_header(); ?>
</div>
	<main role="main">
		<div class="wrapper">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="article contact" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<div class="contact-container">	
					<div class="contact-item info">
						<?php the_content(); ?>
					</div>
					<div class="contact-item google-map">
						<?php echo get_field('iframe_google_map'); ?>
					</div>
				</div>
				<div class="form-newsletter">
					<?php echo do_shortcode('[contact-form-7 id="74" title="Formulaire de newsletter"]'); ?>
				</div>
				<br class="clear">

				<?php //edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
