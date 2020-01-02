<? php ?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--  cdn config jquey mobile -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"/>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


	<!-- firebase -->
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<!-- <script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-firestore.js"></script> -->

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
	<!--    <link rel="stylesheet" href="../assets/jquery/jquery.mobile-1.4.5.min.css" />-->
	<!--    <link rel="stylesheet" href="../assets/jquery/font-awesome.min.css" rel="stylesheet"-->
	<!--        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />-->
	<!--    <script src="../assets/jquery/jquery-1.11.1.min.js"></script>-->
	<!--    <script src="../assets/jquery/jquery.mobile-1.4.5.min.js"></script>-->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/grid.css"/>

	<!-- custom javascript -->
	<!-- <script src="../assets/script/main.js"></script> -->

	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->
	<script>
        $(document).ready(function () {
            // alert("as");
            //

        });
	</script>
	<style>
		#lisearch {
			all: initial;
		* {
			all: unset;
		}
		}

	</style>
	<title>Home</title>
</head>

<body>
<div data-role="page" id="demo-page" class="my-page" data-ajax='false'>
	<!-- header start -->
	<div data-role="header" data-position="fixed">
		<div class="ui-grid-a">
			<div class="ui-block-a">
				<!-- <div class="ui-bar ui-bar-a" style="height:30px">Block A</div> -->
				<!-- <a class="ui-link" href="" > <img id="Logo" src="../assets/images/res/Logo.png"> </a> -->
				<!-- <a href="info.html" data-icon="info-page" class="ui-btn-right" data-transition="flip" data-iconpos="notext" data-theme="a"></a> -->
				<!-- <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-myicon"> -->
				<img src="<?php echo base_url(); ?>/assets/images/res/Logo.png" alt="Logo, Facebook" class="logo"
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
									<form>
										<input data-type="search" id="searchForCollapsibleSetChildren">
									</form>
									<div  data-role="collapsible-set" data-filter="true" data-children="> div, > div div ul li" data-inset="true" id="collapsiblesetForFilterChildren" data-input="#searchForCollapsibleSetChildren">
										<div  data-role="collapsible" data-iconpos="right" data-filtertext="category <?php echo $strcat ?>">
											<h3 >Category</h3>
											<ul data-role="listview" data-inset="false">
												<?php foreach ($categories as $cat): ?>
<!--												<li id="lisearch" data-filtertext="category ">--><?php //echo $strcat ?><!--</li>-->
												<li id="lisearch" data-filtertext="category <?php echo $cat->getCategoryName() ?>"><a href="<?php echo site_url('/maincontroller/productbycategory/' . $cat->getCatId()); ?>"
																									data-ajax="false"><?php echo $cat->getCategoryName() ?></a></li>


												<?php endforeach; ?>

<!--												<li data-filtertext="Animals Dogs">Dogs</li>-->
<!--												<li data-filtertext="Animals Lizards">Lizards</li>-->
<!--												<li data-filtertext="Animals Snakes">Snakes</li>-->
											</ul>
										</div>
										<div data-role="collapsible" data-iconpos="right" data-filtertext="products <?php echo $strpro ?>">
											<h3>Products</h3>
											<ul data-role="listview" data-inset="false">
												<?php foreach ($products as $cat): ?>
													<!--												<li id="lisearch" data-filtertext="category ">--><?php //echo $strcat ?><!--</li>-->
													<li id="lisearch" data-filtertext="category <?php echo $cat->getProName() ?>"><a href="<?php echo site_url('/maincontroller/productDetail/' . $cat->getProId()); ?>"
																																		  data-ajax="false"><?php echo $cat->getProName() ?></a></li>


												<?php endforeach; ?>
											</ul>
										</div>
										<div data-role="collapsible" data-iconpos="right" data-filtertext="menu home promotion account cart category aboutus">
											<h3>Menu Navigation</h3>
											<ul data-role="listview" data-inset="false">
												<li id="lisearch" data-filtertext="menu home"><a href="<?php echo base_url(); ?>index.php/maincontroller" data-icon="grid" rel="external">Home page</a></li>

												<li id="lisearch" data-filtertext="menu category"><a href="<?php echo base_url(); ?>index.php/categorycontroller" data-icon="grid" rel="external">Category page</a></li>
												<li id="lisearch" data-filtertext="menu promotion"><a href="<?php echo base_url(); ?>index.php/promotioncontroller" data-icon="grid" rel="external">Promotion page</a></li>
												<li id="lisearch" data-filtertext="menu account"><a href="<?php echo base_url(); ?>index.php/accountcontroller" data-icon="grid" rel="external">My Account page</a></li>
												<li id="lisearch" data-filtertext="menu cart"><a href="<?php echo base_url(); ?>index.php/cartcontroller" data-icon="grid" rel="external">Cart page</a></li>

												<li id="lisearch" data-filtertext="menu aboutus"><a href="<?php echo base_url(); ?>index.php/maincontroller/view/aboutus"" data-icon="grid" rel="external">About Us page</a></li>


											</ul>
										</div>
									</div>
