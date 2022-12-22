<?php get_header(); ?>

	<div id="splits-left">
		<?php get_template_part('inc/featured'); ?>
	</div><!--/#splits-left-->
	
	<div id="splits-right">
		
		<div id="splits-right-top" class="pad">
			<?php get_template_part('inc/page-title'); ?>	
		</div>
		
		<div class="content pad">
			
			<?php get_template_part('inc/front-widgets-top'); ?>
			
			<?php if ( have_posts() ) : ?>
				
				<?php if ( get_theme_mod('blog-layout','blog-list') == 'blog-grid' ) : ?>
					
					<div class="post-grid group">
						<?php $i = 1; echo '<div class="post-row">'; while ( have_posts() ): the_post(); ?>
							<?php get_template_part('content-grid'); ?>
						<?php if($i % 2 == 0) { echo '</div><div class="post-row">'; } $i++; endwhile; echo '</div>'; ?>
					</div><!--/.post-grid-->
					
				<?php elseif ( get_theme_mod('blog-layout','blog-list') == 'blog-list' ) : ?>
					
					<?php while ( have_posts() ): the_post(); ?>
						<?php get_template_part('content-list'); ?>
					<?php endwhile; ?>
					
				<?php else: ?>
				
					<?php while ( have_posts() ): the_post(); ?>
						<?php get_template_part('content'); ?>
					<?php endwhile; ?>
					
				<?php endif; ?>
				
				<?php get_template_part('inc/front-widgets-bottom'); ?>
				<?php get_template_part('inc/pagination'); ?>
				
			<?php endif; ?>
			
		</div><!--/.content-->

	</div><!--/#splits-right-->
	
<?php get_sidebar(); ?>
	
<?php get_footer(); ?>