<?php 

// PAGE DES ARTICLES

get_header(); ?>

<div class="container-fluid article">
  <div class="row">
    <div class="col-8 article-main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
          <article class="article-main_post">

              <h1><?php the_title(); ?></h1><br>
            
              <?php the_post_thumbnail(); ?><br><br>

              <div class="article-main_post__meta">
                  
                  <span><?php echo get_avatar(get_the_author_meta('ID'), 40); ?></span>
                  <span>
                    <p>
                      Publié le <?php the_date(); ?><br>
                      Par <?php the_author(); ?><br>
                      <?php the_category(); ?>
                    </p>
                </span>
              </div>

              <div class="article-main_post__content">
                <?php the_content(); ?>
              </div>

          </article>

      <?php endwhile; endif; ?>
    </div>

    <div class="col-4 article-sidebar">

    </div>
  </div>
</div>

<?php get_footer(); ?>