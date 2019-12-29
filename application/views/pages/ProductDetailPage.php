<? php ?>
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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery/jquery.mobile-1.4.5.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
	<script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/jquery/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"/>
<!--	<link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--assets/css/grid.css"/>-->

	<!-- custom javascript -->
	<script src="<?php echo base_url(); ?>assets/script/main.js"></script>

	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->


	<!--	<script type="text/javascript" src="PATH/TO/YOUR/COPY/OF/jquery.mousewheel.min.js"></script>-->


	<script type="text/javascript" src="http://dev.jtsage.com/cdn/spinbox/latest/jqm-spinbox.min.js"></script>

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="<?php echo base_url(); ?>assets/script/common.js"></script>

	<script src="<?php echo base_url(); ?>assets/script/star.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/star.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/cart_page.css">

	<!-- rating system start -->
	<!--	<script src="--><?php //echo base_url(); ?><!--assets/starrr-gh-pages/dist/starrr.js"></script>-->
	<!--	<link rel="stylesheet" href="--><?php //echo base_url(); ?><!--assets/starrr-gh-pages/dist/starrr.css">-->
	<!-- end rating -->
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
			background-color: #F4F6F5;
		}

		.lblc {
			background-color: #F4F6F5 !important;
			/*padding-left: 10px;*/
			padding-top: 14px;

		}

		/*.ui-block-b {*/
		/*	*/
		/*}*/
		#block {
			background-color: #F4F6F5 !important;
		}

		/*ipad pro protrait*/
		@media only screen and (min-width: 767px) {
			.card {
				margin-top: 4%;
				width: 40em !important;
			}
		}

		/*i pad pro land*/
		@media only screen and (min-width: 1020px) {
			.card {
				margin-top: 2%;
				width: 25em !important;
			}
		}

		.ui-listview>li p{
			overflow: visible !important;
		}

	</style>
<script>
    $(document).ready(function() {
        // $("#cart").on("click", function() {
        //     $(".successcart").popup();
        //     $(".successcart").popup("open");
        // });
    });
</script>
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
							<?php if (!$this->session->userdata('login_status')) : ?>

								<a id="nav_des" href="<?php echo base_url(); ?>index.php/auth/login_user" rel="external"
								   data-role="button" rel=external
								   class="ui-btn-right ui-btn ui-btn-a ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-eye ui-nodisc-icon">LOGIN</a>
							<?php endif; ?>
							<!--									<a id="nav_des_acc" href="-->
							<?php //echo base_url(); ?><!--index.php/accountcontroller" rel="external" data-role="button" rel=external class="ui-btn-right ui-btn ui-icon-user ui-btn-icon-notext ui-corner-all" >ACCOUNT</a>-->
							<?php if ($this->session->userdata('login_status')) : ?>
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
		<a data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext"
		   rel="external">Back</a>
		<label for="title" class="title">PRODUCT DETAIL</label>
		<!-- <a href="#" data-icon="check">Save</a> -->
	</div>


	<div data-role="content">


		<div class="card" style="width: 18rem;">
			<?php foreach ($product as $cat): ?>

				<img src="<?php echo $cat->getProImage() ?>" class="card-img-top" alt="...">


				<div  id="favdata" class="card-body card-img-left">
					<p style="color: rgb(223, 22, 22); font-weight: 800; font-size: 18px; margin-bottom: 1rem">
						Rs.<?php echo $cat->getPrice() ?>
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
								<input name="image" id="image" value="<?php echo $cat->getProImage() ?>" type="hidden">
								<input name="price" value="<?php echo $cat->getPrice() ?>" type="hidden">
								<input name="name" id="name" value="<?php echo $cat->getProName() ?>" type="hidden">
								<input name="id" value="<?php echo $cat->getProid() ?>" type="hidden">
								<input type="number" data-mini="true" data-role="spinbox" name="count" id="spin5"
									   data-options='{"type":"horizontal"}' min="1" value="1" max="100"/>
							</form>
						</div>
					</div>

					<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

					<!--					//////////////////////-->
					<div class="container" style="margin-top: 20px">
						<p style="color: #495057; font-weight: 800; font-size: 18px; margin-bottom: .1rem">Product Average Rating: <?php echo $avgrating ?></p>
						<section class='rating-widget'>

							<!-- Rating Stars Box -->
							<div class='rating-stars text-center'>
								<ul id='stars'>
									<li class='star' title='Poor' data-value='1'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									<li class='star' title='Fair' data-value='2'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									<li class='star' title='Good' data-value='3'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									<li class='star' title='Excellent' data-value='4'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									<li class='star' title='WOW!!!' data-value='5'>
										<i class='fa fa-star fa-fw'></i>
									</li>
								</ul>
							</div>

