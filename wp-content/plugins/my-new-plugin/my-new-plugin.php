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

// class My_New_Plugin{

//     private static $instance;
//     private function __construct(){

//     }

//     public static function get_instance(){

//         if ( self::$instance ) {
//             return self::$instance;
//         }
//         self::$instance = new self();
//         return self::$instance;
//     }


// }

// My_New_Plugin::get_instance();



// SingleTon patten
class Onup_Personal_plugin{

    private static $instance;
    private function __construct() {
        
        //  add_filter ('the_content', array( $this, 'the_content_callback' ));
        //  add_filter ('body_class', array( $this, 'body_class' ), 10, 2);

        //  add_filter ('the_title', array( $this, 'the_title_callback' ));
        // add_action ( 'wp_footer', array( $this, 'wp_footer'));

        //  Required Method Call 

        $this->define_constants();
        $this->load_classes();



    }

    public static function get_instance(){
        if ( self::$instance ) {
            return self::$instance;
        }
        self::$instance = new self();
        return self::$instance;
    }

    public  function the_content_callback( $content ) {

		// New Filters hook 
		$is_show = apply_filters( 'my_show_post_content_qr_code', true );

		if ( ! $is_show ) {
			return $content;
		}

        $url = get_the_permalink();
        $image = '<p> <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' . $url . '"></p>';
        $content .=$image;
        // return 'My new content 2';
        // return $content . '<p>My new content</p>';
        return $content;

     }

    /**
     * 
     * Wp Footer Action Hook
     * 
    */
     public function wp_footer() {
		do_action( 'before_footer_qr_code', array(1, 2, 3) );

        $url = home_url();
        $image = '<p> <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' . $url . '"></p>';
        echo $image;
     }


    //  Filter hooks
     public function body_class( $classes, $css_class ) {

        // var_dump($classes);
        // print_r($classes);
        // print_r($css_class);

        $classes[] = 'my-custom-class';
        
        return $classes;
     }

     /**
      * Define Constants Funcion
     */
    private function define_constants() {
        define ( 'AB_THREE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) ); 
    }



    //Load Another File Function 
     private function load_classes() {
        
        require_once AB_THREE_PLUGIN_PATH . 'includes/Admin_Menu.php';

        new AB_Three_Admin_Menu();

     }

}

Onup_Personal_plugin::get_instance();



// SingleTon patten 
// class First_my_plugin{

//     private static $instance;

//     private function __construct(){
//          add_filter ('the_content', array( $this, 'the_content_callback' ));
//     }

//     public static function get_instance(){
//         if(self::$instance){
//             return self::$instance;
//         }

//         self::$instance = new self();

//         return self::$instance;
//     }

//     public  function the_content_callback( $content ){

//         $url = get_the_permalink();

//         $image = '<p> <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' . $url . '"></p>';
//         $content .=$image;
//         // return 'My new content 2';
//         // return $content . '<p>My new content</p>';

//         return $content;

//      }

// }

// First_my_plugin::get_instance();






// Singleton Pattern
// class Sr_my_first_plugin{

//     private static $instance;

//     private function __construct(){
//         add_filter ('the_content', array( $this, 'the_content_callback' ));

//     }

//     public static function get_instance(){
//         if( self::$instance ){
//             return self::$instance;
//         }
//         self::$instance = new self();

//         return self::$instance;
//     }
    
//     public function the_content_callback( $content ){

//             $url = get_the_permalink();

//             $image = '<p> <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' . $url . '"></p>';
//             $content .=$image;
//             // return 'My new content 2';
//             // return $content . '<p>My new content</p>';

//             return $content;

//         }

// }

// Sr_my_first_plugin::get_instance();

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


// php coding Standards




