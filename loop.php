<div class="content">
	<?php if(is_home()): ?>
		<div class="highlights">
			<?php dynamic_sidebar('highlights') ?>
		</div>
	<?php endif; ?>

	<div class="posts">
		<?php while (have_posts()) : the_post() ?>
			<article class="post">
				<div class="post-image">
					<a class="post-image-link" href="<?php the_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
				</div>

				<div class="post-header">
					<h2 class="post-title"><a class="post-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
					<?php if (get_field('subtitle')): ?>
						<h3 class="post-subtitle"><?php the_field('subtitle'); ?></h3>
					<?php endif; ?>
				</div>

				<div class="post-meta">
					<div class="post-date"><i class="fas fa-calendar"></i> <?php echo get_the_date('d/m/Y'); ?></div>
				</div>

				<div class="post-summary">
					<?php the_excerpt(); ?>
				</div>

				<a class="button post-readmore" href="<?php the_permalink() ?>">Leia mais &raquo;</a>
			</article>
		<?php endwhile; ?>
	</div>

	<?php if(function_exists('wp_pagenavi')): ?>
		<?php wp_pagenavi(); ?>
	<?php endif; ?>
</div>