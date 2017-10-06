<?php get_header(); ?>
<div class="jumbotron"><h2 class="text-uppercase"><?php the_title(); ?></h2></div>

<ul>
    <?php
    global $post;
    $args = array('numberposts' => 5, 'offset' => 1, 'category' => 1);
    $myposts = get_posts($args);
    foreach ($myposts as $post) : setup_postdata($post);
        ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <li><?php
            setPostViews(get_the_ID());
            echo getPostViews(get_the_ID());
            ;
            ?></li>
    <?php endforeach; ?>
</ul>
<?php if (is_page('blog')) { ?>

    <?php while (have_posts()): the_post(); ?>

        <div class="contact-area  ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php the_content(); ?>
                    </div>
                    <?php dynamic_sidebar('rightsidebar') ?>

                </div>
            </div>

        </div>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
    <?php
}

//portfolio page
elseif (is_page('Portfolio')) {
    ?>

    <?php while (have_posts()): the_post(); ?>

        <div class="contact-area  ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php the_content(); ?>
                    </div> 
                </div>
            </div>

        </div>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
    <?php
}

//Services page
elseif (is_page('Services')) {
    ?>

    <?php while (have_posts()): the_post(); ?>

        <div class="contact-area  ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
                            <div class="services">	
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <hr>
        </div>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
    <?php
}

//Contact page
elseif (is_page('contact')) {
    ?>

    <?php while (have_posts()): the_post(); ?>

        <div class="contact-area  ">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-8">
                        <?php the_content(); ?>
                    </div>
                    <iframe src="<?php echo get_theme_mod('maps'); ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <hr>
        </div>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
    <?php
}

else {
    ?>

    <?php while (have_posts()): the_post(); ?>

        <div class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php the_content(); ?>
                    </div>
                    </div>
            </div>

        </div>
    <?php endwhile; ?>



<?php }
?>



<?php get_footer(); ?>	