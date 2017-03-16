<?php
/*
Plugin Name: Bad Code Highlighter
Description: Highlights bad code ... Do not use in prod ;)
Version: 1.0.0
Author : LittleSnake
Author Uri : https://github.com/LittleSnake42
*/

if (!defined('BCH_ASSETS_VERSION'))
    define('BCH_ASSETS_VERSION', '1.0.0');

add_action('wp_enqueue_scripts', function () {

    //wp_register_script('bch_js', plugin_dir_url(__DIR__) . 'views/assets/js/bch.js', array(), BCH_ASSETS_VERSION, true);
    //wp_enqueue_script('bch_js');

    wp_register_style('bch_css', plugin_dir_url(__DIR__) . '/assets/css/bch.css', array(), BCH_ASSETS_VERSION);
    wp_enqueue_style('bch_css');

});