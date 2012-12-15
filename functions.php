<?php

function proto_enqueue() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '20121214' );
}
add_action( 'wp_enqueue_scripts', 'proto_enqueue' );