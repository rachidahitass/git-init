<!DOCTYPE html> 
<html  <?php language_attributes(); ?> class="no-js"> 
 
<head> 
    <meta charset="utf-8"> 
 
    <title><?php bloginfo("title"); ?></title> 
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Adrien Gazaix - www.adriengazaix.fr" />
 
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" />
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/nivo.css" />
 

    
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <?php wp_head(); ?>
</head> 
 
<body>

<div id="content">
  
	<header>
	
	<div id="enter"></div>
    
   	<a title="Retour à l'accueil du site" href="<?php bloginfo("url"); ?>" id="logo">Web Agency</a>

    <?php wp_nav_menu(array(
        "theme_location" => "main-nav",
        "container" => "nav",
        "menu_id" => "menu"
    )); ?>
        <?php get_search_form(); ?>
        
    </header>