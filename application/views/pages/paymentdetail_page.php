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
	<script src="https://checkout.stripe.com/checkout.js"></script>


	<!-- main library -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
	<script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/jquery/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cart_page.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
	<!-- <link rel="stylesheet" type="text/css" href="../assets/css/grid.css" /> -->

	<!-- Qr code scan -->
<!--	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
	<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/breadcrumb.css">
	<script src="<?php echo base_url(); ?>assets/script/qrcode.js"></script>

	<!-- Payment popup -->
	<!-- <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="https://checkout.stripe.com/checkout.js"></script> -->

	<!-- theam config -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam1/theam_d.css" />
	<link rel="stylesheet" href="../assets/themes/theam1/jquery.mobile.icons.min.css" /> -->
	<!-- <link rel="stylesheet" href="../assets/themes/theam2/themes/team_e_orange.css" />
	<link rel="stylesheet" href="../assets/themes/theam2/themes/jquery.mobile.icons.min.css" /> -->
<style>
	.flat a.active,.flat a.active:after{
		background-color: #A2C432 !important;


	}
</style>
	<title>Document</title>

</head>

<body>
<div data-role="page" id="demo-page" class="my-page" data-url="demo-page" >
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
							<div class="ui-block-a" >

							</div>
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
<!--	<div data-role="header">-->
<!--		<a data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext" rel="external">Back</a>-->
<!--		<label for="title" class="title" >PRODUCT DETAIL</label>-->
<!--		<a href="#" data-icon="check">Save</a> -->
<!--	</div>-->

	<!-- slide show start -->

	<div class="breadcrumb flat">
		<a data-rel="back">Cart</a>
		<a href="#" class="active">Payment Detail</a>
		<a href="#">Confirmation</a>
	</div>
	<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" type="text/javascript"></script>

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
			<?php foreach ($proList as $cat){?>
			<li class="cart-item payment-dets">
				<h2><?php echo $cat->getProductName() ?></h2>
				<p>Item Count: <span class="item-count"><?php echo $cat->getProductCount() ?></span></p>
				<p>Amount: Rs.<span class="item-amount"><?php echo $cat->getProductCount()*$cat->getProductPrice()?></span></p>


				<img src="<?php echo $cat->getProductImage() ?>" class="ui-li-thumb m-1 fav-thumb">

			</li>
			<?php } ?>
<!--			<li class="cart-item payment-dets">-->
<!--				<h2>Axe deodrant for men</h2>-->
<!--				<p>Item Count: <span class="item-count">5</span></p>-->
<!--				<p>Amount: Rs.<span class="item-amount">2332</span></p>-->
<!---->
<!--				<img src="../assets/images/res/offer.jpg" class="ui-li-thumb m-1 fav-thumb">-->
<!---->
<!--			</li>-->


		</ul>
	</div><!-- /content -->

	<div data-role="header">
		<h1>Address</h1>
	</div>

	<div id="qrResult" style="height: 100px;width: 100px">

	</div>

<!--	<input type="file" id="qr" value=""/>-->

	<div role="main" class="ui-content">
		<ul data-role="listview" class="payment-tab" id="class-list">
			<li class="cart-item payment-dets">
<!--				<h2>Axe deodrant for men</h2>-->
<!--				<p>Item Count: <span class="item-count">5</span></p>-->
<!--				<p>Amount: Rs.<span class="item-amount">2332</span></p>-->

			</li>


		</ul>
	</div>
	<div></div>

	<div data-role="header" class="total">
		<h1 style="color:#fe6311;">Total RS:<span style="color:#000;" id="amount"><?php echo $amount ?></span></h1>
		<h1 class="h1discount" style="color:#fe6311; visibility: hidden">Discount RS:<span id="discount" style="color:#000;" id="amount" ></span></h1>
		<h1 class="h1pay" style="color:#fe6311;  visibility: hidden">Pay <span id="pay" style="color:#000;"></span></h1>
	</div>

<!--	<img id="myImg" src="https://cdn.adhigh.net/media/1569092739-uploads_5bffc2ce7e9fe.png" width="107" height="98">-->
<!--	<button onclick="myFunction()">Try it</button>-->

