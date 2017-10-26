<footer id="site-footer" class="site-footer" data-role="footer">
     <div class="container">
       <div class="copy text-center"><?php if(!dynamic_sidebar('sidebar-4')) echo '<!-- sidebar-4 -->' ?></div>
     </div>
</footer>
<?php wp_footer() ?>
<?php get_template_part( 'parts/modals' ); ?>
   
<?php //echo do_shortcode( '[wpforms id="170" title="false" description="false"]'); ?>