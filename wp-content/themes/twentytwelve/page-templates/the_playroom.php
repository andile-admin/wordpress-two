<?php
/**
 * Template Name: The Playroom
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

 //include_once('header.php');
 get_header(); ?>

<style type="text/css">
@font-face {
    font-family: 'RockwellExtraBoldRegular';
    src: url('/wp-content/themes/yfm2012/css/27794.eot');
    src: url('/wp-content/themes/yfm2012/css/27794.eot') format('embedded-opentype'),
         url('/wp-content/themes/yfm2012/css/27794.woff') format('woff'),
         url('/wp-content/themes/yfm2012/css/27794.ttf') format('truetype'),
         url('/wp-content/themes/yfm2012/css/27794.svg#RockwellExtraBoldRegular') format('svg');
}
@font-face {
    font-family: 'ocraregular';
    src: url('/wp-content/themes/yfm2012/css/ocra-webfont.eot');
    src: url('/wp-content/themes/yfm2012/css/ocra-webfont.eot?#iefix') format('embedded-opentype'),
         url('/wp-content/themes/yfm2012/css/ocra-webfont.woff') format('woff'),
         url('/wp-content/themes/yfm2012/css/ocra-webfont.ttf') format('truetype'),
         url('/wp-content/themes/yfm2012/css/ocra-webfont.svg#ocraregular') format('svg');
    font-weight: normal;
    font-style: normal;

}

.read_more_content > p{
	margin-left: 5%;
    width: 90%;
}

.playroom_review_full_content > p{
	margin-left: 5%;
    width: 90%;
}

.playroom_review_full_content > h4{
	margin-left: 5%;
    width: 90%;
    padding-bottom: 2%;
}

#content.playroom_container{
	height: 1100px;
	background: #010b1e;
	margin: 0 auto;
    width: 912px;
}
.playroom_header{
	background: #334353;
	width: 903px;
	height: 77;
	margin: auto;
}
.playroom_header h1{
	color: #010B1E;
    font-family: 'RockwellExtraBoldRegular';
    font-size: 63px;
    letter-spacing: 1;
    margin: 0;
    text-align: center;
    text-shadow: 2px 2px 0 #FFFFFF, 3px 3px 12px #FFFFFF;
}
#yfm-logo-tag {
	left: -155px;
}
.playroom_carousel{
	height: 370px;
	width: 903px;
	margin: auto;
}
.the_carousel{
	width: 765px;
	height: 390px;
	margin: auto;
	margin: 20px auto;
}
.playroom_reviews{
	width: 600px;
	height: 550px;
	float: left;
	background: #6a7886;
}

.playroom_carousel > img{
	height: 370px;
    margin: auto;
    width: 903px;
}
.playroom_videos{
	width: 297px;
	height: 550px;
	float: right;
	background: #6a7886;
}
.playroom_review_videos h3{
	background: none repeat scroll 0 0 #334353;
    margin: 0;
    padding: 10px 15px;
    width: auto;
    font-family: 'ocraregular';
    font-weight: normal;
    font-size: 25px;
    color: #fff;
    text-transform: uppercase;
    text-shadow: 5px 5px 3px #000;
}
.review_game_images img{
	margin-left: 5px;
	margin-top: 0px;
	cursor: pointer;
	width:130px; /*width:21%;*/
	float: left;
}

/*.read_more_content > p {
    line-height: 1.5;
    margin: 0 auto;
    width: 90%;
}
.read_more_content.r0 > h4 {
    line-height: 1.5;
    margin: 0 auto;
    width: 90%;
}*/

.review_game_info{
	padding: 15px;
	/*margin-top: 6%; */
}
.review_game_info h4{
	font-family: Arial; margin: 10px 0 0 0 ; padding: 0; font-family: 'ocraregular'; font-weight: normal;
}
.review_game_info p {
	font-family: Arial;
	font-size: 14px;
	margin-top: 5px;
}
.review_game_info ul li{
	font-family: Arial;
	font-size: 14px;
}
.review_game_info span.read_more{
	font-family: 'ocraregular';
	color: #02094c;
	margin-top: 5px;
	cursor: pointer;
}
.read_more_content{
	display: none;
}
.playroom_review_full_content{
	width: 50%; /*was width: 913px;*/
	height: 700px;
	background: #334353;
	display: none;
	opacity: 0.8;
	color: #fff;
	margin-left: 6%; /*was margin-left: -21px;*/
	padding: 20px 10px;
	font-family: Helvetica,arial,sans-serif;
}
/*.read_more_content{
  	width: 913px;
	height: 700px;
	background: #334353;
	display: none;
	opacity: 0.8;
	color: #fff;
	margin-left: -21px;
	padding: 20px 10px;
}*/
.button.bClose{
	box-shadow: none;
	font: bold 131% sans-serif;
	padding: 8px 6px 2px;
	position: absolute;
	right: 10px;
	top: 10px;
	background: #000;
	display: inline-block;
	color: rgb(255, 255, 255);
	text-align: center;
	cursor: pointer;
	z-index: 15;
	width: 19px;
	height: 25px;
	font-size: 22px;
}

