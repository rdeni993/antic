<!doctype html>
<html>
<head>
    <!-- Main Header Files for Wordpress -->
    <?php wp_head(); ?>
    <!-- WP HEAD END HERE -->

    <!-- Website Title -->
    <title><?php bloginfo('name'); if(wp_title('', false)) { echo '|'; } else {  } wp_title(''); ?></title>

    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8" />
    <meta name="author" content="denis_r_home@yahoo.com" />

    <!-- Tab Icon -->
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/img/book_logo.png' ?>">

    <!-- Custom Css -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> 
    
    <!-- Custom Js --> 
    <script src="https://kit.fontawesome.com/00ff6ecef0.js" crossorigin="anonymous"></script>

</head>
<!-- Body Class -->
<body <?php body_class(); ?>>

<!-- Theme Content Start From Here -->
