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
    text-transform: uppercase;
    text-shadow: 5px 5px 3px #000;
}
.review_game_images img{
	margin-left: 15px;
	margin-top: 4px;
	cursor: pointer;
	width:130px; /*width:21%;*/
	float: left;
}

.read_more_content.r0 > p {
    line-height: 1.5;
    margin: 0 auto;
    width: 90%;
}
.read_more_content.r0 > h4 {
    line-height: 1.5;
    margin: 0 auto;
    width: 90%;
}

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
	width: 913px;
	height: 700px;
	background: #334353;
	display: none;
	opacity: 0.8;
	color: #fff;
	margin-left: -21px;
	padding: 20px 10px;
}
.read_more_content{
  	width: 913px;
	height: 700px;
	background: #334353;
	display: none;
	opacity: 0.8;
	color: #fff;
	margin-left: -21px;
	padding: 20px 10px;
}
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
					<?php $loop = new WP_Query( array( 'post_type' => 'the_playroom_post', 'numberposts' => 999) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<img src="<?php echo get_post_meta($post->ID, 'custom_movie_image', true);   ?>" />					
					<?php endwhile; ?>
				</div>
			</div>

		</div> <!--  end playroom_carousel -->

		
		<?php $loop = new WP_Query( array( 'post_type' => 'the_playroom_post') ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post();
				$isco=0; $count = 0;
				
				$images = get_children( array( 'post_parent' => 1, 'post_mime_type' => 'image', 'order' => 'ASC', 'numberposts' => 999 ) ); 
			  
			?>
		

		<div class="playroom_review_videos">
			<div class="playroom_reviews">
				<h3>Game reviews </h3>
				<div class="review_game_images">
					
					<div class="simple-cycle">
        				<div class="arrow arrow-left"></div>
        					<div class="flow-slider">

        						<?php 
        							$thumbnail_imgs = get_post_meta($post->ID, 'custom_thumb_image', true);
        							echo '<img src = ">';
        							echo $thumbnail_imgs;
        							echo '"/>';
        							//raise($thumbnail_imgs);
        						?>
					<!--</div>
					</div>
					</div>-->
						</div>
						<div class="arrow arrow-right"></div>
					</div>
					</div>
				
				<div class="review_game_info">
					<div class="review_game<?php echo $isco;?>" style="display: block; color: #fff;">

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
							echo '<p class="hideonclick" style="display: block;"><span style="width:138px; float:left;">Overall Rating:</span> <span class="rating">' . str_repeat("☆", $over_rating) .'</p>';
						?>
						<?php if (!empty($graphics_rating))
							echo '<p class="hideonclick" style="display: block;"><span style="width:138px; float:left;">Graphics:</span> <span class="rating">' . str_repeat("☆", $graphics_rating) . '</p>';
						?>
						<?php if (!empty($experience_rating))
							echo '<p class="hideonclick" style="display: block;"><span style="width:138px; float:left;">Experience:</span> <span class="rating">' . str_repeat("☆", $experience_rating) . '</p>';
						?>
						<?php if (!empty($gameplay_rating))
							echo '<p class="hideonclick" style="display: block;"><span style="width:138px; float:left;">Gameplay:</span> <span class="rating">' . str_repeat("☆", $gameplay_rating) . '</p>';
						?>
						<?php if (!empty($entertainment_rating))
							echo '<p class="hideonclick" style="display: block;"><span style="width:138px; float:left;">Entertainment:</span> <span class="rating">' . str_repeat("☆", $entertainment_rating) . '</p>';
						?>
						<br>
						<p><span class="read_more" id="r0" reviewnum="0">Read More...</span></p>
						<span class="read_more_content r0" style="background-color: rgba(1, 11, 30, 0.6); left: 227px; position: absolute; top: 521px; z-index: 503; opacity: 1; background-position: initial initial; background-repeat: initial initial;"><span class="button bClose" style="float: right; position: relative; margin-right: -13px; top: -20px; background: #ae0000;">X</span>
							<h4><?php echo get_post_meta($post->ID, 'custom_text_game_name', true);   ?></h4>
							<br><br>
							<p><?php echo get_post_meta($post->ID, 'custom_textarea_full_content', true);   ?></p>
							<br><br>
						<?php if (!empty($over_rating))	
							echo '<p><span style="width:138px; float:left;">Overall Rating:</span> <span class="rating">' . str_repeat("☆", $over_rating) . '</p>';
						?>	
						<?php if (!empty($over_rating))
							echo '<p><span style="width:138px; float:left;">Graphics:</span> <span class="rating">' . str_repeat("☆", $graphics_rating) . '</p>';
						?>
						<?php if (!empty($over_rating))
							echo '<p><span style="width:138px; float:left;">Experience:</span> <span class="rating">' . str_repeat("☆", $experience_rating) .'</p>';
						?>
						<?php if (!empty($over_rating))
							echo '<p><span style="width:138px; float:left;">Gameplay:</span> <span class="rating">' .str_repeat("☆", $gameplay_rating) .'</p>';
						?>
						<?php if (!empty($over_rating))	
							echo '<p><span style="width:138px; float:left;">Entertainment:</span> <span class="rating">' . str_repeat("☆", $entertainment_rating) .'</p>';
						?>
						</span>
					
					</div>
				</div>

			</div> <!--  end playroom_reviews -->
			<div class="playroom_videos">
				<h3>Video Trailers</h3>
				<div class="feat_video">
					<iframe width="301" height="190" frameborder="0" src="http://www.youtube.com/embed/kwFKnDRCGl8?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"></iframe>
				
				</div>
				<div class="other_videos">
					<div class="each_video"><div class="video_link" video="http://www.youtube.com/embed/kwFKnDRCGl8?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"><img src="/wp-content/uploads/game_carousel_items/sponge.png"></div></div>
					<div class="each_video"><div class="video_link" video="http://www.youtube.com/embed/de2KlsLnIVU?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"><img src="/wp-content/uploads/game_carousel_items/diablo.png"></div></div>
					<div class="each_video"><div class="video_link" video="http://www.youtube.com/embed/byi7TA4iaEU?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"><img src="/wp-content/uploads/game_carousel_items/xcom.png"></div></div>
					
					<div class="each_video"><div class="video_link" video="http://www.youtube.com/embed/0GECUR5Wgyc?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"><img src="/wp-content/uploads/game_carousel_items/puppeteer.png"></div></div>
					<div class="each_video"><div class="video_link" video="http://www.youtube.com/embed/pRSZy12EOSs?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"><img src="/wp-content/uploads/game_carousel_items/metalgear.png"></div></div>
					<div class="each_video"><div class="video_link" video="http://www.youtube.com/embed/foGfXQ73jHw?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"><img src="/wp-content/uploads/game_carousel_items/pes2014.png"></div></div>
					<div class="each_video"><div class="video_link" video="http://www.youtube.com/embed/CrtwqDt0IEk?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"><img src="/wp-content/uploads/game_carousel_items/battlefield4.png"></div></div>
					<div class="each_video"><div class="video_link" video="http://www.youtube.com/embed/Zxnx3W-HA18?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"><img src="/wp-content/uploads/game_carousel_items/callofduty.png"></div></div>
					<div class="each_video"><div class="video_link" video="http://www.youtube.com/embed/isyG5XtIUcw?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"><img src="/wp-content/uploads/game_carousel_items/grandtheft.png"></div></div>
				</div>
			</div> <!--  end playroom_videos -->
		</div> <!--  end playroom_review_videos -->
		<div class="playroom_final">
			<div class="playroom_social">
			
			</div> <!--  end playroom_social -->
			<div class="playroom_final_info">
			
			</div> <!--  end playroom_reviews -->
		</div> <!--  end playroom_final -->
		
	</div>
	<?php endwhile; ?>

	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<!--<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/jquery.bpopup.js"></script>-->
	<script src="https://raw.github.com/dinbror/bpopup/master/jquery.bpopup.min.js"></script>
	<!--<script src="<?php //echo get_bloginfo('template_directory');?>/js/jquery.thumbnailScroller.js"></script>
	<script src="<?php //echo get_bloginfo('template_directory');?>/js/jquery-ui-1.8.13.custom.min.js"></script>-->
	<script src="<?php echo get_bloginfo('template_directory');?>/js/flowslider.jquery.js"></script> <!--For the thumbnail slider-->
	<!--<script src="<?php //echo get_bloginfo('template_directory');?>/js/jquery.nivo.slider.js"></script> --><!--For the playroom carousel slider-->
	
	<!--<script src="<?php// echo get_bloginfo('template_directory');?>/js/main.js"></script>--> <!--For the playroom carousel slider-->

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
    	
    	$('.playroom_review_full_content').empty();
    	$('.playroom_review_full_content').append('<div class="button bClose" id="playroom_close" style="float:right; position:relative;  margin-right: -13px; top:-20px; background:#ae0000;">X</div>');
    	var content = $(this).attr("id");
    	var contentnum = $(this).attr("reviewnum");
    	content = $(".review_game"+contentnum).html();
    	//alert(contentnum);
    	//alert($(content).html());
    	    	  $('.playroom_review_full_content').append(content);
    	  $('.hideonclick').hide();
    	  $('.playroom_review_full_content').css('background', 'rgba(1,11,30, 0.6 ');
    	$('.playroom_review_full_content').bPopup({
                            zIndex: 501
                            , modalClose: false,
                            modalColor:"#334353",
                            onClose: function(){ $('.hideonclick').show();	}
                        });


    }
    );

    $(".read_more").click(function(){
    //alert("t");
      $('.read_more_content').bPopup({
                            zIndex: 501, 
                            modalClose: false,
                            modalColor:"#000",
                            onClose: function(){ $('.hideonclick').show();	}
                        }); 
  })
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

	<!-- Write some code to start sliding. -->    
    <script>
        jQuery(document).ready(function($) {
            // create a slider out of each element with .simple-cycle class name
            $(".simple-cycle").each(function(k, sc) {
                var $sc = $(sc);
                $sc.children(".flow-slider").FlowSlider({
                    marginStart: 0,
                    marginEnd: 0,
                    infinite: true,
                    startPosition: 0.0,
                    position: 0.0,
                    animationOptions: {
                        snap: true
                    },
                    controllers: ["Event", "Event"],
                    controllerOptions: [
                        {
                            el: $sc.children(".arrow-left"),
                            step: -137
                        },
                        {
                            el: $sc.children(".arrow-right"),
                            step: 137
                        },
                    ]
                });
            });
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

   <!-- <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
 -->

<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/mixpanel.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/jplayer/js/jquery.jplayer.min.js"></script>
<!-- styles needed by jScrollPane -->

<!-- the mousewheel plugin - optional to provide mousewheel support -->
<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/jquery.mousewheel.js"></script>

<!-- the jScrollPane script -->
<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/jquery.jscrollpane.min.js"></script>

<!-- the PJAX script -->
<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/jquery.pjax.js"></script>

<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/twitStream.js"></script>

<!-- jQuery Validation -->
<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/jquery.validate.js"></script>

<!-- colorbox -->
<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/jquery.cookie.js"></script>
<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/jquery.bpopup.js"></script>
<!-- <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> -->
<!-- <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/Yfm.json?callback=twitterCallback2&count=1"></script> -->
<script type="text/javascript" src="http://yworld.co.za/wp-content/themes/yfm2012/js/main.js"></script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1301518-26']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- start Google Analytics -->
<script type="text/javascript">
(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.increment".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
mixpanel.init("7ed87bbbc45eef04adf9ed188fcb9422");
</script>
<!-- end Google Analytics -->
<script type="text/javascript">
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '50e5a6cdf5a1f5265b00000b');
    t.src = '//secure.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>
<script type="text/javascript">
  showTweetLinks='all';
</script>

<script type="text/javascript">
function wp_attempt_focus() {
setTimeout( function() {
try {
d = document.getElementById('user_login');
d.value = '';
d.focus();
} catch(e){}
}, 200 );
}
wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload()
</script>
<!--Plugin WP Missed Schedule 2011.0424.3333 Active--><script>
$(document).ready(function(){
    //$.cookie('powerpage_seen', 'no');
    //cookieval = $.cookie('powerpage_seen');
    if(!$.cookie('powerpage_seen')){
   $('.powerpage2-container').bPopup({
                            zIndex: 501
                            , modalClose: false,
                            modalColor:"#000"
                        });
   //$.cookie('powerpage_seen', 'yes', { expires: 1 });
   $(".button.bClose, .hrefClose").click(function(){
      $.cookie('powerpage_seen', 'yes', { path: '/' }, { expires: 1 });
      //$.cookie('powerpage2_seen', 'no', { path: '/' });
   })
 }
 /*else if(($.cookie('powerpage_seen')))
 {
 	if($.cookie('powerpage2_seen') == 'no'){
 	$('.powerpage-container').bPopup({
                            zIndex: 501
                            , modalClose: false,
                            modalColor:"#000"
                        });
   //$.cookie('powerpage_seen', 'yes', { expires: 1 });
   $(".button.bClose ").click(function(){
      $.cookie('powerpage2_seen', 'yes', { path: '/' }, { expires: 1 });
   })
	}
 }*/
 
  // hide #back-top first
  $(".pop").click(function(){
    $('.powerpage-container').bPopup({
                            zIndex: 501
                            , modalClose: false,
                            modalColor:"#000"
                        });    
  })
  $("#back-top").hide();
  
  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) {
        $('#back-top').fadeIn(300);
      } else {
        $('#back-top').fadeOut();
      }
    });

    // scroll body to 0px on click
    $('#back-top a').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 600);
      return false;
    });
  });
  $(".pop-termss").click(function(){
    //alert("t");
      $('#pop-terms').bPopup({
                            zIndex: 501
                            , modalClose: false,
                            modalColor:"#000"
                        }); 
  })

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


<style>
/*
Back to top button 
*/
#back-top {
  position: fixed;
  bottom: 30px;
  left: 4%;
  display:none;
  z-index: 2;
}
#back-top a {
  width: 80px;
  display: block;
  text-align: center;
  font: 11px/100% Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  text-decoration: none;
  color: #c90e15;
  /* background color transition */
  -webkit-transition: 1s;
  -moz-transition: 1s;
  transition: 1s;
}
#back-top a:hover {
  color: #000;
}
/* arrow icon (span tag) */
#back-top span {
  width: 51px;
  height: 81px;
  display: block;
  margin-bottom: 7px;
  background: url('http://www.yworld.co.za/arrow_up.png') no-repeat center center;
  /* rounded corners 
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
   background color transition */
  -webkit-transition: 1s;
  -moz-transition: 1s;
  transition: 1s;
}
#back-top a:hover span {
  background-color: none;
}
#pop-terms{
  margin: auto;
            width:870px;
            height: 1800px;
            color: #000;
            font-family: 'Times New Roman';
            background: #f0f0f0;
            padding: 5px 5px;
            top: 40px; padding: 20px; overflow: scroll;
}
</style>
<p id="back-top">
    <a href="#top"><span></span></a>
  </p>  
</body>

</html>
	