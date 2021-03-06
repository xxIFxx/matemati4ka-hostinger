<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package matemati4ka
 */
?>

</div><!-- #content -->

			<footer id="footer">
				<a href="#" class="gotop">
					<i class="gotop__arrow_up"></i>
				</a>
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>&copy; Все права защищены. <?php echo date("Y") ?><br>Алла Малинина.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="social social-circle"> <?php
								if(have_posts()) {
									$args = array('posts_per_page'=>6, 'category'=>9);
									$myposts = get_posts($args);
									foreach($myposts as $post) {
										setup_postdata($post); ?>
										<li>
											<a href="<?php echo get_post_meta($post->ID, 'icon-url', true) ?>">
												<i class="<?php echo get_post_meta($post->ID, 'icon-id', true) ?>">
												</i>
											</a>
										</li> <?php
									}
									wp_reset_query();
								} ?>
							</ul>
						</div>
					</div>
				</div>
			</footer>

			<script
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
