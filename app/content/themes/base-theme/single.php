<?php get_header(); the_post(); ?>

	<h2>Single Page: <?php the_title(); ?></h2>

	<p><?php the_content(); ?></p>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>