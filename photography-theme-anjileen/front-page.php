<?php
/*
Template Name: Front Page
*/
?>	

<?php get_header(); ?>

		<header class="header"> <!-- Header -->
			<h1 id="banner">Professional Photography</h1>
		</header> <!-- End header -->

		<main> <!-- Main content -->
		 
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 
		 
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
		<?php edit_post_link(); ?>
		 
		<?php endwhile; ?>
		 
		<?php
		if ( get_next_posts_link() ) {
		next_posts_link();
		}
		?>
		<?php
		if ( get_previous_posts_link() ) {
		previous_posts_link();
		}
		?>
		 
		<?php else: ?>
		 
		<p>No posts found. :(</p>
		 
		<?php endif; ?>
		
			
		</main> <!-- End main content -->
		
		<?php get_footer(); ?>
		
