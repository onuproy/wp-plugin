<?php

/**
 * Plugin Name: My New Plugin
 * Plugin URI: https://newplugin.com
 * Description: My new plugin here
 * Version: 0.0.1
 * Author: Onup Chandra Barmon
 * Author URI: https://onuproy.com
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: my-new-plugin
 * 
*/


// Singleton Pattern

class Sr_my_first_plugin{

    private static $instance;

    private function __construct(){
        add_filter ('the_content', array( $this, 'the_content_callback' ));

    }

    public static function get_instance(){
        if( self::$instance ){
            return self::$instance;
        }
        self::$instance = new self();

        return self::$instance;
    }
    
    public function the_content_callback( $content ){

            $url = get_the_permalink();

            $image = '<p> <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' . $url . '"></p>';
            $content .=$image;
            // return 'My new content 2';
            // return $content . '<p>My new content</p>';

            return $content;

        }



}

Sr_my_first_plugin::get_instance();

// new Sr_my_first_plugin();




// Singleton Pattern 
// class Ar_my_new_plugin{
//     private static $instance;
//     private function __construct(){
//    }
//    public static function get_instance(){
//         if( self::$instance){
//             return self::$instance;
//         }

//         self::$instance = new self();

//         return self::$instance;
//    }
// }

// Ar_my_new_plugin::get_instance();









