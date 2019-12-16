<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Luke McQuade">
    <meta name="keywords" content="software engineering,programming,c#,.net,sql,developer,blog">
    <meta name="description" content="Software engineering blog - mostly C# and .Net. <?php 
        setup_postdata($post); 
        echo trim(strip_tags(get_the_excerpt())); ?>">

    <title>El McQuade - Software Engineering</title>
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet" />
    
    <?php //wp_head(); ?> <!--Don't need this yet, just adds cruft -->
    <?php do_action('wp_enqueue_scripts') ?> <!-- required for syntax highlighting plugin. -->
</head>
<body>
    <div class="title-container">
        <h1 class="site-title"><a href="/">El M<sup class="super-c">c</sup>Quade</a></h1>
        <p class="blog-description"><?php echo get_bloginfo('description');?></p>
    </div>