<?php
/**
 * The footer for our theme.
 * This template is used to generate the footer for the theme.
 *
 * @package Portfolio
 * @since Portfolio Lite 1.0
 */

?>

<?php if ( ! is_single() ) { ?>

<!-- END .twelve columns -->
</div>

<?php } ?>

<!-- END #panel .container -->
</main>

<!-- BEGIN .footer -->
<div class="footer">

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .footer-information -->
		<div class="footer-information">

			<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>

			<div class="align-right">

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'footer-menu',
						'title_li'        => '',
						'depth'           => 1,
						'container_class' => 'footer-menu',
					)
				);
				?>

			</div>
			<?php 
				$site_url  = "https://grail143.com";
				$site_title  = "g143";
				$page_url = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
			?>

			<div id="button_share">
				<span>SHARE:</span>
				<!-- Email Social Media -->
				<a href="mailto:?Subject=<?=$site_title?>&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?=$page_url?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/email.png" alt="Email share link" />
				</a>
			 
				<!-- Facebook Social Media -->
				<a href="http://www.facebook.com/sharer.php?u=<?=$page_url?>" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/fb.png" alt="Facebook share link" />
				</a>
				
				<!-- LinkedIn Social Media -->
				<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?=$page_url?>" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/linkedin.png" alt="LinkedIn share link" />
				</a>
				
				<!-- Pinterest Social Media -->
				<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/pinterest.png" alt="Pinterest share link" />
				</a>
				
				<!-- Tumblr Social Media -->
				<a href="http://www.tumblr.com/share/link?url=<?=$page_url?>&amp;title=<?=$site_title?>" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/tumblr.png" alt="Tumblr share link" />
				</a>
				 
				<!-- Twitter Social Media -->
				<a href="https://twitter.com/share?url=<?=$page_url?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/twitter.png" alt="Twitter share link" />
				</a>
				
			</div>
			<?php } ?>
			<div
			<?php
			if ( has_nav_menu( 'footer-menu' ) ) {
				?>
				class="align-center"
				<?php
			} else {
				?>
				class="align-center"<?php } ?>>

				<p class="footer-credits">
					<?php esc_html_e( 'Copyright', 'portfolio-lite' ); ?> &copy; <?php echo esc_html( date( 'Y' ) ); ?> &middot; <?php esc_html_e( 'All Rights Reserved', 'portfolio-lite' ); ?> &middot;
					<?php esc_html( bloginfo( 'name' ) ); ?>
				</p>

			</div>


		<!-- END .footer-information -->
		</div>

	<!-- END .row -->
	</div>

<!-- END .footer -->
</div>

<!-- END #wrapper -->
</div>

<?php wp_footer(); ?>

</body>
</html>