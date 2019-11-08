<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>


<header>
	<div class="container">
<h1><?php bloginfo('name'); ?></h1>
<small><?php bloginfo('description'); ?></small>
</div>
</header>
<nav class="main-nav">
            <div class="container">
               <?php 
                  $args = array(
                    'theme_location' => 'primary'
                  ); 
               ?>
         <?php wp_nav_menu($args); ?>
         </div>
         </nav>