			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="https://github.com/diegofeitoza" title="Diego Feitoza" target="_blank">Diego Feitoza</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->
		<!-- JAVASCRIPT -->
		<?php
			// wp_enqueue_script( 'slick', get_bloginfo( 'template_directory' ) . '/libs/slick-carousel/slick/slick.min.js', array( 'jquery' ), '', true );
			// wp_enqueue_script( 'fancybox', get_bloginfo( 'template_directory' ) . '/libs/fancybox/dist/jquery.fancybox.min.js', array(), '', true );
			// wp_enqueue_script( 'map', get_bloginfo( 'template_directory' ) . '/js/map.js', array( 'jquery' ), '', true );
			// wp_enqueue_script( 'bootstrap', get_bloginfo( 'template_directory' ) . '/libs/bootstrap-sass/assets/javascripts/bootstrap.js', array( 'jquery' ), '', true );
			wp_enqueue_script( 'main', get_bloginfo( 'template_directory' ) . '/js/main.js', array( 'jquery' ), '', true );
		?>
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
