<?php ?>
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
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/jquery/jquery.mobile-1.4.5.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/jquery/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
	<script src="<?php echo base_url(); ?>/assets/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/jquery/jquery.mobile-1.4.5.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/script/common.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="../assets/css/grid_category.css" /> -->


	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->
	<style>
		.ui-page.ui-page-active {
			min-height: 100% !important;
		}

		.ui-collapsible-heading .ui-btn {
			border-top-width: 0;
			border-bottom-width: 0;
		}
	</style>
	<title>Category Page</title>
</head>

<body>
<div data-role="page" id="demo-page" class="category_page" data-url="category-page">
	<!-- header start -->
	<div data-role="header" data-position="fixed">
		<div class="ui-grid-a">
			<div class="ui-block-a">
				<!-- <div class="ui-bar ui-bar-a" style="height:30px">Block A</div> -->
				<!-- <a class="ui-link" href="" > <img id="Logo" src="../assets/images/res/Logo.png"> </a> -->
				<!-- <a href="info.html" data-icon="info-page" class="ui-btn-right" data-transition="flip" data-iconpos="notext" data-theme="a"></a> -->
				<!-- <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-myicon"> -->
				<img src="../assets/images/res/Logo.png" alt="Logo, Facebook" class="logo"
					 style="float:left; display:inline; width: 36%;"/>
			</div>
			<div class="ui-block-b">
				<div class="ui-grid-a ">
					<div class="ui-block-a">
						<div class="ui-bar ui-bar-a" style="height:35px">

							<!-- <a href="#" class="ui-btn ui-icon-search ui-btn-icon-notext ui-corner-all">No text</a> -->

							<?php if (!$this->session->userdata('login_status')) : ?>
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
											class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-search">
										SEARCH
									</button>
								</div>
							</div>

						</div>
					</div>
					<div class="ui-block-b">

						 
						<div class="ui-grid-b">
							<div class="ui-block-a"></div>
							<div class="ui-block-b">  
								<?php if (!$this->session->userdata('login_status')) : ?>

									<a id="nav_des" href="<?php echo base_url(); ?>index.php/auth/login_user"
									   rel="external" data-role="button" rel=external
									   class="ui-btn-right ui-btn ui-btn-a ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-eye ui-nodisc-icon">LOGIN</a>
								<?php endif; ?>
								<!--									<a id="nav_des_acc" href="-->
								<?php //echo base_url(); ?><!--index.php/accountcontroller" rel="external" data-role="button" rel=external class="ui-btn-right ui-btn ui-icon-user ui-btn-icon-notext ui-corner-all" >ACCOUNT</a>-->
								<?php if ($this->session->userdata('login_status')) : ?>
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


	<!-- grid view -->

	<!-- <div data-role="header">
			<h1>Listview Responsive Grid</h1>
			<a href="./" data-shadow="false" data-iconshadow="false" data-icon="carat-l" data-iconpos="notext" data-rel="back" data-ajax="false">Back</a>
		</div> -->

	<!-- /header -->
	<div role="main" class="ui-content">

		<ul data-role="listview" data-inset="true">

			<?php foreach ($categories as $cat){?>
			<li data-role="collapsible" data-iconpos="right" data-inset="false"
				style="border-color: white !important;">
				<h2><?php echo $cat->getCategoryName() ?></h2>
				<div class="ui-body ui-body-d">
					<a href="<?php echo site_url('/maincontroller/productbycategory/'. $cat->getCatId()); ?>" data-ajax="false" rel="external">
						<img src="<?php echo $cat->getCategoryImage() ?>" style="max-width: 100%" class="ui-li-thumb">
						<h2>Category Description</h2>
						<p><?php echo $cat->getCatDescription() ?></p>
					</a>
				</div>
				<!-- <ul>
					<ol><img src="../assets/images/res/offer.jpg" class="ui-li-thumb">  </ol>

					<ol><p >Other</p></ol>
					<ol><a href="../views/ProductPage.html" rel="external">hi</a></ol>
				</ul> -->
			</li>
			<?php } ?>

<!--			--><?php //foreach ($categories as $cat) { ?>
<!--				<li><a href="#">-->
<!--						<img src="--><?php //echo $cat->getCategoryImage() ?><!--">-->
<!--						<h2>--><?php //echo $cat->getCategoryName() ?><!--</h2>-->
<!--						<p class="ui-li-aside">Other</p>-->
<!---->
<!--					</a></li> --><?php //} ?>
			<!--			<li><a href="#">-->
			<!--					<img src="../assets/images/res/offer.jpg" class="ui-li-thumb">-->
			<!--					<h2>Meat</h2>-->
			<!--					<p class="ui-li-aside">Other</p>-->
			<!--				</a></li>-->
			<!---->
			<!---->
			<!---->
			<!---->
			<!--			<li><a href="">-->
			<!--					<img src="../assets/images/res/offer.jpg" class="ui-li-thumb">-->
			<!--					<h2>Firefox OS</h2>-->
			<!--					<p class="ui-li-aside">Other</p>-->
			<!--				</a></li>-->
			<!--			<li><a href="#">-->
			<!--					<img src="../assets/images/res/offer.jpg" class="ui-li-thumb">-->
			<!--					<h2>Tizen</h2>-->
			<!--					<p class="ui-li-aside">Other</p>-->
			<!--				</a></li>-->

		</ul>

	</div><!-- /content -->

	<!-- gerid view end -->


	<!-- footer -->
	<div data-role="footer" data-id="foo1" data-position="fixed">
		<div data-role="navbar" data-iconpos="top">
			<ul>
				<li><a href="<?php echo base_url(); ?>index.php/maincontroller" data-icon="home" rel="external">Home</a>
				</li>
				<li><a href="<?php echo base_url(); ?>index.php/categorycontroller" data-icon="grid" rel="external"
					   class="ui-btn-active ui-state-persist">Category</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/cartcontroller" data-icon="alert"
					   rel="external">Cart</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/promotioncontroller" data-icon="star" rel="external">Promotions</a>
				</li>
				<li><a href="<?php echo base_url(); ?>index.php/accountcontroller" data-icon="user" rel="external">Account</a>
				</li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->
</div>
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

</html>
