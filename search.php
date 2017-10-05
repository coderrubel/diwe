<?php get_header(); ?>


 <?php if(have_posts()):
 ?>
<h2 class="text-center text-primary">Search Results for: <?php $search = the_search_query();?></h2>
<?php if(!empty($search)){
    echo $search;
}
?>
<?php endif; ?>
<?php

 while (have_posts()): the_post(); ?>

    <div class="contact-area  ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-info"><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
               
                
            </div>
        </div>

    </div>

<?php endwhile; ?>

<?php get_footer(); ?>