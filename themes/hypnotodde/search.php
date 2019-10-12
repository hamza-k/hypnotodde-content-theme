<?php get_header(); ?>
</div>
	<main role="main">
		<div class="wrapper">
		<!-- section -->
		<section class="latest_posts search">

			<div class="title-container">
				<span><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); ?></span>
				<h1><?php  $wp_query->found_posts; echo '"'.get_search_query().'"'; ?></h1>
			</div>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>

