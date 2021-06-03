<?php 

// PAGE D'ACCUEIL

get_header(); ?>

<div class="container-fluid">
	<div class="row">

		<div class="col-9">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="front-page-post">
						<?php the_post_thumbnail(); ?>
						<h1><?php the_title(); ?></h1>

						<?php the_excerpt(); ?>
					</div>

			<?php endwhile;
			endif; ?>
		</div>

		<div class="col-3">
			<aside class="site__sidebar">
				<?php get_sidebar('primary'); ?>
			</aside>
		</div>

	</div>
</div>

<?php get_footer(); ?>