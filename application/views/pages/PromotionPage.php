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

	<script src="<?php echo base_url(); ?>assets/script/common.js"></script>



	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->

	<title>Promotion Page</title>
</head>

<body>
<div data-role="page" id="demo-page" class="promotion-page" data-url="demo-page">
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
	<!-- header end -->











	<div class="rwd-example">
		<!-- Lead story block -->
		<div class="ui-block-a">
			<div class="ui-body ui-body-d">

				<h4 >What is Leaderboard ?</h4>
				<div class="comment more"><p>Furthermore, the main part of the gamification is the Leaderboard. The position of the leaderboard will be arranged depending on the Levels of the user (The number of times the user has purchased from the store). In this scenario, the user who has purchased highest nu of times from the store will be on the top of the leaderboard</p></div>
			</div>
		</div>
		<!-- secondary story block #1 -->
		<div class="ui-block-b">
			<div class="ui-body ui-body-d">
				<img src="https://cmkt-image-prd.freetls.fastly.net/0.1.0/ps/5674694/600/400/m2/fpnw/wm1/v383-kul-19-saletags-cover-.jpg?1547043431&s=daee6ff0ca82114f07c51cd8f02a3c6d" class="img-fluid"  style=" display: block; margin-left: auto; margin-right: auto; width: 100%; max-height: 100px;" alt="Responsive image">
				<h4>Level Based Promotions</h4>
				<div class="comment more"><p>This type of promotions will be applied according to the position of the leaderboard. For an instance
						this promotion will be applied to the first 5 or 10 people in the leaderboard. And the promotion value will be
						also depending on the position of the leaderboard.

						To elaborate this further, the highest person will be able to receive best value of the promotion than a
						person who is in the 10th o 5th position of the leaderboard.

						This marketing strategy encourages users to purchase more times from the store and to get in to a good position
						in the leaderboard because that is the only way they will be able to receive best value for promotions.
						creates a competition among users and at the same time it also increases purchases of the supermarket.</p></div>

			</div>
		</div>
		<!-- secondary story block #2 -->
		<div class="ui-block-c">
			<div class="ui-body ui-body-d">
				<img src="https://i.ytimg.com/vi/K3aWicbRkro/maxresdefault.jpg" class="img-fluid"  style=" display: block; margin-left: auto; margin-right: auto; width: 100%; max-height: 100px;" alt="Responsive image">

				<h4>Reward Based Promotions</h4>
				<p>This promotion will be applied to every user who purchases more than LKR 1000.00 from the store. If the user has purchases more 1000.00 rs from the store, he/she will be getting points. And these points can be redeemed in their next purchase. In fact, these promotions will be based on their bill value.

					All the customers will be getting a QR scan code printed on their bill and they will be able scan this QR code to see their earned points. In the next purchase, customers can redeem these earned points.

				</p>
			</div>
		</div>
	</div><!-- /rwd-example -->



	<!-- footer -->
	<div data-role="footer" data-id="foo1" data-position="fixed">
		<div data-role="navbar" data-iconpos="top">
			<ul>
				<li><a href="<?php echo base_url(); ?>index.php/maincontroller" data-icon="home" rel="external">Home</a></li>

				<li><a href="<?php echo base_url(); ?>index.php/maincontroller" data-icon="grid" rel="external">Category</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/categorycontroller" data-icon="alert" rel="external">Cart</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/promotioncontroller" data-icon="star" rel="external" class="ui-btn-active ui-state-persist">Promotions</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/accountcontroller" data-icon="user" rel="external" >Account</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->

</div>

</body>
</html>
