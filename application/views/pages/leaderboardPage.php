<?php ?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/cart_page.css">

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
	<link rel="stylesheet" href="../assets/jquery/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="../assets/jquery/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
	<script src="../assets/jquery/jquery-1.11.1.min.js"></script>
	<script src="../assets/jquery/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/leaderboard.css" />
	<!-- <link rel="stylesheet" type="text/css" href="../assets/css/grid.css" /> -->


	<style>
		@import url('https://fonts.googleapis.com/css?family=Didact+Gothic');

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

		.ui-mobile label {
			font-size: 26px;
			font-weight: 200;
			font-family: 'Century Gothic';
			margin: 0 0 0;
		}

		.ui-mobile label {
			font-family: sans-serif;
			font-size: 18px;
		}

		.ui-btn-icon-notext.ui-btn-left {
			margin-left: 4%;
			margin-top: 1%;
		}

		#imageUpload {
			display: none;
		}

		#profileImage {
			cursor: pointer;
		}

		#profile-container {
			width: 150px;
			height: 150px;
			overflow: hidden;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			-ms-border-radius: 50%;
			-o-border-radius: 50%;
			border-radius: 50%;
		}

		#profile-container img {
			width: 150px;
			height: 150px;
		}
	</style>

	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->

	<title>Document</title>
</head>

<body>
<div data-role="page"  id="demo-page" class="my-page" data-url="demo-page">
	<!-- header start -->
	<div data-role="header">
		<div class="ui-grid-a">
			<div class="ui-block-a">
				<!-- <div class="ui-bar ui-bar-a" style="height:30px">Block A</div> -->
				<!-- <a class="ui-link" href="" > <img id="Logo" src="../assets/images/res/Logo.png"> </a> -->
				<!-- <a href="info.html" data-icon="info-page" class="ui-btn-right" data-transition="flip" data-iconpos="notext" data-theme="a"></a> -->
				<!-- <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-myicon"> -->
				<img src="../assets/images/res/Logo.png" alt="Logo, Facebook"  class="logo" style="float:left; display:inline; width: 36%;" />
			</div>
			<div class="ui-block-b">
				<div class="ui-grid-a ">
					<div class="ui-block-a">
						<div class="ui-bar ui-bar-a" style="height:35px">

							<!-- <a href="#" class="ui-btn ui-icon-search ui-btn-icon-notext ui-corner-all">No text</a> -->

							<a href="#positionWindow" id="popupPadded" data-icon="search" data-rel="popup"
							   data-theme="a" data-overlay-theme="a" data-position-to="window"
							   class="ui-btn-right ui-btn ui-icon-search ui-btn-icon-notext ui-corner-all">Search</a>

							<div data-role="popup" data-theme="a" data-overlay-theme="b" data-transition="slidedown"
								 id="positionWindow" class="ui-corner-all">
								<div style="padding:10px 20px;">
									<h3>Search for Products</h3>
									<label for="un" class="ui-hidden-accessible">Username:</label>
									<input type="text" name="user" id="un" value="" placeholder="username"
										   data-theme="a">

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
								<button id="nav_des"
										class="ui-btn-right ui-btn ui-btn-a ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-eye ui-nodisc-icon">LOGIN</button>
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
		<a data-rel="back"
		   class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext" rel="external">Back</a>
		<label for="title" class="title">LEADERBOARD</label>
		<!-- <a href="#" data-icon="check">Save</a> -->
	</div>

	<!-- slide show start -->


	<!-- slide show end -->



	<!-- grid view -->

	<!-- <div data-role="header">
		<h1>Listview Responsive Grid</h1>
		<a href="./" data-shadow="false" data-iconshadow="false" data-icon="carat-l" data-iconpos="notext" data-rel="back" data-ajax="false">Back</a>
	</div> -->

	<!-- /header -->
	<div role="main" class="ui-content">
		<ul data-role="listview" id="class-list">

			<?php foreach ($leaderboardData as $leaderboard){ ?>


			<?php if($leaderboard->getLevel()==1){?>
			<li class="cart-item ldr-item" >
				<h2><?php echo $leaderboard->getUsername() ?></h2>
				<img src="<?php echo $leaderboard->getImageLink()?>" class="ui-li-thumb m-1 ldr ldr_img1">
				<div class="row">
					<p class="col-8">Score: <span class="text-primary"> <?php echo $leaderboard->getPoints() ?></span></p>
				</div>
				<div class="col-8 progress">
					<div class="completed bar1">

					</div>
				</div>



				<div class="ldr_circ ldr1 ui-li-aside">
					<h3><?php echo $leaderboard->getLevel() ?></h3>
				</div>
			</li>
			<?php } ?>



			<?php if($leaderboard->getLevel()==2){?>
				<li class="cart-item ldr-item" >
					<h2><?php echo $leaderboard->getUsername() ?></h2>
					<img src="<?php echo $leaderboard->getImageLink()?>" class="ui-li-thumb m-1 ldr ldr_img2">
					<div class="row">
						<p class="col-8">SCORE: <span class="text-primary"> <?php echo $leaderboard->getPoints() ?></span></p>
					</div>

					<div class="col-8 progress">
						<div class="completed bar2">

						</div>
					</div>

					<div class="ldr_circ ldr2 ui-li-aside">
						<h3><?php echo $leaderboard->getLevel() ?></h3>
					</div>



				</li>
				<?php } ?>


			<?php if($leaderboard->getLevel()==3){?>
				<li class="cart-item ldr-item" >
					<h2><?php echo $leaderboard->getUsername() ?></h2>
					<img src="<?php echo $leaderboard->getImageLink()?>" class="ui-li-thumb m-1 ldr ldr_img3">
					<div class="row">
						<p class="col-8">SCORE: <span class="text-primary"> <?php echo $leaderboard->getPoints() ?></span></p>
					</div>

					<div class="col-8 progress">
						<div class="completed bar3">

						</div>
					</div>

					<div class="ldr_circ ldr3 ui-li-aside">
						<h3><?php echo $leaderboard->getLevel() ?></h3>
					</div>
				</li>
				<?php } ?>


			<?php if($leaderboard->getLevel()==4){?>
				<li class="cart-item ldr-item" >
					<h2><?php echo $leaderboard->getUsername() ?></h2>
					<img src="<?php echo $leaderboard->getImageLink()?>" class="ui-li-thumb m-1 ldr ldr_img4">
					<div class="row">
						<p class="col-8">SCORE: <span class="text-primary"> <?php echo $leaderboard->getPoints() ?></span></p>
					</div>

					<div class="col-8 progress">
						<div class="completed bar4">

						</div>
					</div>

					<div class="ldr_circ ldr4 ui-li-aside">
						<h3><?php echo $leaderboard->getLevel() ?></h3>
					</div>
				</li>
				<?php }?>

			<?php if($leaderboard->getLevel()==5){?>
				<li class="cart-item ldr-item" >
					<h2><?php echo $leaderboard->getUsername() ?></h2>
					<img src="<?php echo $leaderboard->getImageLink()?>" class="ui-li-thumb m-1 ldr ldr_img4">
					<div class="row">
						<p class="col-8">SCORE: <span class="text-primary"> <?php echo $leaderboard->getPoints() ?></span></p>
					</div>

					<div class="col-8 progress">
						<div class="completed bar4">

						</div>
					</div>

					<div class="ldr_circ ldr4 ui-li-aside">
						<h3><?php echo $leaderboard->getLevel() ?></h3>
					</div>
				</li>
				<?php } ?>





			<?php  }?>



