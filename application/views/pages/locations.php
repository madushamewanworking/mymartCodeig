<?php ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
			crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous"></script>

	<!-- main library -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/jquery/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/jquery/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/jquery/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/locations.css" />



	<style>
		@import url('https://fonts.googleapis.com/css?family=Didact+Gothic');
		/* Set the size of the div element that contains the map */
		#map_wrapper {
			height: 400px;
			margin-top: 30px;
			margin-bottom: 50px;
		}

		#map_canvas {
			width: 100%;
			height: 100%;
		}




		/* #bd *{ font-family:'Century Gothic','Futura','Didact Gothic',san-serif; } */

		.title {
			min-height: 1.2em;
			text-align: center;
			font-size: 10px;
			display: block;
			margin: .2em 30% .8em;
			padding: 10;
			text-overflow: ellipsis;
			overflow: hidden;
			white-space: nowrap;
			outline: 0 !important;
			border: 1px solid #A2C432;
			background: #A2C432;
			color: #fff;
			font-weight: bold;
			text-shadow: 0 1px 1px #335413;
			font-family:'Century Gothic','Futura','Didact Gothic',san-serif;

		}

		/*.ui-content {*/
		/*	padding: 0em;*/
		/*	background-color: white;*/
		/*}*/

		.ui-mobile label {
			font-size: 26px;
			font-weight: 200;
			font-family: 'Century Gothic';
			margin: 0 0 0;
		}

		.scoreGrid {
			border-width: 1px;
			border-style: solid;
		}

		.scoreBody {
			position: relative;
			padding: 0 0;
			overflow: hidden;
			display: block;
			clear: both;
			font-family: 'Century Gothic';
		}

		ol {
			padding-inline-start: 0px;
		}

		.scoreIMG {
			border-radius: 50%;
			width: 36px;
			height: 36px;
			padding: 8px;

			background: #111;
			border: 2px solid #666;
			color: #fe6311;
			text-align: center;

			font: 32px Arial;
		}

		.card {

			background-color: #f0e6e6d8;
			border: 0px solid #fff;
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 100%;
		}

		.ui-field-contain {
			float: left;
		}

		.ui-mobile label {
			font-family: sans-serif;
			font-size: 18px;
		}

		.ui-btn {
			margin: 0 0;
		}
		.ui-page.ui-page-active {
			min-height: 100% !important;
		}

		.ui-btn-icon-notext.ui-btn-left {
			margin-left: 4%;
			margin-top: 1%;
		}


	</style>
	<script>
        jQuery(function($) {
            // Asynchronously Load the map API
            var script = document.createElement('script');
            script.src = "https://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
            document.body.appendChild(script);
        });

        function initialize() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                mapTypeId: 'roadmap'
            };

            // Display a map on the page
            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            map.setTilt(45);

            // Multiple Markers
            var markers = [
                ['One Galle Face, Colombo', 6.9272545,79.8855316,],
                ['Moratuwa, Colombo', 6.7957814,79.8855316],
                ['Maharagama, Colombo', 6.8503687,79.9072324],
                ['Pannipitiya, Colombo', 6.8382963,79.9403088],
                ['Cinamon Gardens, Colombo', 6.906104,79.8575942],
            ];

            // Info Window Content
            var infoWindowContent = [
                ['<div class="info_content">' +
                '<h4>A-MyMart-One Galle Face</h2>' +
                '<p>Find our newest stall at One Galle Face shopping Mall.<p>' +
                '<img src="http://www.dailynews.lk/sites/default/files/news/2015/09/23/z_pi-Supermarket.jpg"  width="350" height="150" align="center">'+
                '<p align="justify">No.53, Fussels Lane, Colombo.<br> Tel: 0112568374 <br> <a href="https://www.google.com">www.Mymart.com</a><p>' +
                '</div>'],
                ['<div class="info_content">' +
                '<h3>B-MyMart-Moratuwa</h3>' +
                '<p>Shop with us at Moratuwa KZone.</p>' +
                '<img src="https://cdn-01.independent.ie/incoming/article37616241.ece/8bc17/AUTOCROP/w620/groceries%20fruitaveg%20stock.jpg"  width="350" height="150" align="center">'+
                '<p align="justify">No.53, Fussels Lane, Colombo.<br> Tel: 0112568374 <br> <a href="https://www.google.com">www.Mymart.com</a><p>' +
                '</div>'],
                ['<div class="info_content">' +
                '<h3>C-MyMart-Maharagama</h3>' +
                '<p>Shop with us at Maharagama.</p>' +
                '<img src="https://c0.wallpaperflare.com/preview/462/1010/452/supermarket-shelf-blur-yogurt-thumbnail.jpg"  width="350" height="150" align="center">'+
                '<p align="justify">No.53, Fussels Lane, Colombo.<br> Tel: 0112568374 <br> <a href="https://www.google.com">www.Mymart.com</a><p>' +
                '</div>'],
                ['<div class="info_content">' +
                '<h3>D-MyMart-Pannipitiya</h3>' +
                '<p>nO,53 Hapdan Lane, Pannipitiya.</p>' +
                '<img src="https://c1.wallpaperflare.com/preview/956/80/1019/grocery-store-retail-supermarket.jpg"  width="350" height="150" align="center">'+
                '<p align="justify">No.53, Fussels Lane, Colombo.<br> Tel: 0112568374 <br> <a href="https://www.google.com">www.Mymart.com</a><p>' +
                '</div>'],
                ['<div class="info_content">' +
                '<h3>E-MyMart-Cinamon Gardens</h3>' +
                '<p>Find us at Cinamon Gardens,Colombo.</p>' +
                '<img src="https://images.wallpaperscraft.com/image/mother_daughter_fruit_apples_supermarket_choice_purchase_80459_3840x2400.jpg"  width="350" height="150" align="center">'+
                '<p align="justify">No.53, Fussels Lane, Colombo.<br> Tel: 0112568374 <br> <a href="https://www.google.com">www.Mymart.com</a><p>' +
                '</div>']
            ];


            // Display multiple markers on a map
            var infoWindow = new google.maps.InfoWindow(), marker, i;

            // Loop through our array of markers & place each one on the map
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });

                // Allow each marker to have an info window
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Automatically center the map fitting all markers on the screen
                map.fitBounds(bounds);
            }

            // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(14);
                google.maps.event.removeListener(boundsListener);
            });

        }
	</script>
