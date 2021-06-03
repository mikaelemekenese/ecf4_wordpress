<?php

// PAGE DES CATEGORIES

get_header(); ?>

<section id="primary" class="site-content">
	<div id="content" role="main">

		<?php

		if (have_posts()) : ?>

			
				<h1 class="archive-title"><?php single_cat_title('', true); ?></h1>


				<?php

				if (category_description()) : ?>
					<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>

			<?php

			
			while (have_posts()) : the_post(); ?>

				<div class="category-post">
					<span><?php the_post_thumbnail(); ?></span>
					<span><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

					<div class="entry">
						<?php the_excerpt(); ?>
					</div></span>
				</div>

			<?php endwhile;

			

		else : ?>
			<p>Sorry, no posts matched your criteria.</p>


		<?php endif; ?>

		</div>
	</div>
</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>