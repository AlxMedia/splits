<?php get_header(); ?>

	<div id="split-left" class="stickyfill group">

		<div class="image-container">
			<?php if ( has_post_thumbnail() ) {	
				the_post_thumbnail('split-large'); 
				$caption = get_post(get_post_thumbnail_id())->post_excerpt;
				if ( isset($caption) && $caption ) echo '<div class="image-caption">'.$caption.'</div>';
			} ?>
		</div>
		
		<?php if ( get_theme_mod( 'sharrre', 'on' ) == 'on' ) { get_template_part('inc/sharrre'); } ?>
		
	</div><!--/#split-left-->
	
	<div id="split-right">
		
		<div id="split-right-top" class="pad">
			<?php get_template_part('inc/page-title'); ?>	
		</div>
		
		<div class="content pad">
					
			<?php while ( have_posts() ): the_post(); ?>
				
				<article <?php post_class('group'); ?>>
					
					<div class="entry themeform">
						<?php the_content(); ?>
						<div class="clear"></div>
					</div><!--/.entry-->
					
				</article>
				
				<?php if ( get_theme_mod( 'page-comments', 'off' ) == 'on' ) { comments_template('/comments.php',true); } ?>
				
			<?php endwhile; ?>
			
		</div><!--/.content-->

	</div><!--/#split-right-->

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>