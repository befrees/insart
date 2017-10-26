<?php
/**
* Template name: Careers page
*/
$team = get_posts(array(
    'post_type'=> 'team',
    'orderby' => 'menu_order',
    'order' => 'asc',
    'meta_key' => 'recruiters',
    'meta_value' => 1,
    'numberposts' => -1,
    ));

$hirings = get_posts('post_type=vacancy&orderby=menu_order&order=asc&numberposts=-1');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php get_header('head') ?>
</head>
<body>
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
            <div class="container gallery-container">
            <!-- <pre><?php //print_r(get_field('gallery')) ?></pre> -->
                <div class="row gallery-list flexbox flex-wrap">
                    <?php foreach(get_field('gallery') as $item): ?>
                        <div class="_item-gall">
                        <img src="<?php echo $item['photo']['url'] ?>" alt="<?php echo $item['photo']['alt'] ?>">
                            <div class="gall-caption">
                                <div class="_title h5"><?php echo $item['photo']['title']; ?></div>
                                <div class="_descr b6"><?php echo $item['photo']['description']; ?></div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="buttons-more text-center"><button class="btn btn-warning btn-gall-more">SHOW MORE</button></div>
            </div>
            <!-- We are hiring -->
            
            <div class="container-fluid full-height flexbox hiring-container">
                <div class="hiring-block">
                    <div class="title-block text-center h1">We are hiring</div>
                    <div class="hiring-list">
                        <ul>
                        <?php foreach($hirings as $item): ?>
                            <li><a href="#vacancy-<?= $item->ID ?>" class="open-vacancy">> <?= $item->post_title ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="btn-wrap text-center"><button type="button" class="btn btn-warning btn-open-form-vac">MAIL US</button></div>
                </div>
                <div class="vacancy-items-popup popup">
                    <div class="close-btn"><?php include(get_template_directory(). '/img/svg/close-btn.svg') ?></div>
                    <div class="vacancy-inner scrollbar-inner">
                        <?php foreach($hirings as $item): ?>
                            <div id="vacancy-<?= $item->ID ?>" class="vacancy-item container">
                            <div class="h72 vacancy-title"><?= $item->post_title ?></div>
                             <div class="vacancy-content"><?php echo apply_filters( 'the_content', $item->post_content); ?></div>
                             <div class="vacancy-button-row"><button class="btn btn-warning btn-open-form-vac" data-vacancy="<?= $item->post_title ?>">MAIL US</button></div>
                             <div class="text-center p1 vacancy-button-text">We can't wait to hear from you!</div>
                            </div>
                        <?php endforeach; ?>
                    </div>                    
                </div>
                <div class="vacancy-form-popup popup">
                    <div class="close-btn"><?php include(get_template_directory() . '/img/svg/close-btn.svg') ?></div>
                    <div class="form-vacancy-content">
                        <?php echo do_shortcode( '[contact-form-7 id="203" title="Untitled"]' ); ?>
                    </div>
                </div>
                
            </div>
            <div class="bottom-text-container container">
                <div class="h1 title-block text-center"><?php echo get_field('title_custom_text') ?></div>
                <div class="row">
                    <div class="_content p2 col-md-10 col-md-offset-1"><?php echo get_field('body_custom_text') ?></div>
                </div>
            </div>
            <div class="hrd-container container">

                <div class="title-block h1 text-center">Get in Touch with our HR Department & Recruiters</div>
                <div class="hdr-content">
                <div class="row">
                <?php foreach($team as $item): ?>
                    <div class="col-md-3">
                    <div class="hdr-item">
                        <figure class="hdr-photo"><?php echo get_the_post_thumbnail($item->ID, 'full', array('class'=>'img-circle')); ?></figure>
                        <div class="hdr-name h4"><?php echo $item->post_title; ?></div>
                        <div class="hdr-post"><?php echo get_field('team_post', $item->ID) ?></div>
                        <div class="hdr-descr"><?php echo get_the_excerpt($item->ID); ?></div>
                        <div class="hdr-contacts text-warning">
                        <?php if(get_field('phone', $item->ID)): ?>
                            <div class="_hdr-contact">P: <?php echo get_field('phone', $item->ID) ?></div>
                        <?php endif; ?>
                        <?php if(get_field('email', $item->ID)): ?>
                            <div class="_hdr-contact">M: <?php echo get_field('email', $item->ID) ?></div>
                        <?php endif; ?>
                        <?php if(get_field('skype', $item->ID)): ?>
                            <div class="_hdr-contact">S: <?php echo get_field('skype', $item->ID) ?></div>
                        <?php endif; ?>
                        </div>
                        <div class="hdr-social-links social-buttons">
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
                <?php endforeach; ?>
                </div>
                </div>
            </div>
            <?php endwhile; ?>
            </div>
        </div> <!-- #middle -->
    </div>
    <script>
        var hirings = [];
        <?php foreach($hirings as $item): ?>
        hirings.push('<?= $item->post_title ?>');
        <?php endforeach; ?>
    </script>
    <?php get_footer(); ?>
</body>
</html>