<!--	<script>-->
<!--		function myFunction() {-->
<!--			document.getElementById("myImg").src = "https://gdurl.com/jZAH";-->
<!--		}-->
<!---->
<!--	</script>-->



	<fieldset class="ui-grid-a" style="margin-bottom: 10px; height: 20%" id="scanbutton">
		<div class="ui-block-a"><label for="scan" style="margin: 17.5px; text-align: center;">Discount</label></div>
		<div class="ui-block-b">
			<a href="#popupqrcode"  data-rel="popup" data-position-to="window" id="scan"
									class="ui-btn ui-shadow ui-corner-all" data-transition="pop"
									style="background-color: #ffc107 !important; color:white !important; width: 50%; text-align: center;">Scan
				QR</a>

			<!-- <a data-role="button" id="scan"
				style="background-color: #ffc107 !important; color:white !important; width: 50%; text-align: center;">Scan QR</a> -->

			<div data-role="popup" id="popupqrcode"  data-theme="a" class="ui-corner-all">
				<!--     <form> -->
				<!--         <div style="padding:10px 20px;"> -->
				 <h3 id="pophead" style="text-align: center;">Scan Discount</h3>
				<video id="preview"></video>


				<!--         </div> -->
				<!--     </form> -->
			</div>
			<script type="text/javascript">
                $( document ).ready(function() {

                    // alert("dsffd");
                    let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
                    scanner.addListener('scan', function (content) {
                        // alert(content);
                        var span_Text = document.getElementById("amount").innerText;
                        // alert(span_Text);

                        var discount=(content*span_Text)/1000;
                        // alert(discount);
                        var afterDiscount=span_Text-discount;

                        $('.h1discount').css('visibility','visible');
                        $('.h1pay').css('visibility','visible');

                        $("#amount").text(span_Text);
                        $("#discount").text(discount.toFixed(2));
                        $("#pay").text(afterDiscount.toFixed(2));

                        document.getElementById("scanbutton").remove();


                        document.getElementById("pophead").remove();
                        document.getElementById("preview").remove();
                        $( "#popupqrcode" ).popup( "close" );



                    });
                    Instascan.Camera.getCameras().then(function (cameras) {
                        if (cameras.length > 0) {
                            scanner.start(cameras[0]);

                        } else {
                            console.error('No cameras found.');
                        }
                    }).catch(function (e) {
                        console.error(e);
                    });
                });
			</script>
		</div>
	</fieldset>

