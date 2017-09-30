<?php

function th_options() {
    add_settings_section('diew_theme_option', 'Footer Option', 'footer_option_desing', 'theme_options.php');
    add_settings_field('copy_right', 'Copy Right Text', 'copyright_input_design', 'theme_options.php', 'diew_theme_option');
    register_setting('diew_theme_option', 'copy_right');

    add_settings_field('admin_name', 'Author or Company Name', 'admin_name_design', 'theme_options.php', 'diew_theme_option');
    register_setting('diew_theme_option', 'admin_name');

    add_settings_field('admin_url', 'Add Author or Company URL', 'url_option', 'theme_options.php', 'diew_theme_option');
    register_setting('diew_theme_option', 'admin_url');
}

add_action('admin_init', 'th_options');

function footer_option_desing() {
    echo 'You May Add or Change Your Theme Option Here';
}

function copyright_input_design() {
    echo '<input type="text" class="regular-text" name="copy_right" value="' . get_option('copy_right') . '">';
}

function admin_name_design(){
    echo '<input type="text" class="regular-text" name="admin_name" value="' .get_option('admin_name').'">';
}

function url_option() {
    echo '<input type="text" class="regular-text" name="admin_url" value="' . esc_url(get_option('admin_url')) . '">';
}

function add_new_menu() {
    add_theme_page('Theme Options', 'Theme Options', 'manage_options', 'theme_options.php', 'menu_option_desing');
}

add_action('admin_menu', 'add_new_menu');

function menu_option_desing() {
    ?>
    <div class="wrap">
        <h2>Theme Option</h2>
            <?php settings_errors(); ?>
        <form action="options.php" method="POST">
            <?php do_settings_sections('theme_options.php'); ?>
            <?php settings_fields('diew_theme_option'); ?>
    <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
