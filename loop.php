<div class="content">
	<div class="posts">
		<?php while (have_posts()) : the_post() ?>
			<article class="post">
				<div class="post-header">
					<h2 class="post-title"><a class="post-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

					<?php if (get_field('subtitle')): ?>
						<h3 class="post-subtitle"><?php the_field('subtitle'); ?></h3>
					<?php endif; ?>
				</div>

				<div class="post-meta">
					<div class="post-date"><i class="fas fa-calendar"></i> <?php echo get_the_date('d/m/Y'); ?></div>
					<div class="post-categories"><i class="fas fa-folder"></i> Categorias: <?php the_category(', '); ?></div>					
					<div class="post-comments"><i class="fas fa-comment"></i> <?php comments_popup_link(('Sem comentário'), ('1 comentário'), ('% comentários')); ?></div>
				</div>

				<?php if (get_field('featured-align') == 'right'): ?><div class="post-content-reverse"><?php else: ?><div class="post-content"><?php endif; ?>
					<a class="post-image-link" href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?></a>			
					
					<div class="post-summary">
						<?php if (get_field('summary')): ?>
							<?php the_field('summary'); ?>
						<?php else: ?>
							<?php the_excerpt(); ?>
						<?php endif; ?>

						<div class="post-readmore">
							<a class="button post-readmore-link" href="<?php the_permalink() ?>">Leia mais</a>
						</div>
					</div>
				</div>

				<!-- <div class="post-tags"><i class="fas fa-tags"></i> Tags: <?php the_tags(''); ?></div> -->
			</article>
		<?php endwhile; ?>
	</div>

	<?php if(function_exists('wp_pagenavi')): ?>
		<div class="pagination">
			<?php wp_pagenavi(); ?>
		</div>
	<?php endif; ?>
</div>





