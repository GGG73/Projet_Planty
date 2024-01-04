<?php
add_action('wp_enqueue_scripts','theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Fonction pour charger le style css 
    wp_enqueue_style('parent,t-style',get_template_directory_uri() . '/style.css');
    // Fonction pour charger le style css du theme
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), 
    filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
?> 

<?php
    // Fonction pour LOGO dans le header 
add_theme_support( 'custom-logo' );
?>

<?php 
     // Fonction pour modifier les éléments du menu
 function modifier_menu_pour_utilisateur_connecte($items, $args) {
    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in() && $args->theme_location == 'main-menu') {
        // Ajouter le lien vers l'admin WordPress
        $items .= '<li><a href="' . get_admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'modifier_menu_pour_utilisateur_connecte', 10, 2);
?>


<style>
 @import url('https://fonts.googleapis.com/css2?family=Syne:wght@500;600&display=swap');
</style>


 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Syne:wght@500;600&display=swap" rel="stylesheet">