<!--							<div class='success-box'>-->
<!--								<div class='clearfix'></div>-->
<!--								<img alt='tick image' width='32'-->
<!--									 src='data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0MjYuNjY3IDQyNi42NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQyNi42NjcgNDI2LjY2NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxwYXRoIHN0eWxlPSJmaWxsOiM2QUMyNTk7IiBkPSJNMjEzLjMzMywwQzk1LjUxOCwwLDAsOTUuNTE0LDAsMjEzLjMzM3M5NS41MTgsMjEzLjMzMywyMTMuMzMzLDIxMy4zMzMgIGMxMTcuODI4LDAsMjEzLjMzMy05NS41MTQsMjEzLjMzMy0yMTMuMzMzUzMzMS4xNTcsMCwyMTMuMzMzLDB6IE0xNzQuMTk5LDMyMi45MThsLTkzLjkzNS05My45MzFsMzEuMzA5LTMxLjMwOWw2Mi42MjYsNjIuNjIyICBsMTQwLjg5NC0xNDAuODk4bDMxLjMwOSwzMS4zMDlMMTc0LjE5OSwzMjIuOTE4eiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K'/>-->
<!--								<div class='text-message'></div>-->
<!--								<div class='clearfix'></div>-->
<!--							</div>-->
							<form method="post"
								  action="<?php echo base_url('index.php/maincontroller/addcomment'); ?>" data-ajax="false">


								<input type="hidden" id="rating" name="rating" value="" >

								<input type="hidden" id="rating" name="proid" value="<?php echo $cat->getProid() ?>" >


								<textarea name="comment" placeholder="Enter your comments..."></textarea>
								<!-- <form action="/action_page.php" id="usrform"> -->

								<input type="submit" value="Submit Feedback">

							</form>
							<!-- </form> -->
							<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
						</section>
					</div>
				</div>

			<?php endforeach; ?>

			<div role="main" class="ui-content">
				<form id="dataform" method="post" data-ajax="false">
					<ul data-role="listview" id="class-list">


						<?php foreach ($comments as $cart){ ?>
							<li class="cart-item" >
								<h2><?php echo $cart->getUsername() ?></h2>
								<div class="row">
									<p class="col-4"><span class="x"><?php echo $cart->getComment() ?></span></p>
									<p class="col-4">rating: <strong><?php echo $cart->getRating() ?></strong> stars</p>

								</div>

								<img src="http://www.evanto.online/wp-content/uploads/2018/03/dummy-profile-pic-1-370x370.jpg" style="border-radius: 50%;" class="ui-li-thumb m-1">
<!--								<div class="ui-li-aside">-->
<!--									<input type="checkbox" name="cartpro[]" value="--><?php //echo $cart->getProductId() ?><!--" data-mini="true">-->
<!--								</div>-->

							</li> <?php } ?>


					</ul>
				</form>
			</div><!-- /content -->
		</div>


	</div> <!-- /content -->

	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
	<div data-role="popup" id="positionWindow" class="successcart">
		<p style="font-family: 'Century Gothic', 'Futura', 'Didact Gothic', san-serif;">Thank You Payment Sccess!</p>
	</div>

	<!-- footer -->
	<div data-role="footer" data-id="foo1" data-position="fixed">
		<div data-role="navbar" data-iconpos="top">
			<ul>
				<!-- <li><a href="#" data-icon="home">Home</a></li>
			<li><a href="#" data-icon="grid">Category</a></li> -->
				<li>
					<button type="submit" form="dataform" data-icon="alert" id="cart"
							formaction="<?php echo base_url('index.php/cartcontroller/addcart'); ?> ">Cart
					</button>
				</li>

				<li>
					<button type="submit" form="dataform" data-icon="heart" id="fav"
							formaction="<?php echo base_url('index.php/cartcontroller/addfav'); ?> ">Favourites
					</button>
				</li>

				<!--				<li><button href="#" data-icon=heart>Favourites</button></li>-->
				<!-- <li><a href="#" data-icon="star">Promotions</a></li>
			<li><a href="#" data-icon="user">Account</a></li> -->
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->
	<script src="https://smtpjs.com/v3/smtp.js"></script>
	<script>
        $(document).ready(function() {
            $("#fav").on("click", function() {
                var favContent = $( "#favdata" ).text();
                console.log(favContent);
                var imagename=document.getElementById("name").value;
				var img=imagename.concat(".png");
				var im='"'+document.getElementById("image").value+'"';
				console.log(im);
                Email.send({
                    Host: "smtp.gmail.com",
                    Username : "mymarketuiux@gmail.com",
                    Password : "mymarket123",
                    To : 'madushamewan@gmail.com',
                    From : "mymarketuiux@gmail.com",
                    Subject : "Your My market Favourite list",
                    Body : favContent,
                    Attachments : [
                        {
                            name : img,
                            path : "https://networkprogramming.files.wordpress.com/2017/11/smtpjs.png"
                        }]
                }).then(
                    message => alert("mail sent successfully")

				);
                // alert("adf")
                // // document.getElementById('form_id').action = "script.php";

            });
        });
	</script>
	<div data-role="popup" id="positionWindow" class="successemail">
		<p style="font-family: 'Century Gothic', 'Futura', 'Didact Gothic', san-serif;">Hola! you saved this product as Favourite and also get email notification</p>
	</div>

</body>
<div></div>
<div></div>
</div>

</html>
