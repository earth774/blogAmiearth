<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
	  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />
<!--		<link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon.ico" />
 		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/img/favicons/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/img/favicons/android-chrome-192x192.png" sizes="192x192" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/img/favicons/favicon-16x16.png" sizes="16x16" /> -->
		<link rel="manifest" href="<?php echo get_template_directory_uri()?>/img/favicons/manifest.json" />
		<link rel="mask-icon" href="<?php echo get_template_directory_uri()?>/img/favicons/safari-pinned-tab.svg" />
		<?php if ( is_single() ) { ?>
			<link rel="prefetch" href="<?php echo bloginfo('url'); ?>">
		<?php } ?>
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<?php wp_head(); ?>
		<?php the_field('header_scripts', 'option'); ?>
		<style>
			@charset "UTF-8";:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,:after,:before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}figcaption,figure,main,nav,section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}h2,h3{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}a{color:#007bff;text-decoration:none;background-color:transparent}figure{margin:0 0 1rem}img{vertical-align:middle;border-style:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h2,h3{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit}h2{font-size:2rem}h3{font-size:1.75rem}.img-fluid{max-width:100%;height:auto}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}@font-face{font-family:bai_jamjuree;src:url(<?php echo get_template_directory_uri(); ?>/fonts/baijamjuree-regular.woff2) format("woff2"),url(<?php echo get_template_directory_uri(); ?>/fonts/baijamjuree-regular.woff) format("woff");font-weight:400;font-style:normal}@font-face{font-family:bai_jamjuree;src:url(<?php echo get_template_directory_uri(); ?>/fonts/baijamjuree-semibold.woff2) format("woff2"),url(<?php echo get_template_directory_uri(); ?>/fonts/baijamjuree-semibold.woff) format("woff");font-weight:700;font-style:normal}@font-face{font-family:champee;src:url(<?php echo get_template_directory_uri(); ?>/fonts/champee.ttf?2n82l0) format("truetype"),url(<?php echo get_template_directory_uri(); ?>/fonts/champee.woff?2n82l0) format("woff"),url(<?php echo get_template_directory_uri(); ?>/fonts/champee.svg?2n82l0#champee) format("svg");font-weight:400;font-style:normal}i.icon{font-family:champee!important;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon-linkedin:before{content:"\e900"}.icon-github:before{content:"\e901"}.icon-instagram:before{content:"\e902"}.icon-twitter:before{content:"\e903"}.icon-arrow:before{content:"\e905"}.icon-facebook:before{content:"\e909"}body{color:#434343}h2,h3{font-weight:700;font-family:bai_jamjuree,arial}.author-block figcaption p,.left-navigation ul li{font-family:bai_jamjuree,arial}a{word-break:break-all;color:#008c9e}.short-dashed{width:80px;height:1px;background-color:#ececec;margin:16px auto 24px}@media screen and (min-width:576px){.short-dashed{margin:16px auto 32px}}.social-btn{padding:6px 6px 5px;background-color:#ececec;line-height:1;display:inline-block;border-radius:50em}.social-btn.facebook{background-color:#3b5998}.social-btn.twitter{background-color:#1da1f2}.social-btn.instagram{background-color:#5851db}.social-btn.github{background-color:#333}.social-btn.linkedin{background-color:#0077b5}.social-btn i{display:inline-block;color:#fff}@media screen and (min-width:992px){.sidebar-wrapper{-webkit-box-flex:0;-ms-flex:0 0 260px;flex:0 0 260px;margin:0 24px 48px 0}}.author-block{margin:0 0 16px}.author-block img{display:block;margin:0 auto 16px;width:64px;height:64px}@media screen and (min-width:768px){.author-block img{width:100px;height:100px}}@media screen and (min-width:992px){.author-block img{width:150px;height:150px}}.author-block figcaption h2{text-align:center;font-size:16px}@media screen and (min-width:576px){.author-block figcaption h2{font-size:18px}}.author-block figcaption p{text-align:center;font-size:12px;max-width:240px;margin:auto}@media screen and (min-width:576px){.author-block figcaption p{font-size:14px;max-width:300px}}@media screen and (min-width:992px){.author-block figcaption p{max-width:100%}}.social-list{padding:0;list-style:none;text-align:center;max-width:240px;margin:0 auto}@media screen and (min-width:992px){.social-list{max-width:100%}}.social-list li{display:inline-block;margin:0 4px 0 0}@media screen and (min-width:992px){.social-list li{margin:0 8px 0 0}}.social-list li:last-child{margin-right:0}.left-navigation ul{margin:0;padding:0;list-style:none;text-align:center}@media screen and (min-width:992px){.left-navigation ul{text-align:left;padding:0 0 0 32px}}.left-navigation ul li{font-size:14px;display:inline-block;margin:0 8px 4px 0}@media screen and (min-width:768px){.left-navigation ul li{font-size:16px;margin:0 12px 4px 0}}@media screen and (min-width:992px){.left-navigation ul li{display:block;margin:0 0 6px}}.left-navigation ul li:last-child{margin-right:0}.left-navigation ul li i{display:none}@media screen and (min-width:992px){.left-navigation ul li i{display:inline-block}}.left-navigation ul li.current-menu-item a{color:#434343;font-weight:700}.post-listing{padding:0;margin:0;list-style:none}.post-listing .post-item{width:100%;margin:0 0 32px}@media screen and (min-width:576px){.post-listing .post-item{margin:0 0 24px}}@media screen and (min-width:576px){.post-listing .post-item figure{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}}.post-listing .post-item figure .cover-wrapper{display:block;margin:0 0 16px}@media screen and (min-width:576px){.post-listing .post-item figure .cover-wrapper{margin:0}}.post-listing .post-item figure .cover-wrapper img{max-width:100%;height:auto}@media screen and (min-width:576px){.post-listing .post-item figure .cover-wrapper img{max-width:292px;margin:0 16px 0 0}}.post-listing .post-item figure figcaption .post-title{font-weight:700;line-height:1.4;margin:0 0 4px;font-size:16px}@media screen and (min-width:576px){.post-listing .post-item figure figcaption .post-title{font-size:20px}}.post-listing .post-item figure figcaption .post-desc{font-size:14px;color:#434343}@media screen and (min-width:576px){.post-listing .post-item figure figcaption .post-desc{font-size:16px}}.main{position:relative;padding:8px 0 0;margin:0}@media screen and (min-width:992px){.main{padding:0;margin:40px 0 0}}.main:before{content:'';top:0;left:0;width:100%;height:40px;background-color:#ececec;position:absolute;z-index:-1}@media screen and (min-width:768px){.main:before{height:64px}}@media screen and (min-width:992px){.main:before{display:none}}.page-wrapper{max-width:100%}@media screen and (min-width:992px){.page-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;flext-direction:row;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}}@media screen and (min-width:1200px){.page-wrapper{max-width:1024px}}.main-content{margin:32px 0 0;width:100%}@media screen and (min-width:992px){.main-content{margin:0}}@media screen and (min-width:1200px){.main-content{width:calc(1024px - 30px - 260px - 24px)}}
		</style>
	</head>
	<body <?php body_class() ?>>
		<?php the_field('body_scripts', 'option'); ?>
		<div class="wrapper">
			<main class="main">
				<div class="container page-wrapper">
					<?php get_template_part('views/component', 'sidebar'); ?>
