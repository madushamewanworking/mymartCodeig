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

	<script src="https://kit.fontawesome.com/29a34cb7a6.js" crossorigin="anonymous"></script>
	<script src = "https://checkout.stripe.com/checkout.js" ></script>


	<!-- main library -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/jquery/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/jquery/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
	<script src="<?php echo base_url();?>/assets/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/jquery/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cart_page.css">



	<!-- <link rel="stylesheet" type="text/css" href="../assets/css/grid.css" /> -->




	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->

	<title>Document</title>
</head>

<body>
<div data-role="page"  id="demo-page" class="my-page" data-url="demo-page"  data-add-back-btn="true">
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
		<div class="ui-grid-a top-tag" data-position="fixed" >
			<div>
				<img src="" alt="">
			</div>
			<p>PAYMENT DETAILS</p>
			<!-- <div class="ui-block-a"><div class="ui-bar ui-bar-a bottom-tag text-center" style="height:60px"><p><span>Total</span> Rs.1500.00</p></div></div>
			<div class="ui-block-b"><div class="ui-bar ui-bar-a bottom-tag text-center" style="height:60px"><button class="ui-btn ui-btn-inline pay btn btn-default btn-lg">Pay Now</button></div></div> -->
		</div>
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
	<div data-role="header">
		<h1>Items</h1>
	</div>




	<div role="main" class="ui-content">
		<ul data-role="listview" class="payment-tab" id="class-list">
			<li class="cart-item payment-dets" >
				<h2>Axe deodrant for men</h2>
				<p>Item Count: <span class="item-count">5</span></p>
				<p>Amount: Rs.<span class="item-amount">2332</span></p>


				<img src="../assets/images/res/offer.jpg" class="ui-li-thumb m-1 fav-thumb">

			</li>
			<li class="cart-item payment-dets" >
				<h2>Axe deodrant for men</h2>
				<p>Item Count: <span class="item-count">5</span></p>
				<p>Amount: Rs.<span class="item-amount">2332</span></p>

				<img src="../assets/images/res/offer.jpg" class="ui-li-thumb m-1 fav-thumb">

			</li>


		</ul>
	</div><!-- /content -->

	<div data-role="header">
		<h1>Address</h1>
	</div>

	<div role="main" class="ui-content">
		<ul data-role="listview" class="payment-tab" id="class-list">
			<li class="cart-item payment-dets" >
				<h2>Axe deodrant for men</h2>
				<p>Item Count: <span class="item-count">5</span></p>
				<p>Amount: Rs.<span class="item-amount">2332</span></p>

			</li>


		</ul>
	</div>

	<div data-role="header" class="total">
		<h1 style="color:#fe6311;">Total Amount:<span style="color:#000;">2300</span></h1>
	</div>



	<!-- gerid view end -->




	<!-- footer -->
	<div data-role="footer" data-id="foo1" data-position="fixed">

		<div class="my-btn" data-postion="fixed">
			<a data-role="button" class="cart-btn my-btn" id="customButton" style="background-color: #fe6311 !important; color:white !important;">
				PROCEED TO CHECKOUT
			</a>
		</div>


		<div data-role="navbar" data-iconpos="top">
			<ul>
				<li><a href="HomePage.html" data-icon="home" rel="external">Home</a></li>
				<li><a href="cart.html" data-icon="grid" rel="external">Category</a></li>
				<li><a href="#" data-icon="alert" rel="external">Cart</a></li>
				<li><a href="#" data-icon="star" rel="external">Favourites</a></li>
				<!-- <li><a href="#" data-icon="user" rel="external">Account</a></li> -->
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

<script type="text/javascript">
    jQuery(function($){
        var $form = $('#frmBooking');
        var handler = StripeCheckout.configure({
            key:'pk_test_cp21BcECf4kMMUbSlRlZlsMo',
            token : function(token){
                if(token.id){
                    $("#thankyouPayment").html("Thank you")
                }
            }
        })

        $('#customButton').on('click', function(e) {
            handler.open({
                name : 'Demo Site',
                currency: 'LKR',
                description: $('#item_name').val(),
                amount: $('#item_value').val() * 100
            });

            $(window).on('popstate', function(){
                handler.close();
            });
        });
    });
</script>
<div></div>
<div></div>
</div>
</html>
