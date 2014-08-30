<?php get_header(); ?>

	<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>

			<?php the_title(); ?>
			
			<?php the_content(); ?>

		<?php endwhile; endif; ?>
	</div>
	
<?php get_footer(); ?>