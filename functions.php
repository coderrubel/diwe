<?php
add_theme_support('title-tag');
add_theme_support('custom-background');
add_theme_support('post-thumbnails');

register_nav_menu('main_menu', 'Main Menu');


include 'inc/shortcode.php';

function customize_services($headingsection) {
    $headingsection->add_section('heading', array(
        'title' => 'Heading Section',
        'priority' => 10,
    ));
    $headingsection->add_setting('logo', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $headingsection->add_control(
            new WP_Customize_Image_Control($headingsection, 'logo', array(
        'label' => 'Logo Uploade',
        'section' => 'heading',
        'setting' => 'logo',
    )));
    $headingsection->add_setting('phone', array(
        'default' => '+1 769 525 422 5663',
        'transport' => 'refresh',
    ));
    $headingsection->add_control('phone', array(
        'label' => 'Contact Number',
        'section' => 'heading',
        'setting' => 'phone',
        'type' => 'text',
    ));
    $headingsection->add_setting('mail', array(
        'default' => 'hello@Dewi.com',
        'transport' => 'refresh',
    ));
    $headingsection->add_control('mail', array(
        'label' => 'E-mail',
        'section' => 'heading',
        'setting' => 'mail',
        'type' => 'text',
    ));

    $headingsection->add_setting('facebook', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $headingsection->add_control('facebook', array(
        'label' => 'Google link',
        'section' => 'heading',
        'setting' => 'facebook',
        'type' => 'text',
    ));
    $headingsection->add_setting('twitter', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $headingsection->add_control('twitter', array(
        'label' => 'Twitter link',
        'section' => 'heading',
        'setting' => 'twitter',
        'type' => 'text',
    ));
    $headingsection->add_setting('linke', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $headingsection->add_control('linke', array(
        'label' => 'Linkding link',
        'section' => 'heading',
        'setting' => 'linke',
        'type' => 'text',
    ));
    $headingsection->add_setting('pinterest', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $headingsection->add_control('pinterest', array(
        'label' => 'Pinterest link',
        'section' => 'heading',
        'setting' => 'pinterest',
        'type' => 'text',
    ));
    $headingsection->add_setting('google', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $headingsection->add_control('google', array(
        'label' => 'Google link',
        'section' => 'heading',
        'setting' => 'google',
        'type' => 'url',
    ));
    $headingsection->add_setting('colora', array(
        'default'=>'#E9E9E9',
        'transport' => 'refresh',
    ));
    $headingsection->add_control(new WP_Customize_Color_Control($headingsection,'text_color',array( 
        'label' => 'Font Color',
        'section' => 'heading',
        'setting' => 'colora',  
    )));
}

add_action('customize_register', 'customize_services');

function create_post_type() {
    register_post_type('acme_product', array(
        'labels' => array(
            'name' => 'Slider',
            'singular_name' => 'Product',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'thumbnail')
            )
    );
}

add_action('init', 'create_post_type');

function services() {
    register_post_type('homeservices', array(
        'labels' => array(
            'name' => 'Home Services',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'supports' => array('title', 'editor', 'thumbnail')
            )
    );

    register_post_type('services', array(
        'labels' => array(
            'name' => 'Services',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-forms',
        'supports' => array('title', 'editor', 'thumbnail')
            )
    );

    register_post_type('member', array(
        'labels' => array(
            'name' => 'Team Member',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    ));

    //Blog Post
    register_post_type('blogpost', array(
        'labels' => array(
            'name' => 'Blog Post',
        ),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    ));

    register_taxonomy('catagory', 'blogpost', array(
        'labels' => array(
            'name' => 'Catagory',
            'add_new_item' => 'Add New Catagori',
        ),
        'public' => true,
        'hierarchical' => true,
    ));
    register_taxonomy('tag', 'blogpost', array(
        'labels' => array(
            'name' => 'Tag',
            'add_new_item' => 'Add New Catagori',
        ),
        'public' => true,
        'hierarchical' => false,
    ));

    //Portfolio
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => 'Portfolio',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'thumbnail', 'comments'),
    ));

    register_taxonomy('catagori', 'portfolio', array(
        'labels' => array(
            'name' => 'Catagory',
            'add_new_item' => 'Add New Catagori',
        ),
        'public' => true,
        'hierarchical' => true,
    ));
}

add_action('init', 'services');

function designation() {
    add_meta_box(
            'designation', 'Add Service icon by Fone-Awesome', 'meta_output', 'services', 'normal'
    );
}

add_action('add_meta_boxes', 'designation');

function meta_output($post) {
    ?>
    <label for="desig">Font-Awesome Icon</label>
    <p><input type="text" id="desig" value="<?php echo get_post_meta($post->ID, 'designation', true) ?>" name="designation" class="widefat"></p>
    <?php
}

function database_connect($post_ID) {
    update_post_meta($post_ID, 'designation', $_POST[designation]);
}

add_action('save_post', 'database_connect');

function homeservices() {
    add_meta_box(
            'homeservices', 'Add Service icon by Fone-Awesome', 'meta_output1', 'homeservices', 'normal'
    );
}

add_action('add_meta_boxes', 'homeservices');

function meta_output1($post) {
    ?>
    <label for="desig">Font-Awesome Icon</label>
    <p><input type="text" id="desig" value="<?php echo get_post_meta($post->ID, 'homeservices', true) ?>" name="homeservices" class="widefat"></p>
    <?php
}

function database_connect1($post_ID) {
    update_post_meta($post_ID, 'homeservices', $_POST[homeservices]);
}

add_action('save_post', 'database_connect1');

function sidebar() {
    register_sidebar(array(
        'name' => 'Blog Page Right Sidebar',
        'id' => 'rightsidebar',
        'before_widget' => '<div class="col-xs-6 col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<div class="page-header"><h3>',
        'after_title' => '</h3></div>',
    ));

    register_sidebar(array(
        'name' => 'Footer Widget',
        'id' => 'footerwidget',
        'before_widget' => '<div class="col-md-4 recent-post-w">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgetheading">',
        'after_title' => '</h3>',
    ));

    //custom widget
    register_widget('custom_recent_posts');
    register_widget('diwe_popular_posts');
    register_widget('recent_posts');
}

add_action('widgets_init', 'sidebar');


require_once '/inc/setting_api.php';
require_once '/inc/recent_post_widget.php';
require_once '/inc/popular_post_widget.php';
require_once '/inc/recent-post.php';

//post counter 
function getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

// popular post
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    } else {
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function add_css_and_js() {
    wp_register_style('style', get_template_directory_uri() . '/css/style.css');
    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_register_style('fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.css');
    wp_register_style('isotope', get_template_directory_uri() . '/css/isotope.css');
    wp_register_style('bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');
    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style('mystyle', get_template_directory_uri() . '/style.css');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.1.1.min.js');



/*
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.1.1.min.js');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_register_script('wow', get_template_directory_uri() . '/js/wow.min.js');
    wp_register_script('fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.pack.js');
    wp_register_script('isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js');
    wp_register_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js');
    wp_register_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js');
    wp_register_script('functions', get_template_directory_uri() . '/js/functions.js');

*/
    wp_enqueue_style(array('bootstrap', 'font-awesome', 'bxslider', 'isotope', 'fancybox', 'animate', 'style', 'mystyle'));
   // wp_enqueue_script(array('jquery', 'bootstrap', 'wow', 'fancybox','isotope', 'easing', 'bxslider', 'functions'));
}

add_action('wp_enqueue_scripts', 'add_css_and_js');
