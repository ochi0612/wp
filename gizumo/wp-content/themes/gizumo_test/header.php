<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="keywords" content="<?php bloginfo('keywords'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500i|Contrail+One|Kaushan+Script|Lemonada|Mogra|Sriracha|Kalam|Fugaz+One|Carter+One|Racing+Sans+One|Source+Sans+Pro:200i|Open+Sans:600i" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <?php echo $header_nav_list_item_link ;?>
    <div class="header__base">
        <header class="header clearfix">
            <a href="<?php bloginfo('url'); ?>" class="header__logo">
                <img src="https://gizumo-inc.jp/wp-content/themes/gizumo/images/common/logo.svg">
            </a>
            <nav class="header__nav">
                <ul class="header__nav__list">
                    <?php echo nav_btn('header'); ?>
                </ul>
            </nav>
        </header>
    </div>
