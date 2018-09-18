<?php get_template_part('header'); ?>

<div class="content">
	<?php while(have_posts()) : the_post(); ?>
		<article class="post">
			<!-- <?php if(get_field('intro')): ?>
				<div class="post-hero">
					<?php the_field('intro'); ?>
				</div>
			<?php endif; ?> -->
			
			<div class="post-header">
				<h1 class="post-title"><?php the_title(); ?></h1>
				
				<?php if (get_field('subtitle')): ?>
					<h2 class="post-subtitle"><?php the_field('subtitle'); ?></h2>
				<?php endif; ?>

				<div class="post-date"><?php echo get_the_date('d/m/Y'); ?></div>
			</div>

			<div class="post-content">
				<?php the_content(); ?>
			</div>

			<div class="post-footer">
				<div class="container">
					<div class="post-meta">
						<div class="post-categories"><i class="fas fa-folder"></i> Categoria: <?php the_category(', '); ?></div>
						<div class="post-tags"><i class="fas fa-tags"></i> Tags: <span itemprop="keywords"><?php the_tags(''); ?></div>
					</div>

					<div class="post-social">
						<h3 class="title">Gostou desse post? Então compartilha!</h3>
						<div class="buttons">
							<a class="button facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" title="Compartilhe no Facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
							<a class="button gplus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink();?>"><i class="fab fa-google-plus-g"></i> Google+</a>
						</div>
					</div>
				</div>
			</div>
		</article>
	<?php endwhile;  ?>

	<!-- Booking Banner -->
	<div class="post-banner">
		<h3 class="title">Precisando de Hotel?</h3> 
		<p>Veja aqui no <a href="booking.com">booking.com</a> - Você reserva o hotel que está procurando com total segurança e pelo menor preço.</p>
		<iframe width="728" height="90" scrolling="no" frameborder="0" name="banner" target="_blank" src="https://www.booking.com?aid=370639;tmpl=banners;size=728x90;lang=pt;target_aid=370639;theme=minimal;label=banner"></iframe>
	</div>
	
	<!-- Post Related -->
	<div class="post-related">
		<?php
			$orig_post = $post;
			global $post;
			$tags = wp_get_post_tags($post->ID);

			if ($tags) : $tag_ids = array();
			foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
				$args=array(
					'tag__in' => $tag_ids,
					'post__not_in' => array($post->ID),
					'posts_per_page'=> 3, // Number of related posts to display.
					'orderby'=> 'date',
					'order'=> 'ASC',
					'caller_get_posts'=> 1
				);
		?>

				<h3 class="title">Posts Relacionados</h3>
				<div class="slide">
					<?php
						$my_query = new wp_query($args);
						while($my_query->have_posts()) : $my_query->the_post();
					?>
						<a class="post" href="<?php the_permalink(); ?>">
							<figure><?php the_post_thumbnail('thumbnail', array('class' => 'thumb')); ?></figure>
							<h4 class="title"><?php the_title(); ?></h4>
						</a>
					<?php endwhile; ?>
				</div><!-- .slide -->

			<?php endif; //if $tags ?>

		<?php $post = $orig_post; ?>
		<?php wp_reset_query(); ?>
	</div>

	<?php comments_template(); ?>
</div>

<?php get_template_part('aside'); ?>
<?php get_template_part('footer'); ?>