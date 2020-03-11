<?php $format = get_post_format(); ?>

<div class="highlights group" id="post-<?php the_ID(); ?>">
	<div class="highlights-thumb">
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ): ?>
				<?php the_post_thumbnail('split-medium'); ?>
			<?php elseif ( get_theme_mod('placeholder','on') == 'on' ): ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-medium.png" alt="<?php the_title_attribute(); ?>" />
			<?php endif; ?>
		</a>
		<?php if ( comments_open() && ( get_theme_mod( 'comment-count','on' ) == 'on' ) ): ?>
			<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fas fa-comments"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
		<?php endif; ?>
	</div>
	<div class="highlights-wrap">
		<div class="highlights-date"><?php the_time( get_option('date_format') ); ?></div>
		<h2 class="highlights-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2><!--/.post-title-->
		<div class="highlights-category"><?php the_category(' / '); ?></div>
	</div>
</div>