<?php 

function theme_options(){
    add_settings_section('th_footer_option','Footer Option','footer_section_callback','theme_options.php');
    
   add_settings_field('footer_option','Copy Right Text','footer_callback_option','theme_options.php','th_footer_option');
   
   register_setting('th_footer_option','th_option');
}
add_action('admin_init','theme_options');


function footer_section_callback(){
    
   return;
}

function footer_callback_option(){ 
    $option_text = (array)get_option('th_option');
    $th_option_text = $option_text['footer_option']; 
    
    echo '<input type="text" class="regular-text" name="th_option[footer_option]" value="'.$th_option_text.'" />';
    
}

function theme_option_menu(){
    add_menu_page('Theme Option','Theme Option','manage_options','theme_options.php','theme_option_page_designe','dashicons-menu',36);
}
add_action('admin_menu','theme_option_menu');




function theme_option_page_designe(){?>
<div class="wrap">
    <h2>Theme Options</h2>
<?php settings_errors(); ?>
    <form action="options.php" method="POST">
         <?php  do_settings_sections('theme_options.php'); ?>
        
        <?php settings_fields('footer_option'); ?>
        <?php submit_button(); ?>
    </form>
</div>
<?php }