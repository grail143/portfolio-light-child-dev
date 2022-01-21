<?php
/**
 *
 * This template is used to display a blog. The content is displayed in post formats.
 *
 * @package Portfolio
 * @since Portfolio Lite 1.0
 */

get_header(); ?>

<!-- BEGIN .post class -->
<div <?php post_class( 'home-blog' ); ?> id="page-<?php the_ID(); ?>">

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .content -->
		<div class="content">

			<!-- BEGIN .sixteen columns -->
			<div class="sixteen columns">

				<div class="blue">
					<h3>
					BLOG
						<line></line>
					</h3>
				<!-- BEGIN .post-area -->
				<div class="post-area">
					
					<?php get_template_part( 'content/loop', 'cat' ); ?>

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
