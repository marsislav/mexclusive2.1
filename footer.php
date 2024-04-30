
	<!-- footer -->
	<footer class="footer-area" style="background-color: <?php echo esc_attr(get_theme_mod('footer_background_color', '#f0f0f0')); ?>; color: <?php echo esc_attr(get_theme_mod('footer_text_color', '#000000')); ?>;">
    <style>
        footer a {
            color: <?php echo esc_attr(get_theme_mod('footer_link_color', '#3366cc')) ?>!important;
        }
    </style>

		<section>
			<?php get_template_part('template-parts/footer/widgets'); ?>
    	</section>
	</footer>

	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
				<?php echo wp_kses_post(get_theme_mod('set_copyright', __('Copyright - XYZ. All rights reserved.', 'mexclusive21'))); ?>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
						<?php if (get_theme_mod('facebook_url')) : ?>
							<li><a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<?php endif; ?>
							
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	
	<?php wp_footer(); ?>
</body>
</html>