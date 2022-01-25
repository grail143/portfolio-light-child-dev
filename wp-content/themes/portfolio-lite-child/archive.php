<?php
/**
 * This template is used to display archive posts, e.g. tag post indexes.
 * This template is also the fallback template to 'category.php'.
 *
 * @package Portfolio
 * @since Portfolio Lite 1.0
 */

get_header(); ?>

<!-- BEGIN .post class -->
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .content -->
		<div class="content">

		<?php if ( is_active_sidebar( 'sidebar-blog' ) ) { ?>

			<!-- BEGIN .eleven columns -->
			<div class="eleven columns">

				<!-- BEGIN .post-area -->
				<div id="infinite-container" class="post-area">

					<?php get_template_part( 'content/loop', 'archive' ); ?>
<!-- This site is converting visitors into subscribers and customers with OptinMonster - https://optinmonster.com :: Campaign Title: Inline Newsletter -->
<div id="om-qwjrcdirxrifa9s24gxq-holder" class="showcase-posts"></div>
<script>(function(d,u,ac){var s=d.createElement('script');s.type='text/javascript';s.src='https://a.omappapi.com/app/js/api.min.js';s.async=true;s.dataset.user=u;s.dataset.campaign=ac;d.getElementsByTagName('head')[0].appendChild(s);})(document,160427,'qwjrcdirxrifa9s24gxq');</script>
<!-- / https://optinmonster.com -->
				<!-- END .post-area -->
				</div>

			<!-- END .eleven columns -->
			</div>

			<!-- BEGIN .five columns -->
			<div class="five columns">

				<?php get_sidebar( 'blog' ); ?>

			<!-- END .five columns -->
			</div>

		<?php } else { ?>

			<!-- BEGIN .sixteen columns -->
			<div class="sixteen columns">

				<!-- BEGIN .post-area no-sidebar -->
				<div id="infinite-container" class="post-area">

					<?php get_template_part( 'content/loop', 'archive' ); ?>
<!-- This site is converting visitors into subscribers and customers with OptinMonster - https://optinmonster.com :: Campaign Title: Inline Newsletter -->
<div id="om-qwjrcdirxrifa9s24gxq-holder" class="showcase-posts"></div>
<script>(function(d,u,ac){var s=d.createElement('script');s.type='text/javascript';s.src='https://a.omappapi.com/app/js/api.min.js';s.async=true;s.dataset.user=u;s.dataset.campaign=ac;d.getElementsByTagName('head')[0].appendChild(s);})(document,160427,'qwjrcdirxrifa9s24gxq');</script>
<!-- / https://optinmonster.com -->
				<!-- END .post-area no-sidebar -->
				</div>

			<!-- END .sixteen columns -->
			</div>

		<?php } ?>

		<!-- END .content -->
		</div>

	<!-- END .row -->
	</div>

<!-- END .post class -->
</div>

<?php get_footer(); ?>