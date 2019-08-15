<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>



    <div class="footer py-5" style="background:#0C0C0C;">
      <div class="row">
        <div class="col-md-12 py-5">
          <img src="<?php echo get_template_directory_uri(); ?>./images/vk-logo.png" width="22" alt="Villains Kitchen" />
          <p class="copyright">&copy; 2019 Villains Kitchen LLC. All rights reserved.</p>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>


    


  </body>
</html>