<?php
/**
 * Footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package phx-university
 * @since 1.0.0
 */

?>
					</div><!-- /content -->
				</div><!-- /content-wrap -->

				<div class="footer">
					&copy; <?php printf( '%s %s %s', date( 'Y' ), get_bloginfo( 'name' ), esc_html__( 'All rights reserved.', 'phx-university' ) ); ?>
				</div>
			</div><!-- /container -->

		<?php wp_footer(); ?>

	</body>
</html>
