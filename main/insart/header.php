
<!-- <div class="top-line"> -->
    <nav class="navbar navbar-default navbar-fixed-top">
	<div class="top-line-inner container flexbox clearfix">
        <div class="navbar-header">
        	    <?php if(!is_front_page()): ?><a href="/" class="site-logo"><?php else: ?><span class="site-logo"><?php endif; ?>
              		<img src="<?php echo get_template_directory_uri();?>/logo.png" alt="Logo" class="top-logo">
                <?php if(!is_front_page()): ?></a><?php else: ?></span><?php endif; ?>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <i class="_ic-menu"></i>
                <i class="_ic-menu"></i>
                <i class="_ic-menu"></i>
              </button>
            </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php if (!dynamic_sidebar('sidebar-header')) echo '<!-- sidebar-header -->'; ?>
        <ul class="menu _scrollspy">
            <li><a href="/#about">EXPO 2017</a></li>
            <li><a href="/#pavilion">ПАВИЛЬОН</a></li>      
            <li><a href="/#news">НОВОСТИ</a></li>
            <li><a href="/#social">СОЦИАЛЬНЫЕ СЕТИ</a></li>  
            <li><a href="/#events">СОБЫТИЯ</a></li>
            <li><a href="/#visit">КАК НАС НАЙТИ</a></li>
            <li><a href="/#partners">ПАРТНЁРЫ</a></li>
            <li><a href="/#main-info">ПРЕССА</a></li>
        </ul>
        </div>
        <div class="header-right-icons"><img src="<?php echo get_template_directory_uri();?>/img/i-1.png" alt=""></div>
	
        </div>
        </nav>
<!--</div> <!-- .top-line -->
