<?php get_template_part('header'); ?>

	<main role="main">
		<?php if( have_posts() ){ ?>
		<div class="search-response-success">
			<?php 
				$allsearch = new WP_Query(); 
				$allsearch -> query(array( 's' => $s, 'showposts' => '10', 'posts_per_page' => 10 ));
				$key = wp_specialchars($s, 1); 
				$count = $allsearch->post_count; 
				echo( 'Encontrado(s) um total de '. $count .' páginas que contém a palavra: <span class="search-highlight">'. $key .'</span>' ); 
				wp_reset_query(); 
			?>
		</div><!-- .search-response -->


		<?php while ( have_posts() ) : the_post() ?>
			<article class="post " itemscope itemtype="http://schema.org/Article">
				<header class="post-header">
					<a class="post-link" href="<?php the_permalink() ?>" title="<?php the_title(); ?>" itemprop="url">
						<h2 class="post-title entry-title" role="heading" itemprop="name"><?php the_title(); ?></h2>
						<?php if ( get_field('subtitle') ): ?><h3 class="post-subtitle"><?php the_field('subtitle'); ?></h3><?php endif; ?>
					</a>

					<span class="post-date" itemprop="datePublished"><i class="fa fa-calendar-o"></i> <?php the_date('d/m/Y'); ?></span>
					<span class="post-category"><i class="fa fa-folder-open"></i> Categoria: <span itemprop="articleSection"><?php the_category(', '); ?></span></span>
					<span class="post-reviews" itemprop="interactionCount"><i class="fa fa-comments fa-flip-horizontal"></i> <?php comments_popup_link( ('Sem comentário'), ('1 comentário'), ('% comentários') ); ?></span>
					<span class="hidden author" itemprop="author"><?php the_author(); ?></span>
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

		<?php  } else { ?>
			<div class="search-response-error">
				<h2>Nenhum resultado encontrado.</h2>
				<i class="fa fa-book icon"></i>
				<p>Relaxe, e tente outra palavra.
			</div><!-- .search-response -->
		<?php } ?>
	</main>

<?php get_template_part('aside'); ?>
<?php get_template_part('footer'); ?>