<?php 

// PAGE D'ACCUEIL

get_header(); ?>

<div class="container-fluid home">
	<div class="row">

		<div class="col-9 home-main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="home-main_post">
						<?php the_post_thumbnail(); ?>
						<h1><?php the_title(); ?></h1>

						<?php the_excerpt(); ?>
					</div>

			<?php endwhile;
			endif; ?>
		</div>

		<div class="col-3 home_sidebar">
			<aside class="site__sidebar">
				<?php dynamic_sidebar('home-sidebar-trending'); ?><br>
				<?php dynamic_sidebar('home-sidebar-upcoming'); ?><br>
				<?php dynamic_sidebar('home-sidebar-popular'); ?>
			</aside>
		</div>

	</div>
</div>

<?php get_footer(); ?>