</head>
<body>
<!-- header start -->
<div data-role="header" data-position="fixed">
	<div class="ui-grid-a">
		<div class="ui-block-a">
			<!-- <div class="ui-bar ui-bar-a" style="height:30px">Block A</div> -->
			<!-- <a class="ui-link" href="" > <img id="Logo" src="../assets/images/res/Logo.png"> </a> -->
			<!-- <a href="info.html" data-icon="info-page" class="ui-btn-right" data-transition="flip" data-iconpos="notext" data-theme="a"></a> -->
			<!-- <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-myicon"> -->
			<img src="<?php echo base_url(); ?>assets/images/res/Logo.png" alt="Logo, Facebook" class="logo"
				 style="float:left; display:inline; width: 36%;" />
		</div>
		<div class="ui-block-b">
			<div class="ui-grid-a ">
				<div class="ui-block-a">
					<div class="ui-bar ui-bar-a" style="height:35px">

						<!-- <a href="#" class="ui-btn ui-icon-search ui-btn-icon-notext ui-corner-all">No text</a> -->





					</div>
				</div>
				<div class="ui-block-b">

					 
					<div class="ui-grid-b">
						<div class="ui-block-a"></div>
						<div class="ui-block-b">  
							<!-- <button id="nav_des"
								class="ui-btn-right ui-btn ui-btn-a ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-eye ui-nodisc-icon">LOGIN</button> -->
							<a href="../views/AboutUs.html" rel="external" id="popupPadded" data-icon="search" data-rel="popup"
							   data-theme="a" data-overlay-theme="a" data-position-to="window"
							   class="ui-btn-right ui-btn ui-icon-info ui-btn-icon-notext ui-corner-all">Search</a>
						</div>
						<div class="ui-block-c"></div>
					</div><!-- /grid-b -->



					<!-- <div class="ui-bar ui-bar-a" style="height:50px" ui-btn-right>
					<a href="index.html" data-icon="eye"data-theme="a" class="ui-nodisc-icon">login</a>
				</div> -->
				</div>
			</div>

		</div>
	</div>

</div>
<!-- header end -->


<div data-role="header">
	<a data-rel="back" style="padding: 13px;" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext" rel="external">Back</a>
	<label for="title" class="title" style="height: 50px; padding: 13px;">FAVOURITIES</label>
	<!-- <a href="#" data-icon="check">Save</a> -->
</div>



















<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="map_wrapper">
				<div id="map_canvas" class="mapping"></div>
			</div>
		</div>
	</div>
	<div class ="Btn">
		<div data-role="collapsibleset" data-corners="false" data-theme="a" data-content-theme="a">
			 <div data-role="collapsible">
				      <h3><center>MyMart-One Galle Face</center></h3>
				   <p style="text-align: center" class="p">Our  MyMart supermarket is a self-service store offering a wide variety of food, beverages and household products, organized into sections. It is larger and has a wider selection than earlier grocery stores, but is smaller and more limited in the range of merchandise than a hypermarket or big-box market.  </p>
				    </div>

			<!-- Store 2 collapsible section -->
			    <div data-role="collapsible">
				      <h3><center>MyMart-Moratuwa</center></h3>
				    <p style="text-align: center"  class="p">Our  MyMart supermarket is a self-service store offering a wide variety of food, beverages and household products, organized into sections. It is larger and has a wider selection than earlier grocery stores, but is smaller and more limited in the range of merchandise than a hypermarket or big-box market.  </p>
				    </div>
			<!--Store 3 collapsible section -->
			    <div data-role="collapsible">
				       <h3><center>MyMart-Maharagama</center></h3>
				   <p style="text-align: center" class="p">Our  MyMart supermarket is a self-service store offering a wide variety of food, beverages and household products, organized into sections. It is larger and has a wider selection than earlier grocery stores, but is smaller and more limited in the range of merchandise than a hypermarket or big-box market.  </p>
				<!-- Store 4 collapsible section -->
				    </div> <div data-role="collapsible">
				       <h3><center>MyMart-Pannipitiya</center></h3>
				    <p style="text-align: center" class="p">No.53, Hampdan Lane, Wellawatta,Colombo 06</p>
				    </div>
			<!-- Store  collapsible section -->
			 



		</div>
	</div>
	<!-- footer -->
	<div data-role="footer" data-id="foo1"  data-position="fixed">
		<div data-role="navbar" data-iconpos="top">
			<ul>
				<li><a href="<?php echo base_url(); ?>index.php/maincontroller" data-icon="home" rel="external">Home</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/categorycontroller" data-icon="grid" rel="external">Category</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/cartcontroller" data-icon="alert" rel="external">Cart</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/promotioncontroller" data-icon="star" rel="external">Promotions</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/accountcontroller" data-icon="user" rel="external"
					   class="ui-btn-active ui-state-persist">Account</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->
</div>

</div>
</body>



























</html>
