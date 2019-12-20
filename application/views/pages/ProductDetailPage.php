<?php?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--  cdn config jquey mobile -->
	<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" /> -->
	<!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->


	<!-- firebase -->
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-firestore.js"></script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
	 https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-analytics.js"></script>

	<!-- boostrap 4.0 -->
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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
	<script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/jquery/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/grid.css" />

	<!-- custom javascript -->
	<script src="<?php echo base_url(); ?>assets/script/main.js"></script>

	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->


	<script type="text/javascript" src="PATH/TO/YOUR/COPY/OF/jquery.mousewheel.min.js"></script>

	<script type="text/javascript" src="http://dev.jtsage.com/cdn/spinbox/latest/jqm-spinbox.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/script/common.js"></script>


	<style>
		@import url('https://fonts.googleapis.com/css?family=Didact+Gothic');

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
		}

		.ui-content {
			padding: 0em;
			background-color: white;
		}

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

		/* .ui-grid-a {
			font-family: sans-serif;
			font-size: 18px;
		} */

		.ui-page.ui-page-active {
			min-height: 100% !important;
		}

		.ui-btn-icon-notext.ui-btn-left {
			margin-left: 4%;
			margin-top: 1%;
		}

		.ui-page-theme-a {
			background-color: white !important;
		}

		.card {
			border: 4px solid #F4F6F5 !important;
			border-radius: .55rem !important;
			font-family: 'Century Gothic';
			margin-top: 7%;
			/*margin: 0 auto !important; !* Added *!*/
			/*float: none ; !* Added *!*/
			/*margin-bottom: 10px !important;  !* Added *!*/
		}
		.card-body {
			background-color:#F4F6F5 ;
		}
		.lblc{
			background-color:#F4F6F5 !important;
			/*padding-left: 10px;*/
			padding-top: 14px;

		}

		/*.ui-block-b {*/
		/*	*/
		/*}*/
		#block{
			background-color:#F4F6F5 !important;
		}

		/*ipad pro protrait*/
		@media only screen and (min-width: 767px) {
			.card{
				margin-top: 4%;
				width: 40em !important;
			}
		}
		/*i pad pro land*/
		@media only screen and (min-width: 1020px) {
			.card{
				margin-top: 2%;
				width: 25em !important;
			}
		}


	</style>

	<title>Document</title>
</head>

<body>
<div data-role="page" id="demo-page" class="my-page" data-url="demo-page">
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

							<?php if(!$this->session->userdata('login_status')) :?>
								<a href="#positionWindow" id="popupPadded" data-icon="search" data-rel="popup"
								   data-theme="a" data-overlay-theme="a" data-position-to="window"
								   class="ui-btn-right ui-btn ui-icon-search ui-btn-icon-notext ui-corner-all">Search</a>
							<?php endif; ?>

							<div data-role="popup" data-theme="a" data-overlay-theme="b" data-transition="slidedown"
								 id="positionWindow" class="ui-corner-all">
								<div style="padding:10px 20px;" class="pop">
									            <h3>Search for Products</h3>
									            <label for="un" class="ui-hidden-accessible"></label>
									            <input type="text" name="user" id="un" value=""
													   placeholder="What Are You Looking For?" data-theme="a">
									           
									            <button type="submit"
														class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-search">SEARCH</button>
								</div>
							</div>

						</div>
					</div>
					<div class="ui-block-b">

						 
						<div class="ui-grid-b">
							<div class="ui-block-a"></div>
							<?php if(!$this->session->userdata('login_status')) :?>

								<a id="nav_des" href="<?php echo base_url(); ?>index.php/auth/login_user" rel="external" data-role="button" rel=external class="ui-btn-right ui-btn ui-btn-a ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-eye ui-nodisc-icon">LOGIN</a>
							<?php endif; ?>
							<!--									<a id="nav_des_acc" href="--><?php //echo base_url(); ?><!--index.php/accountcontroller" rel="external" data-role="button" rel=external class="ui-btn-right ui-btn ui-icon-user ui-btn-icon-notext ui-corner-all" >ACCOUNT</a>-->
							<?php if($this->session->userdata('login_status')) :?>
								<a href="#positionWindow" id="popupPadded" data-icon="search" data-rel="popup"
								   data-theme="a" data-overlay-theme="a" data-position-to="window"
								   class="ui-btn-right ui-btn ui-icon-search ui-btn-icon-notext ui-corner-all">Search</a>
							<?php endif; ?>
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
		<a data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext" rel="external">Back</a>
		<label for="title" class="title" >PRODUCT DETAIL</label>
		<!-- <a href="#" data-icon="check">Save</a> -->
	</div>


	<div data-role="content" >
		<!-- <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-l">arrow-l</button> -->

		<!-- testing -->
		<!-- <a href="../views/ProductPage.html" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext" rel="external">Back</a>
		<label for="title" class="title" >PRODUCT DETAIL</label> -->
		<!-- <a href="#page1" class="ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-grid">Page 1</a> -->

		<!-- end of testing -->

		<!-- <div class="ui-grid-a">
				<div class="ui-block-a">
						<a href="index.html" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext">Delete</a>
				</div>
				<div class="ui-block-b"> -->
		<!-- <label for="title" class="title" >PRODUCT DETAIL</label> -->
		<!-- </div>
