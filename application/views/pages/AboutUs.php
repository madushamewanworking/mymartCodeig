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


		/* about info  */
		a {
			color: #0254EB
		}

		a:visited {
			color: #0254EB
		}

		a.morelink {
			text-decoration: none;
			outline: none;
		}

		.morecontent span {
			display: none;
		}

		.comment {
			width: 1000px;
			background-color: #f0f0f0;
			margin: 10px;
		}
	</style>

	<script src="<?php echo base_url(); ?>assets/script/common.js"></script>
	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->

	<script>
		$(document).ready(function () {
			var showChar = 400;
			var ellipsestext = "...";
			var moretext = "more";
			var lesstext = "less";
			$('.more').each(function () {
				var content = $(this).html();

				if (content.length > showChar) {

					var c = content.substr(0, showChar);
					var h = content.substr(showChar - 1, content.length - showChar);

					var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

					$(this).html(html);
				}

			});

			$(".morelink").click(function () {
				if ($(this).hasClass("less")) {
					$(this).removeClass("less");
					$(this).html(moretext);
				} else {
					$(this).addClass("less");
					$(this).html(lesstext);
				}
				$(this).parent().prev().toggle();
				$(this).prev().toggle();
				return false;
			});
		});


	</script>

	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.feedback.css" type="text/css" />


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

	<div data-role="header">
		<a data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext"
		   rel="external">Back</a>
		<label for="title" class="title">ABOUT US</label>
		<!-- <a href="#" data-icon="check">Save</a> -->
	</div>

	<!-- green lable -->
<!--	<div data-role="header">-->
<!--		<a data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext" rel="external">Back</a>-->
<!--		<label for="title" class="title" >ABOUT US</label>-->

<!--	</div>-->

	<div>
		<h4 align="center">-Our Mission-</h4>
		<h6 align="center">To provide the most actionable app store data.</h6>

		<h5 align="center">About</h5>



	</div>
	<div class="comment more" style="width: 100%;">
		Welcome to My Market, your number one source for all things product, ie: bevagers, vegetables,
		fruits, etc.
		We're dedicated to giving you the very best of this market products, with a focus on dependability,
		customer service and uniqueness.
		Founded in 2019 by Mr. M.L Perera, My Market has come a long way from its beginnings in a home
		office. When Mr. M.L Perera first started out, his passion for helping other parents be more
		eco-friendly,
		providing the best equipment for his fellow musicians drove him to do intense research, quit her day
		job, and gave him the impetus to turn hard work and inspiration into to a booming online store.
		We now serve customers all over the US, the world, the Austin area, and are thrilled to be a part of
		the eco-friendly wing of the baked goods industry.

		We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions
		or comments, please don't hesitate to contact us.

		Sincerely,
		Sasini Anuthara, Co Founder
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

	<div align="center" style="background-color: #30343D ;">
		<hr></hr>
		<h5 style="font-family:sans-serif ;">Address</h5>
		<h6  >No:01, Queen Rd, Colombo. </h6>
		<br></br>
		<h5 style="font-family:sans-serif ;">Latest Update</h5>
		<h6>We added some location reveiws |2019 Feb|</h6>
		<br></br>
		<h5 style="font-family:sans-serif ;">Contact us</h5>

		<!-- <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-mail">mail</button> -->
		<a href="#popupLogin" rel="popup" data-position-to="window" class="ui-btn ui-shadow ui-corner-all ui-icon-mail ui-btn-icon-notext" data-transition="pop">mail</a>
		<br></br>

		<div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">
			    <form>
				        <div style="padding:10px 20px;">
					            <h3>Please sign in</h3>
					<!--				            <label for="un" class="ui-hidden-accessible">Username:</label>-->
					<!--				            <input type="text" name="user" id="un" value="" placeholder="username" data-theme="a">-->
					<!--				            <label for="pw" class="ui-hidden-accessible">Password:</label>-->
					<!--				            <input type="password" name="pass" id="pw" value="" placeholder="password" data-theme="a">-->
					<!--				            <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Sign in</button>-->
					        </div>
				    </form>
		</div>

		<form id="frmBooking" name="bookingForm" method="post" action="_self"  >
			<a data-role="button" class="cart-btn my-btn" id="customButton"
			   style="background-color: #fe6311 !important; height: 40px  !important;  margin-bottom: 0px !important;  margin-top: 0px !important; color:white !important;">
				PROCEED TO CHECKOUT
			</a>
		</form>

	</div>



<!--	<div id="feedback-anchor">-->
<!---->
<!--	</div>-->
<!--	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<!--	<script src="--><?php //echo base_url(); ?><!--assets/script/jquery.feedback.js"></script>-->
<!--	<script type="text/javascript">-->
<!--		Feedback.init();-->
<!--	</script>-->





</div>

</body>

</html>
