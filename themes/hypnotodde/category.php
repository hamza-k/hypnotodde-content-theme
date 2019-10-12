<?php get_header(); ?>
</div>

	<main role="main">
		<div class="wrapper">
		<!-- section -->
		<section class='latest_posts search category'>
			<div  class='title-container'>
				<span><?php _e( 'Categories for ', 'html5blank' );  ?></span>
				<h1><?php single_cat_title(); ?></h1>
			</div>
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
