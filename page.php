<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-8">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div>
						<h1><?php the_title(); ?></h1>

						<?php the_content(); ?>
					</div>

			<?php endwhile;
			endif; ?>

		</div>

		<div class="col-4">

		</div>
	</div>
</div>

<?php get_footer(); ?>