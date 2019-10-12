<?php /* Template Name: Page Accueil */ get_header(); ?>
</div>
	<main role="main">

	<header class="header" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
		<div class="wrapper">
		<div class="header-content">
			<h1>Fabrice <span>Todde</span></h1>
			<h2><?php bloginfo('description'); ?></h2>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="form-newsletter">
				<?php the_content(); ?>
			</div>
			<?php endwhile; endif; ?>
			<a class="scroll-down" href="#down">Faites défiler pour découvrir</a>
		</div>
		</div>
	</header>
	<!-- wrapper -->
	<div class="wrapper" id="down">
		<!-- section -->
		<section class="latest_posts">
			<div class="title-container">
				<h2>Mes derniers articles</h2>
			</div>
			
			<ul>
			<?php
				$recentPosts = new WP_Query();
				$recentPosts->query('showposts = 3');
			?>
			<?php  $limitpostcount = 3; while ($recentPosts->have_posts() && $limitpostcount > 0) : $recentPosts->the_post(); ?>
				<li>
					<div class="thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<span class="date"><?php the_time('j F Y'); ?>, à <?php the_time('g:i a'); ?></span>
					<h3><?php the_title(); ?></h3>
					<a href='<?php the_permalink() ?>' rel='bookmark'>Lire la suite</a>
				</li>

			<?php $limitpostcount--; endwhile; ?>
			</ul>

			<?php
					$args=array(
					'page_id' => 85,
					‘post_type’ => ‘post’,
					‘post_status’ => ‘publish’,
					‘posts_per_page’ => 1,
					‘caller_get_posts’=> 1
					);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<a class="see-more" href='<?php the_permalink() ?>'>Voir plus</a>
					<?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
		</section>
		<!-- /section -->
		<section class="last-product">

        <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 1, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="last-product-container"> 
						<div class="thumbnail-container">   
							<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, array( 1920, 1080)); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"/>'; ?>
						</div>
						<div class="last-product-info">
							<div class="title-container">
								<h2>Dernièrement dans la boutique</h2>
							</div>
							<h3><?php the_title(); ?></h3>
							<p><?php echo $product->post->post_excerpt; ?></p>
							<span class="price"><?php echo $product->get_price_html(); ?></span>
							<a class="last-product-permalink" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Consulter</a>
						</div>
						<div class="clear"></div>
					</div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
</section><!-- /recent -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
