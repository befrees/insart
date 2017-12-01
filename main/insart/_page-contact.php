<?php
/**
* Template name: Contact page
*/
$events = get_posts('cat=3&numberposts=-1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php get_header('head') ?>
</head>
<body>
    <div class="wrapper page-clients">
        <header id="site-header" class="header  header-image full-height header-full header-contact header-color">
            <?php get_template_part( 'parts/top-line' ); ?>
            <div class="header-content flexbox flex-wrap text-center">
                <div class="header-caption h72"><?php echo get_field('header_caption', $post->ID) ?></div>
                <div class="h3">
                    <p><?php echo get_field('header_sub_caption', $post->ID) ?></p>
                </div>
                <div class="btn-wrap"><button class="btn btn-warning btn-lg"  data-toggle="modal" data-target="#modal-call">SCHEDULE A CALL</button></div>
                <div class="header-subcaption">
                    <?php echo get_field('header_contacts', $post->ID) ?>
                    <p class="op-60">We can't wait to hear from you!</p>
                </div>
            </div>
            <div class="header-bg" style="background-image: url(<?= (has_post_thumbnail($post->ID)) ? get_the_post_thumbnail_url($post->ID, 'img_big') : get_template_directory_uri() . '/img/bg-bottom.jpg'; ?>)"></div>
            <button class="go-down"><i class="ic-down"></i></button>
        </header>
        <div class="middle nopadding-top" id="middle">
            <div class="container-fluid content-top content-bg contacts-content">
                <div class="container">
                    <?php while(have_posts()): the_post(); ?>
                    <div class="row">
                            <div class="h1 text-center">Our ​Offices</div>
                        <div class="page-entry col-md-9 col-md-offset-2">
                            <div class="content contacts-text"><?php the_content() ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container events-container">
                <div class="h1 text-center">Events Where You Can Find Us</div>
                <div class="row events-list">
                    <div class="events-slider dots-yellow">
                    <?php foreach($events as $item): ?>
                        <div class="_item-event">
                            <div class="event-inner">
                                <figure><?php echo get_the_post_thumbnail($item->ID, 'img_276_176'); ?></figure>
                                <div class="_name h4"><?php echo $item->post_title; ?></div>
                                <div class="_date"><?= get_field('date', $item->ID) ?><?php //echo get_the_date('M.d.Y', $item->ID) ?></div>
                                <div class="_descr"><?php echo get_the_excerpt($item->ID); ?></div>
                                <div class="_more"><a href="<?= get_field('link', $item->ID) ?>" class="more-link" target="_blank">> More Details</a></div>
                                <div class="social-buttons">
                                 <?php if(get_field('fb_link', $item->ID)): ?>
                                    <a href="<?= get_field('fb_link', $item->ID) ?>" target="_blank"><?php include get_template_directory()."/img/svg/ic-fb.svg" ?>
                                    <!-- <i class="icon-soc ic-fb"></i> -->
                                    </a>
                                <?php endif; ?>
                                <?php if(get_field('in_link', $item->ID)): ?>
                                    <a href="<?= get_field('in_link', $item->ID) ?>" target="_blank"><?php include get_template_directory() . "/img/svg/ic-in.svg" ?>
                                    <!-- <i class="icon-soc ic-in"></i> -->
                                    </a>
                                <?php endif; ?>
                                <?php if(get_field('tw_link', $item->ID)): ?>
                                    <a href="<?= get_field('tw_link', $item->ID) ?>" target="_blank"><?php include get_template_directory() . "/img/svg/ic-twit.svg" ?>
                                    <!-- <i class="icon-soc ic-twit"></i> -->
                                    </a>
                                <?php endif; ?>
                            </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            </div>
        </div> <!-- #middle -->
    </div>
    <?php get_footer(); ?>
</body>
</html>

