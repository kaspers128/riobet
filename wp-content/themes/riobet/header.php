<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/main.css">
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<title>
<?php 
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
</title>
<?php
	wp_head(); 
?>
</head>
<body>
<header class="header">
	<div class="container">
		<div class="header-top">
			<a href="/" class="logo"></a>
			<ul class="header-ul">
				<li class="header-ul__item">
					<a href="#" class="header-ul__link header-ul__link-auth viewModalLink" data-modal='modal-auth'>
						<svg viewBox="0 0 26.306 26.837" xmlns="http://www.w3.org/2000/svg"><g><path d="M20.771 7.619a7.62 7.62 0 1 1-15.238-.002 7.62 7.62 0 0 1 15.238.002M12.092 26.837H0v-7.505l6.045-1.858zM14.215 26.837h12.091v-7.505l-6.047-1.858zM16.873 16.536l-3.72 2.147-3.719-2.147v4.686l3.719-2.147 3.72 2.147z"></path></g></svg>
						Вход
					</a>
				</li>
				<li class="header-ul__item">
					<a href="#" class="header-ul__item header-ul__item-reg viewModalLink" data-modal='modal-reg'>Регистрация</a>
				</li>
				<!--li class="header-ul__item desktophide">
					<a href="#" class="header-ul__link burger">
						<svg viewBox="0 0 58 49" class="burger__icon" xmlns="http://www.w3.org/2000/svg"><path d="M58 10.312a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1h56a1 1 0 0 1 1 1v9.312zM58 29a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-9.312a1 1 0 0 1 1-1h56a1 1 0 0 1 1 1V29zM58 47.688a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-9.312a1 1 0 0 1 1-1h56a1 1 0 0 1 1 1v9.312z"></path></svg>
					</a>
				</li-->
			</ul>
		</div>
	</div>
</header>
<main class="main">
	<div class="container wrap__container">
		<nav>
			<?php
				$args = array( 
					'theme_location'=>'top',
					'container'=>'',
					'depth'=> 0);
				wp_nav_menu($args);
			?>
		</nav>