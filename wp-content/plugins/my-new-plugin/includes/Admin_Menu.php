<?php

class AB_Three_Admin_Menu {

    
    // private static $instance;
    public function __construct(){
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }

    public function admin_menu(){
        add_menu_page(  
            'Query Post',
            'Query Post',
            'administrator',
            'ab_query_post',
            array( $this, 'query_post_callback' )
        );
    } 

    public function query_post_callback() {

        $posts = get_posts( array(
            'post_type' => 'post',
            'posts_per_page' => 10,
        ) );


        include AB_THREE_PLUGIN_PATH . 'includes/templates/query-post.php';

    }

}