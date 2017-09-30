<?php get_header(); ?>
  <div class="jumbotron"><h2 class="text-uppercase"><?php the_title(); ?></h2></div>
  
  <ul>
    <?php
    global $post;
    $args = array( 'numberposts' => 5, 'offset'=> 1, 'category' => 1 );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) :  setup_postdata($post); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <li><?php setPostViews(get_the_ID()); echo getPostViews(get_the_ID());; ?></li>
    <?php endforeach; ?>
</ul>
  <?php if(is_page('blog')){  ?>
      
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
      
 <?php }
 else { ?>
    
<?php while (have_posts()): the_post(); ?>
 
    <div class="contact-area  ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <?php the_content(); ?>
                </div>
                
            </div>
        </div>

    </div>
<?php endwhile; ?>
  
  
      
  <?php }
  
  
  ?>
  


<?php get_footer(); ?>	