<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'mymeds_credits' ); ?>
        
        <div class="row" data-cols="3">
          <div class="column" data-col="1">
            <h2>Contact us</h2>
            <address>
              <strong>MyMeds&amp;Me</strong><br/>
              5A Noel St<br/>
              London<br/>
              W1F 8GE<br/>
              <abbr title="Phone">+44 (0)20 7870 9111</abbr><br/>
              <a href="mailto:info@mymedsandme.com">info@mymedsandme.com</a>
            </address>
          </div>
          
          <div class="column" data-col="1">
            <?php wp_nav_menu( array( 'theme_location' => 'footer1', 'menu_class' => 'footer-menu' ) ); ?>
          </div>
          
          <div class="column" data-col="1">
            <?php wp_nav_menu( array( 'theme_location' => 'footer2', 'menu_class' => 'footer-menu'  ) ); ?>
          </div>
        </div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>