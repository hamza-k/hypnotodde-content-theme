<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>

		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' -'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,700,700i" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
	<div id="burger" onclick="menuAction()">
		<span></span>
	</div>
		<div class="head-container">
			<div class="head-item logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
				</a>
			</div>
			<div class="head-item menu">
				<!-- nav -->
				<nav class="nav" role="navigation">
					<?php html5blank_nav(); ?>
				</nav>
				<!-- /nav -->
				<div class='search-container'>
					<button class="search-item button" onclick='searchAction()'>
						<img src="<?php echo get_template_directory_uri(); ?>/img/search-icon.svg" alt="">
					</button>
					<?php get_template_part('searchform'); ?>
				</div>
				<?php
if ( is_user_logged_in() ) {
    wp_nav_menu( array( 'theme_location' => 'menu-utilisateur' ) );
} else { ?>


<?php
					$args=array(
					'page_id' => 8,
					‘post_type’ => ‘post’,
					‘post_status’ => ‘publish’,
					‘posts_per_page’ => 1,
					‘caller_get_posts’=> 1
					);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<a href='<?php the_permalink() ?>'>
					<button class="button ht">Connexion</button>
				</a>
					<?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
<?php } ?>
				</div>
		</div>
		<div class="wrapper">