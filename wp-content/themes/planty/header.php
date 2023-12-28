<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
 <!--si l'utilisateur est connecté a wp ,afficher le lien "Admin" qui s'ouvre dans une nouvelle fenetre(target=_blank) l'url admin de WP-->
    <?php if(is_user_logged_in()): ?>
         <div class="user_connect">
            <a target="_blank" href="<?php echo admin_url();?>">Admin</a>
    </div>
    <?php endif;?>

<div class="container">
<a class="logo" href="<?php echo home_url(); ?>">  
<img src="<?php echo get_template_directory_uri(); ?>/localhost/Planty/wp-content/uploads/2023/12/Logo-source-1.png" alt="Planty">
</a>
</div>

<div id="branding">
<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<?php
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
?>
</div>
<div id="site-description"></div>
</div>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>

</nav>
</header>
<div id="container">
<main id="content" role="main">