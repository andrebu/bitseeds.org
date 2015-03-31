<?php global $prodoConfig; ?>
<?php $isFrontPage = ProdoTheme::isFrontPage( get_the_ID( ) ); ?>
<!DOCTYPE html>
<html class="no-js <?php echo ( ( $prodoConfig['header-sticky'] and ! $isFrontPage ) ? 'nav-sticky' : '' ); ?> <?php echo ( is_admin_bar_showing( ) ? 'wp-bar' : '' ); ?>" <?php language_attributes( ); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if ( ! function_exists( '_wp_render_title_tag' ) ) : ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php echo esc_url( ( ! empty( $prodoConfig['custom-favicon']['url'] ) ) ? $prodoConfig['custom-favicon']['url'] : get_template_directory_uri( ) . '/assets/images/favicon.png' ); ?>" rel="icon">
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri( ) ); ?>/assets/js/html5shiv.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri( ) ); ?>/assets/js/respond.min.js"></script>
<![endif]-->

<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8">

<meta name="google-site-verification" content="FLtYHRE_oyb0L9K2w571Mk_31HIb2RcRPkVcCvQ5oZE" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61289213-1', 'auto');
  ga('send', 'pageview');

</script>


<?php wp_head( ); ?>
</head>





<body <?php body_class( ( $prodoConfig['header-sticky'] ? 'nav-sticky' : null ) ); ?>>
	<?php if ( $prodoConfig['preloader'] or $prodoConfig === null ) : ?>
		<?php if ( ( $prodoConfig['preloader-only-home'] and $isFrontPage ) or ! $prodoConfig['preloader-only-home'] or $prodoConfig == null ) : ?>
		<div class="page-loader">
			<div class="content">
				<div class="line">
					<div class="progress"></div>
				</div>
				<div class="text"><?php _e( 'Loading...', 'prodo' ); ?></div>
			</div>
		</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ( $isFrontPage ) : ?>
	<div class="navbar <?php echo ( ! empty( $prodoConfig['header-style'] ) ? esc_attr( $prodoConfig['header-style'] ) : 'one' ); ?>" role="navigation">
	<?php else : ?>
	<div class="navbar <?php echo ( $prodoConfig['header-sticky'] ? 'navbar-fixed-top' : '' ); ?> floating positive <?php echo ( ! empty( $prodoConfig['header-style'] ) ? esc_attr( $prodoConfig['header-style'] ) : 'one' ); ?>" role="navigation">
	<?php endif; ?>
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( site_url( ) ); ?>">
					<?php $logo_dark = ! empty( $prodoConfig['logo-dark']['url'] ) ? $prodoConfig['logo-dark']['url'] : get_template_directory_uri( ) . '/assets/images/logo-dark-full.png'; ?>
					<?php $logo_light = ! empty( $prodoConfig['logo-light']['url'] ) ? $prodoConfig['logo-light']['url'] : get_template_directory_uri( ) . '/assets/images/logo-light-full.png'; ?>
					<?php if ( $isFrontPage ) : ?>
					<img src="<?php echo esc_url( $logo_light ); ?>" data-alt="<?php echo esc_url( $logo_dark ); ?>" alt="">
					<?php else : ?>
					<img src="<?php echo esc_url( $logo_dark ); ?>" alt="">
					<?php endif; ?>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<div class="social">
					<?php echo ProdoTheme::socialIcons( '<a href="%3$s" title="%2$s" target="_blank"><i class="fa fa-%1$s"></i></a>' ); ?>
				</div>
				<?php echo ProdoTheme::mainMenu( get_the_ID( ), 'nav navbar-nav navbar-right' ); ?>
			</div>
		</div>
	</div>