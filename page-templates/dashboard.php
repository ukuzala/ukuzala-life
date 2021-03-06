<?php
/**
 * Template Name: Dashboard Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Ukuzala Life Theme consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package Ukuzala Life
 * @subpackage UkuzalaLife_Theme
 * @since Ukuzala Life Theme 1.0
 */

get_header(); ?>

<header id="header">
	<div class="header-holder">
		<div class="container hidden-phone">
			<div class="brow">
				<div class="brick1">
					<a href="#blog" class="nav-item">
						<div class="nav-hover"></div>
						<?php /*?><i class="li_clock"></i><?php */?>
                        <span id="momentDay"></span>
                        <span id="momentDate"></span>
                        <span id="momentTime" class="numItem"></span>
					</a>
				</div>
				<div class="brick1 transparent"></div>
			</div>
			<div class="brow">
				<div class="slogan brick3 boffset1 transparent text-right">
					<div class="inner">
						<h1>Welcome to <?php echo get_bloginfo('name'); ?></h1>
						<p><?php echo get_bloginfo('description'); ?></p>	
					</div>
				</div>
                <div class="brick2">
                	<div class="left-cell" style="width: 195px; float: left;">
                    	<div class="nav-item">
                        	<canvas class="weather" id="icon1" width="95" height="95"></canvas>
                            <span id="outsideTemperature" class="numItem"></span>
                        </div>
                    </div>
                    <div class="right-cell" style="width: 195px; float: left;">
                         <div class="nav-item">
                           	<span id="outsideForecast"></span>
                            <span id="outsideWind"></span>
                            <span id="outsideHumidity"></span>
                         </div>
                    </div>
				</div>
			</div>
			<div class="brow">
				<div class="brick1 thumb">
					<div id="instafeed2" class="nav-item flipX"></div>
				</div>
                <div class="brick1 odd">
					<a href="#about-us" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_stack"></i>
						<span id="emailCount"></span>
					</a>
				</div>
                <div class="brick1">
					<a href="#contact" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_pen"></i>
						<span id="blogCount"></span>
					</a>
				</div>
                <?php /*?><div class="brick1">
					<div class="nav-item">
						<?php require( get_template_directory() . '/inc/facebook-login.php' ); ?>
					</div>
				</div><?php */?>
				<div class="brick1 thumb">
					<div id="instafeed" class="nav-item flipX"></div>
				</div>
				<div class="brick1 odd">
					<a href="#services" class="nav-item">
						<div class="nav-hover"></div>
                        <?php /*?><i class="li_bulb"></i><?php */?>
						<span class="knobChart">
                        	<input id="homeLuminosity" type="text" value="" class="knob second">
                        </span>
                        <?php /*?><i class="li_bulb"></i><?php */?>
					</a>
				</div>
                <?php /*?><div class="brick1">
					<a href="#services" class="nav-item">
						<div class="nav-hover"></div>
						<span class="knobChart"><input id="officeLuminosity" type="text" value="" class="knob second"></span>
					</a>
				</div><?php */?>
                <div class="brick1 thumb">
					<div id="instafeed3" class="nav-item flipX"></div>
				</div>
			</div>
			<div class="brow">
				<div class="brick1 boffset1 thumb">
					<div class="nav-item flipY">
						<img class="img1" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/img/img-slide6.png" alt="">
						<img class="img2" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/img/pf6.png" alt="">
					</div>
				</div>
                <div class="brick1 odd">
					<a href="#portfolio" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_diamond"></i>
						<span id="momentAnniversary"></span>
					</a>
				</div>
				<div class="brick1">
					<a href="#contact" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_calendar"></i>
						<span id="momentBirthday"></span>
					</a>
				</div>
			</div>

		</div>

		<div class="container visible-phone">
				<div class="brick1 logo_container">
					<a href="#" class="nav-item clearfix">
						<div class="nav-hover"></div>
						<h1 class="logo">Argo</h1>
					</a>
				</div>
				<div class="brick1 odd">
					<a href="#services" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_bulb"></i>
						<span>Services</span>
					</a>
				</div>
				<div class="brick1 odd">
					<a href="#portfolio" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_photo"></i>
						<span>Portfolio</span>
					</a>
				</div>
				<div class="brick1">
					<a href="#about-us" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_bubble"></i>
						<span>About us</span>
					</a>
				</div>
				<div class="brick1">
					<a href="#blog" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_note"></i>
						<span>Blog</span>
					</a>
				</div>
				<div class="brick1 odd">
					<a href="#contact" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_paperplane"></i>
						<span>Contact us</span>
					</a>
				</div>
		</div>
	</div>
