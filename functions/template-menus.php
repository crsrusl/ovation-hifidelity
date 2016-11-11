<?php

function header_menu()
{
    return wp_nav_menu(array(
        'menu' => 'header-menu',
        'menu_class' => 'nav navbar-nav',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth' => 0,
    ));
}

function footer_menu()
{
    return wp_nav_menu(array(
        'menu' => 'footer-menu',
        'menu_class' => 'nav',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth' => 0,
    ));
}