<!--	<div>-->
<!--		<label for="scan" style=" text-align: center;-->
<!--                background-color: #f3f3f3; margin: 17.5px;-->
<!--                color: #d51f31;">Successfully Discount Added!</label>-->
<!---->
<!--	</div>-->


	<!-- gerid view end -->

	<div data-role="popup" id="positionWindow" class="success">
		<p style="font-family: 'Century Gothic', 'Futura', 'Didact Gothic', san-serif;">Thank You Payment Sccess!</p>
	</div>


	<!-- footer -->
	<div data-role="footer" data-id="foo1" data-position="fixed">

		<!-- <div class="my-btn" data-postion="fixed"> -->
		<form id="frmBooking" name="bookingForm" method="post" action="_self"  >
			<a data-role="button" class="cart-btn my-btn" id="customButton"
			   style="background-color: #fe6311 !important; height: 40px  !important;  margin-bottom: 0px !important;  margin-top: 0px !important; color:white !important;">
				PROCEED TO CHECKOUT
			</a>
		</form>
		<script src="https://smtpjs.com/v3/smtp.js"></script>
		<script type="text/javascript">
            jQuery(function($){
                var $form = $('#frmBooking');
                var handler = StripeCheckout.configure({
                    key:'pk_test_cp21BcECf4kMMUbSlRlZlsMo',
                    token : function(token){
                        if(token.id){

                            document.getElementById("frmBooking").remove();
                            $( ".success" ).popup( );
                            $( ".success" ).popup("open");
                            // $("#thankyouPayment").html("Thank you")

							//qr code generate
							var qrcode=new QRCode(document.getElementById('qrResult'),{
								width:100,
								height:100
							});

							// var message=document.getElementById('qr');
							var message= "5";
							alert(message);

							// qrcode.makeCode(message);

							// if(!message.value){
							// 	alert("Input a text");
							// 	message.focus();
							// 	return;
							// }


							// document.getElementById('qr').value=qrcode;
							// var file = event.srcElement.files[0];
							// // console.log(file);
							// alert(file);
							// alert(document.getElementById("imageqr").src);
							// var datauri=document.getElementById("imageqr").src;
							// $("#imageqr").load(function() {
							// 	// alert(document.getElementById("imageqr").src);
							// 	var datauri=document.getElementById("imageqr").src;
							// 	var data="https://cdn.adhigh.net/media/1569092739-uploads_5bffc2ce7e9fe.png";
							// 	var image="hello.png";
							//
							// 	var c = document.createElement('canvas');
							// 	var img = document.getElementById('imageqr');
							// 	c.height = img.naturalHeight;
							// 	c.width = img.naturalWidth;
							// 	var ctx = c.getContext('2d');
							//
							// 	ctx.drawImage(img, 0, 0, c.width, c.height);
							// 	var base64String = c.toDataURL();
							// 	alert(base64String);
							// });
							// uc?id=
							// https://drive.google.com/uc?id=1KGiMGryW6Q8l5CKjWmxipNsQPJgESwVm

							//set google drive images
							// document.getElementById("myImg").src = "https://gdurl.com/jZAH";
							// var imageone="https://cdn.adhigh.net/media/1569092739-uploads_5bffc2ce7e9fe.png"
							var imageone="https://drive.google.com/uc?id=1KGiMGryW6Q8l5CKjWmxipNsQPJgESwVm";
							var imagetwo="https://drive.google.com/uc?id=1FaG2HofECA4bv0Z0mY0MV22P-HepbAaq";
							var imagethree ="https://drive.google.com/uc?id=1Z9Vz3qtlD2Ow1Zk2By8jo6KmaA1F3Xs_";
							var imagefour="https://drive.google.com/uc?id=1HxGdSdDpC7M43K5icNdNIuTMtpfg_OWF";
							var imagefive="https://drive.google.com/uc?id=1NDmdHKxStDK6YKUkotx4esxfSwtBjn7K";

							var imagenumber = 5 ;
							var randomnumber = Math.random() ;
							var rand1 = Math.round( (imagenumber-1) * randomnumber) + 1;
							images = new Array
							images[1] = "https://drive.google.com/uc?id=1KGiMGryW6Q8l5CKjWmxipNsQPJgESwVm"
							images[2] = "https://cdn.adhigh.net/media/1569092739-uploads_5bffc2ce7e9fe.png"
							images[3] = "https://drive.google.com/uc?id=1Z9Vz3qtlD2Ow1Zk2By8jo6KmaA1F3Xs_"
							images[4] = "https://drive.google.com/uc?id=1HxGdSdDpC7M43K5icNdNIuTMtpfg_OWF"
							images[5] = "https://drive.google.com/uc?id=1NDmdHKxStDK6YKUkotx4esxfSwtBjn7K"
							var image = images[rand1]
							// document.randimg.src = image

							Email.send({
								Host: "smtp.gmail.com",
								Username : "mymarketuiux@gmail.com",
								Password : "mymarket123",
								To : 'sasiniedirisingha1997@gmail.com',
								From : "mymarketuiux@gmail.com",
								Subject : "Your My market Favourite list",
								Body : "qrcode",
								Attachments : [
									{
										name :  "hello.png",
										path : image
									}]
							}).then(
								message => alert("email sent success")

							);

							// alert(document.getElementById("imageqr").src);
                        }
                    }
                })

                $('#customButton').on('click', function(e) {
                    var price = document.getElementById("pay").innerText;
                    var amount=price*100;
                    handler.open({
                        name : 'My Market Payment',
                        currency: 'LKR',
                        amount: amount
                    });

                    $(window).on('popstate', function(){
                        handler.close();
                    });
                });
            });
		</script>

		<div align="center" id="thankyouPayment">

		</div>
		<!-- </div> -->

		<div data-role="navbar" data-iconpos="top">
			<ul>
				<li><a href="<?php echo base_url(); ?>index.php/maincontroller" data-icon="home" rel="external">Home</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/categorycontroller" data-icon="grid" rel="external">Category</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/cartcontroller" data-icon="alert" rel="external"  class="ui-btn-active ui-state-persist" >Cart</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/promotioncontroller" data-icon="star" rel="external">Promotions</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/accountcontroller" data-icon="user" rel="external">Account</a></li>
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

<!-- <script type="text/javascript">
    jQuery(function ($) {
        var $form = $('#frmBooking');
        var handler = StripeCheckout.configure({
            key: 'pk_test_cp21BcECf4kMMUbSlRlZlsMo',
            token: function (token) {
                if (token.id) {
                    $("#thankyouPayment").html("Thank you")
                }
            }
        })

        $('#customButton').on('click', function (e) {
            handler.open({
                name: 'Demo Site',
                currency: 'LKR',
                description: $('#item_name').val(),
                amount: $('#item_value').val() * 100
            });

            $(window).on('popstate', function () {
                handler.close();
            });
        });
    });
</script> -->
<div></div>
<div></div>
</div>

</html>
