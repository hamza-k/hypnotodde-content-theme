<?php /* Template Name: Template news */ get_header(); ?>
</div>
	<main role="main">
		<div class="wrapper">
		<!-- section -->
		<section class="latest_posts latest-posts-more">

			<div class="title-container">
				<h1>Mes derniers articles</h1>
			</div>

			<ul>
            <?php
                $recentPosts = new WP_Query();
                $recentPosts->query('showposts=-1');//value to modify to choose the number of articles
            ?>
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
			<li>
					<div class="thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<span class="date"><?php the_time('j F, Y'); ?>, à <?php the_time('g:i a'); ?></span>
					<h3><?php the_title(); ?></h3>
					<a href='<?php the_permalink() ?>' rel='bookmark'>Lire la suite</a>
				</li>
            <?php endwhile; ?>
        </ul>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