</header> <!-- End header -->

<!-- Bootstrap js -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/bootstrap-collapse.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/bootstrap-scrollspy.js"></script>

<!-- jQuery -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/jquery.hoverdir.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/main.js"></script>

<!-- libraries -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<!-- knob -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.knob.js"></script>
<!-- moment -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/moment.min.js"></script>
<!-- skycons -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/skycons.js"></script>
<!-- tabletop -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tabletop.js"></script>
<!-- xively -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/xivelyjs-1.0.0.min.js"></script>
<!-- instafeed -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>
<!-- watermark -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/watermark.js"></script>

<!-- scripts for this page -->
<script type="text/javascript">
if (typeof jQuery == "function") { jQuery.noConflict(); }

// Make sure the document is ready to be handled  
jQuery(document).ready(function(jQuery) {  
  
  	  /*** Current Home Luminosity ***/
	  xively.setKey( "[YOUR API KEY]" );
	  
	  var homeFeedID        = YOUR_FEED_ID,  
	  	  homeDatastreamID  = "[YOUR DATASTREAM ID]";
	  
	  xively.datastream.get (homeFeedID, homeDatastreamID, function ( datastream ) {  
		
		var homeDataVal = datastream["current_value"];
		
		jQuery("#homeLuminosity").val(Math.round(homeDataVal));
		
		jQuery(".knob").knob({
				 'min':0,
				 'max':700,
				 'readOnly':true,
				 'thickness':.2,
				 'lineCap':'round',
				 'inputColor':'#fff',
				 'fgColor':'#ffffff',
				 'bgColor':'#89cae2',
				 'width':140,
				 'angleOffset':-125,
				 'angleArc':250,
				 'displayPrevious':true
		});						
	  
		xively.datastream.subscribe( homeFeedID, homeDatastreamID, function ( event , datastream_updated ) {  
		  var homeDataVal = datastream_updated["current_value"];
		  jQuery("#homeLuminosity").val(Math.round(homeDataVal)).trigger("change");
		});  
	  
	  }); 
	  
	  
	  /*** Current Office Luminosity ***/
	  /*xively.setKey( "[YOUR API KEY]" );
	  
	  var officeFeedID        = YOUR_FEED_ID,  
          officeDatastreamID  = "[YOUR DATASTREAM ID]";
	  
	  xively.datastream.get (officeFeedID, officeDatastreamID, function ( datastream ) {  
		
		var officeDataVal = datastream["current_value"];
		
		jQuery("#officeLuminosity").val(Math.round(officeDataVal));
		
		jQuery(".knob").knob({
				 'min':0,
				 'max':700,
				 'readOnly':true,
				 'thickness':.3,
				 'lineCap':'round',
				 'inputColor':'#333',
				 'fgColor':'#30a1ec',
				 'bgColor':'#d4ecfd',
				 'width':140,
				 'angleOffset':-125,
				 'angleArc':250,
				 'displayPrevious':true
		});						
	  
		xively.datastream.subscribe( officeFeedID, officeDatastreamID, function ( event , datastream_updated ) {  
		  var officeDataVal = datastream_updated["current_value"];
		  jQuery("#officeLuminosity").val(Math.round(officeDataVal)).trigger("change");
		});  
	  
	  });*/
	
	
	/*** Current Date & Time ***/ 
    var dayVal = moment().format('dddd');
	var dateVal = moment().format('MMMM Do YYYY');
	var timeVal = moment().format('h:mm a');
	
	jQuery("#momentDay").html("<strong>" + dayVal + "</strong>");
	jQuery("#momentDate").html(dateVal);
	jQuery("#momentTime").html(timeVal);
	
	
	/*** Current Weather ***/
	var apiKey = '[YOUR API KEY]';
    var url = 'https://api.forecast.io/forecast/';
    var lati = 42.36; // YOUR LATITUDE
    var longi = -71.06; // YOUR LONGITUDE
    var data;

    jQuery.getJSON(url + apiKey + "/" + lati + "," + longi + "?callback=?", function(data) {
       jQuery('#outsideTemperature').html(Math.round(data.currently.temperature) + "&deg;");
	   jQuery('#outsideForecast').html("<strong>" + data.currently.summary + "</strong>");
	   jQuery('#outsideWind').html("<em>Wind:</em> " + Math.floor(data.currently.windSpeed) + " mph");
	   jQuery('#outsideHumidity').html("<em>Humidity:</em> " + Math.floor(data.currently.humidity * 100) + "%");
	   //jQuery('#outsideFeelslike').html(Math.round(data.currently.apparentTemperature) + "&deg;");
	   
	   var icons = new Skycons({"color": "white"});
	   var currentSkycon = data.currently.icon;
	   var currentConditions;
	   
	   if (currentSkycon == "clear-day") { currentConditions = Skycons.CLEAR_DAY; };
	   if (currentSkycon == "clear-night") { currentConditions = Skycons.CLEAR_NIGHT; };
	   if (currentSkycon == "partly-cloudy-day") { currentConditions = Skycons.PARTLY_CLOUDY_DAY; };
	   if (currentSkycon == "partly-cloudy-night") { currentConditions = Skycons.PARTLY_CLOUDY_NIGHT; };
	   if (currentSkycon == "cloudy") { currentConditions = Skycons.CLOUDY; };
	   if (currentSkycon == "rain") { currentConditions = Skycons.RAIN; };
	   if (currentSkycon == "sleet") { currentConditions = Skycons.SLEET; };
	   if (currentSkycon == "snow") { currentConditions = Skycons.SNOW; };
	   if (currentSkycon == "wind") { currentConditions = Skycons.WIND; };
	   if (currentSkycon == "fog") { currentConditions = Skycons.FOG; };
	   
	   icons.add("icon1", currentConditions);
	   icons.play();
	});
	
	
	/*** Birthday Countdown ***/
	birthdayCountdown();
	setInterval(birthdayCountdown, 1000);
	function birthdayCountdown () {
	var now = moment(), // get the current moment
		// December 31, 2013 @ 12:00AM (Javascript months are 0-11)
		then = moment([YYYY, MM, DD]),
		// get the difference from now to then in ms
		ms = then.diff(now, 'milliseconds', true);
		// If you need years, uncomment this line and make sure you add it to the concatonated phrase
		/*
		years = Math.floor(moment.duration(ms).asYears());
		then = then.subtract('years', years);
		*/
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		// get the duration as months and round down
		months = Math.floor(moment.duration(ms).asMonths());
	 
		// subtract months from the original moment (not sure why I had to offset by 1 day)
		then = then.subtract('months', months).subtract('days', 1);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		days = Math.floor(moment.duration(ms).asDays());
	 
		then = then.subtract('days', days);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		hours = Math.floor(moment.duration(ms).asHours());
	 
		then = then.subtract('hours', hours);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		minutes = Math.floor(moment.duration(ms).asMinutes());
	 
		then = then.subtract('minutes', minutes);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		seconds = Math.floor(moment.duration(ms).asSeconds());
		
		// concatonate the variables
		diff = months + ' months ' + days + ' days ' + hours + ' hours ' + minutes + ' minutes and ' + seconds + ' seconds';
		jQuery('#momentBirthday').html(diff);
  	}
	
	
	/*** Anniversary Countdown ***/
	anniversaryCountdown();
	setInterval(anniversaryCountdown, 1000);
	function anniversaryCountdown () {
	var now = moment(), // get the current moment
		// December 31, 2013 @ 12:00AM (Javascript months are 0-11)
		then = moment([YYYY, MM, DD]),
		// get the difference from now to then in ms
		ms = then.diff(now, 'milliseconds', true);
		// If you need years, uncomment this line and make sure you add it to the concatonated phrase
		/*
		years = Math.floor(moment.duration(ms).asYears());
		then = then.subtract('years', years);
		*/
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		// get the duration as months and round down
		months = Math.floor(moment.duration(ms).asMonths());
	 
		// subtract months from the original moment (not sure why I had to offset by 1 day)
		then = then.subtract('months', months).subtract('days', 1);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		days = Math.floor(moment.duration(ms).asDays());
	 
		then = then.subtract('days', days);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		hours = Math.floor(moment.duration(ms).asHours());
	 
		then = then.subtract('hours', hours);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		minutes = Math.floor(moment.duration(ms).asMinutes());
	 
		then = then.subtract('minutes', minutes);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		seconds = Math.floor(moment.duration(ms).asSeconds());
		
		// concatonate the variables
		diff = months + ' months ' + days + ' days ' + hours + ' hours ' + minutes + ' minutes and ' + seconds + ' seconds';
		jQuery('#momentAnniversary').html(diff);
  	}
	
	
	// Load Google Spreadsheet data: Emails Received
	var email_spreadshseet_url = 'https://docs.google.com/spreadsheet/pub?hl=en_US&hl=en_US&key=[YOUR TOKEN ID]&output=html';
		
	Tabletop.init( { key: email_spreadshseet_url,
					 callback: showEmailInfo,
					 simpleSheet: true } )
					 
	
	// Load Google Spreadsheet data: Family Blog
	var blog_spreadshseet_url = 'https://docs.google.com/spreadsheet/pub?hl=en_US&hl=en_US&key=[YOUR TOKEN ID]&output=html;'
	
	Tabletop.init( { key: blog_spreadshseet_url,
					 callback: showBlogInfo,
					 simpleSheet: true } )
	
}); 


