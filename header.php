<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php bloginfo('name')?> - <?php echo get_the_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="ovation,high,fidelity,audio,amplifiers,preamplifiers" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bower_dir(); ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php css_dir(); ?>/screen.css">
</head>
<body>
<div class="container-fluid nav-fixed">
    <nav class="navbar navbar-full">
        <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <?php header_menu(); ?>
        </div>
        <button class="hamburger hamburger--collapse" type="button">
        <span class="hamburger-box"><span class="hamburger-inner"></span></span>
        </button>
        <div id="burger-menu">
            <?php header_menu(); ?>
        </div>
    </nav>
</div>