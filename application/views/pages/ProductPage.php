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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/grid_product.css" />
	<script src="<?php echo base_url(); ?>assets/script/common.js"></script>

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

		#gridA{
			background-color: #F0F5F2;
			height: 52px !important;
		}
		#gridB{
			background-color: #F0F5F2;
			height: 42px;
		}
	</style>


	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->

	<title>Product Page</title>
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
	<div data-role="header">
		<a data-rel="back"
		   class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext" rel="external">Back</a>
		<label for="title" class="title">PRODUCTS</label>
		<!-- <a href="#" data-icon="check">Save</a> -->
	</div>







	<!-- grid view -->

	<!-- <div data-role="header">
			<h1>Listview Responsive Grid</h1>
			<a href="./" data-shadow="false" data-iconshadow="false" data-icon="carat-l" data-iconpos="notext" data-rel="back" data-ajax="false">Back</a>
		</div> -->

	<!-- /header -->
	<div role="main" class="ui-content">
<!--		<div class="ui-grid-a">-->
<!--			<div class="ui-block-a" id="gridB">-->
<!--				 -->
<!--			</div>-->
<!--			<div class="ui-block-b" id="gridA">-->
<!--				-->
<!---->
<!--			</div>-->
<!---->
<!---->
<!---->
<!--		</div>-->

		<div data-role="controlgroup" data-type="horizontal" data-mini="true">
			   
			  <a href="#" class="ui-btn ui-corner-all" onclick="sortByName()">Sort By: Product Name</a>
			    <a href="#" class="ui-btn ui-corner-all" onclick="sortByPrice()">Sort By: Price</a>
			   
		</div>

		<select class="form-control form-control-sm country" >
			<option value="allval" > Show All</option>
			<option value="prices"> Filter by: Price</option>
			<option value="namesval">Filter by: Product Name -(A-z)</option>
		</select>
		<input type="text" id="myInputOne" onkeyup="filterProducts()" placeholder="Search for All Content" title="Type in a name" style="display: block">
		<input type="text"  id="myInputTwo"  onkeyup="filterProductsWithPrices()"  placeholder="Search for Prices" title="Type in a name" style="display: none">
		<input type="text" id="myInputThree" onkeyup="filterProductsWithNames()"  placeholder="Search for Names" title="Type in a name" style="display: none">


		<!--		<select name="select-native-2" id="select-native-2" data-mini="true" class="country">-->
<!--			<option value="standard" > Show All</option>-->
<!--			<option value="standard"> Sort by: Price</option>-->
<!--			<option value="rush">Sort by: Product Name -(A-z)</option>-->
<!--		</select>-->



		<ul data-role="listview" data-inset="true" id="myUL">

<!--			<li><a href="../views/ProductDetailsPage.html" rel="external">-->
<!--					<img src="../assets/images/res/Logo.png" class="ui-li-thumb">-->
<!--					<h2>iOS 6.1</h2>-->
<!--					<p>Apple released iOS 6.1</p>-->
<!--					<p class="ui-li-aside">Meat</p>-->
<!--				</a>-->
<!--			</li>-->
			<?php foreach ($products as $cat): ?>
				<li>
					<a href="<?php echo site_url('/maincontroller/productDetail/'. $cat->getProid()); ?>" data-ajax="false" >

						<img src="<?php echo $cat->getProImage() ?>" style="width: 100%; max-height:88px;" class="ui-li-thumb">
						<!--						</a>-->
						<h2><?php echo $cat->getProName() ?></h2>
						<p><?php echo $cat->getProDescription() ?></p>
						<h3 class="ui-li-aside priceClass" align="right"><?php echo $cat->getPrice() ?></h3>
					</a>
				</li>
			<?php endforeach;  ?>

