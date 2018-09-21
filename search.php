<?php get_template_part('header'); ?>

<div class="content">
	<?php if(have_posts()): ?>
		<div class="search-message">
			<h2>Resultado da pesquisa</h2>
		</div>
	<?php else: ?>
		<div class="search-message">
			<h2>Nenhum resultado encontrado</h2>
			<p>Tente outra palavra.</p>
		</div>
	<?php endif; ?>

	<?php if(have_posts()): ?>
		<div class="posts">
			<?php while (have_posts()) : the_post() ?>
				<article class="post " itemscope itemtype="http://schema.org/Article">
					<h2 class="post-title">
						<a href="<?php the_permalink() ?>">
							<?php the_title(); ?>
						</a>
					</h2>

					<p class="post-summary">
						<?php if (get_field('summary')): ?>
							<?php the_field('summary'); ?>
						<?php else: ?>
							<?php the_excerpt(); ?>
						<?php endif; ?>
					</p>
				</article>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<?php if(function_exists('wp_pagenavi')): ?>
		<div class="pagination">
			<?php wp_pagenavi(); ?>
		</div>
	<?php endif; ?>
</div>


<?php get_template_part('aside'); ?>
<?php get_template_part('footer'); ?>