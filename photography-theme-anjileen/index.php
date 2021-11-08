<?php get_header(); ?>
		
		<main> <!-- Main content -->
		
		<div class="content">
		 
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 
		<?php the_title(); ?></h3>
		 
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
		
		</div> <!-- End post content -->
		
		<div class="sidebar">	
		<?php get_sidebar(); ?>
		</div>
		
		</main> <!-- End main content -->
		
		<?php get_footer(); ?>