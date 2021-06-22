<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”viewport” content=”width=device-width, initial-scale=1”>
    <?php wp_head(); ?>
</head>
<body>
<body <?php body_class();?>>

    <header>
        <div class="header">
            <div class="header-left">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="logo" class="maru" width="242px" height="242px">
            
            <?php wp_nav_menu(); ?>
            
    </header>
    <main>
    <div class="top-page">
        <div class="top-visual">
            <?php echo do_shortcode('[smartslider3 slider="2"]');?>
            <!-- <?php echo do_shortcode('[smartslider3 slider="3"]');?> -->
            <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/visual_1_pc.png" alt="visual" class="pc"> -->
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/visual_1_sp.png" alt="visual" class="sp">
        </div>
        <div class="top-text">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/visual_text_pc.png" alt="text" class="text">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/visual_text_sp.png" alt="text" class="text_sp">
        </div>
        <div>
        <p class="intro">進化し続ける「街」<br class="sp">アメリカンビレッジマガジン</p>
        </div>
    </div>


    <section id= latestarticles>
        <div class="latestarticles">
            <h2 align="center">Latest Articles</h2>
        </div>