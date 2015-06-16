<main>

	<?php
		// Remove Category from Loop
		if( is_category('novos-projetos') || is_category('dicas') ) {

		} else {
			global $query_string;
			query_posts($query_string . '&cat=-45, -46');
		}
	?>

	<?php while ( have_posts() ) : the_post() ?>
		<article class="post" itemscope itemtype="http://schema.org/Article">
			<header class="post-header">
				<a class="post-link" href="<?php the_permalink() ?>" title="<?php the_title(); ?>" itemprop="url">
					<h2 class="post-title entry-title" role="heading" itemprop="name"><?php the_title(); ?></h2>
					<?php if ( get_field('subtitle') ): ?><h3 class="post-subtitle"><?php the_field('subtitle'); ?></h3><?php endif; ?>
				</a>

				<span class="post-date" itemprop="datePublished"><i class="fa fa-calendar-o"></i> <?php echo get_the_date('d/m/Y'); ?></span>
				<span class="post-category"><i class="fa fa-folder-open"></i> Categoria: <span itemprop="articleSection"><?php the_category(', '); ?></span></span>
				<span class="post-reviews" itemprop="interactionCount"><i class="fa fa-comments fa-flip-horizontal"></i> <?php comments_popup_link( ('Sem comentário'), ('1 comentário'), ('% comentários') ); ?></span>
				<span class="hidden" itemprop="author"><?php the_author(); ?></span>
			</header>

			<div class="post-summary" itemprop="description">			
				<?php if ( has_post_thumbnail() ) { ?>
					<?php if ( get_field('featured-align' ) == 'left' ) { ?>
						<figure class="featured featured-left">
					<?php } else { ?>
							<figure class="featured featured-right">
					<?php } ?>

							<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail( 'medium', array( 'class' => '' ) ); ?>

								<?php if( get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
									<figcaption><?php echo '<div class="post-thumbnail-caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</div>'; ?></figcaption>
								<?php endif; ?>
							</a>
						</figure>
				<?php } ?>					

				<?php if ( get_field('summary') ): ?>
					<?php the_field('summary'); ?>
				<?php endif; ?>

				<div class="readmore-wrap">
					<a class="btn readmore" href="<?php the_permalink() ?>">Leia mais »</a>
				</div>
			</div>

			<div class="post-footer">
				<?php $tag = get_the_tags(); ?>
					<?php if (!$tag) { ?>
				<?php } else { ?>
					<span class="post-tags"><i class="fa fa-tags"></i> Tags: <span itemprop="keywords"><?php the_tags(''); ?></span></span>
				<?php } ?>
			</div>
		</article>
	<?php endwhile; ?>

	<?php if( function_exists('wp_pagenavi') ) { ?>
		<div id="pagination">
			<?php wp_pagenavi(); ?>
		</div>
	<?php } ?>
</main>





