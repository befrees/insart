<?php
/**
* Template name: Landing 1 page
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <!-- For mobile web app on home screen -->
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="mobile-web-app-capable" content="yes">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css" />    
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min-1.9.1.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="<?=  get_template_directory_uri() ?>/js/jquery.fullPage.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollbar.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/uikit.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/sticky.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/circle-progress.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.formstyler.min.js"></script>
<?php wp_head()?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/nav.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
   
</head>
<body <?php body_class() ?>>
    <div class="wrapper page-clients">
        <header id="site-header" class="header header-image full-height header-full header-landing header-color">
            <div class="top-line flexbox just-between" id="bs-navbar-collapse-1" data-uk-sticky="{top:-5,  animation: 'uk-animation-slide-top'}">
                <div class="logo logo-landing">
                    <a href="<?php echo home_url(); ?>" class="logo-link">Insart</a>
                </div>
                <div class="top-line-right flexbox">
                    <div class="contacts-top"><?php if(!dynamic_sidebar('sidebar-2')) echo '<!-- sidebar-2 -->' ?></div>
                    <div class="menu-btn-wrap">
                        <button class="btn-open-menu">
                            <i class="nav-btn"></i>
                            <i class="nav-btn"></i>
                            <i class="nav-btn"></i>
                        </button>
                    </div>
                    <div class="super-menu">
                        <div class="super-menu-container">
                            <div class="super-menu-inner scrollbar-inner has_scrollbar scroll-content scroll-scrolly_visible" >
                                <ul id="menu-top-menu" class="menu mainnav">
                                    <li data-menuanchor="#about"><a href="#about" data-scroll>About us</a></li>
                                    <li data-menuanchor="#expertise"><a href="#expertise" data-scroll>Expertise</a></li>
                                    <li data-menuanchor="#clients"><a href="#clients" data-scroll>Clients</a></li>
                                    <li data-menuanchor="#club"><a href="#club" data-scroll>Wealthtech club</a></li>
                                    <li data-menuanchor="#contacts"><a href="#contacts" data-scroll>Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                            
                        </div>
                </div>
            </div>
            <div class="header-content flexbox flex-wrap text-center">
                <div class="header-caption h72"><?php echo get_the_title($post->ID) ?></div>
                <div class="h3">
                    <p><?php echo get_field('header_text', $post->ID) ?></p>
                </div>
               
            </div>
             <div class="scroll-menu" data-uk-sticky>
                <div class="scroll-menu-block" id="vavscroll">
                    <ul id="menu" class="mainnav">
                        <li data-menuanchor="#about"><a href="#about" data-scroll>ABOUT US</a></li>
                        <li data-menuanchor="#expertise"><a href="#expertise" data-scroll>EXPERTISE</a></li>
                        <li data-menuanchor="#clients"><a href="#clients" data-scroll>CLIENTS</a></li>
                        <li data-menuanchor="#club"><a href="#club" data-scroll>WEALTHTECH CLUB</a></li>
                        <li data-menuanchor="#contacts"><a href="#contacts" data-scroll>CONTACTS</a></li>
                    </ul>
                </div>
            </div> <!-- .scroll-menu -->
            <div class="header-bg" style="background-image: url(<?=  get_template_directory_uri() . '/img/landing-header.jpg'; ?>)"></div>
            <button class="go-down"><i class="ic-down"></i></button>
        </header>
        <div class="middle nopadding-top" id="middle">
            <?php while(have_posts()): the_post(); ?>
            <div class="section fp-auto-height container-fluid content-top box-about content-bg box-land box-about" data-anchor="box-about" data-section="#about" id="about">
                <div class="container ">
                    <div class="row text-center">
                        <div class="h1 title-landing bot-line title-box"><span><?php echo get_field('title_custom_text') ?></span></div>
                        <div class="content-box"><?php echo get_field('body_custom_text') ?></div>
                    </div>
                </div>
            </div>
            
            <div class="box-expertise section fp-auto-height" data-section="#expertise" id="expertise" data-anchor="box-expertise">
                <div class="container container_expertise">
                    <div class="h1 title-box text-center mid-line"><span><span class="hide-mobile">WealthTech & Robo-Advising Expertise</span><span class="hide-pc">WealthTech & Robo</span></span></div>
                    <div class="box-exp-text text-center"><p><?php echo get_field('text_exp') ?></p></div>
                    <div class="box-exp-content row flexbox flex-wrap">
                        <?php if($expertise = get_field('expertise_items')): foreach($expertise as $item):  ?>
                        <div class="item_exp col-md-4">
                            <div class="_inner">
                                <figure><img src="<?php echo $item['image'] ?>" alt=""></figure>
                                <div class="_ttl"><?php echo $item['title'] ?></div>
                                <div class="_txt"><?php echo $item['text'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
            <div class="container-fluid content-top content-bg box-clients section" data-section="#clients" id="clients" data-anchor="box-clients">
                <div class="container">
                    <div class="h1 title-box text-center mid-line"><span>Clients</span></div>
                    <div class="subttl-clients text-center"><?php echo get_field('clients_text'); ?></div>
                    <div class="row flexbox flex-wrap">
                        <?php if($clients = get_field('clients_items')): foreach($clients as $item):  ?>
                        <div class="item_client col-md-4">
                            <div class="_inner">
                                <div class="_ttl"><span class="slash">/</span><?php echo $item['name'] ?></div>
                                <div class="_txt"><?php echo $item['clients_text'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
            <div class="box-club section" id="box-club" data-anchor="club" data-section="#club">
                <div class="container container_club">
                    <div class="h1 title-box text-center mid-line"><span>WealthTech Club</span></div>
                    <div class="box-club-text text-center"><p><?php echo get_field('club_text') ?></p></div>
                    <div class="box-club-content row">
                    <div class="club_slider dots-yellow">
                        <?php if($items_club = get_field('items_club')): foreach($items_club as $item):  ?>
                            <!-- <pre><?php //print_r($item['image']) ?></pre> -->
                            <div class="item_club">
                                <div class="_inner">
                                    <div class="_ttl">
                                        <span class="slash">/</span>
                                        <a href="<?php echo $item['link_title'] ?>" target="_blank"><?php echo $item['title'] ?></a>
                                    </div>
                                    <div class="_caption"></span><?php echo $item['caption'] ?></div>
                                    <figure><a href="<?php echo $item['link'] ?>" target="_blank"><img src="<?php echo $item['image']['url'] ?>" alt=""></a></figure>
                                    <div class="_txt"><?php echo $item['text'] ?></div>
                                    <p class="_more"><a href="<?php echo $item['link'] ?>" target="_blank">> Read More</a></p>
                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                    </div>
                        
                    </div>
                </div>
            </div>
            <div id="box-contacts" class="box-contacts section" data-anchor="contacts" data-section="#contacts">
                <div class="contacts-full-height">
                    <div class="container contacts_container text-center">
                        <div class="title-box"><span>Contact US</span></div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="subttl">We are software experts who speak Financial Language. <br>Let's discuss how we can be of service to you.</div>
                                <div class="_form">
                                    <?php echo do_shortcode('[contact-form-7 id="368" title="Untitled"]') ?>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row_bottom_cnt">
                            <div class="col-md-4 col-md-offset-4 col_bottom_cnt">
                                <div class="col-md-6 text-center"><div class="contact_bottom contact_bottom_1"><?php echo get_field('contact_bottom_1') ?></div></div>
                                <div class="col-md-6 text-center"><div class="contact_bottom contact_bottom_2"><?php echo get_field('contact_bottom_2') ?></div></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
           
        </div> <!-- #middle -->
    </div>
    <?php get_footer(); ?>
    
</body>
</html>

