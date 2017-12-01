<?php

/**

* Template name: About page

*/

$team = get_posts(array(

    'post_type'=> 'team',

    'orderby' => 'menu_order',

    'order' => 'asc',

    'meta_key' => 'in_about',

    'meta_value' => 1,

    'numberposts' => -1,

    ));

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

            <div class="container container-values">

                <div class="h1 text-center title-block">Values</div>

                <div class="medias row block-values">

                    <div class="col-md-8 col-md-offset-2">

                    <?php foreach(get_field('values') as $item): ?>

                        <div class="media item-values"> 

                            <div class="media-left media-top">

                                <img alt="" class="media-object values-media" src="<?php echo $item['val_icon'] ?>" data-holder-rendered="true">

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading"><?php echo $item['val_title'] ?></h4>

                                <div class="b5"><?php echo $item['val_text'] ?></div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                    </div>

                </div>

            </div>

            <!-- ------------ -->



            <!-- ------------ -->

            <div class="team-wrapper">

                <div class="h1 title-block hide-pc">Team</div>

                <div class="team-block">

                    <div class="team-nav-wrap" data-uk-sticky="{boundary:true, getWidthFrom: '.team-nav-slider'}">

                        <div class="team-nav-inner">

                            <div class="h4">Team</div>

                            <div class="team-nav-slider menu-scroll" id="scrolling-menu">

                                <?php foreach($team as $k => $item): ?>

                                    <div class="nav-team-item ">

                                        <a href="#team-<?= $k ?>">

                                        <span><?php echo $item->post_title; ?></span>

                                        <span><?php echo get_field('team_post', $item->ID) ?></span>

                                        </a>

                                    </div>

                                <?php endforeach; ?>

                            </div>

                        </div>

                        

                    </div> <!-- .team-nav-wrap -->

                    <div class="team-list">

                        <div class="team-slider-full">

                            <?php foreach($team as $k => $item):
                                $img = get_field('baner_image', $item->ID);
                                // print_r($img);
                             ?>

                            <div id="team-<?= $k ?>" class="row-team flexbox full-height item-team-<?php echo $k ?>" style="background-image: url(<?php echo $img['sizes']['img_big'] ?>);">

                                <div class="heading-line" data-target="#team-<?= $k ?>">

                                    <div class="_name"><?php echo $item->post_title; ?></div>

                                    <div class="_team-post"><?php echo get_field('team_post', $item->ID) ?></div>

                                    <span class="_caret"></span>

                                </div>

                                <div class="container">

                                    <div class="row">

                                        <div class="col-md-7 _item-team">

                                            <div class="club-inner">

                                                <div class="_name h1"><?php echo $item->post_title; ?></div>

                                                <div class="_team-post text-warning"><?php echo get_field('team_post', $item->ID) ?></div>

                                                <div class="_descr b6"><?php echo $item->post_content; ?></div>

                                                <div class="social-buttons">

                                                    <?php if(get_field('fb_link', $item->ID)): ?>

                                                        <a href="<?= get_field('fb_link', $item->ID) ?>" target="_blank"><?php include __DIR__ . "/img/svg/ic-fb.svg" ?>

                                                        <i class="icon-soc ic-fb"></i>

                                                        </a>

                                                    <?php endif; ?>

                                                    <?php if(get_field('in_link', $item->ID)): ?>

                                                        <a href="<?= get_field('in_link', $item->ID) ?>" target="_blank"><?php include __DIR__ . "/img/svg/ic-in.svg" ?>

                                                        <i class="icon-soc ic-in"></i>

                                                        </a>

                                                    <?php endif; ?>

                                                    <?php if(get_field('tw_link', $item->ID)): ?>

                                                        <a href="<?= get_field('tw_link', $item->ID) ?>" target="_blank"><?php include __DIR__ . "/img/svg/ic-twit.svg" ?>

                                                        <i class="icon-soc ic-twit"></i>

                                                        </a>

                                                    <?php endif; ?>

                                                </div> <!-- .social-buttons -->

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <?php endforeach; ?>

                        </div>                        

                    </div>

                </div> <!-- .team-block -->

            </div> <!-- .team-wrapper -->

            <div class="partnership-wrap">

                <div class="partnership-block">

                    <div class="h2 title-block text-center">Partnership</div>

                    <div class="container partnership-container">

                        <div class="row flexbox flex-wrap">

                        <?php if($partnerships = get_field('items')): foreach($partnerships as $item): ?>

                            <div class="ps-item col-md-3">

                                <div class="_inner">

                                    <figure class="flexbox"><img src="<?php echo $item['logo'] ?>" alt=""></figure>

                                    <div class="_text"><?php echo $item['description'] ?></div>

                                    <div class="_link-more"><a href="<?php echo $item['link'] ?>" target="_blank">> More Details</a></div>

                                </div>

                            </div>

                        <?php endforeach; endif; ?>

                        </div>

                    </div>

                </div>

            </div>

            <?php endwhile; ?>

        </div> <!-- #middle -->

        <?php get_template_part( 'parts/insights-block' ); ?>

    </div>

    <?php get_footer(); ?>

</body>

</html>



