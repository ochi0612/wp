<?php
require_once('function/function.php');

// generatorを非表示にする
remove_action('wp_head', 'wp_generator');

// EditURIを非表示にする
remove_action('wp_head', 'rsd_link');

// wlwmanifestを非表示にする
remove_action('wp_head', 'wlwmanifest_link');

//タイトルタグ出力
add_theme_support('title-tag');

//emoji無効化
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles', 10);

//body_classにスラッグを追加
function pagename_class($classes = '')
{
    if (is_page()) {
        $page = get_post(get_the_ID());
        $classes[] = 'page-' . $page->post_name;
        if ($page->post_parent) {
            $classes[] = 'page-' . get_page_uri($page->post_parent) . '-child';
        }
    }
    return $classes;
}
add_filter('body_class', 'pagename_class');

// JS・CSSファイルを読み込む
function add_files()
{
    // サイト共通JS
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'));

    // サイト共通のCSSの読み込み
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'add_files');

//ログイン画面のデザイン変更
function admin_login_css()
{
    echo '';
}
add_action('login_head', 'admin_login_css');

function custom_login_logo_url()
{
    return get_bloginfo('url');
}
add_filter('login_headerurl', 'custom_login_logo_url');

//サムネイル
add_image_size('photo_list', 240, 160, true);
