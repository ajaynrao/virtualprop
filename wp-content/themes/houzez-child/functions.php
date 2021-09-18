<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'houzez-all-css','font-awesome-5-all' ) );
        // wp_enqueue_script( 'full_page_js', trailingslashit( get_stylesheet_directory_uri() ) .'js/fullpage.min.js', array(), $my_js_ver );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );




// END ENQUEUE PARENT ACTION

function on_scroll_pause_script(){
    ?>
    <script>


        console.group(" on_scroll_pause_script ")
        var pplayers = [];
        jQuery(document).ready(function(){
		if(document.querySelector(".top-gallery-section") != null) {
			$(".top-gallery-section").attr('ontouchend', 'mobileSwipe()')
		}
		if(document.querySelector(".bt-content-wrap") != null) {
			document.getElementsByClassName("featured-video-plus")[1].remove();
// 			$('.listing-slider .clone.right').remove();
		}
			if(jQuery('.single-property .featured-video-plus iframe').attr('src')) {
            var videoURL = jQuery('.single-property .featured-video-plus iframe').attr('src');
            if(videoURL != null ){
                videoURL = videoURL.substring(0, videoURL.indexOf('?'));
                jQuery('.single-property .featured-video-plus iframe').attr('src',videoURL+'?width=640&height=360&autoplay=1&enablejsapi=1&playsinline=1&controls=1&rel=0&autohide=1&modestbranding=1&showinfo=0&mute=1');
			}
            } 
            
            
            

        var videos = document.getElementsByTagName("iframe");
        
        $( '.featured-video-plus iframe' ).each(function( video ) {
            var srcVideo = $(this).attr("src");
			if(document.querySelector(".listing-wrap.listing-v1") != null)
			{
			$(this).attr('src', $(this).attr('src') +'&playsinline=1&controls=1&rel=0&autohide=1&modestbranding=1&showinfo=0&loop=1&mute=1');
			}
			if(document.getElementsByClassName("bt-content-wrap")[0])
			{
			$(this).attr('src', $(this).attr('src') +'&playsinline=1&controls=1&rel=0&autohide=1&modestbranding=1&showinfo=0&loop=1&mute=1');
			}
		// $('#pills-tabContent iframe)[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
    });
		var players = [];
			if(document.querySelector(".listing-wrap.listing-v1") != null)
			{
			  var videos = document.querySelectorAll(".featured-video-plus iframe");
              for(var i = 0; i < videos.length; i++) {
                var video = videos[i];
				video.setAttribute('id', 'fitvid'+i);
				var url = $('#fitvid'+i).attr('src');
				if(url.includes('vimeo')) {
				$('#fitvid'+i).attr('src', $('#fitvid'+i).attr('src')+'&muted=1');
	            var iframe = document.querySelector('#fitvid'+i);
                var player = new Vimeo.Player(iframe);
			    players.push(player);
			  }
			  }
			}
			if(document.querySelector(".single-property") != null)
			{
			  var videos = document.querySelectorAll(".listing-slider .featured-video-plus iframe");
              for(var i = 0; i < videos.length; i++) {
                var video = videos[i];
				video.setAttribute('id', 'fitvid'+i);
				var url = $('#fitvid'+i).attr('src');
				if(url.includes('vimeo')) {
				$('#fitvid'+i).attr('src',$('#fitvid'+i).attr('src')+'&muted=1');
	            var iframe = document.querySelector('#fitvid'+i);
                var player = new Vimeo.Player(iframe);
			    pplayers.push(player);
			  }
			  }
		  }
			$(".lSPager li").on('click', function() {
				 setTimeout(function() {
						var url = $('#fitvid0').attr('src');
						if(url.includes('vimeo')) {
							  $('#fitvid0').addClass("vimeo");
							  var vimeo = $('iframe.vimeo');
							  pplayers[0].pause();
						}
						else {
							$('#fitvid0')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
						}
		       }, 500)
			})
        function checkScroll() {
			if(document.querySelector('div[id="pills-gallery"]')) {
				$('#pills-tabContent iframe')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
			}
			if(document.querySelector(".listing-wrap.listing-v1") != null)
			{
              var fraction = 0.8;
              var videos = document.querySelectorAll(".featured-video-plus iframe");
              for(var i = 0; i < videos.length; i++) {
                var video = videos[i];
				videos[i].setAttribute('id', 'fitvid'+i);
                var yPosition = 0;
                yPosition = ($("#fitvid" + i).offset().top) - $(window).scrollTop();
				var innerHeight = $("#fitvid" + i).height()-220;
			    var offTop = yPosition+innerHeight;
				var wheight = $(window).height();
                if ((offTop > 0) && (offTop < wheight)) {
					if(document.querySelector('.listing-wrap.listing-v1')!=null) {
						var url = $('.listing-wrap.listing-v1 #fitvid'+i).attr('src');
						if(url.includes('vimeo')) {
							  $('#fitvid'+i).addClass("vimeo");
							  var vimeo = $('iframe.vimeo');
							  vimeo.each(function(index) {
								  console.log(index);
								  if($(this).attr('id') == 'fitvid'+i) {
									   players[index].play();
								  }
								  
							  })
							 
						}
						else {
							$('.listing-wrap.listing-v1 #fitvid'+i)[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
						}
						
						
					}
                       
                } else {
					if(document.querySelector('.listing-wrap.listing-v1') != null) {
						var url = $('.listing-wrap.listing-v1 #fitvid'+i).attr('src');
						if(url.includes('vimeo')) {
							  $('#fitvid'+i).addClass("vimeo");
							  var vimeo = $('iframe.vimeo');
							  vimeo.each(function(index) {
								  if($(this).attr('id') == 'fitvid'+i) {
									   players[index].pause();
								  }
								 
							  })
						}
						else {
							$('.listing-wrap.listing-v1 #fitvid'+i)[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
						}
						
					}
                     

                }
              }
            }

		if(document.querySelector(".bt-content-wrap") != null)
			{
			  var videos = document.querySelectorAll(".listing-slider .featured-video-plus iframe")
              var fraction = 0.8;

              for(var i = 0; i < videos.length; i++) {
                var video = videos[i];
                parent = video;
				video.setAttribute('id', 'fitvid'+i);
                var yPosition = 0;
                yPosition = ($("#fitvid" + i).offset().top) - $(window).scrollTop();;
				var innerHeight = $("#fitvid" + i).height()-180;
			    var offTop = yPosition+innerHeight;
				console.log(videos.length);
                if ((offTop >= 0) && (jQuery('.lslide').eq(0).hasClass("active") == true)) {
					if(document.querySelector('.bt-content-wrap') != null) {
						var url = $('#fitvid'+i).attr('src');
						if(url.includes('vimeo')) {
							  pplayers[i].play();
						}
						else {
							$('#fitvid'+i)[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
						}
						
					}
                       
                } else {
					if(document.querySelector('.bt-content-wrap') != null) {
						var url = $('#fitvid'+i).attr('src');
						if(url.includes('vimeo')) {
							  pplayers[i].pause();
						}
						else {
							$('#fitvid'+i)[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
						}
						
					}
                    
                }
              }
            }
		
		}

		function onSliderImage(prev_btn){
			if(((jQuery('.lslide').eq(1).hasClass("active") == true) && prev_btn) || (jQuery('.lslide').last().hasClass("active") && prev_btn)){
					videos[0].setAttribute('id', 'fitvid0');
					if(document.getElementsByClassName('bt-content-wrap')[0]) {
					    var url = $('#fitvid0').attr('src');
						if(url.includes('vimeo')) {
							  pplayers[0].play();
						}
						$('#fitvid0')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
					}
			}else{
					videos[0].setAttribute('id', 'fitvid'+0);
					if(document.getElementsByClassName('bt-content-wrap')) {
						var url = $('#fitvid0').attr('src');
						if(url.includes('vimeo')) {
							  pplayers[0].pause();
						}
						$('#fitvid0')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
					}
			}
		}
            window.addEventListener('scroll', checkScroll, false);
            window.addEventListener('resize', checkScroll, false);
			window.addEventListener('load', checkScroll, false);
			$(".slick-arrow").click(function () {
				if((($(this).hasClass("slick-prev") == true) && (jQuery('.lslide').eq(1).hasClass("active") == true)) || (($(this).hasClass("slick-next") == true) && (jQuery('.lslide').last().hasClass("active") == true))) {
					onSliderImage(true);
				}
				else {
					onSliderImage(false);
				}
				
			})
           
    });
   
   function mobileSwipe() {
	        var pplayer;
	   		if(document.querySelector(".single-property") != null)
			{
			   var video = document.querySelector(".featured-video-plus iframe");
				video.setAttribute('id', 'fitvid0');
				var url = $('#fitvid0').attr('src');
				if(url.includes('vimeo')) {
	            var iframe = document.querySelector('#fitvid0');
                pplayer = new Vimeo.Player(iframe);
			  }
		  }
	   setTimeout(function() {
		   if($(".lslide.active").children().hasClass("featured-video-plus")) {
			            $()
			   		    var url = $('#fitvid0').attr('src');
						if(url.includes('vimeo')) {
							  $('#fitvid0').addClass("vimeo");
							  var vimeo = $('iframe.vimeo');
							  pplayer.play();
						}
						else {
							$('#fitvid0')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
						}
		   }
		   else {
			   			var url = $('#fitvid0').attr('src');
						if(url.includes('vimeo')) {
							  $('#fitvid0').addClass("vimeo");
							  var vimeo = $('iframe.vimeo');
							  pplayer.pause();
						}
						else {
							$('#fitvid0')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
						}
		   }
	   }, 1000)
   }
    console.groupEnd(" on_scroll_pause_script ")
	</script>
	<?php
}
add_action('wp_footer','on_scroll_pause_script');


function custom_script(){
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('.item-header .listing-thumb > .featured-video-plus').parent().addClass('custom-change');
        });
    </script>
	<script>
		$(document).ready(function(){
			$('a.listing-featured-thumb').click(function(){
				$('a.listing-featured-thumb').removeClass('show-controler');
				$(this).addClass('show-controler');
			});

		});
	</script>
    <?php
}


add_action('wp_footer','custom_script');