<?php?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--  cdn config jquey mobile -->
	<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" /> -->
	<!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />



	<!-- main library -->
<!--	<link rel="stylesheet" href="../assets/jquery/jquery.mobile-1.4.5.min.css" />-->
<!--	<link rel="stylesheet" href="../assets/jquery/font-awesome.min.css" rel="stylesheet"-->
<!--		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />-->
<!--	<script src="../assets/jquery/jquery-1.11.1.min.js"></script>-->
<!--	<script src="../assets/jquery/jquery.mobile-1.4.5.min.js"></script>-->
<!--	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />-->
<!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->


	<!-- theam config -->
<!--	<link rel="stylesheet" href="../assets/themes/theam_d.css" />-->
<!--	<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/aboutus_page.css" />
	<!--  cdn config jquey mobile -->
	<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" /> -->
	<!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->


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
			font-family:'Century Gothic','Futura','Didact Gothic',san-serif;

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
	</style>
	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->

	<title>Aboutus page</title>
</head>

<body>
<div data-role="page" id="demo-page" class="aboutus-page" data-url="demo-page">
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
								<?php if(!$this->session->userdata('login_status')) :?>

									<a id="nav_des" href="<?php echo base_url(); ?>index.php/auth/login_user" rel="external" data-role="button" rel=external class="ui-btn-right ui-btn ui-btn-a ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-eye ui-nodisc-icon">LOGIN</a>
								<?php endif; ?>
								<!--									<a id="nav_des_acc" href="--><?php //echo base_url(); ?><!--index.php/accountcontroller" rel="external" data-role="button" rel=external class="ui-btn-right ui-btn ui-icon-user ui-btn-icon-notext ui-corner-all" >ACCOUNT</a>-->
								<?php if($this->session->userdata('login_status')) :?>
									<a href="#positionWindow" id="popupPadded" data-icon="search" data-rel="popup"
									   data-theme="a" data-overlay-theme="a" data-position-to="window"
									   class="ui-btn-right ui-btn ui-icon-search ui-btn-icon-notext ui-corner-all">Search</a>
								<?php endif; ?>
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

	<!-- green lable -->
	<div data-role="header">
		<a data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext" rel="external">Back</a>
		<label for="title" class="title" >PRODUCT DETAIL</label>
		<!-- <a href="#" data-icon="check">Save</a> -->
	</div>


	<div class="rwd-example">
		<!-- Lead story block -->
		<div class="ui-block-a">
			<div class="ui-body ui-body-d">
				<div class="card" style="width: 15rem;">
					<img src="<?php echo base_url(); ?>assets/images/usr/kavinda.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<p align="center" style="color: #4697cf; font-weight: 600; font-size: 18px; margin-bottom: 0rem">
							Kavinda Sachith</p>
						<!-- <h5 class="card-title">Rs.350</h5> -->
						<p align="center" style="color: #4697cf; font-weight: 300; font-size: 14px; margin-bottom: .1rem">Ui
							Ux designer & backend DEV,consectetur cfdsawerty qwrg,tyhfrgtrhtyhythtyjtfhjfhgj </p>
						<div class="ui-alt-icon">
							<!-- Class added to the wrapper -->
							    <a href="#" colo
								   class="ui-btn ui-shadow ui-corner-all ui-icon-location ui-btn-icon-notext ui-btn-inline"></a>
							    <a href="#"
								   class="ui-btn ui-shadow ui-corner-all ui-icon-mail ui-btn-icon-notext ui-btn-inline"></a>
							    <a href="#"
								   class="ui-btn ui-shadow ui-corner-all ui-icon-phone ui-btn-icon-notext ui-btn-inline"></a>
							    
						</div>

						<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
					</div>
				</div>

			</div>
		</div>
		<!-- secondary story block #1 -->
		<!-- &nbsp;
		&nbsp; -->

		<div class="ui-block-b">
			<div class="ui-body ui-body-d">
				<div class="card" style="width: 15rem;">
					<img src="<?php echo base_url(); ?>assets/images/usr/mayumi.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<p align="center"
						   style="color: #4697cf; font-weight: 600; font-size: 18px; margin-bottom: 0rem">Mayumi
							Wijeratna</p>
						<!-- <h5 class="card-title">Rs.350</h5> -->
						<p align="center"
						   style="color: #4697cf; font-weight: 300; font-size: 14px; margin-bottom: .1rem">Ui Ux
							designer & backend DEV,consectetur cfdsawerty qwrg,tyhfrgtrhtyhythtyjtfhjfhgj </p>
						<div class="ui-alt-icon">
							<!-- Class added to the wrapper -->
							    <a href="#" colo
								   class="ui-btn ui-shadow ui-corner-all ui-icon-location ui-btn-icon-notext ui-btn-inline"></a>
							    <a href="#"
								   class="ui-btn ui-shadow ui-corner-all ui-icon-mail ui-btn-icon-notext ui-btn-inline"></a>
							    <a href="#"
								   class="ui-btn ui-shadow ui-corner-all ui-icon-phone ui-btn-icon-notext ui-btn-inline"></a>
							    
						</div>

						<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
					</div>
				</div>


			</div>
		</div>
		<!-- secondary story block #2 -->
		<div class="ui-block-c">
			<div class="ui-body ui-body-d">
				<div class="card" style="width: 15rem;">
					<img src="<?php echo base_url(); ?>assets/images/usr/sasini.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<p align="center"
						   style="color: #4697cf; font-weight: 600; font-size: 18px; margin-bottom: 0rem">Mewan
							Madusha</p>
						<!-- <h5 class="card-title">Rs.350</h5> -->
						<p align="center"
						   style="color: #4697cf; font-weight: 300; font-size: 14px; margin-bottom: .1rem">Ui Ux
							designer & backend DEV,consectetur cfdsawerty qwrg,tyhfrgtrhtyhythtyjtfhjfhgj </p>
						<div class="ui-alt-icon">
							<!-- Class added to the wrapper -->
							    <a href="#" colo
								   class="ui-btn ui-shadow ui-corner-all ui-icon-location ui-btn-icon-notext ui-btn-inline"></a>
							    <a href="#"
								   class="ui-btn ui-shadow ui-corner-all ui-icon-mail ui-btn-icon-notext ui-btn-inline"></a>
							    <a href="#"
								   class="ui-btn ui-shadow ui-corner-all ui-icon-phone ui-btn-icon-notext ui-btn-inline"></a>
							    
						</div>

						<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
					</div>
				</div>

			</div>
		</div>
		<div class="ui-block-d">
			<div class="ui-body ui-body-d">
				<div class="card" style="width: 15rem;">
					<img src="<?php echo base_url(); ?>assets/images/usr/mewan.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<p align="center"
						   style="color: #4697cf; font-weight: 600; font-size: 18px; margin-bottom: 0rem">
							Sasini Sithara</p>
						<!-- <h5 class="card-title">Rs.350</h5> -->
						<p align="center"
						   style="color: #4697cf; font-weight: 300; font-size: 14px; margin-bottom: .1rem">Ui
							Ux designer & backend DEV,consectetur cfdsawerty qwrg,tyhfrgtrhtyhythtyjtfhjfhgj
						</p>
						<div class="ui-alt-icon">
							<!-- Class added to the wrapper -->
							    <a href="#" colo
								   class="ui-btn ui-shadow ui-corner-all ui-icon-location ui-btn-icon-notext ui-btn-inline"></a>
							    <a href="#"
								   class="ui-btn ui-shadow ui-corner-all ui-icon-mail ui-btn-icon-notext ui-btn-inline"></a>
							    <a href="#"
								   class="ui-btn ui-shadow ui-corner-all ui-icon-phone ui-btn-icon-notext ui-btn-inline"></a>
							    
						</div>

						<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
					</div>
				</div>

			</div>
		</div>
	</div><!-- /rwd-example -->








</div>

</body>

</html>
