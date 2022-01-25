<?php
/**
 * This template is used to display category post indexes.
 *
 * @package Portfolio
 * @since Portfolio Lite 1.0
 */

get_header(); ?>

<!-- BEGIN .post class -->
<div <?php post_class( 'showcase-category' ); ?> id="post-<?php the_ID(); ?>">

	<!-- BEGIN .row -->
	<div class="row">
		<!-- BEGIN .content -->
		<div class="content">

			<!-- BEGIN .sixteen columns -->
			<div class="sixteen columns">

				<!-- BEGIN .post-area -->
				<div class="post-area">
				<div class="blue">
					<h3>
						<?php $current_category = single_cat_title("", true); ?>
						<line></line>
					</h3>
					<!-- BEGIN .article -->
					<div class="article">

						<?php get_template_part( 'content/loop', 'cat' ); ?>
						<!-- This site is converting visitors into subscribers and customers with OptinMonster - https://optinmonster.com :: Campaign Title: Inline Newsletter -->
						<div id="om-qwjrcdirxrifa9s24gxq-holder" class="showcase-posts"></div>
						<script>(function(d,u,ac){var s=d.createElement('script');s.type='text/javascript';s.src='https://a.omappapi.com/app/js/api.min.js';s.async=true;s.dataset.user=u;s.dataset.campaign=ac;d.getElementsByTagName('head')[0].appendChild(s);})(document,160427,'qwjrcdirxrifa9s24gxq');</script>
						<!-- / https://optinmonster.com -->
					<!-- END .article -->
					</div>

				<!-- END .post-area -->
				</div>
				</div>

			<!-- END .sixteen columns -->
			</div>

		<!-- END .content -->
		</div>

	<!-- END .row -->
	</div>

<!-- END .post class -->
</div>

<?php get_footer(); ?>