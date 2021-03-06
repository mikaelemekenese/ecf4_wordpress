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

    // Ajouter les fichiers CSS, JS et dépendances Bootstrap, Bulma et JQuery

    function custom_scripts()
    {
        wp_enqueue_style('bulma-style', 'https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css');
        wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');
        wp_enqueue_script('custom-script', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'), false, true);
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css?v=' . time(), array(), false, 'all');
    }
    add_action('wp_enqueue_scripts', 'custom_scripts');


    // Menus

    register_nav_menus(
        array(
            'main'      => 'Menu Principal',
            'footer'    => 'Bas de page',
    ));


    // Widgets

    function ourWidgetsInit() {
        register_sidebar( 
            array (
                'id'            => 'home-sidebar-trending',
                'name'          => 'Home - A la une',
                'description'   => 'This is the sidebar showing the events on the home page',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
        ));

        register_sidebar( 
            array (
                'id'            => 'home-sidebar-popular',
                'name'          => 'Home - Articles populaires',
                'description'   => 'This is the sidebar showing the most popular posts on the home page',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
        ));

        register_sidebar( 
            array (
                'id'            => 'home-sidebar-tags',
                'name'          => 'Etiquettes',
                'description'   => 'This is the sidebar showing the tags on the home page',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
        ));
    }
    add_action('widgets_init', 'ourWidgetsInit');


    // Mettre un extrait d'un article et mettre un "Lire plus"


    function new_excerpt_more($more) {
        global $post;
        return '... <a href="' . get_permalink() . '" class="more-link" title="Read More">Read More</a>';
    }
    add_filter('excerpt_more','new_excerpt_more');

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

    // Masquer la version de Wordpress

    remove_action("wp_head", "wp_generator");

    // Cacher les erreurs de connexion

    add_filter('login_errors',create_function('$a', "return null;"));