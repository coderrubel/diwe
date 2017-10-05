<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>
<?php while (have_posts()):the_post(); ?>
    <div class="container">
        <div class="row">    
            <h1 class="text-center text-primary">    
                <?php
                echo 'Category : ';
                    single_cat_title(); 
                ?>
            </h1>
            <h3 class="text-justify">     <?php the_title(); ?>   </h3>
            <?php the_post_thumbnail(array(' ar_post_image')); ?>
            <?php the_content(array(' ar_content')); ?>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>