.spacer-01{
	padding-top: 6%;
	
}

.playroom_review_full_content .read_more_content{
	display: block;
}
.playroom_review_full_content span.read_more{
	display: none;
}
.each_video{
	width: 32.3%;
	margin-right: 0.4%;
	margin-left: 0.6%;
	margin-bottom: 12.5px;
	float: left;
	background: #fff;
}
.feat_video{
	width: 100%;
	margin-top: 10px;
	height: 190px;
	margin-bottom: 25px;
}
.video_link{
	margin: auto;
	width: 100%;
	height: 50px;
	background: #000;
	cursor: pointer;
}
.video_link img{
	width: 100%;
	height: 50px;
}
.rating {
  unicode-bidi: bidi-override;
  direction: rtl;
  width: 100px;
  display: inline;
}
.rating > span {
  display: inline-block;
  position: relative;
  width: 1.1em;
  font-size: 18px;
}

.rating > span.rate {
   content: "\2605";
   position: absolute;
}
.initial_hide{
	display: none;
}
.hideonclick{
}
.other_videos{
	padding-left: 0.5%;
	padding-right: 0.4%;
}

/*Thumbnail slider*/
.simple-cycle {
    width: 600px;
    margin: 0 auto;/*margin: 100px auto;*/
    overflow: hidden;
    height: 66px;
}

.simple-cycle .flow-slider {
    float: left;
    margin: 0 14px;
    width: 548px;
    height: 180px;
}

.simple-cycle .item {
    text-align: center;
    width: 137px;
}

.simple-cycle .item img {
    user-select:none;
    -moz-user-select:none;
    -khtml-user-select:none;
    -webkit-user-select:none;
    -o-user-select:none;
}

.simple-cycle .subtext {
    margin: 0 auto;
    width: 110px;
    font: 11px/12px Georgia;
    text-align: center;
}

.simple-cycle .arrow {
    height: 66px;/*height: 160px;*/
    width: 12px;
    float: left;
    cursor: pointer;
}

.simple-cycle .arrow:active {
    margin: 1px 0 -1px;
}

.simple-cycle .arrow-left {
    background: url(../wordpress-two/wp-content/themes/twentytwelve/img/arrows.png) 0 center no-repeat;
}

.simple-cycle .arrow-right {
    background: url(../wordpress-two/wp-content/themes/twentytwelve/img/arrows.png) -12px center no-repeat;
}
.www_FlowSlider_com-branding{display: none;}

/*Slider */
/* The Nivo Slider styles */
.nivoSlider {
	position:relative;
	width:100%;
	height:auto;
	overflow: hidden;
}
.nivoSlider img {
	position:absolute;
	top:0px;
	left:0px;
	max-width: none;
}
.nivo-main-image {
	display: block !important;
	position: relative !important; 
	width: 100% !important;
}

/* If an image is wrapped in a link */
.nivoSlider a.nivo-imageLink {
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	border:0;
	padding:0;
	margin:0;
	z-index:6;
	display:none;
	background:white; 
	filter:alpha(opacity=0); 
	opacity:0;
}
/* The slices and boxes in the Slider */
.nivo-slice {
	display:block;
	position:absolute;
	z-index:5;
	height:100%;
	top:0;
}
.nivo-box {
	display:block;
	position:absolute;
	z-index:5;
	overflow:hidden;
}
.nivo-box img { display:block; }

