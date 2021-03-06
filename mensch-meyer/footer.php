<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Mensch Meyer
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) : ?>
			<div class="footer-widgets clear">
				<?php if ( is_active_sidebar( 'sidebar-2' ) ): ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div><!-- .widget-area -->
				<?php endif; //is_active_sidebar ?>

				<?php if ( is_active_sidebar( 'sidebar-3' ) ): ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					</div><!-- .widget-area -->
				<?php endif; //is_active_sidebar ?>

				<?php if ( is_active_sidebar( 'sidebar-4' ) ): ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					</div><!-- .widget-area -->
				<?php endif; //is_active_sidebar ?>
			</div><!-- .sidebar-widgets -->
		<?php endif; ?>
		<div class="site-info-wrapper clear">
			<?php mensch_meyer_social_menu(); ?>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'mensch-meyer' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'mensch-meyer' ), 'WordPress' ); ?></a>
				<a href="<?php echo get_page_link( get_page_by_title( 'Impressum & Disclaimer' )->ID ); ?>" rel="home" class="right-column">Impressum &amp; Disclaimer</a>
				<span class="sep"> ~ </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'mensch-meyer' ), 'Mensch Meyer', '<a href="https://wordpress.com/themes/" rel="designer">WordPress.com</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- .site-info-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
