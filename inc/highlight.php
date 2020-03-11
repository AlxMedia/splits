<?php
// Query highlight entries
$highlight = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> get_theme_mod('highlight-posts-count','7'),
		'cat'						=> get_theme_mod('highlight-category','')
	)
);
?>

<?php if ( ( get_theme_mod('highlight-posts-count','') !='0')  ): ?>
	<div class="clear"></div>
	<div id="owl-featured" class="owl-carousel owl-theme">
	<?php while ( $highlight->have_posts() ): $highlight->the_post(); ?>
		<?php get_template_part('content-highlight'); ?>
	<?php endwhile; ?>
	</div>
	
<?php endif; ?>

<?php wp_reset_postdata(); ?>