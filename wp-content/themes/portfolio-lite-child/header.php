<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="wrap">
 *
 * @package Portfolio
 * @since Portfolio Lite 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php $header_image = get_header_image(); ?>
<?php $blog = is_home(); ?>

<!-- BEGIN #wrapper -->
<div id="wrapper">

	<!-- BEGIN #header -->
	<div id="header" class="top-header">

		<!-- BEGIN .top-navigation -->
		<div class="top-navigation">

			<?php if ( has_nav_menu( 'social-menu' ) ) { ?>

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'social-menu',
						'title_li'        => '',
						'depth'           => 1,
						'container_class' => 'social-menu',
						'menu_class'      => 'social-icons',
						'link_before'     => '<span>',
						'link_after'      => '</span>',
					)
				);
				?>

			<?php } ?>

			<a id="menu-toggle" class="menu-toggle" href="#sdr">
				<span class="screen-reader-text"><?php esc_html_e( 'Toggle Side Menu', 'portfolio-lite' ); ?></span>
				<svg class="icon-menu-open left" version="1.1" id="icon-open" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="18px" height="18px" viewBox="0 0 18 18" enable-background="new 0 0 18 18" xml:space="preserve">
					<rect y="2" width="18" height="2"/>
					<rect y="8" width="18" height="2"/>
					<rect y="14" width="18" height="2"/>
				</svg>
				<svg class="icon-menu-close left" version="1.1" id="icon-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 18 18" enable-background="new 0 0 18 18" xml:space="preserve"  stroke="rgba(0, 0, 0, 0.4)" stroke-width="2" stroke-linecap="round">
					<line x1="0" y1="0" x2="18" y2="18" />
                    <line x1="18" y1="0" x2="0" y2="18" />
				</svg>
			</a>

		<!-- END .top-navigation -->
		</div>


		<?php if ( has_custom_logo() ) { ?>

			<div class="site-logo"><?php the_custom_logo(); ?></div>

		<?php } ?>
	<!-- END #header -->
	</div>

	<!-- BEGIN #panel -->
	<main id="panel" class="container clearfix">

		<!-- BEGIN .four columns -->
		<div id="header" class="four columns side-header">

			<?php if ( has_custom_logo() && ! is_single() ) { ?>

				<div class="site-logo"><?php the_custom_logo(); ?></div>

			<?php } ?>

			<?php if ( wp_is_mobile() && has_nav_menu( 'mobile-menu' ) ) { ?>
			<!-- BEGIN #navigation -->
			<nav id="navigation" class="navigation-main" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'portfolio-lite' ); ?>">

				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'mobile-menu',
							'title_li'       => '',
							'depth'          => 2,
							'fallback_cb'    => 'wp_page_menu',
							'container'      => false,
							'menu_class'     => 'menu',
							'link_before'    => '<span role="menuitem">',
							'link_after'     => '</span>',
						)
					);
				?>

			<!-- END #navigation -->
			</nav>

		<?php } elseif ( has_nav_menu( 'main-menu' ) ) { ?>

			<intro>
				<h2>Digital Goods &amp; Services</h2>
				<line></line>
				<p>I develop web applications. I create icons, images, and other digital assets. I design planner and calendar pages for digital distributions.</p>
				<p>I'm also a fan of all things cool, objectably speaking.</p>
				<p>Obviously, I'm not a writer.</p>
				<line></line>
			</intro>
			<!-- BEGIN #navigation -->
			<nav id="navigation" class="navigation-main" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'portfolio-lite' ); ?>">

				<?php
					wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'title_li'       => '',
						'depth'          => 2,
						'fallback_cb'    => 'wp_page_menu',
						'container'      => false,
						'menu_class'     => 'menu',
						'link_before'    => '<span role="menuitem">',
						'link_after'     => '</span>',
					) );
				?>

			<!-- END #navigation -->
			</nav>
			<line></line>
			<contact>
				<a href="https:/grail143.com/pages/contact.php">Contact me</a>
			</contact>
			<line></line>
			<div>
				
				<line></line>
			</div>
		<?php } ?>

		<!-- END .four columns -->
		</div>

		<?php if ( ! is_single() ) { ?>

		<!-- BEGIN .twelve columns -->
		<div class="twelve columns">

			<!-- BEGIN #masthead -->
			<div id="masthead">

				<?php if ( is_page_template( 'template-slideshow-gallery.php' ) || is_page_template( 'template-blog.php' ) ) { ?>
					<div class="site-title-slideshow">
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo wp_kses_post( get_bloginfo( 'name' ) ); ?></a></p>
						<h1 class="title"><?php the_title(); ?></h1>
					</div>
				<?php } elseif ( is_front_page() && is_home() ) { ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo wp_kses_post( get_bloginfo( 'name' ) ); ?></a>
					</h1>
				<?php } else { ?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo wp_kses_post( get_bloginfo( 'name' ) ); ?></a>
					</p>
				<?php } ?>

				<p class="site-description">
					<?php echo wp_kses_post( get_bloginfo( 'description' ) ); ?>
				</p>

			<!-- END #masthead -->
			</div>

			<?php if ( $blog && ! empty( $header_image ) || is_category() && ! empty( $header_image ) || is_search() && ! empty( $header_image ) || is_archive() && ! empty( $header_image ) ) { ?>

				<div id="custom-header" class="bg-img" style="background-image: url(<?php header_image(); ?>);">
					<img class='img-hide' src="<?php header_image(); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php echo esc_attr( get_bloginfo() ); ?>" />
				</div>

			<?php } ?>

		<?php } elseif ( is_single() && ( has_post_thumbnail() || ! empty( $header_image ) ) ) { ?>

		<!-- BEGIN .row -->
		<div class="row">

			<!-- BEGIN .ten columns -->
			<div class="ten columns">

				<!-- BEGIN #masthead -->
				<div id="masthead">

					<?php if ( is_front_page() && is_home() ) { ?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo wp_kses_post( get_bloginfo( 'name' ) ); ?></a>
						</h1>
					<?php } else { ?>
						<p class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo wp_kses_post( get_bloginfo( 'name' ) ); ?></a>
						</p>
					<?php } ?>

					<p class="site-description">
						<?php echo wp_kses_post( get_bloginfo( 'description' ) ); ?>
					</p>

				<!-- END #masthead -->
				</div>

			<!-- END .ten columns -->
			</div>

		<!-- END .row -->
		</div>

		<?php } else { ?>

		<!-- BEGIN .row -->
		<div class="row">

			<!-- BEGIN #masthead -->
			<div id="masthead" class="full-width">

				<?php if ( is_front_page() && is_home() ) { ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo wp_kses_post( get_bloginfo( 'name' ) ); ?></a>
					</h1>
				<?php } else { ?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo wp_kses_post( get_bloginfo( 'name' ) ); ?></a>
					</p>
				<?php } ?>

				<p class="site-description">
					<?php echo wp_kses_post( get_bloginfo( 'description' ) ); ?>
				</p>

			<!-- END #masthead -->
			</div>

		<!-- END .row -->
		</div>

		<?php } ?>
