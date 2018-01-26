<?php
/**
* Template name: Clients page
*/
$clients = get_posts('post_type=client&numberposts=-1&orderby=menu_order&order=asc&meta_key=show_in_list&meta_value=1');
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
                <div class="row clients-list flexbox flex-wrap">
                    <?php foreach($clients as $item): ?>
                        <div class="col-md-3 _item-client">
                            <div class="client-inner">
                                <figure class="_logo"><?php echo get_field('logo_svg', $item->ID) ?></figure>
                                <div class="_descr"><?php echo get_the_excerpt($item->ID); ?></div>
                                <?php /*if(get_field('show_case', $item->ID)): ?>
                                <div class="_more"><a href="<?php echo get_permalink($item->ID); ?>">> Check the Case Study</a></div>
                            <?php endif;*/ ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <?php endwhile; ?>
            </div>
        </div> <!-- #middle -->
    </div>
    <?php get_footer(); ?>
</body>
</html>

