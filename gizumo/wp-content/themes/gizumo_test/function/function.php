<?php



function nav_btn($document_name) {

    $nav_text = [
        'vision' => ['Vision','ビジョン'],
        'service' => ['Service','事業内容'],
        'information' => ['Information','会社内容'],
        'recruit' => ['Recruit','採用情報'],
        'news' => ['News','ニュース'],
        'contact' => ['Contact','お問い合わせ'],
    ];

    if ($document_name === 'header') {
        $index_num = 0;
    }
    if ($document_name === 'footer') {
        $index_num = 1;
    }

    foreach ($nav_text as $url_text => $btn_text) {
        $nav_list_item .= '
            <li class="'.$document_name.'__nav__list__item">
                <a href="https://gizumo-inc.jp/'.$url_text.'/" class="'.$document_name.'__nav__list__item__link">'.$btn_text[$index_num].'</a>
            </li>
        ';
    }
    return $nav_list_item;
}

function sns_btn(){

    $sns_icons =  [
        'tw__icon' => [
            'url' => 'https://twitter.com/gizumo_inc',
            'img' => 'https://gizumo-inc.jp/wp-content/themes/gizumo/images/icons/footer_tw.svg',
        ],
        'fb__icon' => [
            'url' => 'https://www.facebook.com/gizumo.inc/',
            'img' => 'https://gizumo-inc.jp/wp-content/themes/gizumo/images/icons/footer_fb.svg',
        ]
    ];
    foreach ($sns_icons as $icon_name => $link) {
        $sns_icon_item .= '
            <li>
                <a href="'.$link['url'].'" target="new"><img src="'.$link['img'].'" class="'.$icon_name.'"></a>
            </li>
        ';
    }
    return $sns_icon_item;
}