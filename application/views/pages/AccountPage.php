<?php
$username= $this->session->userdata('username');
?>
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


	<script type='text/javascript' src="--><?php //echo base_url(); ?><!--assets/jquery/qrscript.js"></script>

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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/account_page.css" />


	<!-- Qr code scan -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<!--	-->

	<!--	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-app.js"></script>-->
<!--	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-auth.js"></script>-->
<!--	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-firestore.js"></script>-->
<!--	<script src="../assets/script/firebase_init.js"></script>-->
<!--	<script src="../assets/script/common.js"></script>-->
<!--	<script src="../assets/script/account.js"></script>-->
	<!-- <script src="C:\Users\Asus\Desktop\Final Year\UI_UX\CW Implementation\instascan.min.js"></script> -->


	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->

	<!-- <script type="text/javascript">

		var scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
		scanner.addListener('scan', function (content) {
			$("#contentText").html(content);
			window.open(content, '_blank');
		});

		Initiate Scanner;

		Instascan.Camera.getCameras().then(function (cameras) {
			if (cameras.length > 0) {
				scanner.start(cameras[0]);
			} else {
				console.error('No cameras found.');
			}
		}).catch(function (e) {
			console.error(e);
		});

	</script> -->
	<title>Account Page</title>
</head>

<body>
<div data-role="page" id="demo-page" class="account-page" data-url="demo-page">
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
								<a href="<?php echo base_url(); ?>index.php/maincontroller/view/aboutus" rel="external" id="popupPadded" data-icon="search" data-rel="popup"
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











	<div class="rwd-example">
		<!-- Lead story block -->
		<div class="ui-block-a">
			<div class="ui-body ui-body-d">
				<img src="<?php echo base_url(); ?>assets/images/res/Logo.png" class="avatar" alt="Responsive image">
				<div class="user_data">
					<h2><?php echo $username ?></h2>
					<p>Description Level,</p>
				</div>

			</div>
		</div>
		<!-- secondary story block #1 -->
		<!-- &nbsp;
			&nbsp; -->

		<div class="ui-block-b">
			<div class="ui-body ui-body-d">
				<a href="<?php echo base_url();?>index.php/AccountController/editAccountDisplay" class="ui-btn ui-shadow ui-corner-all" data-ajax="false">Edit Account</a>
				<a href="<?php echo base_url(); ?>index.php/favouritescontroller" class="ui-btn ui-shadow ui-corner-all" data-ajax="false">Favourites</a>
				<a href="#two" class="ui-btn ui-shadow ui-corner-all">Payment History</a>

			</div>
		</div>
		<!-- secondary story block #2 -->
		<div class="ui-block-c">
			<div class="ui-body ui-body-d">
				<!-- <h4>AOL unveils Alto, an email service that syncs 5 accounts</h4>
					<p>AOL, struggling to shed its outdated image, is reimagining one of the most visibly aging parts of its platform: Its email service. </p> -->
				<a href="<?php echo base_url(); ?>index.php/LeaderboardController" class="ui-btn ui-shadow ui-corner-all" data-ajax="false">Leaderboard</a>
				<a href="#popupqrcode" data-rel="popup" data-position-to="window"
				   class="ui-btn ui-shadow ui-corner-all" data-transition="pop" >Add Points</a>
				<!-- <a href="#two" id="logoutbtn" class="ui-btn ui-shadow ui-corner-all"
					style="background-color: #FE6311 !important; color: white !important;">Logout</a> -->

				<a href="<?php echo base_url(); ?>index.php/auth/logout"  rel="external" class="ui-shadow ui-btn ui-corner-all "
				   style="background-color: #FE6311 !important; color: white !important;" data-rel="dialog" data-position-to="window">Logout</a>
			</div>
			<!-- <a href="#popupLogin" data-rel="popup" data-position-to="window" class="ui-btn ui-shadow ui-corner-all" data-transition="pop">Sign in</a> -->


			<div data-role="popup" id="popupqrcode" data-theme="a" class="ui-corner-all">
				<!--     <form> -->
				<!--         <div style="padding:10px 20px;"> -->
				            <h3>Scan Recipt</h3>
				<video id="preview"></video>


				<script type="text/javascript">

                    let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
                    scanner.addListener('scan', function (content) {
                        alert(content);
                        document.getElementById('gadget_url').value = '';
                    });
                    Instascan.Camera.getCameras().then(function (cameras) {
                        if (cameras.length > 0) {
                            scanner.start(cameras[0]);
                        } else {
                            console.error('No cameras found.');
                        }
                    }).catch(function (e) {
                        console.error(e);
                    });

				</script>

				<!--         </div> -->
				<!--     </form> -->
			</div>
		</div>
	</div><!-- /rwd-example -->




	<!-- footer -->
	<div data-role="footer" data-id="foo1" data-position="fixed">
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

</body>

</html>
