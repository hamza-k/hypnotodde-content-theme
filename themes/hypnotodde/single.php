<?php get_header(); ?>
</div>
	<main role="main">
	<!-- section -->
	<section class="article single">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
			<div class="thumbnail-container">
				<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			</div>
			<?php endif; ?>
			<!-- /post thumbnail -->
			<div class="permalink-container">
			<?php $prev_post = get_previous_post();
				if (!empty( $prev_post )): ?>
				<a id='first-one' href="<?php echo $prev_post->guid ?>">
				  <p>Article Précédent</p>
				</a>
			<?php endif ?>
			<?php $next_post = get_next_post();
				if (!empty( $next_post )): ?>
				<a id='last-one' href="<?php echo $next_post->guid ?>">
					<p>Article suivant</p>
				</a>
			<?php endif ?>
			</div>
<div class="wrapper">
			<!-- post title -->
			<h1>
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="details">Publié le <?php the_time('j F Y'); ?>, à <?php the_time('g:i a'); ?>, et catégorisé dans <?php the_category(', '); // Separated by commas ?></span>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<?php //edit_post_link(); // Always handy to have Edit Post Links available ?>
			<div>
			<?php comments_template(); ?>
			</div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>
			<div class="wrapper">
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</div>
		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>
<div>
<?php get_footer(); ?>