/*** Emails Received ***/
function showEmailInfo(data) {
	var count = 0;
	var obj = Object.keys(data);
	obj.forEach(function(key) {
	  var items = Object.keys(data[key]);
	  items.forEach(function(item) {
		var value = data[key][item].toString();
		var month = moment().format('MMMM');
		if (value.indexOf(month) != -1 ) { count++; };
	  });
	});
	
	emails = count + "</br>emails received</br>this month";
	jQuery('#emailCount').html(emails);
	console.log(data);
}


/*** Family Blog ***/
function showBlogInfo(data) {
	var count = 0;
	var obj = Object.keys(data);
	obj.forEach(function(key) {
	  var items = Object.keys(data[key]);
	  items.forEach(function(item) {
		var value = data[key][item].toString();
		var month = moment().format('MMMM');
		if (value.indexOf(month) != -1 ) { count++; };
	  });
	});
	
	blogs = count + "</br>blog postings</br>this month";
	jQuery('#blogCount').html(blogs);
	console.log(data);
}

/*** Instagram Feeds ***/
var myInstaFeed = new Instafeed({
	get: 'user',
	userId: YOUR_USER_ID,
	accessToken: '[YOUR ACCESS TOKEN]', 
	limit: 2,
	resolution: 'low_resolution',
    clientId: '[YOUR CLIENT ID]'
});
myInstaFeed.run();

var locationInstaFeed = new Instafeed2({
	get: 'location',
	locationId: YOUR_LOCATION_ID,
	limit: 5,
	resolution: 'low_resolution',
    clientId: '[YOUR CLIENT ID]'
});
locationInstaFeed.run();

var homeInstaFeed = new Instafeed3({
	get: 'tagged',
	tagName: '[YOUR TAG NAME]',
	limit: 5,
	resolution: 'low_resolution',
    clientId: '[YOUR CLIENT ID]'
});
homeInstaFeed.run();
</script>

<?php get_footer(); ?>