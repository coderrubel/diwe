<?php

function slider_short($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'acme_product', 'orderby' => 'menu_order', 'order' => 'ASC')
    );

    $list = '<div class="slider">
		<div class="img-responsive">
			<ul class="bxslider">	';
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $list .= '<li> <img src="' . get_the_post_thumbnail_url() . '" alt=""/></li>
        
        ';
    endwhile;
    $list.= '</ul>
		</div>	
    </div>';
    wp_reset_query();
    return $list;
}

add_shortcode('slider', 'slider_short');

//home Servics
function homeservice($atts) {
    extract(shortcode_atts(array(
        'count' => 3,
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'homeservices', 'orderby' => 'menu_order', 'order' => 'ASC')
    );

    $list = '	<div class="container">
		<div class="row">				
			';
    $ser = 0;
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $icon = get_post_meta(get_the_ID(), 'homeservices', true);

        if ($ser == 0) {
            $list .= '<div class="col-md-4">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="align-center">
						<h4>' . get_the_title() . '</h4>					
						<div class="icon">
							<i class="' . $icon . '"></i>
						</div>
						<p>' . get_the_content() . '						</p>
						<div class="ficon">
							<a href="' . get_the_permalink() . '" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>
        
        ';
        } elseif ($ser == 1) {
            $list .= '<div class="col-md-4">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
					<div class="align-center">
						<h4>' . get_the_title() . '</h4>					
						<div class="icon">
							<i class="' . $icon . '"></i>
						</div>
						<p>' . get_the_content() . '						</p>
						<div class="ficon">
							<a href="' . get_the_permalink() . '" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>
        
        ';
        } else {
            $list .= '<div class="col-md-4">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
					<div class="align-center">
						<h4>' . get_the_title() . '</h4>					
						<div class="icon">
							<i class="' . $icon . '"></i>
						</div>
						<p>' . get_the_content() . '</p>
						<div class="ficon">
							<a href="' . get_the_permalink() . '" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>
        
        ';
        }

        $ser++;


    endwhile;
    $list .= ' </div>
	</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('homeservice', 'homeservice');

//services

function service($atts) {
    extract(shortcode_atts(array(
        'count' => 8,
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'services', 'orderby' => 'menu_order', 'order' => 'ASC')
    );

    $list = '	<div class="container">
		<div class="row">				
			';
    $ser = 0;
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $icon = get_post_meta(get_the_ID(), 'designation', true);


        $list .= '<div class="col-md-6">
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.6s">
					<div class="align-center">
						<h4>' . get_the_title() . '</h4>					
						<div class="icon">
							<i class="' . $icon . '"></i>
						</div>
						<p>' . get_the_content() . '						</p>
						<div class="ficon">
							<a href="' . get_the_permalink() . '" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
                                </div>
        ';

    endwhile;
    $list .= ' </div>
	</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('service', 'service');

//team member  
function member($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'member', 'orderby' => 'menu_order', 'order' => 'ASC')
    );

    $list = '<div class="box">
		<div class="container">
			<div class="row">';
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $list .= '<div class="col-md-4">
					<div class="thumbnail">
						<div class="img-thumbnail">
							' . get_the_post_thumbnail() . '		
							<div class="caption">
								<h3>' . get_the_title() . '</h3>
								<p>' . get_the_content() . '</p>
								<a href="' . get_the_permalink() . '" class="btn btn-default" role="button">Read more</a>
							</div>
						</div>
					</div>
				</div>';
    endwhile;
    $list.= '	</div>
					</div>
				</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('team', 'member');

//Blog Post
function blog_post($atts) {
    extract(shortcode_atts(array(
        'count' => '2',), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'blogpost', 'orderby' => 'menu_order', 'order' => 'ASC')
    );

    $list = '
				<div class="col-xs-12 col-sm-6 col-md-12">';
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $list .= '<div class="page-header">
                <a href="'. get_the_permalink().'"><h3>' . get_the_title() . '</h3></a>
                <h5>' . get_the_time('y M Y') .' '."View:".getPostViews(get_the_ID()).'</h5>		
                <p>' . trim(substr(get_the_content(), '0', '250')) . '</p> 
                <a href="' . get_the_permalink() . '" class="btn btn-primary" role="button">Read More</a>
                </div>';

    endwhile;
     wp_reset_postdata(); 
     the_posts_pagination( );
    $list.= '   </div>';
   
    wp_reset_query();
    return $list;
  
    
}

add_shortcode('blog', 'blog_post');

//Protfolio
function custom_protfolio($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'portfolio', 'orderby' => 'menu_order', 'order' => 'ASC')
    );


    $list = '<section id="section-works" class="section appear clearfix">
			<div class="container">						
				<div class="row">
					<nav id="filter" class="col-md-12 text-center">
						<ul>
						  <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
						  <li><a href="#"  class="btn-theme btn-small" data-filter=".webdesign" >Web Design</a></li>
						  <li><a href="#"  class="btn-theme btn-small" data-filter=".photography">Photography</a></li>
						  <li ><a href="#" class="btn-theme btn-small" data-filter=".print">Print</a></li>
						</ul>
					</nav>
                                        <div class="col-md-12">
						<div class="row">
							<div class="portfolio-items isotopeWrapper clearfix" id="3">	';
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();

        $categories = get_the_terms(get_the_ID(), 'catagori');
        foreach ($categories as $category) {

            if ($category->name == 'Photography') {
                $list .= '
                
            
                <article class="col-md-4 isotopeItem photography">
                    <div class="portfolio-item">
                            <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                                    <img src="' . get_the_post_thumbnail_url() . '" class="img-responsive" alt="welcome" /></div>
                            <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                            <h5><a href="#">' . get_the_title() . '</a></h5>
                                            <a href="img/portfolio/1.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>										   
                            </div>
                    </div>
                </article>';
            } elseif ($category->name == 'Print') {
                $list .= '
                
            
                <article class="col-md-4 isotopeItem print">
                    <div class="portfolio-item">
                            <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                                    <img src="' . get_the_post_thumbnail_url() . '" alt="welcome" />
                            </div>
                            <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                            <h5><a href="#">' . get_the_title() . '</a></h5>
                                            <a href="img/portfolio/1.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>										   
                            </div>
                    </div>
                </article>';
            } elseif ($category->name == 'Web Design') {
                $list .= '
                
            
                <article class="col-md-4 isotopeItem webdesign">
                    <div class="portfolio-item">
                            <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                                    <img src="' . get_the_post_thumbnail_url() . '" alt="welcome" />
                            </div>
                            <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                            <h5><a href="#">' . get_the_title() . '</a></h5>
                                            <a href="img/portfolio/1.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>										   
                            </div>
                    </div>
                </article>';
            }
        }


    endwhile;
    $list.= '	</div>
        </div>
                </div> 
                </div>
        </div>
                </section>
              
';
    wp_reset_query();
    return $list;
}

add_shortcode('portfolio', 'custom_protfolio');
?>


