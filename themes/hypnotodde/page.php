<?php get_header(); ?>
</div>
	<main role="main">
		<!-- section -->
		<section>

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
			<div class="thumbnail-container">
				<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			</div>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<div class="wrapper">
				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>
				
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
<div>
<?php get_footer(); ?>
