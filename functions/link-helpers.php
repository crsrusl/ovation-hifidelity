<?php
function css_dir() {
	echo bloginfo( 'template_directory' ) . '/assets/css';
}

function js_dir() {
	echo bloginfo( 'template_directory' ) . '/assets/js';
}

function bower_dir() {
	echo bloginfo( 'template_directory' ) . '/assets/bower_components';
}