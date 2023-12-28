<?php
add_action('wp_enqueue_scripts','theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent,t-style',get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), 
    filemtime(get_stylesheet_directory() . '/css/theme.css'));
  
// Fonction pour recupérer Image LOGO ??


// Fonction Wook wp_nav_menu( $args ); Affiche ou récupère une liste de pages avec un lien d'accueil facultati??


// Fonction Détermine si le visiteur actuel est connecté a l admin WP ok dans header.php!!

}
?>