/* Caption styles */
.nivo-caption {
	position:absolute;
	left:0px;
	bottom:0px;
	background:#000;
	color:#fff;
	width:100%;
	z-index:8;
	padding: 5px 10px;
	opacity: 0.8;
	overflow: hidden;
	display: none;
	-moz-opacity: 0.8;
	filter:alpha(opacity=8);
	-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
	-moz-box-sizing: border-box;    /* Firefox, other Gecko */
	box-sizing: border-box;         /* Opera/IE 8+ */
}
.nivo-caption p {
	padding:5px;
	margin:0;
}
.nivo-caption a {
	display:inline !important;
}
.nivo-html-caption {
    display:none;
}
/* Direction nav styles (e.g. Next & Prev) */
.nivo-directionNav a {
	position:absolute;
	top:45%;
	z-index:9;
	cursor:pointer;
}
.nivo-prevNav {
	left:0px;
}
.nivo-nextNav {
	right:0px;
}
/* Control nav styles (e.g. 1,2,3...) */
.nivo-controlNav {
	text-align:center;
	padding: 15px 0;
}
.nivo-controlNav a {
	cursor:pointer;
}
.nivo-controlNav a.active {
	font-weight:bold;
}

.theme-default .nivoSlider {
	position:relative;
	background:#fff url(loading.gif) no-repeat 50% 50%;
    margin-bottom:10px;
    -webkit-box-shadow: 0px 1px 5px 0px #4a4a4a;
    -moz-box-shadow: 0px 1px 5px 0px #4a4a4a;
    box-shadow: 0px 1px 5px 0px #4a4a4a;
}
.theme-default .nivoSlider img {
	position:absolute;
	top:0px;
	left:0px;
	display:none;
}
.theme-default .nivoSlider a {
	border:0;
	display:block;
}

.theme-default .nivo-controlNav {
	text-align: center;
	padding: 20px 0;
}
.theme-default .nivo-controlNav a {
	display:inline-block;
	width:22px;
	height:22px;
	background:url(bullets.png) no-repeat;
	text-indent:-9999px;
	border:0;
	margin: 0 2px;
}
.theme-default .nivo-controlNav a.active {
	background-position:0 -22px;
}

.theme-default .nivo-directionNav a {
	display:block;
	width:30px;
	height:30px;
	background:url(arrows.png) no-repeat;
	text-indent:-9999px;
	border:0;
	opacity: 0;
	-webkit-transition: all 200ms ease-in-out;
    -moz-transition: all 200ms ease-in-out;
    -o-transition: all 200ms ease-in-out;
    transition: all 200ms ease-in-out;
}
.theme-default:hover .nivo-directionNav a { opacity: 1; }
.theme-default a.nivo-nextNav {
	background-position:-30px 0;
	right:15px;
}
.theme-default a.nivo-prevNav {
	left:15px;
}

.theme-default .nivo-caption {
    font-family: Helvetica, Arial, sans-serif;
}
.theme-default .nivo-caption a {
    color:#fff;
    border-bottom:1px dotted #fff;
}
.theme-default .nivo-caption a:hover {
    color:#fff;
}

.theme-default .nivo-controlNav.nivo-thumbs-enabled {
	width: 100%;
}
.theme-default .nivo-controlNav.nivo-thumbs-enabled a {
	width: auto;
	height: auto;
	background: none;
	margin-bottom: 5px;
}
.theme-default .nivo-controlNav.nivo-thumbs-enabled img {
	display: block;
	width: 120px;
	height: auto;
}

.slider-wrapper { 
	width: 80%; 
	margin: 100px auto;
}

/* Browser Resets
*********************************/
.flex-container a:active,
.flexslider a:active,
.flex-container a:focus,
.flexslider a:focus  {outline: none;}
.slides,
.flex-control-nav,
.flex-direction-nav {margin: 0; padding: 0; list-style: none;}

/* Icon Fonts
*********************************/
/* Font-face Icons */
@font-face {
	font-family: 'flexslider-icon';
	src:url('fonts/flexslider-icon.eot');
	src:url('fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'),
		url('fonts/flexslider-icon.woff') format('woff'),
		url('fonts/flexslider-icon.ttf') format('truetype'),
		url('fonts/flexslider-icon.svg#flexslider-icon') format('svg');
	font-weight: normal;
	font-style: normal;
}

/* FlexSlider Necessary Styles
*********************************/
.flexslider {margin: 0; padding: 0;}
.flexslider .slides > li {display: block; -webkit-backface-visibility: hidden;} /* Hide the slides before the JS is loaded. Avoids image jumping */
.flexslider .slides img {height: 64px; display: block;}
.flex-pauseplay span {text-transform: capitalize;}

/* Clearfix for the .slides element */
.slides:after {content: "\0020"; display: block; clear: both; visibility: hidden; line-height: 0; height: 0;}
html[xmlns] .slides {display: block;}
* html .slides {height: 1%;}

/* No JavaScript Fallback */
/* If you are not using another script, such as Modernizr, make sure you
 * include js that eliminates this class on page load */
.no-js .slides > li:first-child {display: block;}

