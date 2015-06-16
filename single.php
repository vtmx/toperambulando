<?php get_template_part('header'); ?>

<main role="main">

	<?php while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" class="post" itemscope itemtype="http://schema.org/Article">

		<header class="post-header">
			<h2 class="post-title" role="heading" itemprop="name"><?php the_title(); ?></h2>
			<?php if ( get_field('subtitle') ): ?><h3 class="post-subtitle"><?php the_field('subtitle'); ?></h3><?php endif; ?>
			<span class="post-date" itemprop="datePublished"><i class="fa fa-calendar-o"></i> <?php echo get_the_date('d/m/Y'); ?></span>
			<span class="post-category"><i class="fa fa-folder-open"></i> Categoria: <span><?php the_category(', '); ?></span></span>
			<span class="post-reviews" itemprop="interactionCount"><i class="fa fa-comments fa-flip-horizontal"></i><?php comments_number( ('Sem comentário'), ('1 comentário'), ('% comentários') ); ?></span>
			<span class="hidden author" itemprop="author"><?php the_author(); ?></span>
		</header>

		<div class="post-content" itemprop="articleBody">
			<div class="post-slider">
				<?php

					if( have_rows('post-slider') ):
						while( have_rows('post-slider') ) : the_row();
							// vars
							$post_slider_image = get_sub_field('post-slider-image');
							$post_slider_caption = get_sub_field('post-slider-caption');
					?>

						<figure>
							<img src="<?php echo $post_slider_image; ?>" alt="<?php echo $slider_text; ?>">
							<figcaption><?php echo $post_slider_caption; ?></figcaption>
						</figure>						

					<?php endwhile; ?>
				<?php endif; ?>
			</div> <!-- .post-slider -->

			<?php if ( get_field('intro') ): ?>
				<div class="post-intro">
					<?php the_field('intro'); ?>
				</div>
			<?php endif; ?>



			<!-- Nav tabs -->
			<?php if( get_field('script') || get_field('screenplay') || get_field('photos') || get_field('videos') || get_field('tips') ) : ?>
				<ul class="nav nav-tabs" role="tablist">
					<?php if ( get_field('script') ): ?>
						<li><a href="#script" role="tab" data-toggle="tab"><i class="fa fa-compass"></i>Relato</a></li>
					<?php endif; ?>

					<?php if ( get_field('screenplay') ): ?>
						<li><a href="#screenplay" role="tab" data-toggle="tab"><i class="fa fa-compass"></i>Roteiro</a></li>
					<?php endif; ?>

					<?php if ( get_field('photos') ): ?>
						<li><a href="#photos" role="tab" data-toggle="tab"><i class="fa fa fa-picture-o"></i>Fotos</a></li>
					<?php endif; ?>

					<?php if ( get_field('videos') ): ?>
						<li><a href="#videos" role="tab" data-toggle="tab"><i class="fa fa-youtube-play"></i>Vídeos</a></li>
					<?php endif; ?>

					<?php if ( get_field('tips') ): ?>
						<li><a href="#tips" role="tab" data-toggle="tab"><i class="fa fa-lightbulb-o"></i>Dicas desse Post</a></li>
					<?php endif; ?>
				</ul>
			<?php endif; ?>



			<!-- Tab panes -->
			<div class="tab-content">			

				<?php if ( get_field('script') ): ?>
					<div class="tab-pane fade" id="script">
						<?php the_field('script'); ?>
					</div>
				<?php endif; ?>

				<?php if ( get_field('screenplay') ): ?>
					<div class="tab-pane fade" id="screenplay">
						<?php the_field('screenplay'); ?>
					</div>
				<?php endif; ?>

				<?php if ( get_field('photos') ): ?>
					<div class="tab-pane fade" id="photos">
						<?php the_field('photos'); ?>
					</div>
				<?php endif; ?>

				<?php if ( get_field('videos') ): ?>
					<div class="tab-pane fade video" id="videos">
						<?php the_field('videos'); ?>
					</div>
				<?php endif; ?>

				<?php if ( get_field('tips') ): ?>
					<div class="tab-pane fade" id="tips">

						<div class="panel-group" id="accordion">

							<?php if( have_rows('tips') ): ?>

								<?php
									while( have_rows('tips') ): the_row(); 

									// vars
									$tip_title = get_sub_field('tip-title');
									$tip_icon = get_sub_field('tip-icon');
									$tip_text = get_sub_field('tip-text');
								?>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><?php echo $tip_title; ?> <i class="fa fa-<?php echo $tip_icon; ?>"></i></h4>
										</div>

										<div id="collapseOne" class="panel-collapse collapse in">

										  <div class="panel-body">
												<?php echo $tip_text; ?>
										  </div>
										</div>
									</div>

								<?php endwhile; ?>
							<?php endif; ?>							

						</div><!-- .panel-group -->

					</div><!-- #tips -->
				<?php endif; ?>									

			</div><!-- .tab-content -->
		</div><!-- .post-body -->



		<footer class="post-footer">

			<?php $tag = get_the_tags(); ?>
				<?php if (!$tag) { ?>
			<?php } else { ?>
				<span class="post-tags" itemprop="articleSection"><i class="fa fa-tags"></i> Tags: <span itemprop="keywords"><?php the_tags(''); ?></span></span>
			<?php } ?>

			<div class="social">
				Comartilhe: 
				<a class="btn facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" title="Compartilhe no Facebook"><i class="fa fa-facebook"></i> Facebook</a>
				<a class="btn gplus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink();?>"><i class="fa fa-google-plus"></i> Google+</a>
			</div><!-- .social -->

		</footer>
	</article>

	<?php endwhile;  ?>


	<!-- Booking Banner -->
	<div class="banner-booking">
		<h3>Precisando de Hotel?</h3> 
		<p>Veja aqui no <a href="booking.com">booking.com</a> - Você reserva o hotel que está procurando com total segurança e pelo menor preço.</p>
		<iframe width="728" height="90" scrolling="no" frameborder="0" name="banner" target="_blank" src="https://www.booking.com?aid=370639;tmpl=banners;size=728x90;lang=pt;target_aid=370639;theme=minimal;label=banner"></iframe>
	</div>

	
	<!-- Post Related -->
	<div id="posts-related">

		<?php
			$orig_post = $post;
			global $post;
			$tags = wp_get_post_tags($post->ID);

			if ($tags) {
				$tag_ids = array();
			foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
				$args=array(
					'tag__in' => $tag_ids,
					'post__not_in' => array($post->ID),
					'posts_per_page'=> 6, // Number of related posts to display.
					'orderby'=> 'date',
					'order'=> 'ASC',
					'caller_get_posts'=> 1
				);
		?>

		<h4>Posts Relacionados</h4>

		<div class="slide">
			<?php
				$my_query = new wp_query( $args );

				while( $my_query->have_posts() ) {
					$my_query->the_post();
			?>
				<article itemscope itemtype="http://schema.org/Article">
					<a href="<?php the_permalink(); ?>">
						<figure><?php the_post_thumbnail('thumbnail', array('class' => 'thumb')); ?></figure>
						<h3 itemprop="name"><?php the_title(); ?></h3>
						<?php if ( get_field('subtitle') ): ?><h4><?php the_field('subtitle'); ?></h4><?php endif; ?>
					</a>
				</article>
		<?php 
				}
			}
			$post = $orig_post;
			wp_reset_query();
		?>
		</div>
	</div><!-- #related-posts -->



	<div id="comments">
		<?php comments_template(); ?>
	</div><!-- #comments -->

</main>

<?php get_template_part('aside'); ?>
<?php get_template_part('footer'); ?>