<!--			-->


<!---->

<!---->

<!---->
<!--			<li class="cart-item ldr-item" >-->
<!--				<h2>Random</h2>-->
<!--				<img src="../assets/images/res/cod.jpg" class="ui-li-thumb m-1 ldr ldr_img4">-->
<!--				<div class="row">-->
<!--					<p class="col-8">SCORE: <span class="text-primary"> 750</span></p>-->
<!--				</div>-->
<!---->
<!--				<div class="col-8 progress">-->
<!--					<div class="completed bar4">-->
<!---->
<!--					</div>-->
<!--				</div>-->
<!---->
<!--				<div class="ldr_circ ldr4 ui-li-aside">-->
<!--					<h3>5</h3>-->
<!--				</div>-->
<!--			</li>-->









			<!-- <li class="cart-item ldr-item" >
					<h2>Axe deodrant for men</h2>
					<div class="row">
							<p class="col-4">Count 2</p>
							<p class="col-4">Rs.750</p>
					</div>

				<img src="../assets/images/res/offer.jpg" class="ui-li-thumb m-1 mt-2 ldr ldr2">
				<div class="ui-li-aside">
						<input type="checkbox" data-mini="true">
				</div>

			</li>
			<li class="cart-item" >
					<h2>Axe deodrant for men</h2>
					<div class="row">
							<p class="col-4">Count 2</p>
							<p class="col-4">Rs.750</p>
					</div>

				<img src="../assets/images/res/offer.jpg" class="ui-li-thumb m-1 mt-2 ldr ldr3">
				<div class="ui-li-aside">
						<input type="checkbox" data-mini="true">
				</div>

			</li> -->

		</ul>
	</div><!-- /content -->

	<!-- gerid view end -->




	<!-- footer -->
	<div data-role="footer" data-id="foo1" data-position="fixed">

		<!-- <button class="add-to-cart" data-postion="fixed">
		  <div class="cart-btn">
			<div>
			  <a href="#" data-icon="grid"></a>
			</div>
			<p>ADD TO CART</p>
		  </div>
		</button> -->


		<div data-role="navbar" data-iconpos="top">
			<ul>
				<li><a href="HomePage.html" data-icon="home" rel="external">Home</a></li>
				<li><a href="cart.html" data-icon="grid" rel="external">Category</a></li>
				<li><a href="#" data-icon="alert" rel="external">Cart</a></li>
				<li><a href="#" data-icon="star" rel="external">Promotions</a></li>
				<li><a href="#" data-icon="user" rel="external">Account</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->

	<!-- <div data-role="footer" data-id="foo1" data-position="fixed">
			<div  data-role="navbar" data-iconpos="top">
				<ul>
					<li><a href="#" data-icon="home" class="ui-nodisc-icon " >Home</a></li>
					<li><a href="#" data-icon="grid" class="ui-nodisc-icon">Category</a></li>
					<li><a href="#" data-icon="cart" class="ui-nodisc-icon">Cart</a></li>
					<li><a href="#" data-icon="star" class="ui-nodisc-icon" >Promotions</a></li>
					<li><a href="#" data-icon="user" class="ui-nodisc-icon" >Account</a></li>
				</ul>
			</div>
		</div> -->
</body>
<div></div>
<div></div>
</div>
</html>