/* FlexSlider Default Theme
*********************************/
.flexslider { 
	/*margin: 6px 4px 10px;*/
	margin: 0 auto;
	margin-top: 6px;
	width: 90%; 
	/*background: #fff;*/ 
	/*border: 4px solid #fff;*/ 
	position: relative; 
	-webkit-border-radius: 4px; 
	-moz-border-radius: 4px; 
	-o-border-radius: 4px; 
	border-radius: 4px; 
	/*-webkit-box-shadow: 0 1px 4px rgba(0,0,0,.2); 
	-moz-box-shadow: 0 1px 4px rgba(0,0,0,.2); 
	-o-box-shadow: 0 1px 4px rgba(0,0,0,.2); 
	box-shadow: 0 1px 4px rgba(0,0,0,.2);*/ 
	zoom: 1; 
}
.flex-viewport { max-height: 2000px; -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; transition: all 1s ease; }
.loading .flex-viewport { max-height: 300px; }
.flexslider .slides { zoom: 1; }
.carousel li { margin-right: 5px; }

/* Direction Nav */
.flex-direction-nav {*height: 0;}
.flex-direction-nav a  { 
	/*background: url(wp-content/themes/twentytwelve/img/buttons.png) no-repeat 0 0;*/
	top: 50%;
	text-indent: -99999px;
	display: block; 
	width: 26px; 
	height: 26px; 
	margin: -20px 0 0; 
	position: absolute; 
	top: 50%; 
	z-index: 10; 
	overflow: hidden; 
	opacity: 0; 
	cursor: pointer; 
	color: rgba(0,0,0,0.8); 
	text-shadow: 1px 1px 0 rgba(255,255,255,0.3); 
	-webkit-transition: none; 
	-moz-transition: none; 
	transition: none; 
}
.flex-direction-nav .flex-prev { 
	background: url(wp-content/themes/twentytwelve/img/buttons-left.png) no-repeat 0 0;
	margin-left: -36px; 
	text-align:-999999px;
}
.flex-direction-nav .flex-next { 
	background: url(wp-content/themes/twentytwelve/img/buttons-right.png) no-repeat 0 0;
	margin-right: -36px; 
	text-align: -999999px; 
}
.flexslider:hover .flex-prev { opacity: 0.7; left: 10px; }
.flexslider:hover .flex-next { opacity: 0.7; right: 10px; }
.flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover { opacity: 1; }
.flex-direction-nav .flex-disabled { opacity: 0!important; filter:alpha(opacity=0); cursor: default; }
.flex-direction-nav a:before  { font-family: "flexslider-icon"; font-size: 40px; display: inline-block; content: '\f001'; }
.flex-direction-nav a.flex-next:before  { content: '\f002'; }

