<?php

/**

* Template name: FinTech Engineering

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

            <div class="container">

                <div class="block-expertize text-center">

                    <div class="h1 title-block">FinTech Engineering Expertise</div>

                    <div class="row expertize-content">

                    <?php if($exp = get_field('items_exp')): foreach($exp as $item): ?>

                        <div class="exp-item col-md-3">

                            <div class="_inner">

                                <figure><img src="<?php echo $item['image']['url']; ?>" alt=""></figure>

                                <div class="_text h5"><?php echo $item['caption']; ?></div>

                            </div>

                        </div>

                    <?php endforeach; endif; ?>

                    </div>

                </div>

                <div class="block-concept">

                    <div class="h1 title-block text-center">FinTech Engineering Concept</div>

                    <div class="concept-container">

                    <?php $concepts = get_field('fintech_concept', $post->ID) ?>

                        <div class="row">

                            <div class="col-md-3 col-cc col-cc-1" data-cc="1-2">

                                <div class="_ttl"><?php echo $concepts[0]['title'] ?></div>

                                <div class="_txt"><?php echo $concepts[0]['text'] ?></div>

                            </div>

                            <div class="col-md-3 col-cc col-cc-2" data-cc="1-2">

                                <div class="_ttl"><?php echo $concepts[1]['title'] ?></div>

                                <div class="_txt"><?php echo $concepts[1]['text'] ?></div>

                            </div>

                            <div class="col-md-3"></div>

                            <div class="col-md-3 col-cc col-cc-3" data-cc="5">

                                <div class="_ttl"><?php echo $concepts[2]['title'] ?></div>

                                <div class="_txt"><?php echo $concepts[2]['text'] ?></div>

                            </div>

                        </div>

                        <div class="cc-svg" data-show="0">

                        <?php //include get_template_directory() . "/img/svg/fec-layer.svg" ?>

                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/ftec-0.svg" class="img-ftec ftec-0" alt="" usemap="#Map-ftec" border="0" />

                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/ftec-1-2.svg" class="img-ftec ftec-1-2" alt="" usemap="#Map-ftec" border="0" />

                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/ftec-3.svg" class="img-ftec ftec-3" alt="" usemap="#Map-ftec" border="0" />

                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/ftec-4.svg" class="img-ftec ftec-4" alt="" usemap="#Map-ftec" border="0" />

                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/ftec-5.svg" class="img-ftec ftec-5" alt="" usemap="#Map-ftec" border="0" />

                            <map name="Map-ftec" id="Map-ftec">

                              <area shape="poly" class="cc-area" data-cc="1-2" coords="135,19,444,17,443,54,327,129,307,142,307,161,322,170,138,284,4,206,4,96" href="#" />

                              <area shape="poly" class="cc-area" data-cc="3" coords="440,64,585,145,580,159,453,296,441,296,323,168,311,159,309,143" href="#" />

                              <area shape="poly" class="cc-area" data-cc="4" coords="614,145,751,62,889,148,888,162,753,235,614,157" href="#" />

                              <area shape="poly" class="cc-area" data-cc="5" coords="920,143,1059,66,1191,140,1189,165,1049,237,919,159" href="#" />

                        </div>

                        <div class="row">

                            <div class="col-md-3"></div>

                            <div class="col-md-3 col-cc col-cc-4" data-cc="3">

                                <div class="_ttl"><?php echo $concepts[3]['title'] ?></div>

                                <div class="_txt"><?php echo $concepts[3]['text'] ?></div>

                            </div>

                            <div class="col-md-3 col-cc col-cc-5" data-cc="4">

                                <div class="_ttl"><?php echo $concepts[4]['title'] ?></div>

                                <div class="_txt"><?php echo $concepts[4]['text'] ?></div>

                            </div>

                            <div class="col-md-3"></div>

                        </div>

                    </div>

                </div>

                <div class="block-benefis text-center">

                    <div class="h1 title-block">FinTech Engineering Benefits</div>

                    <div class="row benefis-list">

                    <?php /*if($items = get_field('items')): foreach($items as $item): ?>

                        <div class="col-md-4 benefis-item">

                            <div class="_inner">

                                <figure><img src="<?php echo $item['image']['url']; ?>" alt=""></figure>

                                <div class="_caption h2"><?php echo $item['caption']; ?></div>

                            </div>

                        </div>

                        <?php endforeach; endif;*/ ?>

                        <div class="col-md-4 benefis-item benefis-item-1" data-proc="20">

                            <div class="_inner">

                                <figure><div class="circle"></div><span class="proc-wrap"><span class="proc-val proc-val-1">20</span><span class="proc-lbl">%</span></span></figure>

                                <div class="_caption h2">Reduction in<br>

Iterations</div>

                            </div>

                        </div>

                            <div class="col-md-4 benefis-item benefis-item-2"  data-proc="90">

                            <div class="_inner">

                                <figure><div class="circle"></div><span class="proc-wrap"><span class="proc-val proc-val-2">90</span><span class="proc-lbl">%</span></span></figure>                                <div class="_caption h2">Reduction in<br>

Rework Time</div>

                            </div>

                        </div>

                            <div class="col-md-4 benefis-item benefis-item-3" data-proc="30">

                            <div class="_inner">

                                <figure><div class="circle"></div><span class="proc-wrap"><span class="proc-val proc-val-3">30</span><span class="proc-lbl">%</span></span></figure>

                                <div class="_caption h2">Reduction in<br>

Communication Time </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="block-clients full-height flexbox flex-wrap">

            <?php $clients = get_posts('post_type=client&numberposts=-1&orderby=menu_order&order=asc'); ?>

                <div class="slider-clients">

                    <?php foreach($clients as $client):

                    // $cl_meta = get_metadata('post', $client->ID, '',1); ?>

                    <!-- <pre><?php //print_r( get_field(  'baner',$client->ID )) ?></pre> -->

                    <div class="slide-item">

                        <div class="cl-logo"><?= get_post_meta( $client->ID, 'logo_svg', 1 ) ; ?></div>

                        <div class="container flexbox flex-wrap">

                            <div class="text-center _slide-inner">

                                <div class="h1 _title"><?= get_post_meta( $client->ID, 'caption', 1 ); ?></div>

                                <div class="slde-bottom-wrap">

                                    <div class="_descr"><p><?= get_post_meta( $client->ID, 'baner_entry', 1 ); ?></p></div>

                                </div>

                            </div>

                        </div>

                        <div class="_more text-center"><a href="<?= get_permalink($client->ID); ?>" class="btn btn-warning btn-sm">LEARN MORE</a></div>

                        <?php $img = get_field(  'baner',$client->ID ); ?>
                        <div class="bg-slide" style="background-image: url('<?php echo $img['sizes']['img_big']  ?>"><div class="bg-mask"></div></div>

                    </div>

                    <?php endforeach; ?>

                </div>

                <div class="arrows-container"></div>

            </div>

            <div class="block-testimonials-home">

                <div class="container">

                <?php $reviews = get_posts('post_type=review'); ?>

                    <div class="h2 title-block text-center">FinTech Clients Testimonials</div>

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

                        <div class="h1 title-block text-center">What's New in FinTech</div>

                        <div class="insights-container container">

                            <div class="slider-insights dots-yellow">

                            <?php foreach($insights as $insight): ?>

                                <div class="_item-post">

                                    <div class="_inner">

                                        <figure><a href="<?php echo get_permalink($insight->ID); ?>"><?php echo get_the_post_thumbnail($insight->ID, array(376, 215), array('class'=>'img-border img-thumbnail')); ?></a></figure>

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



