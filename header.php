<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="main">
        <div class="container">
            <header class="header">
                <div class="head_author_img load-memos-editor">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tx8.jpg" class="blog-img" width="80" height="80" alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="site-description">
                    <h2><span class="uk-invisible"><?php bloginfo('description'); ?></span></h2>
                    <nav class="nav social uk-visible@m">
                        <ul class="flat">
                            <li><a href="https://pan.yaxp.com" target="_blank"><i class="ri-cloudy-2-line"></i></a></li>
                            <li><a href="https://space.bilibili.com/" target="_blank"><i class="ri-bilibili-line"></i></a></li>
                            <li><a href="https://github.com/yaxp" target="_blank"><i class="ri-github-fill"></i></a></li>
                        </ul>
                        <div class="yiyandes"><?php bloginfo('description'); ?></div>
                    </nav>
                </div>
                <nav class="nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'flat',
                    ));
                    ?>
                </nav>
            </header>