<!--			<li><a href="#">-->
<!--					<img src="../assets/images/res/offer.jpg" class="ui-li-thumb">-->
<!--					<h2>Blacky 10</h2>-->
<!--					<p>BlackBerry </p>-->
<!--					<p class="ui-li-aside">Bekary</p>-->
<!--				</a></li>-->
<!--			<li><a href="#">-->
<!--					<img src="../assets/images/res/offer.jpg" class="ui-li-thumb">-->
<!--					<h2>WP 7.8</h2>-->
<!--					<p>Nokia rolls out WP 7.8 to Lumia 800</p>-->
<!--					<p class="ui-li-aside">House Hold</p>-->
<!--				</a></li>-->
<!--			<li><a href="#">-->
<!--					<img src="../assets/images/res/offer.jpg" class="ui-li-thumb">-->
<!--					<h2>Galaxy</h2>-->
<!--					<p>New Samsung Galaxy Express</p>-->
<!--					<p class="ui-li-aside">Other</p>-->
<!--				</a></li>-->

		</ul>

		<script>
			// $(document).ready(function(){
			// 	document.getElementById("myInputOne").style.display= "block";
			// 	var input1 = document.getElementById("myInputOne");
			//
			// 	input1.setAttribute("type", "text");
			// 	var input2 = document.getElementById("myInputTwo");
			//
			// 	input2.setAttribute("type", "hidden");
			// 	var input3 = document.getElementById("myInputThree");
			//
			// 	input3.setAttribute("type", "hidden");
			//
			// 	document.getElementById("menuId").value = "allval" ;
			// });

			$("select.country").change(function(e){

				var selectedCountry = $(this).children("option:selected").val();
				// alert("You have selected the country - " + selectedCountry);
				$('select.country').selectmenu('refresh');
				e.preventDefault();
				if(selectedCountry == "allval"){
					document.getElementById("myInputOne").style.display= "block";
					// document.getElementById("myInputTwo").style.display= "none";
					// document.getElementById("myInputThree").style.display= "none";
					var input1 = document.getElementById("myInputOne");

					input1.setAttribute("type", "text");
					var input2 = document.getElementById("myInputTwo");

					input2.setAttribute("type", "hidden");
					var input3 = document.getElementById("myInputThree");

					input3.setAttribute("type", "hidden");

				}else if(selectedCountry == "prices"){
					// document.getElementById("myInputOne").style.display= "none";
					document.getElementById("myInputTwo").style.display= "block";
					// document.getElementById("myInputThree").style.display= "none";
					var input1 = document.getElementById("myInputOne");

					input1.setAttribute("type", "hidden");
					var input2 = document.getElementById("myInputTwo");

					input2.setAttribute("type", "text");
					var input3 = document.getElementById("myInputThree");

					input3.setAttribute("type", "hidden");

				}else if(selectedCountry == "namesval"){
					// document.getElementById("myInputOne").style.display= "none";
					// document.getElementById("myInputTwo").style.display= "none";
					document.getElementById("myInputThree").style.display= "block";
					var input1 = document.getElementById("myInputOne");

					input1.setAttribute("type", "hidden");
					var input2 = document.getElementById("myInputTwo");

					input2.setAttribute("type", "hidden");
					var input3 = document.getElementById("myInputThree");

					input3.setAttribute("type", "text");
				}
			});

			function filterProducts() {
				var input, filter, ul, li, a, i, txtValue;
				input = document.getElementById("myInputOne");
				filter = input.value.toUpperCase();
				ul = document.getElementById("myUL");
				li = ul.getElementsByTagName("li");
				for (i = 0; i < li.length; i++) {
					a = li[i].getElementsByTagName("a")[0];
					txtValue = a.textContent || a.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						li[i].style.display = "";
					} else {
						li[i].style.display = "none";
					}
				}


			}
			
			function filterProductsWithNames() {
				var input, filter, ul, li, a, i, txtValue,para;
				input = document.getElementById("myInputThree");
				filter = input.value.toUpperCase();
				ul = document.getElementById("myUL");
				para = ul.getElementsByTagName("h2");
				li=ul.getElementsByTagName("li")
				for (i = 0; i < para.length; i++) {
					a = li[i].getElementsByTagName("h2")[0];
					txtValue = a.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						li[i].style.display = "";
					} else {
						li[i].style.display = "none";
					}
				}
			}

			function function1(){
				alert("hello")
			}

			function filterProductsWithDes() {
				var input, filter, ul, li, a, i, txtValue,para;
				input = document.getElementById("myInputTwo");
				filter = input.value.toUpperCase();
				ul = document.getElementById("myUL");
				para = ul.getElementsByClassName("priceClass");
				li=ul.getElementsByTagName("li")
				for (i = 0; i < para.length; i++) {
					a = li[i].getElementsByTagName("p")[0];
					txtValue = a.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						li[i].style.display = "";
					} else {
						li[i].style.display = "none";
					}
				}
			}

			function filterProductsWithPrices() {
				var input, filter, ul, li, a, i, txtValue,para;
				input = document.getElementById("myInputTwo");
				filter = input.value.toUpperCase();
				ul = document.getElementById("myUL");
				para = ul.getElementsByTagName("h3");
				li=ul.getElementsByTagName("li")
				for (i = 0; i < para.length; i++) {
					a = li[i].getElementsByTagName("h3")[0];
					txtValue = a.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						li[i].style.display = "";
					} else {
						li[i].style.display = "none";
					}
				}
			}

			// function filterProductsWithPrice() {
			// 	var input, filter, ul, li, a, i, txtValue;
			// 	input = document.getElementById("myInput");
			// 	filter = input.value.toUpperCase();
			// 	ul = document.getElementById("myUL");
			// 	li = ul.getElementsByTagName("li");
			// 	for (i = 0; i < li.length; i++) {
			// 		a = li[i].getElementsByTagName("a")[0];
			// 		txtValue = a.textContent || a.innerText;
			// 		if (txtValue.toUpperCase().indexOf(filter) > -1) {
			// 			li[i].style.display = "";
			// 		} else {
			// 			li[i].style.display = "none";
			// 		}
			// 	}
			// }

			function sortByName() {
					// alert("hello one")
				var list, i, switching, b, shouldSwitch;
				list = document.getElementById("myUL");
				switching = true;
				/* Make a loop that will continue until
				no switching has been done: */
				while (switching) {
					// start by saying: no switching is done:
					switching = false;
					b = list.getElementsByTagName("li");
					c=list.getElementsByTagName("h2")
					// Loop through all list-items:
					for (i = 0; i < (c.length - 1); i++) {
						// start by saying there should be no switching:
						shouldSwitch = false;
						/* check if the next item should
						switch place with the current item: */
						d = b[i].getElementsByTagName("h2")[0].innerText;
						e = b[i+1].getElementsByTagName("h2")[0].innerText;

						if (d.toLowerCase() > e.toLowerCase()) {
							/* if next item is alphabetically
							lower than current item, mark as a switch
							and break the loop: */
							shouldSwitch = true;
							break;
						}
					}
					if (shouldSwitch) {
						/* If a switch has been marked, make the switch
						and mark the switch as done: */
						b[i].parentNode.insertBefore(b[i + 1], b[i]);
						switching = true;
					}
				}
			}

			function sortByPrice() {
				var list, i, switching, b, shouldSwitch;
				list = document.getElementById("myUL");
				switching = true;
				/* Make a loop that will continue until
				no switching has been done: */
				while (switching) {
					// start by saying: no switching is done:
					switching = false;
					b = list.getElementsByTagName("li");
					c=list.getElementsByTagName("h3")
					// Loop through all list-items:
					for (i = 0; i < (c.length - 1); i++) {
						// start by saying there should be no switching:
						shouldSwitch = false;
						/* check if the next item should
						switch place with the current item: */
						d = b[i].getElementsByTagName("h3")[0].innerText;
						e = b[i+1].getElementsByTagName("h3")[0].innerText;

						var valone = parseInt(d);
						var valtwo = parseInt(e);

						if (valone > valtwo) {
							/* if next item is alphabetically
							lower than current item, mark as a switch
							and break the loop: */
							shouldSwitch = true;
							break;
						}
					}
					if (shouldSwitch) {
						/* If a switch has been marked, make the switch
						and mark the switch as done: */
						b[i].parentNode.insertBefore(b[i + 1], b[i]);
						switching = true;
					}
				}
			}


		</script>
	</div><!-- /content -->

	<!-- gerid view end -->


	<!-- footer -->
	<div data-role="footer" data-id="foo1" data-position="fixed">
		<div data-role="navbar" data-iconpos="top">
			<ul>
				<li><a href="<?php echo base_url(); ?>index.php/maincontroller" data-icon="home" rel="external">Home</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/categorycontroller" data-icon="grid" rel="external"
					   class="ui-btn-active ui-state-persist">Category</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/cartcontroller" data-icon="alert" rel="external">Cart</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/promotioncontroller" data-icon="star" rel="external">Promotions</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/accountcontroller" data-icon="user" rel="external">Account</a></li>
			</ul>
		</div>
	</div>
</div>




</body>
<div></div>
<div></div>
</div>

</html>