<!--									            <label for="un" class="ui-hidden-accessible"></label>-->
<!--									            <input type="text" name="user" id="un" value=""-->
<!--													   placeholder="What Are You Looking For?" data-theme="a">-->
<!--									           -->
<!--									            -->
<!--									<button type="submit"-->
<!--											class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-search">-->
<!--										SEARCH-->
<!--									</button>-->
								</div>
							</div>

						</div>
					</div>
					<div class="ui-block-b">

						 
						<div class="ui-grid-b">
							<div class="ui-block-a">

							</div>
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
								<!--  <a id="nav_des_acc" data-role="button" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-user">SEARCH</a> -->
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

	<!-- slide show start -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/res/adOne.png" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>hello</h5>
					<p>aonfiweun</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/res/adTwo.jpg"
					 alt="Second slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>hello</h5>
					<p>aonfiweun</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/res/adThree.jpg"
					 alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>hello</h5>
					<p>aonfiweun</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- slide show end -->


	<!-- grid view -->

	<!-- <div data-role="header">
			<h1>Listview Responsive Grid</h1>
			<a href="./" data-shadow="false" data-iconshadow="false" data-icon="carat-l" data-iconpos="notext" data-rel="back" data-ajax="false">Back</a>
		</div> -->

	<!-- /header -->
	<h5>Categories</h5>
	<div role="main" class="ui-content">
		<ul data-role="listview" data-inset="true" class="home-cat-list">

			<?php foreach ($categories as $cat): ?>
				<li>
					<a href="<?php echo site_url('/maincontroller/productbycategory/' . $cat->getCatId()); ?>"
					   data-ajax="false">

						<img src="<?php echo $cat->getCategoryImage() ?>" style="width: 100%; max-height:88px;"
							 class="ui-li-thumb">
						<!--						</a>-->
						<h2>iOS 6.1</h2>
						<p>Apple released iOS 6.1</p>
						<p class="ui-li-aside"><?php echo $cat->getCategoryName() ?></p>
					</a>
				</li>
			<?php endforeach; ?>
			<!--                <li><a href="#">-->
			<!--                        <img src="-->
			<?php //echo base_url(); ?><!--assets/images/res/offer.jpg" class="ui-li-thumb">-->
			<!--                        <h2>BlackBerry 10</h2>-->
			<!--                        <p>BlackBerry launched the Z10 and Q10 with the new BB10 OS</p>-->
			<!--                        <p class="ui-li-aside">Bekary</p>-->
			<!--                    </a></li>-->
			<!--                <li><a href="#">-->
			<!--                        <img src="-->
			<?php //echo base_url(); ?><!--assets/images/res/offer.jpg" class="ui-li-thumb">-->
			<!--                        <h2>WP 7.8</h2>-->
			<!--                        <p>Nokia rolls out WP 7.8 to Lumia 800</p>-->
			<!--                        <p class="ui-li-aside">House Hold</p>-->
			<!--                    </a></li>-->
			<!--                <li><a href="#">-->
			<!--                        <img src="-->
			<?php //echo base_url(); ?><!--assets/images/res/offer.jpg" class="ui-li-thumb">-->
			<!--                        <h2>Galaxy</h2>-->
			<!--                        <p>New Samsung Galaxy Express</p>-->
			<!--                        <p class="ui-li-aside">Other</p>-->
			<!--                    </a>-->
			<!--                </li>-->

		</ul>
	</div><!-- /content -->

	<!-- gerid view end -->

	<!-- addvertisement -->
