<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 */

?>
      <!--footer-->
      <footer class="footer">
        <div class="footer__holder">
          <h2>Join The WealthTech  Club</h2>
          <div class="form-controls footer-message">
            <?php /* <div class="mailpoet_form">
            <form method="post" action="http://insart.loc/wp-admin/admin-post.php?action=mailpoet_subscription_form" class="mailpoet_form mailpoet_form_shortcode" novalidate="">
              <p class="mailpoet_paragraph">
                <input type="text" class="mailpoet_text mailpoet_text-footer" name="email" title="Your mail here" placeholder="Your mail here" >
              </p>
              <button type="button" class="btn" data-ui="open-popup-footer">Join Us</button></form>
      <div class="error-mess">*Please enter a valid email address</div>
            </div> */?>
            <?php echo do_shortcode('[wysija_form id="2"]'); ?>
           </div>
           <?php //print_r($_SESSION) ?>
           <!-- <iframe src="" frameborder="0" id="wysija"></iframe> -->
          <div class="footer__contact">
           <?php query_posts(array('post_type' => 'post', 'page_id'=> 45
            ));?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php echo str_replace("\n", "<br>", get_the_content()); ?>
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