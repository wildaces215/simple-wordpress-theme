<html>
<?php wp_head(); ?>
<head>
<title>Simple Wordpress theme</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-faded">
   <a class="navbar-brand" href="#">Navbar</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   
   <?php
   wp_nav_menu([
     'menu'            => 'top',
     'theme_location'  => 'top',
     'container'       => 'div',
     'container_id'    => 'bs4navbar',
     'container_class' => 'collapse navbar-collapse',
     'menu_id'         => false,
     'menu_class'      => 'navbar-nav mr-auto navbar-thing',
     'depth'           => 2,
     'fallback_cb'     => 'bs4navwalker::fallback',
     
   ]);
   
   ?>
   
</nav>