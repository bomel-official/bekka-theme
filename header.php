<!DOCTYPE html>
<html lang="en">

<head>
    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title><?php 
        wp_title( '·', TRUE, 'right' );
        bloginfo( 'name' ); ?>
	</title>

    <?php wp_head(); ?>
</head>

<body>
    <div class="marg_wrapper">