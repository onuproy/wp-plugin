<?php
/**
 * Plugin Name: My Custom Code
 * 
 */

function my_show_post_content_qr_code_callback(){
    return false;
}

add_filter( 'my_show_post_content_qr_code', 'my_show_post_content_qr_code_callback', 10 );


function my_show_post_content_qr_code_callback2(){
    return true;
}
add_filter( 'my_show_post_content_qr_code', 'my_show_post_content_qr_code_callback2', 11 );


// Action Hook 
function before_footer_qr_code_callback( $args ){
    print_r($args);
    echo 'This is before QR';
};

add_action( 'before_footer_qr_code', 'before_footer_qr_code_callback', 20, 1 );


// Another plugin/Code
// remove_action( 'before_footer_qr_code', 'before_footer_qr_code_callback', 20 );



// Another way type 
// add_filter( 'my_show_post_content_qr_code', function() {
//     return false;
// } );