<!--	<img src="--><?php //echo base_url(); ?><!--assets/images/res/Logo.png" class="img-fluid"-->
<!--		 style=" display: block; margin-left: auto; margin-right: auto; width: 100%; max-height: 100px;"-->
<!--		 alt="Responsive image">-->
	<iframe style=" display: block; margin-left: auto; margin-right: auto; width: 100%; max-height: 200px;" width="560" height="315" src="<?php echo base_url(); ?>assets/images/mymartvideo.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	<!-- advertisement end -->


	<!-- recent Prodcuts -->
	<div role="main" class="ui-content">
		<h5>Recent Products</h5>
		<ul data-role="listview" data-inset="true">
			<?php foreach ($products as $pro): ?>
				<li>
					<a href="<?php echo site_url('/maincontroller/productDetail/' . $pro->getProid()); ?>"
					   data-ajax="false">
						<img src="<?php echo $pro->getProImage() ?>" style="width: 100%; max-height:88px;"
							 class="ui-li-thumb">
						<h2><?php echo $pro->getPrice() ?></h2>
						<p><?php echo $pro->getProDescription() ?></p>
						<p class="ui-li-aside"><?php echo $pro->getProName() ?></p>
					</a>
				</li>
			<?php endforeach; ?>
			<!--                <li><a href="#">-->
			<!--                        <img src="../assets/images/res/offer.jpg" class="ui-li-thumb">-->
			<!--                        <h2>BlackBerry 10</h2>-->
			<!--                        <p>BlackBerry launched the Z10 and Q10 with the new BB10 OS</p>-->
			<!--                        <p class="ui-li-aside">Oil</p>-->
			<!--                    </a></li>-->
			<!--                <li><a href="#">-->
			<!--                        <img src="../assets/images/res/offer.jpg" class="ui-li-thumb">-->
			<!--                        <h2>WP 7.8</h2>-->
			<!--                        <p>Nokia rolls out WP 7.8 to Lumia 800</p>-->
			<!--                        <p class="ui-li-aside">Shampoo</p>-->
			<!--                    </a></li>-->
			<!--                <li><a href="#">-->
			<!--                        <img src="../assets/images/res/offer.jpg" class="ui-li-thumb">-->
			<!--                        <h2>Galaxy</h2>-->
			<!--                        <p>New Samsung Galaxy Express</p>-->
			<!--                        <p class="ui-li-aside">Other</p>-->
			<!--                    </a></li>-->

		</ul>
	</div><!-- /content -->
	<!-- end -->

	<!-- footer -->
	<div data-role="footer" data-id="foo1" data-position="fixed">
		<div data-role="navbar" data-iconpos="top">
			<ul>
				<li><a href="<?php echo base_url(); ?>index.php/maincontroller" data-icon="home" rel="external"
					   class="ui-btn-active ui-state-persist">Home</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/categorycontroller" data-icon="grid" rel="external">Category</a>
				</li>
				<li><a href="<?php echo base_url(); ?>index.php/cartcontroller" data-icon="alert"
					   rel="external">Cart</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/promotioncontroller" data-icon="star" rel="external">Promotions</a>
				</li>
				<li><a href="<?php echo base_url(); ?>index.php/accountcontroller" data-icon="user" rel="external">Account</a>
				</li>
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

	<!-- <script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-firestore.js"></script>
	<script src="../assets/script/firebase_init.js"></script> -->
	<!--    <script src="../assets/script/common.js"></script>-->
	<!-- <script src="../assets/script/main.js"></script> -->

</body>


</html>
