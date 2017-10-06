<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body  <?php body_class(); ?>>
        <header>

            <nav div class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="container">
                    <ul class="social-network">
                        <li><a href="<?php echo get_theme_mod('facebook'); ?>" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
                        <li><a href="<?php echo get_theme_mod('twitter'); ?>" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
                        <li><a href="<?php echo get_theme_mod('linke'); ?>" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
                        <li><a href="<?php echo get_theme_mod('pinterest'); ?>" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
                        <li><a href="<?php echo get_theme_mod('google'); ?>" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
                    </ul>
                    <ul class="info">
                        <li><p><i class="fa fa-phone"></i><?php echo get_theme_mod('phone'); ?></p></li>
                        <li><a href="mailto:<?php echo get_theme_mod('mail'); ?>"><i class="fa fa-envelope"></i><?php echo get_theme_mod('mail'); ?></a></li>
                        
                    </ul>
                    <ul class="info pull-right">
                        <li class="pull-right"><?php get_search_form(); ?></li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="navigation">
                    <div class="container">					
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand">
                                <a href="<?php echo home_url(); ?>"><h1><span>D</span>ewi</h1></a>
                            </div>
                        </div>

                        <div class="navbar-collapse collapse">							
                            <div class="menu">


                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'main_menu',
                                    'menu_class' => 'nav nav-tabs',
                                ));
                                ?>

                            </div>
                        </div>						
                    </div>
                </div>	
            </nav>		
        </header>
