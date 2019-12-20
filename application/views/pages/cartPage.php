<?php ?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/cart_page.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/breadcrumb.css">

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
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/jquery/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/jquery/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
	<script src="<?php echo base_url();?>/assets/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/jquery/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css" />
	<script src="<?php echo base_url();?>/assets/script/common.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="../assets/css/grid.css" /> -->

	<script src="https://checkout.stripe.com/checkout.js"></script>
	<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->
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

		.flat a.active,.flat a.active:after{
			background-color: #A2C432 !important;
			color: #FE6311;

		}
	</style>

	<title>Document</title>
</head>

<body>
<div data-role="page"  id="demo-page" class="my-page" data-url="demo-page">
	<!-- header start -->
	<div data-role="header" data-position="fixed">
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

							<?php if(!$this->session->userdata('login_status')) :?>
								<a href="#positionWindow" id="popupPadded" data-icon="search" data-rel="popup"
								   data-theme="a" data-overlay-theme="a" data-position-to="window"
								   class="ui-btn-right ui-btn ui-icon-search ui-btn-icon-notext ui-corner-all">Search</a>
							<?php endif; ?>

							<div data-role="popup" data-theme="a" data-overlay-theme="b" data-transition="slidedown"
								 id="positionWindow" class="ui-corner-all">
								<div style="padding:10px 20px;" class="pop" >
									            <h3>Search for Products</h3>
									            <label for="un" class="ui-hidden-accessible">What Are You Looking For?</label>
									            <input type="text" name="user" id="un" value="" placeholder="What Are You Looking For?"
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
<!--		<div data-role="header">-->
<!--			<a data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext" rel="external">Back</a>-->
<!--			<label for="title" class="title" >CART</label>-->
<!--			-->
<!--		</div>-->



		<div class="breadcrumb flat">
			<a href="#"class="active">Cart</a>
			<a href="#">Payment Details</a>
			<a href="#">Confirmation</a>
		</div>

		<!-- Prefixfree -->
		<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" type="text/javascript"></script>

	</div>
	<!-- header end -->

	<!-- slide show start -->


	<!-- slide show end -->



	<!-- grid view -->

	<!-- <div data-role="header">
		<h1>Listview Responsive Grid</h1>
		<a href="./" data-shadow="false" data-iconshadow="false" data-icon="carat-l" data-iconpos="notext" data-rel="back" data-ajax="false">Back</a>
	</div> -->

	<!-- /header -->
	<div role="main" class="ui-content">
		<form id="dataform" method="post">
		<ul data-role="listview" id="class-list">


			<?php foreach ($cartDetails as $cart){ ?>
			<li class="cart-item" >
				<h2><?php echo $cart->getProductName() ?></h2>
				<div class="row">
					<p class="col-4">Count <span class="x"><?php echo $cart->getProductCount() ?></span></p>
					<p class="col-4"><?php echo $cart->getProductPrice() ?></p>

				</div>

				<img src="<?php echo $cart->getProductImage() ?>" class="ui-li-thumb m-1">
				<div class="ui-li-aside">
					<input type="checkbox" name="cartpro[]" value="<?php echo $cart->getProductId() ?>" data-mini="true">
				</div>

			</li> <?php } ?>

<!--			<li class="cart-item" >-->
<!--				<h2>Axe deodrant for men</h2>-->
<!--				<div class="row">-->
<!--					<p class="col-4">Count 2</p>-->
<!--					<p class="col-4">Rs.750</p>-->
<!--				</div>-->
<!---->
<!--				<img src="../assets/images/res/offer.jpg" class="ui-li-thumb m-1">-->
<!--				<div class="ui-li-aside">-->
<!--					<input type="checkbox" data-mini="true">-->
<!--				</div>-->
<!---->
<!--			</li>-->
<!--			<li class="cart-item" >-->
<!--				<h2>Axe deodrant for men</h2>-->
<!--				<div class="row">-->
<!--					<p class="col-4">Count 2</p>-->
<!--					<p class="col-4">Rs.750</p>-->
<!--				</div>-->
<!---->
<!--				<img src="../assets/images/res/offer.jpg" class="ui-li-thumb m-1">-->
<!--				<div class="ui-li-aside">-->
<!--					<input type="checkbox" data-mini="true">-->
<!--				</div>-->
<!---->
<!--			</li>-->

		</ul>
		</form>
	</div><!-- /content -->

	<!-- gerid view end -->




	<!-- footer -->
	<div data-role="footer" data-id="foo1" data-position="fixed">
		<div class="ui-grid-a bottom-tag" data-position="fixed" style="color:#bbb !important;" >
<!--			<div class="ui-block-a" data-position="fixed"><div class="ui-bar ui-bar-a bottom-tag text-center" style="height:60px"><p><span>Total</span> Rs.1500.00</p></div></div>-->

<!--			<div data-position="fixed"><div class="ui-bar ui-bar-a bottom-tag text-center" style="height:60px"><button type="submit" form="dataform" class="ui-btn ui-btn-inline pay btn btn-default btn-lg" style="height: 50px;margin-bottom: 20px; width: 200px"  formaction="--><?php //echo base_url('index.php/cartcontroller/checkproduct'); ?><!-- " data-ajax="false" >Check Out</button></div></div>-->
			<button  class="cart-btn my-btn" id="customButton" type="submit" form="dataform" formaction="<?php echo base_url('index.php/cartcontroller/checkproduct'); ?> " data-ajax="false"
			   style="background-color: #fe6311 !important; height: 40px  !important;  margin-bottom: 0px !important;  margin-top: 0px !important; color:white !important;">
				PICK & PAY
			</button>
		</div>
<!--		<a data-role="button" class="ui-btn ui-btn-inline pay btn btn-default btn-lg" style="background-color: #fe6311 !important; color:white !important; margin-bottom: 25px; width: 200px; height: 40px" >Pay Now</a>-->

<div data-role="navbar" data-iconpos="top">
			<ul>
				<li><a href="<?php echo base_url(); ?>index.php/maincontroller" data-icon="home" rel="external">Home</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/categorycontroller" data-icon="grid" rel="external">Category</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/cartcontroller" data-icon="alert" rel="external"  class="ui-btn-active ui-state-persist" >Cart</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/promotioncontroller" data-icon="star" rel="external">Promotions</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/accountcontroller" data-icon="user" rel="external">Account</a></li>
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
