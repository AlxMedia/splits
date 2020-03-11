<?php get_header(); ?>

	<div id="split-left">
		
		<div id="split-left-top" class="page-title alt group pad">
			<h2><?php esc_html_e('Most Recent.','split'); ?> <span><?php esc_html_e('In','split'); ?> <?php echo single_cat_title('', false); ?>.</span></h2>
		</div>
		<div class="clear"></div>
		
		<?php
			$curr_cat = get_category( $cat );
			$cat_name = ( $curr_cat ) ? $curr_cat->slug : '';
			$loop_featured = new WP_Query(
				array(
					'category_name' => $cat_name,
					'posts_per_page' => 3,
				));
			$ids = array();
			while ( $loop_featured->have_posts() ) : $loop_featured->the_post();
				$ids[] = get_the_ID();
				get_template_part('content-featured');
			endwhile;
			wp_reset_postdata();
		?>
		
	</div><!--/#split-left-->
	
	<div id="split-right">
		
		<div id="split-right-top" class="pad">
			<?php get_template_part('inc/page-title'); ?>	
		</div>
		
		<div class="content pad">
		
			<?php if ((category_description() != '') && !is_paged()) : ?>
				<div class="notebox">
					<?php echo category_description(); ?>
				</div><!--/.notebox-->
			<?php endif; ?>
			
			<?php
				if ( get_query_var('paged') ) {
					$paged = get_query_var('paged');
				} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
					$paged = get_query_var('page');
				} else {
					$paged = 1;
				}

				$custom_query_args = array(
					'post_type' => 'post', 
					'posts_per_page' => get_option('posts_per_page'),
					'paged' => $paged,
					'post_status' => 'publish',
					'ignore_sticky_posts' => true,
					'post__not_in' => $ids,
					'category_name' => $cat_name,
					'order' => 'DESC',
					'orderby' => 'date'
				);
				$custom_query = new WP_Query( $custom_query_args );

				if ( $custom_query->have_posts() ) :
				 ?>

				<?php if ( get_theme_mod('blog-layout','blog-list') == 'blog-grid' ) : ?>
						
					<div class="post-grid group">
						<?php $i = 1; echo '<div class="post-row">'; while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
							<?php get_template_part('content-grid'); ?>
						<?php if($i % 2 == 0) { echo '</div><div class="post-row">'; } $i++; endwhile; echo '</div>'; ?>
					</div><!--/.post-grid-->
					
				<?php elseif ( get_theme_mod('blog-layout','blog-list') == 'blog-list' ) : ?>
					
					<?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						<?php get_template_part('content-list'); ?>
					<?php endwhile; ?>
					
				<?php else: ?>
				
					<?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						<?php get_template_part('content'); ?>
					<?php endwhile; ?>
					
				<?php endif; ?>

				<?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
				<?php
					$orig_query = $wp_query; // fix for pagination to work
					$wp_query = $custom_query;
				?>
				<?php get_template_part('inc/pagination'); ?>

				<?php $wp_query = $orig_query; // fix for pagination to work ?>
				<?php endif; ?>

				<?php wp_reset_postdata(); endif; ?>

		</div><!--/.content-->

	</div><!--/#split-right-->
	
<?php get_sidebar(); ?>
	
<?php get_footer(); ?>