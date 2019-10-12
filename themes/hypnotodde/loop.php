<ul>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<li>

					<div class="thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<span class="date"><?php the_time('j F, Y'); ?>, à <?php the_time('g:i a'); ?></span>
					<h3><?php the_title(); ?></h3>
					<a href='<?php the_permalink() ?>' rel='bookmark'>Lire la suite</a>
				
					</li>
						<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
</ul>
