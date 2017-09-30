<?php get_header(); ?>

<div class="container">
    <div class="row text-center ">
<?php  while (have_posts()):the_post();?>
<h1 class="text-center text-primary"> 
<?php the_title(); ?>   
</h1>
 <?php the_content(); ?>
<?php endwhile; ?>
   </div>
</div>

<?php get_footer(); ?>