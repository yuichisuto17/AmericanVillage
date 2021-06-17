<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>American Village</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body <?php body_class();?>>
<?php get_search_form(); ?>
    <header>
        <div class="header">
            <div class="header-left">
            <a href="<?php echo esc_url(home_url('/'));?>"><?php bolginfo('name');?></a>
            <img src="./assets/img/logo.png" alt="logo" class="maru" width="242px" height="242px">
            </div>
            <p class="header__descrition"><?php bloginfo( 'description' ); ?></p>
            <ul>
                <li><a href="#menu1"></a>Menu01</li>
                <li><a href=""></a>Menu02</li>
                <li><a href=""></a>Menu03</li>
                <li><a href=""></a>Menu04</li>
            </ul>
        </div>
    </header>