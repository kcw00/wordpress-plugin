<?php
/**
 * Plugin Name: Theme Toggle
 * Description: Adds a light/dark mode toggle button to the site.
 * Version: 1.0
 * Author: Chaewon Kim
 */

 function theme_toggle_enqueue_assets()
 {
     wp_enqueue_script(
         'theme-toggle',
         plugin_dir_url(__FILE__) . 'theme-toggle.js',
         array(),
         null,
         true
     );
 
     wp_enqueue_style(
         'theme-toggle-style',
         plugin_dir_url(__FILE__) . 'style.css'
     );
 }
 add_action('wp_enqueue_scripts', 'theme_toggle_enqueue_assets');


function theme_toggle_add_button()
{
    $icon_url = plugin_dir_url(__FILE__) . 'icons/moon.svg';
    echo '<div class="theme-toggle-container">
            <button id="theme-toggle" aria-label="Toggle Theme">
                <img id="theme-icon" src="' . esc_url($icon_url) . '" alt="Theme Icon" width="24" height="24" />
            </button>
          </div>';
}
add_action('wp_body_open', 'theme_toggle_add_button');