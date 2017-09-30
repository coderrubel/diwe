<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>
<div class="container">
    <div class="row text-center ">
<?php  while (have_posts()):the_post();?>
        
<h1 class="text-center text-primary"> 
    <h2><?php the_title(); ?>   </h2>
    
    <?php the_post_thumbnail(array(' post_image')); ?>
</h1>
 <?php the_content(); ?>
<?php endwhile; ?>
   </div>
</div>

<?php get_footer(); ?>
