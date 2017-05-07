<?php
function remove_menus() {
//     remove_menu_page( 'edit.php' );
//     remove_menu_page( 'edit-comments.php' );
//     remove_menu_page( 'themes.php' );
//     // remove_menu_page( 'upload.php' );
//     remove_menu_page( 'tools.php' );
// //	remove_menu_page( 'options-general.php' );
//     remove_menu_page( 'plugins.php' );
//     remove_menu_page( 'wpcf7' );
//     remove_menu_page( 'users' );
//     remove_menu_page( 'edit.php?post_type=acf-field-group' );
}

add_action( 'admin_menu', 'remove_menus' );
