<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage MyMeds
 * @since MyMeds 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

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

        <p>
          &copy;2015 MyMeds&amp;Me Ltd. All Rights Reserved. <a href="http://wordpress.mymedsandme.com/privacy-policy/">Privacy Policy</a><br/>
          Registered office: 2 Crossways Business Centre, Bicester Road, Aylesbury, HP18 0RA
        </p>
	<?php get_sidebar( 'footer' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>