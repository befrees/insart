<?php

/**

* Template name: Java Engineering 

*/

$clients = get_posts('post_type=client&numberposts=-1&orderby=menu_order&order=asc');

?>
<!DOCTYPE html>

<html lang="en">

<head>

    <?php get_header('head') ?>

</head>

<body <?php body_class() ?>>

    <div class="wrapper page-clients">

        <header id="site-header" class="header header-image header-inner header-nocolor">

            <?php get_template_part( 'parts/top-line' ); ?>

        </header>

        <div class="middle nopadding-top" id="middle">

            <div class="container-fluid content-top content-bg">

                <div class="container">

                    <?php while(have_posts()): the_post(); ?>

                    <div class="row">

                        <div class="page-entry col-md-9 col-md-offset-2">

                            <div class="h1 title-bracket"><?= get_the_title(); ?></div>

                            <div class="content"><?= get_the_content() ?></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="container container-info">

                <div class="vector-container flexbox flex-wrap">

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/oracle.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/java.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/spring.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/hibernate.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/jboss.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/apache.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/spark.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/hadoop.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/postresql.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/hazelcast.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/mongodb.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/couchbase.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/cassandra.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/mysql.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/amazon.svg" alt=""></span>

                    <span><img src="<?php echo bloginfo('template_url'); ?>/img/svg/logos/1/heroku.svg" alt=""></span>

                </div>

                <div class="h1 title-block text-center"><?php the_field('block_1_title') ?></div>

                <div class="layers-block">

                    <div class="layers-svg">

                        <?php include get_template_directory() . "/img/svg/java-layer.svg" ?>



                        <span class="layer-lbl layer-lbl-1" data-layer="1">Client Application Layer</span>

                        <span class="layer-lbl layer-lbl-2" data-layer="2">Client API Layer</span>

                        <span class="layer-lbl layer-lbl-3" data-layer="3">Third-Party Systems APIs Layer</span>

                        <span class="layer-lbl layer-lbl-4" data-layer="4">Service / Business Logic Layer</span>

                        <span class="layer-lbl layer-lbl-5" data-layer="5">Data Distribution Layer</span>

                        <span class="layer-lbl layer-lbl-6" data-layer="6">Data Transformation Layer</span>

                        <span class="layer-lbl layer-lbl-7" data-layer="7">Persistence Logic Layer</span>

                        <span class="layer-lbl layer-lbl-8" data-layer="8">Database Storage Layer</span>

                        

                        <img src="<?php echo bloginfo('template_url'); ?>/img/svg/java-layer.svg" alt="" usemap="Maplayers" class="img-jl-opacity" />

                            <map name="Maplayers">

                              <area shape="poly" class="map-jl" data-layer="1" id="jlm-1" coords="357,5,481,74,482,89,228,232,100,156" href="#">

                              <area shape="poly" class="map-jl" data-layer="2" id="jlm-2" coords="143,189,105,211,103,218,231,288,488,143,446,116,236,235,221,233" href="#">

                              <area shape="poly" class="map-jl" data-layer="3" id="jlm-3" coords="558,125,688,198,689,209,435,356,305,283,309,268" href="#">

                              <area shape="poly" class="map-jl" data-layer="4" id="jlm-4" coords="142,247,105,267,99,276,428,464,686,318,682,309,603,265,434,356,304,283,301,272,457,181,445,173,238,288,232,291,226,294" href="#">

                              <area shape="poly" class="map-jl" data-layer="5" id="jlm-5" coords="644,345,686,365,686,376,432,520,101,332,103,322,137,303,429,469" href="#">

                              <area shape="poly" class="map-jl" data-layer="6" id="jlm-6" coords="141,360,103,379,102,389,432,577,684,436,684,427,646,407,436,524" href="#">

                              <area shape="poly" class="map-jl" data-layer="7" id="jlm-7" coords="140,415,103,440,103,448,432,636,688,494,683,481,647,464,438,580,431,583" href="#">

                              <area shape="poly" class="map-jl" data-layer="8" id="jlm-8" coords="142,477,101,496,100,506,431,694,689,547,680,538,653,521,429,640" href="#">

                            </map>

                    </div>

                    <img src="<?php echo bloginfo('template_url'); ?>/img/svg/java-mob-1.svg" alt="" class="img-java-mob-1 hide-pc" />

                    <div class="row">

                        <div class="col-md-8 col-md-offset-2">                        

                            <?php the_field('block_1_text') ?>

                        </div>

                    </div>

                </div>

                <div class="block-microservice container">

                    <div class="h1 title-block text-center"><?php the_field('block_2_title') ?></div>

                    <div class="micro-svg row" data-show="0">

                        <div class="micro-labels micro-labels-left col-md-3 text-right">

                            <span class="micro-2" data-step="2"><span class="micro-lbl micro-lbl-2" data-step="2"><span class="_caption">SOA</span><span class="_subcaption">Coarse unit</span></span></span>

                        </div>

                        <div class="col-md-6">

                        <div class="_micro-inner-center">      

                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/jb-stat.svg" class="jb-img-stat jb-img jb-img-0" alt="cheme step" usemap="#Map-stat" border="0" />

                            <map name="Map-stat" id="Map-stat" alt="static">

                                <area shape="poly" data-step="1" class="jb-m" coords="289,0,438,82,437,253,292,336,146,253,147,86" href="#" />

                                <area shape="poly" data-step="2" class="jb-m" coords="171,270,290,337,404,271,435,288,434,460,290,540,140,461,142,290" href="#" />

                                <area shape="poly" data-step="3" class="jb-m" coords="153,475,286,540,437,465,443,659,299,743,140,660,142,488" href="#" />

                            </map>

                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/jb-top.svg" alt="cheme step" class="jb-img jb-img-1" usemap="#Map-top" border="0" />

                            <map name="Map-top" id="Map-top">

                              <area shape="poly" data-step="1" class="jb-m" coords="290,0,451,92,454,274,291,367,131,278,133,92" href="#" />

                              <area shape="poly" data-step="2" class="jb-m" coords="149,292,294,368,423,296,439,304,439,477,293,558,145,479,138,299" href="#" />

                              <area shape="poly" data-step="3" class="jb-m" coords="145,484,294,558,438,484,438,678,299,756,279,755,145,678" href="#" />

                            </map>

                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/jb-mid.svg" alt="cheme step" class="jb-img jb-img-2" usemap="#Map-mid" border="0" />

                            <map name="Map-mid" id="Map-mid">

                              <area shape="poly" data-step="1" class="jb-m" coords="290,0,437,83,441,248,428,256,295,184,159,258,145,253,145,81" href="#" />

                              <area shape="poly" data-step="2" class="jb-m" coords="293,190,453,273,452,458,289,551,134,463,134,273" href="#" />

                              <area shape="poly" data-step="3" class="jb-m" coords="140,472,291,552,434,475,437,660,300,741,282,740,146,662" href="#" />

                            </map>

                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/jb-bot.svg" alt="cheme step" class="jb-img jb-img-3" usemap="#Map-bot" border="0" />

                            <map name="Map-bot" id="Map-bot">

                              <area shape="poly" data-step="1" class="jb-m" coords="290,-1,440,81,439,255,293,333,146,254,143,83" href="#" />

                              <area shape="poly" data-step="2" class="jb-m" coords="150,264,293,335,410,270,434,289,438,456,416,465,291,394,145,471,141,287" href="#" />

                              <area shape="poly" data-step="3" class="jb-m" coords="290,396,447,483,452,670,301,759,282,759,127,670,132,482" href="#" />

                            </map>

                        </div>

                        </div>

                        <div class="micro-labels micro-labels-right col-md-3">

                            <span class="micro-1" data-step="1"><span class="micro-lbl micro-lbl-1" data-step="1"><span class="_caption">Monolithic</span><span class="_subcaption">Single unit</span></span></span>                         

                            <span class="micro-3" data-step="3"><span class="micro-lbl micro-lbl-3" data-step="3"><span class="_caption">Microservices</span><span class="_subcaption">Fine-grained</span></span></span>

                        </div>

                        <img src="<?php echo bloginfo('template_url'); ?>/img/svg/java-mob-2.svg" alt="" class="img-java-mob-2 hide-pc" />

                    </div>

                    <div class="row">

                        <div class="col-md-8 col-md-offset-2">

                            <div class="mico-text">

                                <?php the_field('block_2_text') ?>

                            </div>

                        </div>

                    </div>

                    

                </div>

            </div>

            <div class="container-fluid content-top content-bg">

                <div class="container">

                    <div class="row">

                        <div class="page-entry col-md-9 col-md-offset-2">

                            <div class="h1 title-bracket"><?php the_field('title_custom_text') ?></div>

                            <div class="content">

                                <?php the_field('body_custom_text') ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="container block-list-property">

            <div class="row">

                <?php if($property = get_field('property')): foreach($property as $item): ?>

                <div class="col-md-4 item-prop">

                    <figure><img src="<?php echo $item['image']['url'] ?>" alt=""></figure>

                    <div class="h4"><?php echo $item['titlle'] ?></div>

                    <div class="b5"><?php echo $item['text'] ?></div>

                </div>

            <?php endforeach; endif; ?>

            </div>

            </div>

            <div class="block-clients full-height flexbox flex-wrap">

            <?php $clients = get_posts('post_type=client&numberposts=-1&orderby=menu_order&order=asc'); ?>

                <div class="slider-clients">

                    <?php foreach($clients as $client):

                    // $cl_meta = get_metadata('post', $client->ID, '',1); ?>

                    <!-- <pre><?php //print_r( get_field(  'baner',$client->ID )) ?></pre> -->

                    <div class="slide-item">

                        <div class="cl-logo">
                        <?php if(!get_field('hide_client_logo', $client->ID)): ?>
                            <?= get_post_meta( $client->ID, 'logo_svg', 1 ) ; ?>
                            <?php endif; ?>
                                
                            </div>

                        <div class="container flexbox flex-wrap">

                            <div class="text-center _slide-inner">

                                <div class="h1 _title"><?= get_post_meta( $client->ID, 'caption', 1 ); ?></div>

                                <div class="slde-bottom-wrap">

                                    <div class="_descr"><p><?= get_post_meta( $client->ID, 'baner_entry', 1 ); ?></p></div>

                                </div>

                            </div>

                        </div>

                        <?php if(get_field('show_case', $client->ID)): ?>
                        <div class="_more text-center"><a href="<?= get_permalink($client->ID); ?>" class="btn btn-warning btn-sm">LEARN MORE</a></div>
                        <?php endif; ?>
                        <?php $img = get_field(  'baner',$client->ID ); ?>
                        <div class="bg-slide" style="background-image: url('<?php echo $img['sizes']['img_big']  ?>"><div class="bg-mask"></div></div>

                    </div>

                    <?php endforeach; ?>

                </div>

                <div class="arrows-container"></div>

            </div>

            <div class="block-testimonials-home">

                <div class="container">

                <?php $reviews = get_posts('post_type=review&numberposts=-1'); ?>

                    <div class="h2 title-block text-center">Testimonials</div>

                    <div class="block-testimonials-container">

                        <div class="testimonials-slider dots-yellow">

                            <?php foreach($reviews as $review): ?>

                                <div class="item-testimnial">

                                    <div class="_photo text-center"><?php echo get_the_post_thumbnail($review->ID, 'img_278_278', array('class'=>'img-circle')); ?></div>

                                    <div class="_name"><?php echo $review->post_title ?></div>

                                    <div class="_post-human"><?php echo get_field('post', $review->ID) ?></div>

                                    <div class="_entry p1"><?php echo $review->post_excerpt ?></div>

                                    <div class="social-links">

                                    <?php if(get_field('b_link', $review->ID)): ?>

                                        <a href="<?= get_field('b_link', $review->ID) ?>" target="_blank"><i class="icon-soc ic-fb"><?php //include __DIR__ . "/img/svg/ic-fb.svg" ?></i></a>

                                    <?php endif; ?>

                                    <?php if(get_field('in_link', $review->ID)): ?>

                                        <a href="<?= get_field('in_link', $review->ID) ?>" target="_blank"><i class="icon-soc ic-in"><?php //include __DIR__ . "/img/svg/ic-in.svg" ?></i></a>

                                    <?php endif; ?>

                                    <?php if(get_field('twiter_link', $review->ID)): ?>

                                        <a href="<?= get_field('twiter_link', $review->ID) ?>" target="_blank"><i class="icon-soc ic-twit"><?php //include __DIR__ . "/img/svg/ic-twit.svg" ?></i></a>

                                    <?php endif; ?>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

            </div> <!-- .block-testimonials-home -->

        <?php get_template_part( 'parts/bottom-block' ); ?>

            <?php endwhile; ?>

                <?php $insights = get_posts('cat=1') ?>

                <div class="block-insights-home">

                    <div class="container">

                        <div class="h1 title-block text-center">Latest Insights</div>

                        <div class="insights-container container">

                            <div class="slider-insights dots-yellow">

                            <?php foreach($insights as $insight): ?>

                                <div class="_item-post">

                                    <div class="_inner">

                                        <figure><a href="<?php echo get_permalink($insight->ID); ?>"><?php echo get_the_post_thumbnail($insight->ID,  array(376, 215), array('class'=>'img-border img-thumbnail')); ?></a></figure>

                                        <div class="_title h5"><a href="<?php echo get_permalink($insight->ID); ?>"><?php echo $insight->post_title; ?></a></div>

                                        <div class="_date"><?php echo get_the_date('M.d.Y', $insight->ID) ?></div>

                                        <div class="_entry"><?php echo get_the_excerpt($insight->ID); ?></div>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                            </div>

                        </div>

                    </div>

                </div> <!-- .block-insights-Java -->

            </div>

        </div> <!-- #middle -->

    </div>

    <?php get_footer(); ?>

</body>

</html>