</div> -->

<!--		<div class="ui-grid-a scoreGrid scoreBody">-->
<!--			<div class="ui-block-a">-->
<!--				<p style="font-size: small;">YOUR MY MARKET LOYALITY POINTS</p>-->
<!--				<p style="font-size: x-small;">LEADERBOARD</p>-->
<!--			</div>-->
<!--			<div class="ui-block-b">-->
<!--				<p class="scoreIMG">45</p>-->
<!--			</div>-->
<!--		</div>-->

		<div class="card" style="width: 18rem;">
			<?php foreach ($product as $cat): ?>

			<img src="<?php echo $cat->getProImage() ?>" class="card-img-top" alt="...">


			<div class="card-body card-img-left">
				<p style="color: rgb(223, 22, 22); font-weight: 800; font-size: 18px; margin-bottom: 1rem">Rs.<?php echo $cat->getPrice() ?>
				</p>
				<!-- <h5 class="card-title">Rs.350</h5> -->
				<p style="color: #495057; font-weight: 800; font-size: 18px; margin-bottom: .1rem"><?php echo $cat->getProName() ?>
				</p>
				<p style="color: #b1b7bb; font-weight: 300; font-size: 14px; margin-bottom: 0rem"><?php echo $cat->getProDescription() ?>
					lora ipsum</p>

				<div class="ui-grid-a">
					<div class="ui-block-a"><label class="lblc" id="spin5" for="customTagField">Count</label></div>
					<div class="ui-block-b" id="block">
						<form id="dataform" method="post">
						<input name="image" value="<?php echo $cat->getProImage() ?>" type="hidden">
						<input  name="price" value="<?php echo $cat->getPrice() ?>" type="hidden">
						<input  name="name" value="<?php echo $cat->getProName() ?>" type="hidden">
						<input  name="id" value="<?php echo $cat->getProid() ?>" type="hidden">
						<input type="number" data-mini="true" data-role="spinbox" name="count"id="spin5" data-options='{"type":"horizontal"}' min="1" value="1" max="100" />
						</form>
					</div>
				</div>

				<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
			</div>

			<?php endforeach;  ?>
		</div>

	</div> <!-- /content -->






	<!-- footer -->
	<div data-role="footer" data-id="foo1" data-position="fixed">
		<div data-role="navbar" data-iconpos="top">
			<ul>
				<!-- <li><a href="#" data-icon="home">Home</a></li>
			<li><a href="#" data-icon="grid">Category</a></li> -->
				<li><button type="submit" form="dataform"  data-icon="alert" formaction="<?php echo base_url('index.php/cartcontroller/addcart'); ?> " >Cart</button></li>

				<li><button type="submit" form="dataform"  data-icon="heart" formaction="<?php echo base_url('index.php/cartcontroller/addfav'); ?> " >Favourites</button></li>

<!--				<li><button href="#" data-icon=heart>Favourites</button></li>-->
				<!-- <li><a href="#" data-icon="star">Promotions</a></li>
			<li><a href="#" data-icon="user">Account</a></li> -->
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->


</body>
<div></div>
<div></div>
</div>

</html>
