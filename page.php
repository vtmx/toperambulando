<?php get_template_part('header'); ?>

	<div class="content">
		<?php while ( have_posts() ) : the_post() ?>
			<h2 class="page-title">
				<?php the_title(); ?>
			</h2>
			<div class="page-content">
				<?php the_content(); ?>
			</div>

		<?php endwhile;  ?>
	</div>

	<div class="aside">
		<?php get_template_part('aside'); ?>
	</div>

<?php get_template_part('footer'); ?>