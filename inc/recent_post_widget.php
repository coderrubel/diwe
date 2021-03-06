<?php

class custom_recent_posts extends WP_Widget {

    function __construct() {
        $widget_ops = array('classname' => 'custom_recent_posts', 'description' => esc_html("Custom Recent Posts"));
        parent::__construct('custom_recent_posts', esc_html("Custom Recent Posts"), $widget_ops);
    }

    function widget($args, $instance) {
        extract($args);
        $title = isset($instance['title']) ? $instance['title'] : esc_html('Recent Posts');
        $limit = isset($instance['limit']) ? $instance['limit'] : 5;
        echo $before_widget;
        echo $before_title;
        echo $title;
        echo $after_title;
        ?>

        <!-- popular posts -->
        <div class="popular-posts-wrapper">

            <?php
           
            $featured_query = new WP_Query(array(
                'post_type' => 'blogpost',
                'posts_per_page' => $limit,
            ));
            // This code for main post
            
            /*  $featured_args = array(
                'posts_per_page' => $limit,
            );
            /* $featured_query = new WP_Query($featured_args);

            /**
             * Check if zilla likes plugin exists
             */
            if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post();
                    ?>

                    <?php if (get_the_content() != '') : ?>

                        <!-- post -->
                        <div class="post">
                            <!-- content -->
                                <div class="posts_style">
                                    <?php echo get_the_post_thumbnail(get_the_ID(), '  post_thumbnail_img'); ?>
                                </div>
                            
                            <div class="post-content">
                                <a href="<?php echo get_permalink(); ?>"><?php echo trim(substr(get_the_title(), 0, 30)); ?> </a>
                                <p><span class="posts-categorie"> 
                                    <?php
                                    $bp_catagory = get_the_terms(get_the_ID(), 'catagory');
                                    if (!empty($bp_catagory)) {
                                        foreach ($bp_catagory as $bp_catagorys) {
                                            $blog_catagory = $bp_catagorys->name;
                                            $link = get_term_link($bp_catagorys, 'catagory');
                                            echo '<a href="' . $link . '">' . $blog_catagory . '</a> ';
                                        }
                                    }
                                    else{
                                        echo 'Uncatagory';
                                    }
                                    ?>
                                    </span></p>
                                    <a href="<?php echo get_permalink(); ?>"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date('d M , Y'); ?></a>
                            </div><!-- end content -->
                        </div><!-- end post -->

                    <?php endif; ?>

                    <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>

        </div> <!-- end posts wrapper -->

        <?php
        echo $after_widget;
    }

    function form($instance) {
        if (!isset($instance['title']))
            $instance['title'] = esc_html('Recent Posts');
        if (!isset($instance['limit']))
            $instance['limit'] = 5;
        ?>

        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title') ?></label>

            <input  type="text" value="<?php echo esc_attr($instance['title']); ?>"
                    name="<?php echo $this->get_field_name('title'); ?>"
                    id="<?php $this->get_field_id('title'); ?>"
                    class="widefat" />
        </p>

        <p><label for="<?php echo $this->get_field_id('limit'); ?>"><?php esc_html_e('Limit Posts Number') ?></label>

            <input  type="text" value="<?php echo esc_attr($instance['limit']); ?>"
                    name="<?php echo $this->get_field_name('limit'); ?>"
                    id="<?php $this->get_field_id('limit'); ?>"
                    class="widefat" />
        <p>

            <?php
        }

    }
    ?>