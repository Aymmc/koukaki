<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>  


<div class="phpfooter">
  
	<footer id="colophon" class="site-footer">
    <?php include_once('oscars.php'); ?>
    <!-- <div> -->
         <ul>
            <li><a href="#">Mentions Légales</a></li>
            <li><a href="#">STUDIO KOUKAKI</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    <!-- </div -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- <script src="wp-content\themes\foce\js\script.js" defer> </script> -->
</body>
</html>
