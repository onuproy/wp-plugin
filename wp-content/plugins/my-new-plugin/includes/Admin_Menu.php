<?php

class AB_Three_Admin_Menu {

    
    // private static $instance;
    private function __construct(){
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }


    public function admin_menu(){
        

    } 

}