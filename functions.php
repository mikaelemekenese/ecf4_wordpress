<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

// Affichée une fois par date différente
the_date();

// Affichée pour chaque article avec le format défini dans WordPress
the_time(get_option('date_format'));

// Affichée pour chaque article, avec un format de date et heure personnalisé (ici : 02 Avril 2019 à 17:23)
the_time('j F Y à H:i');

// comments_number( 'no responses', 'one response', '% responses' );
// comments_number( '0', '1', '%' );

// Ajouter les fichiers CSS, JS et dépendances Bootstrap et JQuery

function custom_scripts()
{
    wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');
    wp_enqueue_script('custom-script', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'), false, true);
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css?v=' . time(), array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'custom_scripts');

// Menus

register_nav_menus(array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
));

// Sidebar

function my_register_sidebars()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __('Primary Sidebar'),
            'description'   => __('A short description of the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

// Mettre un extrait d'un article et mettre un "Lire plus"


function new_excerpt_more($more) {
    global $post;
    remove_filter('excerpt_more', 'new_excerpt_more'); 
    return ' <a class="read_more" href="'. get_permalink($post->ID) . '">' . '<br>Read More &raquo;' . '</a>';
}
add_filter('excerpt_more','new_excerpt_more',11);

function my_excerpt_length($length) {
    return 15;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);

function trim_custom_excerpt($excerpt) {
    if (has_excerpt()) {
        $excerpt = wp_trim_words(get_the_excerpt(), apply_filters("excerpt_length", 15));
    }

    return $excerpt;
}
add_filter("the_excerpt", "trim_custom_excerpt", 999);