<?php 

// PAGE DES ARTICLES

get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-8">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="post">

            <h1><?php the_title(); ?></h1><br>
          
            <?php the_post_thumbnail(); ?><br><br>

            <div class="post__meta">
              <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
              <p>
                Publié le <?php the_date(); ?><br>
                Par <?php the_author(); ?><br>
                Dans la catégorie : <?php the_category(); ?><br>
              </p>
            </div>

            <div class="post__content">
              <?php the_content(); ?>
            </div>

          </article>

      <?php endwhile; endif; ?>
    </div>

    <div class="col-4">

    </div>
  </div>
</div>

<?php get_footer(); ?>