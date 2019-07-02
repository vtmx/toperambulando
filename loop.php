<div class="content">
	<?php if (is_home()): ?>
		<?php if(have_rows('highlights', 'options')): ?>
			<div class="swiper-container highlights">
				<div class="swiper-wrapper">

					<?php
						while(have_rows('highlights', 'options')): the_row();

							$highlight_image = get_sub_field('highlight_image');
							$highlight_link = get_sub_field('highlight_link');
							$highlight_title = get_sub_field('highlight_title');
							$highlight_text = get_sub_field('highlight_text');
					?>

						<div class="swiper-slide" style="background-image: url(<?php echo $highlight_image; ?>)">
							<a class="swiper-link" href="<?php echo $highlight_link; ?>">
								<div class="highlight-content">
									<h2 class="highlight-title"><?php echo $highlight_title; ?></h2>
									<?php if($highlight_text): ?><p class="highlight-text"><?php echo $highlight_text; ?></p><?php endif;?>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
				
				<div class="swiper-button-next swiper-button-white"></div>
				<div class="swiper-button-prev swiper-button-white"></div>
			</div>
		<?php endif; ?>
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