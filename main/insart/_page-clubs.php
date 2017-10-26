<?php
/**
* Template name: Clubs page
*/

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
            <div class="container">
                <div class="row clients-list flexbox flex-wrap">
                    <?php foreach(get_field('club_item') as $item): ?>
                        <div class="col-md-6 _item-club">
                            <div class="club-inner">
                                <div class="_name h4"><?php echo $item['club_name']; ?></div>
                                <div class="_descr b6"><?php echo $item['ckub_intro']; ?></div>
                                <?php if($item['club_link']): ?>
                                <div class="_more"><a href="<?php echo $item['club_link']; ?>" class="btn btn-warning btn-sm" target="_blank">I'm interested ></a></div>
                            <?php endif; ?>
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

