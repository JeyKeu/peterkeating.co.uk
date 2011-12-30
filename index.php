<?php get_header(); ?>
		
		<article>
		<?php while ( have_posts() ) : the_post() ?>
			<h1><?php the_title(); ?></h1>
			
			<div class="published-on"><?php the_time('F j, Y') ?></div>
			
			<?php the_excerpt(); ?>
			
			<a href="<?php the_permalink(); ?>">Continue reading</a>
	
		<?php endwhile; ?>
		</article>

<?php get_footer(); ?>