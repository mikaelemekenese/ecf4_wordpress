<?php 

// PAGE D'ACCUEIL

get_header(); ?>

<div class="container-fluid home">
	<div class="row">

		<div class="col-12 col-lg-9 home-main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="home-main_post">
						<?php the_post_thumbnail(); ?>
						<h1><?php the_title(); ?></h1>
						<h6 style="font-size:0.7rem;color:#939393">
							<?php the_time(get_option('date_format')); ?>
						</h6>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="post__link">Read more &raquo;</a>
					</div>

			<?php endwhile;
			endif; ?>
		</div>

		<div class="col-12 col-lg-3 home_sidebar">
			<aside class="site__sidebar">
				<?php dynamic_sidebar('home-sidebar-trending'); ?><br>
				<?php dynamic_sidebar('home-sidebar-popular'); ?><br>
				<?php dynamic_sidebar('home-sidebar-tags'); ?>
			</aside>
		</div>

	</div>
</div>

<?php get_footer(); ?>