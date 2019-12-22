<?php?>
<?php ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet'>

	<title>Login & Sign up</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/loginRegister.css" />
	<style type="text/css">
	</style>

	<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script> -->

	<!-- <script src="../assets/script/main.js"></script> -->

	<!-- boostrap 4.0 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous"></script>


	<!-- popup -->
	<!-- <link rel="stylesheet" type="text/css" href="../assets/jquery/popup/popup.css" />
	<script src="../assets/jquery/popup/popup.min.js"></script> -->


    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".register_form").show();
            $(".register_form").addClass('active');
            // $(".register_form").show();
            // $(".register").addClass('active');
            // $(".login_form").hide();
            // $(".register").click(function () {
            //     $(".register_form").show();
            //     $(".login_form").hide();
            //     $(".register").addClass('active');
            //     $(".login").removeClass('active');
            // });
            // $(".login").click(function () {
            //     $(".login_form").show();
            //     $(".register_form").hide();
            //     $(".login").addClass('active');
            //     $(".register").removeClass('active');
            // });

            // $("#reg").click(function (e) {
            //     // e.preventDefault();
            //     // $(".register_form").show();
            //     // $(".login_form").hide();
            //     // $(".register").addClass('active');
            //     // alert("fdesf");
            //
            //     // $(".login_form").style.visibility='hidden'
            // });
            // $("#log").click(function () {
            //     $(".register_form").hide();
            // });

        });
	</script>

	<style>
		.ui-input-text,
		.ui-input-search {
			margin: .5em 0;
			border-width: 0;
			/* border-style: solid; */
			border-bottom-width: 1;
			border-bottom-width: 1px !important;
			border-bottom-style: solid;
		}

		.ui-shadow-inset {
			-webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .2);
			-moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, .2);
			box-shadow: inset 0 0px 0px rgba(0, 0, 0, .2);
		}
	</style>

</head>

<body>
<div data-role="page" id="demo-page" class="auth-page">

	<div class="rwd-example">
		<!-- Lead story block -->
		<div class="ui-block-a">
			<div class="ui-body ui-body-d">
				<a href="<?php echo base_url(); ?>index.php/maincontroller" rel="external"><img src="<?php echo base_url(); ?>assets/images/res/Logo.png" alt="Logo" class="logo"></a>

			</div>
		</div>
		<!-- secondary story block #1 -->
		<div class="ui-block-b">
			<div class="ui-body ui-body-d">
				<div id="main">
					<div id="tab-btn">
						<a href="<?php echo base_url(); ?>index.php/auth/register_user" class="register active">Register</a>
						<a href="<?php echo base_url(); ?>index.php/auth/login_user" class="login">Login</a>

					</div>
					<div class="register_form">
						<form id="reg-box" method="post"
							  action="<?php echo base_url('index.php/auth/register_user'); ?>">

							<input type="text" data-clear-btn="true" name="username" id="username"
								   placeholder="Enter Username"><br>
							<?php echo form_error('username', '<div class="alert alert-danger">', '</div>'); ?>
							<input type="email" data-clear-btn="true" name="email" id="email"
								   placeholder="Enter Email"><br>
							<?php echo form_error('email', '<div class="alert alert-danger">', '</div>'); ?>
							<input type="password" data-clear-btn="true" name="password" id="password"
								   placeholder="Enter password"><br>
							<?php echo form_error('password', '<div class="alert alert-danger">', '</div>'); ?>

							<!--								<a data-role="button" type="submit" id="reg" class="sub-btn">LOGIN</a data-role="button" >-->
							<button type="submit" id="reg" class="sub-btn" >SIGN UP</button>


						</form>

					</div>

				</div>

			</div>
		</div>


	</div><!-- /rwd-example -->

	<div class="modal fade bd-example-modal-sm" id="myModel" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				...
			</div>
		</div>
	</div>

	<!-- <a href="#popupBasic" data-rel="popup" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-transition="pop">Basic Popup</a> -->
	<div data-role="popup" id="popupBasic">
		<p>Success.</p>
	</div>
	<!-- alert -->
	<a href="../views/alerts/success_register.html" id="dialog" role="button" class="ui-shadow ui-btn ui-corner-all ui-btn-inline" data-transition="slidedown" style='display:none;' ></a>



</div>
<!--	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-app.js"></script>-->
<!--	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-auth.js"></script>-->
<!--	<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-firestore.js"></script>-->
<!--	<script src="../assets/script/firebase_init.js"></script>-->
<!---->
<script src="<?php echo base_url(); ?>assets/script/main.js"></script>

</body>

</html>

