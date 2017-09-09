<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 */

?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php /* ?>WealthTech Club <?php */ ?>
    <?php if (is_category()) {single_term_title();} else { 
     wp_title('|', true, 'right'); ?>
     <?php bloginfo('name');
     } ?>
      <?php if (get_query_var('paged')) {
        echo ', page ' . get_query_var('paged');
        } ?>
        </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,  maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="format-detection" content="telephone=no"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href='<?php bloginfo('template_url'); ?>/build/css/main.css?v=<?= time() ?>' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/build/images/apple-touch-icon.png">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/build/images/android-chrome-192x192.png">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/build/images/android-chrome-512x512.png">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/build/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/build/images/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/build/images/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/build/images/favicon.ico" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head() ?>
  </head>
  <body <?php body_class(); ?>>
  <div style="display: none;">
     <svg xmlns="http://www.w3.org/2000/svg">
       <symbol id="icon-fc" viewBox="0 0 7 14"><title>fc</title><path d="M5.9 7.1H4.1v6.5H1.5V7.1H.2V4.8h1.3V3.3C1.5 2.2 2 .6 4.2.6h2v2.2H4.7c-.2 0-.6.1-.6.6v1.4h2l-.2 2.3z" fill="#9E9E9E" fill-rule="evenodd"/></symbol>
       <symbol id="icon-ln" viewBox="0 0 14 12"><title>ln</title><g fill="#9E9E9E" fill-rule="evenodd"><path d="M10.2 3.6c-1.5 0-2.1.8-2.5 1.3V3.8H5v7.9h2.7V7.3c0-.2 0-.5.1-.6.2-.5.6-1 1.4-1 1 0 1.4.7 1.4 1.8v4.2h2.7V7.2c0-2.4-1.3-3.6-3.1-3.6zM7.7 5s0-.1 0 0zM.7 3.8h2.7v7.9H.7zM2.1 0C1.2 0 .5.6.5 1.4c0 .8.6 1.4 1.5 1.4 1 0 1.6-.6 1.6-1.4C3.6.6 3 0 2.1 0z"/></g></symbol>
       <symbol id="icon-tw" viewBox="0 0 14 12"><title>tw</title><path d="M12.2 3.4v.3c0 3.5-2.6 7.6-7.5 7.6-1.5 0-2.9-.4-4-1.2h.6c1.2 0 2.4-.4 3.3-1.1-1.1 0-2.1-.8-2.4-1.9h.5c.2 0 .5 0 .7-.1-1.2-.1-2.1-1.2-2.1-2.5.3.2.7.3 1.2.3-.7-.5-1.2-1.3-1.2-2.2 0-.5.1-.9.4-1.3C2.9 2.9 4.9 3.9 7.1 4 7 3.8 7 3.6 7 3.4 7 2 8.2.8 9.6.8c.8 0 1.4.3 1.9.8.6-.1 1.2-.3 1.7-.6-.2.6-.6 1.1-1.2 1.4.5-.1 1-.2 1.5-.4-.3.5-.7 1-1.3 1.4z" fill="#9E9E9E" fill-rule="evenodd"/></symbol>
       <symbol id="icon-arrow-down" viewBox="0 0 100 125"><path d="M50 67c-1.1 0-2.1-.4-2.9-1.2l-25-26c-1.5-1.6-1.5-4.1.1-5.7 1.6-1.5 4.1-1.5 5.7.1l22.1 23 22.1-23c1.5-1.6 4.1-1.6 5.7-.1s1.6 4.1.1 5.7l-25 26c-.8.8-1.8 1.2-2.9 1.2z"/></symbol>
       <symbol id="icon-down-ar" viewBox="0 0 18 10"><style>.st0{fill:none;stroke:#ff671b;stroke-linecap:round;stroke-miterlimit:10}</style><g id="Icon_5_"><path class="st0" d="M1 1l8 8M17 1L9 9"/></g>
       </symbol>
      </svg>
  </div>

    <div class="container">
      <header class="header header-index-menu">
        <div class="header__left">
          <a href="<?php echo get_home_url(); ?>" class="logo">
            <img src="<?php bloginfo('template_url'); ?>/client/images/logo.svg" alt="logo">
          </a>
        </div>
        <div class="header__right">
          <button type="button" class="hamburger" data-ui="toggle-menu">
            <span></span>
          </button>
          <div class="header__menu">
            <nav>
              <ul>
              <?php if($nav =  wp_get_nav_menu_items( 'top-cats' )): ?>
                <?php foreach($nav as $k => $li): ?>
                <li><a href="<?= $li->object == 'category' ? '/?c='. $li->object_id : '/' ?>" class="ajax-cat-link <?= $k===0 ? 'active' : '' ?>" rel="nofollow"><?= $li->title ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
                <li><a href="<?php echo get_permalink(129) ?>" data-number="block-4"> About Us</a></li>
                <li><a href="<?php echo get_permalink(134) ?>" data-number="block-5"  rel="nofollow">Contacts</a></li>
              </ul>
            </nav>
            <button class="btn btn-clear">
              <svg class="icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-down"></use>
              </svg>
            </button> 
          </div>
        </div>
      </header>  