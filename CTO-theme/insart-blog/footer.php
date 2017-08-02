<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 */

?>
      <!--footer-->
      <footer class="footer">
        <div class="footer-top">
          <div class="center">
          <h3 class="contact-ttl-mob hidden-big">Join Us</h3>
          <div class="form-controls footer-message">
            <?php echo do_shortcode('[wysija_form id="2"]'); ?>
           </div>
          </div>
        </div>
        <div class="footer-bg">
        <div class="footer__holder">
          
           <?php //print_r($_SESSION) ?>
           <!-- <iframe src="" frameborder="0" id="wysija"></iframe> -->
          <div class="footer__contact">
           <?php query_posts(array('post_type' => 'post', 'page_id'=> 45
            ));?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
               <p>
                 <a href="mailto:<?php echo get_post_meta($post->ID, "main-email", $single = true); ?>"><?php echo get_post_meta($post->ID, "main-email", $single = true); ?></a>
               </p>
               <p>
                 <a href="tel: <?php echo get_post_meta($post->ID, "main-phone", $single = true); ?>" class="clear-link"><?php echo get_post_meta($post->ID, "main-phone", $single = true); ?></a>
               </p>
            <?php endwhile; ?>
            
            <?php endif; ?>
            <?php wp_reset_query(); ?>
          </div>
        </div>
          
        </div>
      </footer>
      <div class="copyright-holder">
        <div class="footer__holder">
         <a href="http://www.insart.com/" class="contacts-logo">
            <img src="<?php bloginfo('template_url'); ?>/client/images/logo-footer.svg" alt="logo on footer">
          </a>
         <div class="copyright">
            <span> © 2015-2017 INSART SOFTWARE LLC & © 1993-2017 INSART Ltd. </span> <span> All Rights Reserved.</span>
         </div>
        </div>
      </div>
    </div>
    <div class="message success-mess"><div class="message-container"><button class="close-btn" data-ui="close-popup"></button><p>Thank you <br>for joining us!</p><button type="button" class="btn" data-ui="close-popup">Close</button></div></div>
    <script src="<?php bloginfo('template_url'); ?>/build/js/uikit.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/build/js/sticky.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/build/js/main.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/fake.js"></script>
  </body>
</html> 