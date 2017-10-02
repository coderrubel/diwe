<div class="jumbotron">
    <h1>We can <span>help build your</span> project!</h1>
    <p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Get it now</a></p>
</div>

<footer>
    <div class="inner-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 f-about">
                    <a href="<?php home_url(); ?>"><h1><span>D</span>ewi</h1></a>
                    <p>We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power.</p>

                </div>
                <?php dynamic_sidebar('footerwidget'); ?>
                <div class="col-md-4 f-contact">
                    <h3 class="widgetheading">Stay in touch</h3>
                    <a href="#"><p><i class="fa fa-envelope"></i> example@gmail.com</p></a>
                    <p><i class="fa fa-phone"></i>  +345 578 59 45 416</p>
                    <p><i class="fa fa-home"></i> Dewi inc  |  PO Box 23456 
                        Little Lonsdale St, New York <br>
                        Victoria 8011 USA</p>
                </div>
            </div>
        </div>
    </div>



    <div class="last-div">
        <div class="container">
            <div class="row">
                <div class="copyright">
                    <?php echo get_option('copy_right'); ?>
                    <div class="credits">

                        <a href="<?php echo esc_url( get_option('admin_url')); ?>">Business Bootstrap Themes</a>
                        by  <a href="<?php echo esc_url( get_option('admin_url')); ?>"><?php echo get_option('admin_name'); ?></a> 
                    </div>
                </div>
                <nav class="foot-nav">
                   <?php wp_nav_menu('main_menu'); ?>
                </nav>
                <div class="clear"></div>
            </div>
        </div>
        <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    </div>	
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-2.1.1.min.js"></script>	
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/fancybox/jquery.fancybox.pack.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.isotope.min.js"></script>  
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.bxslider.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/functions.js"></script>
<script>wow = new WOW({}).init();</script>
<?php wp_footer(); ?>
</body>
</html>