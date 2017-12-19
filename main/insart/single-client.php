<!DOCTYPE html>

<html lang="en">

<head>

    <?php get_header('head') ?>

</head>

<body <?php body_class() ?>>

    <div class="wrapper single-client">

        <header id="site-header" class="header header-image full-height header-full case-header header-inner header-nocolor">

            <?php get_template_part( 'parts/top-line' ); ?>

            <div class="header-content flexbox flex-wrap text-center container">

            <div class="single-client-logo"><?php echo get_field('logo_svg', $post->ID) ?></div>

                <!-- <div class="header-caption h72">To be everywhere is to be nowhere.</div> -->

                <div class="h5 text-warning container"><?php echo get_field('header_caption', $post->ID) ?></div>

                <div class="header-text b1">

                    <div class="container"><?php echo get_field('header_text', $post->ID) ?></div>

                </div>

            </div>

            <?php $baner_img = get_field('baner', $post->ID); ?>
            <div class="header-bg" style="background-image: url(<?= $baner_img['url'] ?>)"></div>

            <button class="go-down"><i class="ic-down"></i></button>

        </header>
        <div class="middle" id="middle">

            <div class="container-case">

                <?php while(have_posts()): the_post(); ?>

                <div class="">

                    <div class="container block-case">

                        <div class="h1 text-center title-page"><?= get_field('title_caption'); ?></div>

                        <div class="case-description h4 text-center"><?= get_field('sub_caption'); ?></div>                        

                    </div>

                    <div class="reviews-block">

                        <div class="block-testimonials-home">

                            <div class="container">

                            <div class="row">

                                <div class="col-md-10 col-md-offset-1">

                                    <?php $reviews = get_posts('post_type=review&meta_key=client&meta_value='.$post->ID); ?>

                                <div class="block-testimonials-container">

                                    <div class="row testimonials-slider dots-yellow">

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

                            </div>

                            

                            </div>

                        </div> <!-- .block-testimonials-home -->

                    </div>

                    <div class="content">

                        <div class="container">

                            <div class="row">
                            <?php if(get_field('the_challenge')): ?>
                                <div class="block-case col-md-8 col-md-offset-2">

                                    <div class="title-block-case h1"><?= get_field('the_challenge_title') ? get_field('the_challenge_title') : 'The Challenge' ?></div>

                                    <div class="content-block-case"><?php echo get_field('the_challenge') ?></div>

                                </div>
                            <?php endif; ?>
                            </div>

                        </div>

                        <div class="container">

                            <div class="row">                        
                                <?php if(get_field('the_solution')): ?>
                                <div class="block-case col-md-8 col-md-offset-2">

                                    <div class="title-block-case h1"><?= get_field('the_solution_title') ? get_field('the_solution_title') : 'The Solution' ?></div>

                                    <div class="content-block-case case-solutione"><?php echo get_field('the_solution') ?></div>

                                </div>
                                <?php endif; ?>
                            </div>

                        </div>

                        <div class="container">

                            <div class="row">
                                <?php if(get_field('the_architecture_overview')): ?>
                                <div class="block-case col-md-8 col-md-offset-2">

                                    <div class="title-block-case h1"><?= get_field('the_architecture_overview_title') ? get_field('the_architecture_overview_title') : 'The Architecture Overview' ?></div>

                                    <div class="content-block-case"><?php echo get_field('the_architecture_overview') ?></div>

                                </div>
                                <?php endif; ?>
                            </div>

                        </div>
                        <?php if($slides = get_field('product_ui')): ?>
                        <div class="block-case case-gallery">   

                                <div class="container">

                                    <div class="row">

                                        <div class="title-block-case h1 col-md-8 col-md-offset-2">Product UI</div>

                                    </div>

                                </div>                 

                            <div class="content-block-case">

                                <div class="container container-case" id="slides-case">

                                    <div class="row">

                                        <div class="col-md-8 col-md-offset-2">

                                            <div class="case-slider">

                                                <?php  foreach($slides as $item): ?>

                                                    <div class="slide-case"><img src="<?= $item['image']['url'] ?>" alt=""></div>

                                                <?php endforeach; ?>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <?php endif; ?>
                        <div class="container-fluid block-summary content-top content-bg">

                            <div class="container">

                                <div class="row">

                                    <div class="page-entry col-md-9 col-md-offset-2">

                                        <div class="h1 title-bracket"><?= get_field('summary_title') ? get_field('summary_title') : 'Summary' ?></div>

                                        <div class="content"><?= get_field('summary') ?></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <?php get_template_part( 'parts/bottom-block' ); ?>

                    </div> <!-- .content -->

                </div>

            <?php endwhile; ?>

            </div>

        </div> <!-- #middle -->

    </div>

    <?php get_footer(); ?>

</body>

</html>



