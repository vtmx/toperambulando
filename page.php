<?php get_template_part('header'); ?>

	<main class="group">
		<?php while ( have_posts() ) : the_post() ?>
			<?php if( is_page('aventuras') ) { ?>
				<h2 class="title"><i class="fa fa-compass"></i><?php the_title(); ?></h2>	
			<?php } elseif( is_page('viagens') ) { ?>
				<h2 class="title"><i class="fa fa-plane"></i><?php the_title(); ?></h2>
			<?php } elseif( is_page('novos-projetos') ) { ?>
				<h2 class="title"><i class="fa fa-binoculars"></i><?php the_title(); ?></h2>
			<?php } elseif( is_page('dicas') ) { ?>
				<h2 class="title"><i class="fa fa-comment"></i><?php the_title(); ?></h2>
			<?php } elseif( is_page('contato') ) { ?>
				<h2 class="title"><i class="fa fa-envelope"></i><?php the_title(); ?></h2>
			<?php } else { ?>
				<h2 class="title"><i class="fa fa-file"></i><?php the_title(); ?></h2>
			<?php } ?>

			<?php if( is_page('aventuras') || is_page('viagens') ) { ?>
				<?php if( have_rows('pages') ): ?>

					<?php while( have_rows('pages') ): the_row();
						// vars
						$page_title = get_sub_field('page-title');
						$page_date = get_sub_field('page-date');
						$page_categories = get_sub_field('page-categories');
						$page_summary = get_sub_field('page-summary');
						$page_image = get_sub_field('page-image');
						$page_image_caption = get_sub_field('page-image-caption');
						$page_image_link = get_sub_field('page-image-link');
						$page_links = get_sub_field('page-links');
					?>

						<div class="subtitle-wrap">
							<h3 class="subtitle"><?php echo $page_title; ?></h3>
							<span class="post-date" itemprop="datePublished"><i class="fa fa-calendar-o"></i> <?php echo $page_date; ?></span>							
							<?php if( $page_categories): ?>
								<span class="post-category"><i class="fa fa-folder-open"></i>
									Categoria: 
									<?php foreach( $page_categories as $page_category ): ?>
										<span itemprop="articleSection"><a href="<?php echo get_term_link( $page_category ); ?>"><?php echo $page_category->name; ?></a></span>
									<?php endforeach; ?>
								</span>
							<?php endif; ?>
						</div><!-- .subtitle-wrap -->

						<p class="summary"><?php echo $page_summary; ?></p>

						<div class="container">
							<figure class="page-thumb">
								<a href="<?php echo $page_image_link; ?>">
									<img src="<?php echo $page_image; ?>" alt="<?php echo $page_image_caption; ?>">
									<figcaption><?php echo $page_image_caption; ?></figcaption>
								</a>
							</figure>

							<div class="post-list">

							<?php if( $page_links ): ?>
								<?php foreach( $page_links as $post ): ?>
									<?php setup_postdata( $post ); ?>

									<article class="post" itemscope itemtype="http://schema.org/Article">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="url">
											<h2 class="post-title" itemprop="name"><i class="fa fa-angle-right"></i> <?php the_title(); ?></h2>
											<?php if ( get_field('subtitle') ): ?><h3 class="post-subtitle"><i class="fa fa-hand-o-right"></i> <?php the_field('subtitle'); ?></h3><?php endif; ?>
										</a>
									</article>

								<?php endforeach; ?>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?> 

							</div><!-- .post-list -->
						</div><!-- .container -->

					<?php endwhile; ?>

				<?php endif; ?>

			<?php } else { ?>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
			<?php } ?>

		<?php endwhile;  ?>
	</main>

<?php get_template_part('aside'); ?>
<?php get_template_part('footer'); ?>