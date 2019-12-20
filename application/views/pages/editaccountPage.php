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
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/jquery/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/jquery/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
	<script src="<?php echo base_url(); ?>/assets/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/jquery/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/account_page.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script>$("#profileImage").click(function (e) {
            $("#imageUpload").click();
        });

        function fasterPreview(uploader) {
            if (uploader.files && uploader.files[0]) {
                $('#profileImage').attr('src',
                    window.URL.createObjectURL(uploader.files[0]));
            }
        }

        $("#imageUpload").change(function () {
            fasterPreview(this);
        });
	</script>

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
				<img src="<?php echo base_url(); ?>/assets/images/res/Logo.png" alt="Logo, Facebook" class="logo"
					 style="float:left; display:inline; width: 36%;" />
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
			<label for="title" class="title">Edit Account</label>
		<!-- <a href="#" data-icon="check">Save</a> -->
	</div>
	<div id="profile-container">
<!--		<image id="profileImage" src="--><?php //echo $userDetails[0]->getProfileimage()?><!--"/>-->
		<img src="<?php echo $userDetails[0]->getProfileimage()?>" id="profileImage"   />


	</div>
	<input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture>
	<div class="rwd-example">
		<!-- Lead story block -->
		<div class="ui-block-a">
			<div class="ui-body ui-body-d">

				<!-- <img src="../assets/images/res/user profile img.jpg" class="avatar" alt="Responsive image" id="imageUpload" type="file" > -->

				<!-- <div class="user_data"> -->
				<div>
<!--					--><?php //echo form_open('AccountController/editAccout');?>
<!--					<form id="edit_form_id">-->
					<form id="reg-box" method="post" data-ajax="false"
						  action="<?php echo base_url('index.php/AccountController/editAccount'); ?>">
						<input type="text" data-clear-btn="true" name="username" id="username"
							   placeholder="Enter Username" value="<?php echo $userDetails[0]->getUsername()?>"><br>

<!--						<input type="text" data-clear-btn="true" name="username" id="username"-->
<!--							   placeholder="Enter Username"><br>-->

						<input type="email" data-clear-btn="true" name="email" id="email"
							   placeholder="Enter Email" value="<?php echo $userDetails[0]->getEmail()?>"><br>

						<input type="text" data-clear-btn="true" name="address" id="add1"

							   placeholder="Enter Address" value="<?php echo $userDetails[0]->getAddress()?>" ><br>

<!--						<a data-role="button" id="editAcc_id" class="sub-btn">SUBMIT</a>-->
						<button type="submit" id="reg" class="sub-btn" >SIGN UP</button>

<!--					<button type="submit" class="btn btn-default btn-lg btn-primary" data-ajax="false">Sign Up</button>-->
						<div id="error_div" class="alert alert-danger" role="alert" style="visibility: hidden;">
							<p id="error"></p>
						</div>
<!--					</form>-->
						<?php echo form_close(); ?>
<!--					--><?php //echo form_close(); ?>

				</div>


			</div>
		</div>
		<!-- secondary story block #1 -->
		<!-- &nbsp;
				&nbsp; -->

		<!-- <div class="ui-block-b">

		</div> -->
		<!-- secondary story block #2 -->
		<!-- <div class="ui-block-c">

		</div> -->
	</div><!-- /rwd-example -->





	<!-- grid view -->

	<!-- <div data-role="header">
			<h1>Listview Responsive Grid</h1>
			<a href="./" data-shadow="false" data-iconshadow="false" data-icon="carat-l" data-iconpos="notext" data-rel="back" data-ajax="false">Back</a>
		</div> -->

	<!-- /header -->
	<div role="main" class="ui-content">

	</div><!-- /content -->

	<!-- gerid view end -->


	<!-- footer -->
	<!-- <div data-role="footer" data-id="foo1" data-position="fixed">
		<div data-role="navbar" data-iconpos="top">
			<ul>
				<li><a href="../views/HomePage.html" data-icon="home" rel="external">Home</a></li>
				<li><a href="../views/CategoryPage.html" data-icon="grid" rel="external"
						class="ui-btn-active ui-state-persist">Category</a></li>
				<li><a href="../views/CartPage.html" data-icon="alert" rel="external">Cart</a></li>
				<li><a href="../views/PromotionPage.html" data-icon="star" rel="external">Promotions</a></li>
				<li><a href="../views/AccountPage.html" data-icon="user" rel="external">Account</a></li>
			</ul>
		</div>
	</div> -->
</div>

</body>
<div></div>
<div></div>
</div>

</html>
