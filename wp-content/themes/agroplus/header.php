<!DOCTYPE html>
<html lang="en">
<head>
  	<title>AgroPlus</title>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
<div class="main-bg">
<!-- Header -->
<header>
<div class="inner">
    <h1 class="logo">
        <a href="/">&nbsp;</a>
    </h1>
    <?php wp_nav_menu(['menu' => 'MainMenu',
                       'container' => 'nav',
                       'menu_class' => 'sf-menu']); ?>
    <div class="clear"></div>
</div>
        