/* Pause/Play */
.flex-pauseplay a { display: block; width: 20px; height: 20px; position: absolute; bottom: 5px; left: 10px; opacity: 0.8; z-index: 10; overflow: hidden; cursor: pointer; color: #000; }
.flex-pauseplay a:before  { font-family: "flexslider-icon"; font-size: 20px; display: inline-block; content: '\f004'; }
.flex-pauseplay a:hover  { opacity: 1; }
.flex-pauseplay a.flex-play:before { content: '\f003'; }

/* Control Nav */
.flex-control-nav {width: 100%; position: absolute; bottom: -40px; text-align: center;}
.flex-control-nav li {margin: 0 6px; display: inline-block; zoom: 1; *display: inline;}
.flex-control-paging li a {width: 11px; height: 11px; display: block; background: #666; background: rgba(0,0,0,0.5); cursor: pointer; text-indent: -9999px; -webkit-border-radius: 20px; -moz-border-radius: 20px; -o-border-radius: 20px; border-radius: 20px; -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); -moz-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); -o-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); box-shadow: inset 0 0 3px rgba(0,0,0,0.3); }
.flex-control-paging li a:hover { background: #333; background: rgba(0,0,0,0.7); }
.flex-control-paging li a.flex-active { background: #000; background: rgba(0,0,0,0.9); cursor: default; }

.flex-control-thumbs {margin: 5px 0 0; position: static; overflow: hidden;}
.flex-control-thumbs li {width: 25%; float: left; margin: 0;}
.flex-control-thumbs img {width: 100%; display: block; opacity: .7; cursor: pointer;}
.flex-control-thumbs img:hover {opacity: 1;}
.flex-control-thumbs .flex-active {opacity: 1; cursor: default;}

@media screen and (max-width: 860px) {
  .flex-direction-nav .flex-prev { opacity: 1; left: 10px;}
  .flex-direction-nav .flex-next { opacity: 1; right: 10px;}
}

.toggle { margin: 2px 0 0 14px; float: left; border-radius: 6px; -moz-border-radius: 6px; -webkit-border-radius: 6px; }
.toggle li { float: left; }
.toggle li a {width: 50px; padding: 6px 0; text-align: center; display: block; text-shadow: 1px 1px 0 #fff; font-size: 12px; font-weight: 600; color: #666; -webkit-border-radius: 0 4px 4px 0; -moz-border-radius: 0 4px 4px 0; -o-border-radius: 0 4px 4px 0; border-radius: 0 4px 4px 0; 

background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top, #ffffff 0%, #ededed 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#ededed)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #ffffff 0%,#ededed 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #ffffff 0%,#ededed 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #ffffff 0%,#ededed 100%); /* IE10+ */
background: linear-gradient(top, #ffffff 0%,#ededed 100%); /* W3C */

box-shadow: inset 1px 1px 0 #fff, inset -1px -1px 0 #fff;
-moz-box-shadow: inset 1px 1px 0 #fff, inset -1px -1px 0 #fff;
-webkit-box-shadow: inset 1px 1px 0 #fff, inset -1px -1px 0 #fff;

}
.toggle li:first-child a {-webkit-border-radius: 4px 0 0 4px; -moz-border-radius: 4px 0 0 4px; -o-border-radius: 4px 0 0 4px; border-radius: 4px 0 0 4px;}
.toggle li a:hover { background: #ededed; color: #222; }
.toggle li a.active { background: #c8e0f3; color: #325874; cursor: default; box-shadow: inset 0 0 3px rgba(0,0,0,0.4); -moz-box-shadow: inset 0 0 3px rgba(0,0,0,0.4); -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.4); }

.slider { margin: 50px 0 10px!important;}
#carousel li {margin-right: 5px;}
#carousel img {display: block; opacity: .5; cursor: pointer;}
#carousel img:hover {opacity: 1;}
#carousel .flex-active-slide img {opacity: 1; cursor: default;}

.button {
  display: inline-block;
  margin: 0;
  padding: .461em 1.563em .41em;
  color: #fff!important;
  text-align: center;
  text-decoration: none;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.7);
  text-transform: uppercase;
  line-height: 1;
  font-size: .9em;
  cursor: pointer;
  font-family: "proxima-nova", sans-serif;
  border: 1px solid #1a4064;
  background: #255a8c;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  -webkit-box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.1), inset 0 0 1px 1px rgba(255, 255, 255, 0.15);
  -moz-box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.1), inset 0 0 1px 1px rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.1), inset 0 0 1px 1px rgba(255, 255, 255, 0.15);
}
.button:active  {
  -webkit-box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.1), inset 0 0 1px 1px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.1), inset 0 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.1), inset 0 0 1px 1px rgba(0, 0, 0, 0.1);
}
.button.green  {
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
  border: 1px solid #578824;
  background: #71b02f;
}
.button.green:hover  {
  background: #79bc32;
}


</style>
	<div id="content" class="playroom_container">
		<div class="playroom_header">
			<h1>THE PLAYROOM</h1>
		</div> <!--  end playroom_header -->

		<div class="playroom_carousel">
			<!--<div class="slider-wrapper theme-default">
			<div id="slider" class="nivoSlider">-->
			<div class="the_carousel">
				<div id="home-carousel-container">
					<ul class="carousel-container">
						<li class="carousel-img-container">
						<?php $loop = new WP_Query( array( 'post_type' => 'the_playroom_post') ); 
							$the_id = 0; $reviewnum = 0;
						?>
							<?php while ( $loop->have_posts() ) : $loop->the_post();
								 
								$the_carousel_images = get_post_meta($post->ID, 'custom_movie_image', false);

								foreach ($the_carousel_images as $the_image){ 
						 			echo '<a title="" href="#" style="display: none;" class="read_more" id="r'. $the_id .'" reviewnum="' . $reviewnum . '">';
						 			echo '<img src="' . $the_image . '" >';				
									echo '</a>';
									$the_id++; $reviewnum++;
								}
							?>
							<?php endwhile; ?>
						</li>
						<li class="home-carousel-strip" style="display: list-item;" game="true">
							<div class="carousel-content">
								<img src="/wp-content/themes/yfm2012/images/arrows.png" class="arrows-div">
								<?php $loopers = new WP_Query( array( 'post_type' => 'the_playroom_post') ); 
									
									//$the_teasers = get_post_meta($post->ID, 'custom_textarea_teaser', false);
									while ( $loopers->have_posts() ) : $loopers->the_post();
										$game_titles = get_post_meta($post->ID, 'custom_text_game_name', false);
										foreach ($game_titles as $game_title) {?>	
											
											<div class="strip-text" style="display: none;">
												<a href="#"><p class="carousal-title"><?php echo $game_title; ?></p>
												<p class="teaser"></p></a>
											</div>
										<?php }?>

									<?php endwhile; ?>

							<span class="clear"></span>	
							</div>
							<div id="carousel-indicator"><div>
							<!--<span num="0" class="carousel-selector"></span>
							<span num="1" class="carousel-selector"></span>
							<span num="2" class="carousel-selector"></span>-->
							</div></div>
						</li>	
					</ul>
				</div>	
			</div>

		</div> <!--  end playroom_carousel -->

		<div class="playroom_review_videos">
			<div class="playroom_reviews">
				<h3>Game reviews </h3>
				<div class="review_game_images">
					
					<div class="flexslider">
          				<ul class="slides">
          					<?php $looped = new WP_Query( array( 'post_type' => 'the_playroom_post') ); $counter=0;?>
							<?php while ( $looped->have_posts() ) : $looped->the_post();

						 		$images = get_post_meta($post->ID, 'custom_thumb_image', false);
						 		
						 			foreach ($images as $image) {
						 				echo '<li><img src=" ' . $image . ' " reviewset="review_game' . $counter . '" /></li>';
						 				$counter++;		
						 			}
						 		?>
							<?php endwhile; ?>
          				</ul>
          			</div>
				</div>
				
				<div class="review_game_info">
					<?php $loopest = new WP_Query( array( 'post_type' => 'the_playroom_post') ); $isco = 0; $mandzukish=0; ?>
						<?php while ( $loopest->have_posts() ) : $loopest->the_post(); ?>

							<div class="review_game<?php echo $isco;?>" style="display: none; color: #fff;">

								<h4><?php echo get_post_meta($post->ID, 'custom_text_game_name', true);   ?><br></h4>

								<p><?php echo get_post_meta($post->ID, 'custom_textarea_intro', true);   ?></p>

								<?php 

									$over_rating = get_post_meta($post->ID, 'custom_text_overall_rating', true); 
									$graphics_rating = get_post_meta($post->ID, 'custom_text_graphics_rating', true);
									$experience_rating = get_post_meta($post->ID, 'custom_text_experience_rating', true);
									$gameplay_rating = get_post_meta($post->ID, 'custom_text_gameplay_rating', true);
									$entertainment_rating = get_post_meta($post->ID, 'custom_text_entertainment_rating', true);

								?>
								<?php if (!empty($over_rating))
									echo '<p class="hideonclick" style="display: block;"><span style="width:138px; float:left;">Overall Rating:</span> <span class="rating">' . str_repeat("☆", $over_rating) .'</span></p>';
								?>
								<?php if (!empty($graphics_rating))
									echo '<p class="hideonclick" style="display: block;"><span style="width:138px; float:left;">Graphics:</span> <span class="rating">' . str_repeat("☆", $graphics_rating) . '</span></p>';
								?>
								<?php if (!empty($experience_rating))
									echo '<p class="hideonclick" style="display: block;"><span style="width:138px; float:left;">Experience:</span> <span class="rating">' . str_repeat("☆", $experience_rating) . '</span></p>';
								?>
								<?php if (!empty($gameplay_rating))
									echo '<p class="hideonclick" style="display: block;"><span style="width:138px; float:left;">Gameplay:</span> <span class="rating">' . str_repeat("☆", $gameplay_rating) . '</span></p>';
								?>
								<?php if (!empty($entertainment_rating))
									echo '<p class="hideonclick" style="display: block;"><span style="width:138px; float:left;">Entertainment:</span> <span class="rating">' . str_repeat("☆", $entertainment_rating) . '</span></p>';
								?>
								<br>
								<p><span class="read_more" id="r<?php echo $mandzukish; ?>" reviewnum="<?php echo $mandzukish; ?>">Read More...</span></p>
								<span class="read_more_content r<?php echo $mandzukish; ?>" >
									<!--<h4><?php //echo get_post_meta($post->ID, 'custom_text_game_name', true);   ?></h4>-->
									
									<p><?php echo get_post_meta($post->ID, 'custom_textarea_full_content', true);   ?></p>
									<br><br>
								<?php if (!empty($over_rating))	
									echo '<p><span style="width:138px; float:left;">Overall Rating:</span> <span class="rating">' . str_repeat("☆", $over_rating) . '</span></p>';
								?>	
								<?php if (!empty($over_rating))
									echo '<p><span style="width:138px; float:left;">Graphics:</span> <span class="rating">' . str_repeat("☆", $graphics_rating) . '</span></p>';
								?>
								<?php if (!empty($over_rating))
									echo '<p><span style="width:138px; float:left;">Experience:</span> <span class="rating">' . str_repeat("☆", $experience_rating) .'</span></p>';
								?>
								<?php if (!empty($over_rating))
									echo '<p><span style="width:138px; float:left;">Gameplay:</span> <span class="rating">' .str_repeat("☆", $gameplay_rating) .'</span></p>';
								?>
								<?php if (!empty($over_rating))	
									echo '<p><span style="width:138px; float:left;">Entertainment:</span> <span class="rating">' . str_repeat("☆", $entertainment_rating) .'</span></p>';
								?>
								</span>
							
							</div>
						<?php $isco++; $mandzukish++; ?>
						<?php endwhile;?>
				</div>

			</div> <!--  end playroom_reviews -->
			<div class="playroom_videos">
				<h3>Video Trailers</h3>
				<div class="feat_video">
					<iframe width="301" height="190" frameborder="0" src="http://www.youtube.com/embed/kwFKnDRCGl8?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"></iframe>
				
				</div>
				<div class="other_videos">
					<?php $loop_vids = new WP_Query( array( 'post_type' => 'the_playroom_post') ); ?>
						<?php while ( $loop_vids->have_posts() ) : $loop_vids->the_post();?>
							<div class="each_video"><div class="video_link" video="http://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'custom_text_game_trailer', true);?>?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"><img src="<?php echo get_post_meta($post->ID, 'custom_thumb_image', true);?>"/></div></div>
					<?php endwhile;?>
				</div>
			</div> <!--  end playroom_videos -->
		</div> <!--  end playroom_review_videos -->
		<div class="playroom_final">
			<div class="playroom_social">
			
			</div> <!--  end playroom_social -->
			<div class="playroom_final_info">
			
			</div> <!--  end playroom_reviews -->
		</div> <!--  end playroom_final -->
		<div class="playroom_review_full_content">
			
		</div>
	</div> <!--end playroom_container-->

	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<!--<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/jquery.bpopup.js"></script>-->
	<script src="https://raw.github.com/dinbror/bpopup/master/jquery.bpopup.min.js"></script>
	<!--<script src="<?php //echo get_bloginfo('template_directory');?>/js/jquery.thumbnailScroller.js"></script>
	<script src="<?php //echo get_bloginfo('template_directory');?>/js/jquery-ui-1.8.13.custom.min.js"></script>-->
	<!--<script src="<?php //echo get_bloginfo('template_directory');?>/js/flowslider.jquery.js"></script>--> <!--For the thumbnail slider-->
	<!--<script src="<?php //echo get_bloginfo('template_directory');?>/js/jquery.nivo.slider.js"></script> --><!--For the playroom carousel slider-->
	
	<!--<script src="<?php// echo get_bloginfo('template_directory');?>/js/main.js"></script>--> <!--For the playroom carousel slider-->
	<script src="<?php echo get_bloginfo('template_directory');?>/js/jquery.mousewheel.js"></script>

	<script src="<?php echo get_bloginfo('template_directory');?>/js/jquery.easing.js"></script>
	
	<script src="<?php echo get_bloginfo('template_directory');?>/js/jquery.flexslider-min.js"></script>
	

	<script src="<?php echo get_bloginfo('template_directory');?>/js/jquery.jcarousel.min.js"></script> <!--For the playroom carousel slider-->

	<script>
$(document).ready(function(){
	$(".review_game_info div").hide();
	$(".review_game_info div.review_game0").show();
	$(".hideonclick").show();
	$(".review_game_images img" ).click(
    function() {      
      //$(".eachgoldteeth").css({'opacity':0.5});
      //$(this).css({'opacity':1});
      //var imageHeight = $(this).height();
      var divcont1 = "."+$(this).attr("reviewset");   
      //$(divcont).css({'margin-top':-imageHeight/2 + 'px'});
      $(".review_game_info div").hide();
   	  $(divcont1).stop(true,true).fadeIn(1000);
    }/*, function() {
     //$(".eachgoldteeth").css({'opacity':1});
     var divcont2 = "."+$(this).attr("reviewset");  
     $(divcont2).stop(true,true).fadeOut(500);
     $(divcont1).stop(true,true).fadeIn(400);
     //$(".review_game_info div").hide();
	 //$(".review_game_info div.review_game1").show();
    }*/
    );
	$("div#playroom_close.button.bClose").click(function(){
		//$('.hideonclick').show();
		//console.log("ggjh");
		alert("playroom");
	})
	$("span.read_more, .carousel-img-container a.read_more" ).click(
    function() {      
    	//alert("AWOL");
    	//var test = document.getElementsByTagName('playroom_review_full_content');
    	$('.playroom_review_full_content').empty();
    	$('.playroom_review_full_content').append('<div class="button bClose" id="playroom_close" style="float:right; position:relative;  margin-right: -13px; top:-20px; background:#ae0000;">X</div>');
    	//var allElements = document.getElementsByTagName('*');
		//for(var i = 0; i < allElements.length; i++) {
  		//	console.log(allElements[i].id)
		//}
    	var content = $(this).attr("id");
    	//alert(content);
    	
    	var contentnum = $(this).attr("reviewnum");
    	content = $(".review_game"+contentnum).html();
    	//alert(contentnum);
    	//alert($(content).html());
    	    	  $('.playroom_review_full_content').append(content);
    	  $('.hideonclick').hide();
    	  $('.playroom_review_full_content').css('background', 'rgba(1,11,30, 0.6 ');
    	$('.playroom_review_full_content').bPopup({
                            zIndex: 50000, 
                            modalClose: false,
                            modalColor:"#334353",
                            onClose: function(){ $('.hideonclick').show();	}
                        });


    }
    );

  //   $(".read_more").click(function(){
  //   	$('.playroom_review_full_content').empty();
  //   	$('.playroom_review_full_content').append('<div class="button bClose" id="playroom_close" style="float:right; position:relative;  margin-right: -13px; top:-20px; background:#ae0000;">X</div>');
  //   	//alert("t");
  //     $('.playroom_review_full_content').bPopup({
  //                           zIndex: 501, 
  //                           modalClose: false,
  //                           modalColor:"#000",
  //                           onClose: function(){ $('.hideonclick').show();	}
  //                       }); 
  // })
	//$('.playroom_review_full_content').bPopup({ });

	$(".video_link").click(function(){
		var video = $(this).attr("video");
		$(".feat_video iframe").attr("src"," ");
		$(".feat_video iframe").attr("src",video);
	})

	


	});
	</script>

	<!--<script>
		/* jQuery.noConflict() for using the plugin along with other libraries. 
		   You can remove it if you won't use other libraries (e.g. prototype, scriptaculous etc.) or 
		   if you include jQuery before other libraries in yourdocument's head tag. 
		   [more info: http://docs.jquery.com/Using_jQuery_with_Other_Libraries] */
		jQuery.noConflict(); 
		/* calling thumbnailScroller function with options as parameters */
			(function($){
			window.onload=function(){ 
				$("#tS2").thumbnailScroller({ 
					scrollerType:"hoverPrecise", 
					scrollerOrientation:"horizontal", 
					scrollSpeed:2, 
					scrollEasing:"easeOutCirc", 
					scrollEasingAmount:600, 
					acceleration:4, 
					scrollSpeed:800, 
					noScrollCenterSpace:10, 
					autoScrolling:0, 
					autoScrollingSpeed:2000, 
					autoScrollingEasing:"easeInOutQuad", 
					autoScrollingDelay:500 
				});
			}
		})(jQuery);
	</script>-->
	<!-- thumbnailScroller script -->

	<script>
		 $('.flexslider').flexslider({
		    animation: "slide",
		    animationLoop: true,
		    itemWidth: 140,
		    itemMargin: 5
		  });
	</script>

    <script>
    $(document).ready(function(){
 		$(".carousel-img-container img").hover(function(){
            clearTimeout(timer);     
        },
        function(){
            timer = setTimeout(carousel_action, 2000,[item_count, (carousel_count+1)]);

        });
	});

	</script>

	<script>
		$(function(){
		  var toggles = $('.toggle a'),
		      codes = $('.code');
		  
		  toggles.on("click", function(event){
		    event.preventDefault();
		    var $this = $(this);
		    
		    if (!$this.hasClass("active")) {
		      toggles.removeClass("active");
		      $this.addClass("active");
		      codes.hide().filter(this.hash).show();
		    }
		  });
		  toggles.first().click();
		});
	</script>

   <!-- <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
 -->

<?php get_footer(); ?>
