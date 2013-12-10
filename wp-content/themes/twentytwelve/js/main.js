jQuery(document).ready(function(){

//#####################################
//###### Jquery form validation #######
//#####################################

$.validator.addMethod("wordCount",
   function(value, element, params) {
      var typedWords = jQuery.trim(value).split(' ').length;
 
      if(typedWords <= params[0]) {
         return true;
      }
      jQuery.format(typedWords);
   },
   jQuery.format("Only {100} words allowed.")
);

$("#steristumpieReg").validate({
   rules: {
      motivation: {
         required: true,
         wordCount: ['100']
      }
   },
});

		//########################
//###### Music Upload Validate #######
//########################

$("#uploadSubmit").click(function(){
	$(".music_submission_error").empty();
	var err = 0; var cor = 0;
	var artist = $("#uploadForm #artist").attr("value");
	var email = $("#uploadForm #email").attr("value");
	var title = $("#uploadForm #title").attr("value");
	var composer = $("#uploadForm #composer").attr("value");
	var contact = $("#uploadForm #contact").attr("value");
	var publisher = $("#uploadForm #publisher").attr("value");
	var sanro = $("#uploadForm #sanro").attr("value");
	var file_ext =  $("#uploadForm #song").attr("value").substring($("#uploadForm #song").attr("value").lastIndexOf('.') + 1); 
	isSet(email,"Email");isSet(title,"Title");isSet(composer,"Composer");isSet(contact,"Contact");isSet(publisher,"Publisher");isSet(sanro,"Sanro");isSet(artist,"Artist");
	function isSet(element_value, element){
		if(element_value.length<2){
			$(".music_submission_error").append("<p style='font-size: 12px; color: #ce1820; text-shadow: black 0.1em 0.1em 0.2em; display: inline; padding-right: 20px;'>"+element+" Is required</p>");
			err=err+1;
		}
		else cor=cor+1;
	}
	var diff = cor-err;
	

	if(diff!=7)
		return false;
	else 
	{
		if(file_ext=="m4a"||file_ext=='mp3'||file_ext=='wav'||file_ext=='wma'||file_ext=='mp4'||file_ext=='amr'){
			return true;
		}
		else {
			$(".music_submission_error").append("<p style='font-size: 12px; color: #ce1820; text-shadow: black 0.1em 0.1em 0.2em; display: inline; padding-right: 20px;'>Upload Your Audio Track</p>");
			return false;
		}
	}
})

		//########################
//###### Smoothies #######
//########################


		$('.carousel-img-container a').click(function() {
			ti = $(this).attr('title');

			if (ti == 'ASK THE CEO') {
				popurl = '/ask_the_ceo.php';
				title = 'Ask the CEO';
				w = 480;
				h = 159;
				popupwindow(popurl, title, w, h);
				return false;
			}
		});

		//PJAX links
		$('#mainmenu .pjax').pjax('#content');
		$('#charts-nav .pjax').pjax('#content');

		$("#multimedia-table a[rel^='prettyPhoto']").prettyPhoto({
			slideshow: 5000,
			autoplay_slideshow: false
		});
		$("#mycarousel a[rel^='prettyPhoto']").prettyPhoto({
			slideshow: 5000,
			autoplay_slideshow: false
		});
		$(".uploadTitle a[rel^='prettyPhoto']").prettyPhoto({
			slideshow: 5000,
			autoplay_slideshow: false
		});
		$(".ss_applicant").prettyPhoto({
			slideshow: 5000,
			autoplay_slideshow: false,
			show_title: false,
			social_tools: false
		});

		//Apply scrollbars across the site to the podcasts
		// $(".podcast-playlist").jScrollPane();
		// $(".media-playlist").jScrollPane({showArrows:true});
		// $(".mm-scroll-container").jScrollPane({showArrows:true});

    $("#mycarousel").jcarousel({
        auto: 5,
        wrap: 'last',
        initCallback: mycarousel_initCallback,
        buttonNextHTML: null,
        buttonPrevHTML: null
    });

	$('.switch-top-40').click(function() {
		if($("#top40-10").is(":visible")){
			$("#top40-10").hide();
			$("#top40-all").show();
		} else {
			$("#top40-10").show();
			$("#top40-all").hide();
		}
	});

		//CHROME INPUT BOX AUTOFILL FIX

		// if (navigator.userAgent.toLowerCase().indexOf("chrome") >= 0) {
  //   $(window).load(function(){
  //       $('input:-webkit-autofill').each(function(){
  //           var text = $(this).val();
  //           var name = $(this).attr('name');
  //           $(this).after(this.outerHTML).remove();
  //           $('input[name=' + name + ']').val(text);
  //       });
  //   });
		// }

		//*****************************************
	    // HOME PAGE START 
		//*****************************************
		if($(".right-now-playing").length > 0){
			//setInterval(homePageNowPlaying(),1000);
		}
		//*****************************************
	    // HOME PAGE END
		//*****************************************


		//********************************************************************************************************
		//BEGIN MAIN MENU
		//********************************************************************************************************
		//Position menu with jQuery. If no menu item is active, then make YFM active by default
		if (jQuery('.menuitems li.active').length === 0) {	
			jQuery('.menuitems li:first-child').removeClass('inactive').addClass('active');
		}
		
		var cmenu = jQuery('.menuitems li.active');
		var l = cmenu.position().left;
		var w = cmenu.width() + 20;

		l = l + (w / 2) - 19;
		if (cmenu.index() === 0)
		{
		//The is added if first menu item because it has extra 30px left margin
			l = l + 33;
		}
		jQuery('#menuactive').css({'margin-left': l+'px'}).show();
		
		//clicking on a menu item or home link
		jQuery('.menuitems li.inactive , .homelink').live('click', function(){
			var cmenu;
			if (jQuery(this).hasClass('homelink')) {
				cmenu = jQuery('.menuitems li:first-child');
			}
			else
			{
				cmenu = jQuery(this);	
			}
			
			jQuery('.menuitems li.active').removeClass('active').addClass('inactive');
			cmenu.removeClass('inactive').addClass('active');
			var l = cmenu.position().left - jQuery('.menuitems').position().left;
			var w = cmenu.width() + 20;
			l = l + (w / 2) - 19;
			if (cmenu.index() === 0)
			{
				//The is added if first menu item because it has extra 30px left margin
				l = l + 33;
			}
			jQuery('#menuactive').animate({'margin-left': l+'px'}, function(){
				var location = cmenu.children('a').attr('href');
				window.location = 'http://yworld.co.za'+location;
			});
			return false;
		});
	
	/********************************************************************************************************
	END MAIN MENU
	********************************************************************************************************/
	




		//*****************************************
	    // SEARCH BOX START 
		//*****************************************
			$('#searchhover').hover(function(){
				var position = $('#searchhover').position();
				var top = position.top;
				var left = position.left;
				left -= 80;
				top += 17;
				$('#searchbox').css('top',top);
				$('#searchbox').css('left',left);
				$('#searchbox').show();
			}, function(){
				$('#searchbox').hide();
			});
			
			jQuery('#searchbox').hover(function(){
				$('#searchbox').stop();
				$('#searchbox').show();
			},function () {
				$('#searchbox').hide();
			});
		//*****************************************
		// SEARCH BOX END 
		//*****************************************

		//*****************************************
		// ABOUT US START
		//*****************************************
			

			if($('#aboutus-content').length > 0){
				$('#about-content-bg div:eq(0)').show();
				$('.about-us-menu-item:eq(0)').css('font-size','26px').css('color','#e5030c');
				$('.about-us-menu-item').click(function(){
					$('.about-us-menu-item').css('font-size','22px').css('color','#ffffff');
					$(this).css('font-size','26px').css('color','#e5030c');
					var menuItem = $(this).attr('data-show');
					$('#about-content-bg div').each(function(){
						if($(this).attr('data-menu-item') == menuItem){
							$(this).show();
						} else {
							$(this).hide();
						}
					});
				});
			}

		//*****************************************
		// ABOUT US END
		//*****************************************

		//*****************************************
	    // HUNTERS YTKO START 
		//*****************************************

			//Check if on the ytko-track-mixes page
			if($('#hunters-mixes-content').length >0){

				/* Track page init end */
				var dayOfWeek = new Array();
					dayOfWeek[0] ='Sunday';
					dayOfWeek[1] = 'Monday';
					dayOfWeek[2] ='Tuesday';
					dayOfWeek[3] ='Wednesday';
					dayOfWeek[4] ='Thursday';
					dayOfWeek[5] ='Friday';
					dayOfWeek[6] ='Saturday';

				var month = new Array();
					month[1] ='January';
					month[2] ='February';
					month[3] ='March';
					month[4] ='April';
					month[5] ='May';
					month[6] ='June';
					month[7] ='July';
					month[8] ='August';
					month[9] ='September';
					month[10] ='October';
					month[11] ='November';
					month[12] ='December';

				$('#tracklist-ajax-loader').show();
				var d = new Date();
				
				//Set todays date
				var todays_date = new Date(d);

				//If the time is less then 7 in the evening, set to display yesterday
				if(todays_date.getHours() <= 19){
					if(todays_date.getDay() == 1){
						todays_date.setDate(d.getDate() - 3);
					} else {
						todays_date.setDate(d.getDate() - 1);
					}
				}

				//Get the next available date
				var next_date = new Date();
				next_date.setDate(next_date.getDate() + 1);
				if(next_date.getDay() == 6){
					next_date.setDate(todays_date.getDate() + 3);
				}

				//Get the previous date
				var previous_date = new Date();
				previous_date.setDate(previous_date.getDate() - 1);
				if(previous_date.getDay() == 0){
					previous_date.setDate(todays_date.getDate() - 3);
				}

				//Assign the dates to the buttons
				$('#btn-next-ytko-mixes').attr('data-next-day',next_date);
				$('#btn-previous-ytko-mixes').attr('data-previous-day',previous_date);
				
				//Hide the next button if its the current day
				if(next_date < todays_date){
					$('#btn-next-ytko-mixes').attr('data-next-day',next_date);
					g_next_day = next_date;
					$('#btn-next-ytko-mixes').show();
				} else {
					$('#btn-next-ytko-mixes').hide();
				}

				//Get the tracklisting and mp3
				var dayno = new Date(todays_date).getDay();
				$('.current-track p').html(dayOfWeek[dayno]+", "+" "+ new Date(todays_date).getDate()+" "+month[new Date(todays_date).getMonth() + 1]+" "+new Date(todays_date).getFullYear());
				url_encoded_date = todays_date.getFullYear()+"-"+(todays_date.getMonth() + 1)+"-"+(todays_date.getDate());
				$.ajax({
						url:'http://'+window.location.host+'/wp-content/themes/yfm2012/ajax/ytko-mix.php?date='+url_encoded_date,
						type:'GET',
						dataType:'json',
						success:function(data){
							var html = '';
							for(var k in data.tracks){
								html += "<li> "+data.tracks[k].artist+" - "+data.tracks[k].track+"</li>";
							}
							$('.tracklisting ol').html(html);
							updateButtons(todays_date);
							$('#tracklist-ajax-loader').hide();
						},
						error:function(){
							alert('There was a problem in retreiving the tracks');
							$('#tracklist-ajax-loader').hide();
						}
					});
				$('#track-song-ajax-loader').show();
				$.ajax({
					url:'http://'+window.location.host+'/wp-content/themes/yfm2012/ajax/ytko-get-song.php?date='+url_encoded_date,
					type:'GET',
					dataType:'json',
					success:function(data){
						if(data.meta.status == '200'){	
							player_djs_page(data.song.url);
							$('.podcast-download').show();
							$('#hunters-audio-not-playing').show();
						}  else if(data.meta.status == '202'){
							$('#player-container').remove();
							$('.podcast-player').html("<div id=\"player-container\">We don't have songs for today yet. Check back later!</div>");
							$('.podcast-download').hide();
							$('#hunters-audio-not-playing').hide();
						}
						$('#track-song-ajax-loader').hide();
					},
					error:function(){
						alert('A problem occured while trying to retreive the mp3 file.');
						$('#track-song-ajax-loader').hide();
					}
				});/* Track page init end */

				//if the next button is clicked
				$('#btn-next-ytko-mixes').click(function(){
					$('#tracklist-ajax-loader').show();
					$('.tracklisting ol').html('');
					date_to_go = new Date($(this).attr('data-next-day'));
					url_encoded_date = date_to_go.getFullYear()+"-"+(date_to_go.getMonth() + 1)+"-"+(date_to_go.getDate());
					$.ajax({
						url:'http://'+window.location.host+'/wp-content/themes/yfm2012/ajax/ytko-mix.php?date='+url_encoded_date,
						type:'GET',
						dataType:'json',
						success:function(data){
							if(data.meta.status == '200'){
								var html = '';
								for(var k in data.tracks){
									html += "<li> "+data.tracks[k].artist+" - "+data.tracks[k].track+"</li>";
								}
								$('.tracklisting ol').html(html);
							} else if(data.meta.status == '202') {
								var html = '';
								//html += "<li>No tracks are listed for today.</li>";
								$('.tracklisting ol').html(html);
							}
							updateButtons(date_to_go);
							$('#tracklist-ajax-loader').hide();
						},
						error:function(){
							alert('We encountered a problem in retreiving the tracks for you. Please try again later.');
							$('#tracklist-ajax-loader').hide();
						}
					});
					$('#track-song-ajax-loader').show();
					$.ajax({
						url:'http://'+window.location.host+'/wp-content/themes/yfm2012/ajax/ytko-get-song.php?date='+url_encoded_date,
						type:'GET',
						dataType:'json',
						success:function(data){
							if(data.meta.status == '200'){
								$('#player-container').remove();
								$('.podcast-player').html("<div id=\"player-container\"></div>");
								/*$('#player-container').jmp3({
									backcolor: "FFFFFF",
									forecolor: "000000",
									width: 300,
									showdownload: "false",
									filepath:data.song.url
								});*/
								player_djs_page(data.song.url);
								$("#jPlayer").jPlayer("setMedia", { mp3: data.song.url});
								$('.podcast-download a').attr('href',data.song.url);
								$('.podcast-download').show();
								$('#hunters-audio-not-playing').show();
							} else if(data.meta.status == '202'){
								$('#player-container').remove();
								$('.podcast-player').html("<div id=\"player-container\">We don't have songs for today yet. Check back later!</div>");
								$('.podcast-download').hide();
								$('#hunters-audio-not-playing').hide();
							}
							$('#track-song-ajax-loader').hide();
						},
						error:function(){
							alert('We encountered a problem trying to load the songs for you. Please try again.');
							$('#track-song-ajax-loader').hide();
						}
					});
				});

				//If the previous button is clicked
				$('#btn-previous-ytko-mixes').click(function(){
					$('#tracklist-ajax-loader').show();
					$('#track-song-ajax-loader').show();
					$('.tracklisting ol').html('');
					date_to_go = new Date($(this).attr('data-previous-day'));
					url_encoded_date = date_to_go.getFullYear()+"-"+(date_to_go.getMonth() + 1)+"-"+(date_to_go.getDate());
					
					$.ajax({
						url:'http://'+window.location.host+'/wp-content/themes/yfm2012/ajax/ytko-mix.php?date='+url_encoded_date,
						type:'GET',
						dataType:'json',
						success:function(data){
							if(data.meta.status == '200'){
								var html = '';
								for(var k in data.tracks){
									html += "<li><strong> "+data.tracks[k].artist+" </strong>- "+data.tracks[k].track+"</li>";
								}
								$('.tracklisting ol').html(html);
							} else if(data.meta.status == '202') {
								var html = '';
								$('.tracklisting ol').html(html);
							}
							updateButtons(date_to_go);
							$('#tracklist-ajax-loader').hide();
						},
						error:function(){
							alert('We encountered a problem in retreiving the tracks for you. Please try again later.');
							$('#tracklist-ajax-loader').hide();
						}
					});
					$.ajax({
						url:'http://'+window.location.host+'/wp-content/themes/yfm2012/ajax/ytko-get-song.php?date='+url_encoded_date,
						type:'GET',
						dataType:'json',
						success:function(data){
							if(data.meta.status == '200'){
								$('#player-container').remove();
								$('.podcast-player').html("<div id=\"player-container\"></div>");
								player_djs_page(data.song.url);
								$("#jPlayer").jPlayer("setMedia", { mp3: data.song.url});
								$('.podcast-download a').attr('href',data.song.url);
								$('.podcast-download').show();
								$('#hunters-audio-not-playing').show();
							} else if(data.meta.status == '202'){
								$('#player-container').remove();
								$('.podcast-download').hide();
								$('.podcast-player').html("<div id=\"player-container\">We don't have songs for today yet. Check back later!</div>");
								$('#hunters-audio-not-playing').hide();
							}
							$('#track-song-ajax-loader').hide();
						},
						error:function(){
							alert('We encountered a problem trying to load the songs for you. Please try again.');
							$('#track-song-ajax-loader').hide();
						}
					});
				});

				//Update the buttons for their respective dates
				function updateButtons(newDate){
					var newDate = new Date(newDate); //Load the curent date
					var daysInMonth = new Date(newDate.getFullYear(), newDate.getMonth()+1, 0).getDate(); //Get the number of days in the month
					var next_date = new Date(); //Initialize the next date
					var previous_date = new Date(); //Initialize the previous date
					var dateOffset = (24*60*60*1000) * 1;

					//Next Button Month change over
					if (newDate.getDay() == 5) {
						next_date.setTime(newDate.getTime() + (dateOffset * 3));
					} else {
						next_date.setTime(newDate.getTime() + dateOffset);
					}

					//Previous Button Month change over
				
					if (newDate.getDay() == 1) {
						previous_date.setTime(newDate.getTime() - (dateOffset * 3));
					} else {
						previous_date.setTime(newDate.getTime() - dateOffset);
					}
					

					//Update the buttons attributes
					$('#btn-previous-ytko-mixes').attr('data-previous-day',previous_date);
					$('#btn-next-ytko-mixes').attr('data-next-day',next_date);

					//Update the displayed date
					var dayno = new Date(newDate).getDay();
					$('.current-track p').html(dayOfWeek[dayno]+", "+" "+ new Date(newDate).getDate()+" "+month[new Date(newDate).getMonth() + 1]+" "+new Date(newDate).getFullYear());

					//Hide and show any buttons if needs be
					var current_date = new Date();
					if(new Date(next_date) <= current_date){
						$('#btn-next-ytko-mixes').show();
						$('.current-track h3').html('');
					} else if(next_date > current_date){
						$('#btn-next-ytko-mixes').hide();
						$('.current-track h3').html('Latest Track');
					}
				}
			}

			//Check if on the bio's page
			if($('.about-djs-container').length > 0){
				if(location.search != 'undefined' && location.search != '' && location.search != null){
					var dj = location.search;
						dj = dj.split("="); 
						dj = dj[1];
					var html = "";
					$('#dj-bios li').each(function(){
						if($(this).attr('data-dj') == dj){
							html = $(this).html();
						}
					});
					$('.dj-overlay-body').html(html);
					$('.dj-overlay').fadeIn('200');
				}
			}

			//DJ Bio Clicked
			$('.bio').click(function(){
				var djClicked = $(this).attr('data-dj');
				var html = "";
				$('#dj-bios li').each(function(){
					if($(this).attr('data-dj') == djClicked){
						html = $(this).html();
					}
				});
				$('.dj-overlay-body').html(html);
				$('#the_overlay_djs').fadeIn('200');
				$('.dj-overlay').fadeIn('200');
			});

			//Bio Modal Close button clicked
			$('.dj-overlay-close').click(function(){
				$('#the_overlay_djs').fadeOut('200');
				$('.dj-overlay').fadeOut('200');
			});

			//Vid thumbnail clicked
			$('.ytko-hunters-video-thumbnail').click(function(){
				var html  = '<object width="530" height="298" id="ytko-hunters-main-video">';
					html += '<param name="movie" value="'+$(this).attr('data-embed')+'"></param>';
					html += '<param name="allowFullScreen" value="true"></param>';
					html += '<param name="allowscriptaccess" value="always"></param>';
					html += '<embed src="'+$(this).attr('data-embed')+'" type="application/x-shockwave-flash" width="530" height="298" allowscriptaccess="always" allowfullscreen="true"></embed>';
					html += '</object>';

					$('#ytko-hunters-main-video').remove();
					$('.video-frame').html(html);
			});

			$('#hunters-audio-not-playing').click(function(){
				$(this).hide();
				$('#hunters-audio-not-playing-dropdown').show();
				$('#hunters-audio-not-playing-dropdown').animate({height:'80'},300);
			});

			$('#hide-flash-dropdown').click(function(){

				$('#hunters-audio-not-playing-dropdown').animate({height:'0'},300,function(){
					$('#hunters-audio-not-playing-dropdown').hide();
					$("#hunters-audio-not-playing").show();
				});
			});

			//Track Loading for Hunters
			$('#addTrack').click(function(){
				var count = $('#hunters-track-submission-count').val();
				count++;
				var html = "<tr><td><input type=\"text\" name=\"artist-"+count+"\" placeholder=\"Artist\"/></td><td><input type=\"text\" name=\"track-"+count+"\" placeholder=\"Track\"/></td><td><input type=\"button\" value=\"Remove\" class=\"btnRemTrack\"/></td></tr>";
				$('#trackLoading tbody').append(html);
				$('#hunters-track-submission-count').val(count);
			});
			$('.btnRemTrack').live('click',function(){
				$(this).parent().parent().remove();
			});

		//*****************************************
	    // HUNTERS YTKO END 
		//*****************************************

		// ********************************
		// LISTEN LIVE START
		// ********************************


		

		function popupwindow(popurl, title, w, h) {
  		var left = (screen.width/2)-(w/2);
  		var top = (screen.height/2)-(h/2);
  		return window.open(popurl, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
		}

		$('#listen-now').live("click", function() {
				var popurl = $(this).attr('popurl');
				var title =  $(this).attr('title');
				var w = $(this).attr('w');
				var h = $(this).attr('h');
				popupwindow(popurl, title, w, h);
				return false;
		});

		// ********************************
		// LISTEN LIVE END
		// ********************************

		// ********************************
		// HIP HOP CHARTS START
		// ********************************

		$('.hip-hop-charts ul li #img-holder').hover(function() {
			$(this).children('.vote-btn').stop().animate({"bottom":"0"}, 400); 
		}, function() {
			$(this).children('.vote-btn').stop().animate({"bottom":"-40px"}, 400);
		});

		if($('#hiphop-content').length > 0){
			$('.vote-btn').click(function(){
				var vote_id = $(this).attr('id');
				var vote_status = $(this).children('p');

				$.ajax({
					url:"http://"+window.location.host+"/wp-admin/admin-ajax.php?action=hip_hop_like",
					type:"POST",
					dataType:"json",
					data:{
						song_id:vote_id
					},
					success:function(data){
						if(data == -1){
						} else if(data.meta.status == "200"){
							vote_status.html('Thanks for Voting');
						} else if(data.meta.status == "201"){
							vote_status.html('Already Vote!');		
						} else if(data.meta.status == "400"){
							vote_status.html('An error occured');
						}
					}	
				});				
			});

			$('#like-song').click(function(){
				$.ajax({
					url:"http://"+window.location.host+"/wp-admin/admin-ajax.php?action=hip_hop_like",
					type:"POST",
					data:{
						song_id:$('#song-test option:selected').attr('data-song_id')
					},
					dataType:"text",
					success:function(data){
					},
					error:function(){
					}
				});
			});

			$('#dislike-song').click(function(){
				$.ajax({
					url:"http://"+window.location.host+"/wp-admin/admin-ajax.php?action=hip_hop_dislike",
					type:"POST",
					data:{
						song_id:$('#song-test option:selected').attr('data-song_id')
					},
					dataType:"text",
					success:function(data){
					},
					error:function(){
					}
				});
			});
		}

		// ********************************
		// HIP HOP CHARTS END
		// ********************************

		// ********************************
		// MAIN CAROUSEL
		// ********************************
 		var carousel_count = 1;
		var item_count = $(".carousel-img-container > a").size() - 1;
		var $carousel_img_container = $(".carousel-img-container a").hide();
		var $carousel_content = $(".carousel-content div");
		var $home_carousel_strip = $(".home-carousel-strip");
		var $carousel_indicator = $("#carousel-indicator div");
		var timer;
		
		function Initialize_mainCarousel(){	
			$carousel_img_container.eq(0).show();
			$home_carousel_strip.fadeIn(100);
			$carousel_content.eq(0).show();
			for (x=0; x <= item_count; x++) {
				$carousel_indicator.append("<span class='carousel-selector' num=\""+x+"\"/>");
			}
			$carousel_indicator.children('span:eq(0)').addClass('active');
		}
		
		function carousel_action() {
			if (carousel_count > item_count) {
				carousel_count = 0; 
				carousel_action();
			} else {
				$carousel_img_container.hide();
				$carousel_content.hide();
				$carousel_content.eq(carousel_count).show();
				$carousel_img_container.eq(carousel_count).fadeIn(1000);
				
				$carousel_indicator.children("span").removeClass("active");
				$carousel_indicator.children("span:eq("+carousel_count+")").addClass("active");
				carousel_count++;
				clearTimeout(timer);
				timer = setTimeout(carousel_action, 4000,[item_count, carousel_count]);
			}
			
			if(carousel_count==2)
			{
				
				if($("li.home-carousel-strip").attr("game") == "true"){
					console.log("OLX");
				}
				else {
				$("li.home-carousel-strip").css( "background-color", "rgba(0, 0, 0, 0)" );
				$("img.arrows-div").css("display", "none");
				/*$(".carousel-img-container a").click(function(){
					if(carousel_count==10){
						$('.olx-container').bPopup({
                            zIndex: 501
                            , modalClose: true,
                            modalColor:"#000"
                        });
					}else {
						
					}
					
				})*/
				}
			}
			else{
				$("li.home-carousel-strip").css( "background-color", "rgba(0, 0, 0, 0.78)" );
				$("img.arrows-div").css("display", "block");
				/*$(".carousel-img-container a").click(function(){
					if(carousel_count==10){
						$('.olx-container').bPopup({
                            zIndex: 501
                            , modalClose: true,
                            modalColor:"#000"
                        });
					}else {
						
					}
					
				})*/
			if(carousel_count==9)
			{
				$(".carousel-img-container a").click(function(){
					OpenInNewTab("http://yworld.co.za/the_yire_december_2013/index.html");
					function OpenInNewTab(url)
					{
					  var win=window.open(url, '_blank');
					  win.focus();
					}
				})
			}
		  }
		}

		$(".carousel-selector").live('click', function() {
			if ($(this).attr("class") != 'carousel-selector active') {
				carousel_count = $(this).attr('num');
				clearTimeout(timer);
				carousel_action();
			} else {
				clearTimeout(timer);
				timer = setTimeout(carousel_action, 4000,[item_count, (carousel_count+1)]);
			}
		});

		if (item_count >= 1) {
			timer = setTimeout(carousel_action, 4000,[item_count, carousel_count]);
		}
		Initialize_mainCarousel();
		 $(".carousel-img-container img").hover(function(){
            clearTimeout(timer);	 
		},
        function(){
			timer = setTimeout(carousel_action, 2000,[item_count, (carousel_count+1)]);

		});
		// ********************************
		// END MAIN CAROUSEL
		// ********************************

		// ********************************
		// FEATURED CAROUSEL
		// ********************************
		
		var f_count = 1; 
		var num_img = $(".featured-carousel > a").size() - 1;

		function Initialize_carousel(){
			var featured_carousel = $(".featured-carousel a").hide();
			$(".featured-carousel a:eq(0)").show();
		}
		
		function f_carousel_action() {
			if (f_count <= num_img) {
				$('.featured-carousel a').hide(); 
				$('.featured-carousel a:eq('+f_count+')').fadeIn(1000);
				f_count++;
				setTimeout(f_carousel_action, 5000,[num_img, f_count]);
			} else {
				f_count = 0; 
				f_carousel_action();
			}
		}

		if (num_img > 1) {
		setTimeout(f_carousel_action, 5000,[num_img, f_count]);
		}

		Initialize_carousel();
		// ********************************
		// END FEATURED CAROUSEL
		// ********************************

		// ********************************
		// jSCROLL
		// ********************************

		// ********************************
		// TODAY AND HISTORY
		// ********************************
		var h_month = $('input[name*="search-month"]').val();
		var year = 	$('#archive-curr-year select option:selected').val();
		var d = new Date();
		var cur_month = d.getMonth()+1;
		var day = d.getDate();
		var cur_year = ((d.getFullYear().toString()).substring(2,4));
		var proceed;
		
		for (x=11; x<=cur_year; x++) {
			if (year != x) {
				$('#archive-curr-year select').append("<option value="+x+">20"+x+"</option>");
			}
		}

		 function validate_date() {
		 	$('.archive-months ul li').removeClass('active-months-selector');
		 	if (year < parseInt(cur_year)) {
		 		for (a=0; a<=11; a++) {
		 			$('.archive-months ul li:eq('+a+')').addClass('active-months-selector');
		 		}
		 		proceed = 'red';
		 		search_defaults(h_month);
		 	} else {
		 		for (a=0; a<=11; a++) {
		 			if (a < cur_month) {
		 				$('.archive-months ul li:eq('+a+')').addClass('active-months-selector');
		 			} else {
		 				$('.archive-months li:eq('+a+')').css('color','#ababab');
		 			}
		 		}
		 		proceed = 'green';

		 		h_month = ((h_month > cur_month) ? cur_month : h_month);;
		 		search_defaults(h_month);
		 	}
		 }

		function inserting_days(days) {
			current_date = $('#new_selector select option:selected').val();
			$("#new_selector").html("<select id='date-drop-down' name='search-day'></select>");
			if (cur_month == h_month && proceed == 'green') {
				days = day;
				if (day < current_date) {
					current_date = day;
					$('#display-date').html(days);
				}
			} else if (days < current_date) {
				$('#display-date').html(days);
			}
			for (i = 1; i <= days; i++) {
				if (current_date > days) {
					current_date = current_date - 1;
				}
				if (i != current_date) {
					$("#date-drop-down").append("<option value="+i+">"+i+"</option>");
				} else {
					$("#date-drop-down").append("<option value="+i+" selected='selected'>"+i+"</option>");
				}
			}
		}

		function search_defaults(h_month) {
			var active_sel = h_month - 1;
			$('input[name*="search-month"]').val(h_month);
			$('.active-months-selector').css('color','#fff');
			$('.archive-months li:eq('+active_sel+')').css('color','#FF000B');
			if (h_month == 2) {
				leap_year = (((year % 4) == 0) ? 29 : 28);
				inserting_days(leap_year);
			} else if((h_month % 2) == 0 && h_month != 10 && h_month != 12 && h_month != 8) {
				inserting_days(30);
			} else if((h_month % 2) != 0 && h_month == 11 || h_month == 9){
				inserting_days(30);
			} else {
				inserting_days(31);
			}
		}
		
		validate_date();	
		search_defaults(h_month);
		excerptjs();
		inits();

		function inits() {
			$('#display-date').html($("#new_selector select").val());
			$('#display-year').html("20"+ $("#archive-curr-year select").val());
		}

		$('.active-months-selector').live('click',function() {
			h_month = $(this).val();
			search_defaults(h_month);
		});

		$('#archive-curr-year select').live('change', function() {		
			year = $(this).val();
			validate_date();
		});

		$('.movement').click( function() {	
			var movement = Number($(this).attr("movement"))

			h_month = h_month - 1 + movement;

			if (h_month >= cur_month && proceed == "green") {
				h_month = cur_month;
			} else if (h_month < 1) {
				h_month = 1;
			} else if (h_month > 12) {
				h_month = 12;
			}

			search_defaults(h_month);
		});

		$('#new_selector select').live('change',function() {
			$('#display-date').html($("#new_selector select").val());
		});

		$('#archive-curr-year select').live('change',function() {
			$('#display-year').html("20"+ $("#archive-curr-year select").val());
		});

		function excerptjs() {
			var list_size = $('#also-TIH-list ul > li').size() - 1;
			for (i=0; i<=list_size; i++) {
				var textToHide = $('#also-TIH-list ul li:eq('+i+')').text().substring(120);
	        	var visibleText = $('#also-TIH-list ul li:eq('+i+')').text().substring(0, 120);
	        	if (textToHide.length > 0) {
		        	$('#also-TIH-list ul li:eq('+i+')').html(visibleText + ('<span class="visible">' + textToHide + '<span class="hidethis" style="color:red; cursor: pointer;"> &laquo; </span></span>'))
		        	.append('<span class="read-more" style="color:red; cursor: pointer;"> &raquo;</span>');
	        	}
        	}
        	$('#also-TIH-list ul li .visible').hide();

        	$('.read-more').click(function() {
	       		$(this).siblings('.visible').show();
	       		$(this).hide();  
            });

            $('.hidethis').click(function() {
	       		$(this).parent('.visible').hide();
	       		$(this).parent('span').siblings('.read-more').show();  
            });
		}

		// ********************************
		// END TODAY AND HISTORY
		// ********************************

		// ********************************
		// THE JOINT START
		// ********************************
		$('#featured-posts-list li:eq(0)').addClass("active-carousel");
		$('.slider-list').click(function() {
			$('.slider-list').removeClass("active-carousel");
			$(this).addClass("active-carousel");
			c_img = $(this).val();
			$('#large-img li').hide();
			$('#large-img li:eq('+c_img+')').fadeIn(300);
		});
		$('.main-container-banner').click(function() {
			var link = $(this).attr("link");
			window.location = link;    
		});
		$('.main-container').hover(
         function () {
           $(".main-container-banner").slideDown();
           $(".read-more").slideDown();
           /* $(".main-container-banner").slideDown().delay(2000).stop(true, true);
            $(".read-more").slideDown().delay(2000).stop(true, true);*/
         }, 
         function () {
           $(".main-container-banner").slideUp();
           $(".read-more").slideUp();
          /* $(".main-container-banner").slideUp().delay(2000).stop(true, true);
            $(".read-more").slideUp().delay(2000).stop(true, true);*/
         }
     );
});

// ********************************
// FUNCTIONS GO HERE
// ********************************
function homePageNowPlaying(){ 
	$.ajax({
			url:'http://'+window.location.host+"/tools/ysong.txt",
			type:'GET',
			dataType:'text',
			success:function(data){
				var html = "Tune into YFM 99.2 for the spoken word!";
				if(data == "Tune into YFM 99.2 for the spoken word!"){
					$('#home-twitter-now-playing').hide();
				} else {
					$('#home-twitter-now-playing').show();
					var href = "https://twitter.com/intent/tweet?button_hashtag=#Yfm99.2&text=Now%20playing%20@Yfm99.2%20:%20"+data;
					$('#home-twitter-now-playing').attr('href', href);
				}
				html = data;
				$('.song-title-text').html(html);
				setInterval(homePageNowPlaying(),1000);
			},
			failure:function(){
				$('#home-twitter-now-playing').hide();
				$('.song-title-text').html(data);
				setInterval(homePageNowPlaying(),1000);
			}
		});
}

function listenLiveAllPages(){
	$.ajax({
		url:'http://'+window.location.host+'/tools/ysong.txt',
		type:"GET",
		dataType:'text',
		success:function(data){
			$('.song-title-text').html(data);
			window.setInterval(600000,listenLiveAllPages());
		},
		error:function(){
			$('.song-title-text').html("Tune into YFM 99.2 for the spoken word!");

		}
	});
}

// ********************************
// DJS PAGE PLAYER 
// ********************************
var authorize_playlist = $(".playlist li").attr('djplay');

if (authorize_playlist == "execute") {
	player_djs_page();
}

function player_djs_page(otherArgs) {
	var currentTrack = 0;
	var playlist = new Array();
	var playlist_size = $('.playlist > li').size();
	var title = new Array();

	if (typeof otherArgs == 'undefined') {
		for (i=0; i < playlist_size; i++) {
			playlist[i] = $('.playlist li:eq('+i+')').attr('song');
			title[i] = $('.playlist li:eq('+i+') .time').text();
		}		
	} else {
		playlist[0] = otherArgs;
		title[0] = otherArgs;
	}

	$("#jPlayer").jPlayer({
		ready: function() {
			$("#jPlayer").jPlayer("setMedia", { mp3: playlist[currentTrack]});
			$(".download-btn").attr('href', playlist[currentTrack]);
			$("#playerSongInfo").html(title[0]);
			active_playlist(0);
		},cssSelectorAncestor: "",
		cssSelector: {
			play: "#jplayer_play",
			pause: "#jplayer_pause",
			stop: "#jplayer_stop",
			mute: "#jplayer_mute",
			unmute: "#jplayer_unmute",
			seekBar: "#jplayer_loader_bar",
			volumeBar: "#vlc",
			volumeBarValue: "#vll",
			playBar: "#jplayer_play_bar"	
		},
		ended: function () {
			nextSong();
		},
        supplied: "mp3",
        solution: "html,flash",
        verticalVolume: true,
		swfPath: "/wp-content/themes/yfm2012/jplayer/js",
        wmode: "window"
	});

	$('#jplayer_prev').click(function() {prevSong();});

	$('#jplayer_next').click(function() {nextSong();});

	$('.playlist li').click(function() {
		var index = $(this).index();
		playListChange(index);
	});

	$('#player_volume,#volume-con').mouseenter(function() {
		$('#volume-con').show();
	}).mouseleave(function() {
		$('#volume-con').hide();
	});

	
	$('#player_volume').toggle(function() {
		$("#jPlayer").jPlayer('mute');
	}, function() {
		$("#jPlayer").jPlayer('unmute');
	});

	function playListChange(index) {
		if (index != 1000) {
			currentTrack = index;
			active_playlist(currentTrack);
			$("#playerSongInfo").html(title[currentTrack]);
			$(".download-btn").attr('href', playlist[currentTrack]);
			$("#jPlayer").jPlayer("setMedia", { mp3: playlist[currentTrack]}).jPlayer("play");
		} else {
			$("#jPlayer").jPlayer("stop");
		}	
	}

	function active_playlist(sel_val) {
		$(".playlist li").css('background-color','#e6e6e6');
		$(".playlist li:eq("+sel_val+")").css("background-color","#c0bfbf");
	}

	function prevSong() {
		index = (currentTrack != 0) ? currentTrack - 1 : currentTrack; 
		playListChange(index);
	}

	function nextSong() { 
		index = (currentTrack != playlist.length - 1) ? currentTrack + 1 : 1000; 
		playListChange(index);
	}
}

// ****************************

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function mycarousel_initCallback(carousel)
{
  // Disable autoscrolling if the user clicks the prev or next button.
  carousel.buttonNext.bind('click', function() {
      carousel.startAuto(0);
  });

  carousel.buttonPrev.bind('click', function() {
      carousel.startAuto(0);
  });

  // Pause autoscrolling if the user moves with the cursor over the clip.
  carousel.clip.hover(function() {
      carousel.stopAuto();
  }, function() {
      carousel.startAuto();
  });

  $('#mycarousel-next').bind('click', function() {
      carousel.next();
      return false;
  });
}

function getFavStatus() {
	var fav_sts = $('#addfav').attr('fav-sts');
	if (fav_sts == 1) {
		$('#addfav').css('background-position','bottom');
		return 0;
	} else {
		$('#addfav').css('background-position','top');
		return 1;
	}
}



$('#addfav').click(function() {
	var uid = $(this).attr('uid');
	var fav = getFavStatus();
	addfav(fav,uid);
}); 

function addfav(fav,uid) {
	$.ajax({
		url:'http://'+window.location.host+'/wp-content/themes/yfm2012/ajax/addFavourites.php?id='+uid+'&fav='+fav,
		type:"GET",
		dataType:'text',
		success:function(data){
			if ($('#addfav').attr('fav-sts') == 1) {
				var done = 0;
			} else {
				var done = 1;
			}
			fav_sts = $('#addfav').attr('fav-sts',done);
			getFavStatus();
		}
	});
}

getFavStatus();

function PrintElem(elem) {
	Popup($(elem).html());
}

function Popup(data) {
	var mywindow = window.open('', 'Yacademy Profiles', 'height=600,width=800');
	mywindow.document.write('<html><head><title>Yacademy Profiles</title>');
   	mywindow.document.write('<link rel="stylesheet" href="/wp-content/themes/yfm2012/css/main.css" type="text/css" />');
    mywindow.document.write('</head><body>');
    mywindow.document.write('<div id="yacademyProfileCon">');
    mywindow.document.write(data);
    mywindow.document.write('</div>');
    mywindow.document.write('</body></html>');

    mywindow.print();
    mywindow.close();

    return true;
}

//########################
//###### excerptjs #######	
//########################

function excerptjs2(textS) {

	var textToHide = $(textS).html().substring(150);
 	var visibleText = $(textS).html().substring(0, 150);

 	if (textToHide.length > 0) {
 		$(textS).html(visibleText + ('<span class="visible">' + textToHide + '<span class="hidethis" style="color:#7099f4; cursor: pointer;"> &laquo; </span></span>'))
 		.append('<span class="read-more" style="color:#7099f4; cursor: pointer;">&hellip; read more</span>');
 	}

 	$(''+textS+' .visible').hide();
 	$(textS).show();

 	$('.read-more').click(function() {
 	    $(this).siblings('.visible').show();
 	    $(this).hide();  
    });

    $('.hidethis').click(function() {
 		$(this).parent('.visible').hide();
 		$(this).parent('span').siblings('.read-more').show();  
 	});
}

function selectors() {
	excerptjs2('#facebook-social'); 
}

if ($('.menuitems .active a').attr('href') == '/') {
	selectors();
} else {
	console.log('works fine');
}

//########################
//#### excerptjs End #####	
//########################

