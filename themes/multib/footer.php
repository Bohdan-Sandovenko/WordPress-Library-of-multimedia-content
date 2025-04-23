<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package WordPress
 * @subpackage Multib
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

  <footer>
    <hr class="footer-divider">
    <div class="footer-content">
      <div class="footer-section">
        <h4>About Us</h4>
        <p>Multib is a creative platform showcasing works from talented authors worldwide.</p>
      </div>
      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
          <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h4>Connect</h4>
        <div class="social-links">
          <a href="#" aria-label="Twitter">Twitter</a>
          <a href="#" aria-label="Instagram">Instagram</a>
          <a href="#" aria-label="Facebook">Facebook</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Multib. All rights reserved.</p>
    </div>
  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>