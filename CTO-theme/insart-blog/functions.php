<?php

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'id' => 'login-sidebar',
        'name' => 'Login Sidebar',
        'before_widget' => '<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-close" data-dismiss="modal">×</div>',
        'after_widget' => '</div></div>',
        'before_title' => '<p class="modal-heading">',
        'after_title' => '</p>'
    ));
}

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'id' => 'reg-sidebar',
        'name' => 'Register Sidebar',
        'before_widget' => '<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-close" data-dismiss="modal">×</div>',
        'after_widget' => '</div></div>',
        'before_title' => '<p class="modal-heading">',
        'after_title' => '</p>'
    ));
}

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'id' => 'lost-sidebar',
        'name' => 'Lost password Sidebar',
        'before_widget' => '<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-close" data-dismiss="modal">×</div>',
        'after_widget' => '</div></div>',
        'before_title' => '<p class="modal-heading">',
        'after_title' => '</p>'
    ));
}

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'id' => 'left-sidebar',
        'name' => 'Left Sidebar',
        'before_widget' => '<div id="%1$s" class="__block  %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="block__ttl">',
        'after_title' => '</h2>'
    ));
}


if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 'large'); // Normal post thumbnails
}

register_nav_menus( array(
    'primary' => __( 'Primary Navigation', 'base' ),
) );

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'img_80_80', 80, 80, true );
}

function improved_trim_excerpt($text) {
    global $post;
    if ( '' == $text ) {
    $text = get_the_content('');
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
    $text = strip_tags($text, '<p>,<br>,<h2>,<h1>,<em>');
    $excerpt_length = 50;
    $words = explode(' ', $text, $excerpt_length + 1);
        if (count($words)> $excerpt_length) {
            array_pop($words);
            array_push($words, ' ...');
            $text = implode(' ', $words);
        }
    }
    return $text;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');


//add [email]...[/email] shortcode
function shortcode_email($atts, $content) {
    $result = '';
    for ($i=0; $i<strlen($content); $i++) {
        $result .= '&#'.ord($content{$i}).';';
    }
    return $result;
}
add_shortcode('email', 'shortcode_email');
// отключаем админ-бар
show_admin_bar(false);

// register tag [template-url]
function filter_template_url($text) {
    return str_replace('[template-url]',get_bloginfo('template_url'), $text);
}

add_filter( 'post_thumbnail_html', 'remove_thumbnail_width_height', 10, 5 );
 
function remove_thumbnail_width_height( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter('the_content', 'filter_template_url');
add_filter('get_the_content', 'filter_template_url');
add_filter('widget_text', 'filter_template_url');

// register tag [site-url]
function filter_site_url($text) {
    return str_replace('[site-url]',get_bloginfo('url'), $text);
}
add_filter('the_content', 'filter_site_url');
add_filter('get_the_content', 'filter_site_url');
add_filter('widget_text', 'filter_site_url');

add_filter( 'login_errors', 'login_errors_example' );


function getChilds($parent=2){

$out = new WP_Query(
    array(
        // 'cat'=>'3',
        'post_type' => 'page',
        'post_parent'=>$parent,
        'order'=>'asc',
        'orderby'=>'menu_order',
        'posts_per_page'=>'-1',
        )
    );
return $out;
}

/**
 * Обрезка текста (excerpt). Шоткоды вырезаются. Минимальное значение maxchar может быть 22.
 *
 * @param (строка/массив) $args Параметры.
 *
 * @return HTML
 * ver 2.6.1
 */
function kama_excerpt( $args = '' ){
    global $post;

    $default = array(
        'maxchar'   => 350,   // количество символов.
        'text'      => '',    // какой текст обрезать (по умолчанию post_excerpt, если нет post_content.
                              // Если есть тег <!--more-->, то maxchar игнорируется и берется все до <!--more--> вместе с HTML
        'autop'     => true,  // Заменить переносы строк на <p> и <br> или нет
        'save_tags' => '',    // Теги, которые нужно оставить в тексте, например '<strong><b><a>'
        'more_text' => 'Читать дальше...', // текст ссылки читать дальше
    );

    if( is_array($args) ) $_args = $args;
    else                  parse_str( $args, $_args );

    $rg = (object) array_merge( $default, $_args );
    if( ! $rg->text ) $rg->text = $post->post_excerpt ?: $post->post_content;
    $rg = apply_filters('kama_excerpt_args', $rg );

    $text = $rg->text;
    $text = preg_replace ('~\[/?.*?\](?!\()~', '', $text ); // убираем шоткоды, например:[singlepic id=3], markdown +
    $text = trim( $text );

    // <!--more-->
    if( strpos( $text, '<!--more-->') ){
        preg_match('/(.*)<!--more-->/s', $text, $mm );

        $text = trim($mm[1]);

        $text_append = ' <a href="'. get_permalink( $post->ID ) .'#more-'. $post->ID .'">'. $rg->more_text .'</a>';
    }
    // text, excerpt, content
    else {
        $text = trim( strip_tags($text, $rg->save_tags) );

        // Обрезаем
        if( mb_strlen($text) > $rg->maxchar ){
            $text = mb_substr( $text, 0, $rg->maxchar );
            $text = preg_replace('~(.*)\s[^\s]*$~s', '\\1 ...', $text ); // убираем последнее слово, оно 99% неполное
        }
    }

    // Сохраняем переносы строк. Упрощенный аналог wpautop()
    if( $rg->autop ){
        $text = preg_replace(
            array("~\r~", "~\n{2,}~", "~\n~",   '~</p><br ?/>~'),
            array('',     '</p><p>',  '<br />', '</p>'),
            $text
        );
    }

    $text = apply_filters('kama_excerpt', $text, $rg );

    if( isset($text_append) ) $text .= $text_append;

    return ($rg->autop && $text) ? "<p>$text</p>" : $text;
}
/* changelog
 * 2.6 - удалил параметр 'save_format' и заменил его на два параметра 'autop' и 'save_tags'.
 *       Немного изменил логику кода.
 */