<?php get_header(); ?>

	<div id="split-left">
		<?php get_template_part('inc/featured'); ?>		
	</div><!--/#split-left-->
	
	<div id="split-right">
		
		<div id="split-right-top" class="pad">
			<?php get_template_part('inc/page-title'); ?>	
		</div>
		
		<div class="content pad">
			
			<div class="notebox">
				<?php get_search_form(); ?>
			</div><!--/.notebox-->
			
			<div class="entry">
				<p><?php esc_html_e( 'The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'split' ); ?></p>
			</div><!--/.entry-->
				
		</div><!--/.content-->

	</div><!--/#split-right-->
	
<?php get_sidebar(); ?>
	
<?php get_footer(); ?>