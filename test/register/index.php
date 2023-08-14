<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>

<title>FIRSTBIRD LOGISTICS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="rent appartment, rent 2 bedroom flat, rent 2 bedroom flat portharcourt, rent 2 bedroom flat lagos, 
rent 2 bedroom flat warri, rent 2 bedroom flat Oweri, rent 2 bedroom flat Abuja, rent 2 bedroom flat Calabar, rent 2 bedroom flat benin, rent self con portharcourt,buy 

land, buy house, rent shop" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 

</script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/mislider.css" rel="stylesheet" type="text/css" />
<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="css/main-gallery.css" type="text/css" media="screen" />  <!-- flexslider-CSS --> 
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
<!-- //Custom Theme files --> 

<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300i,400,400i,600,600i,700" rel="stylesheet">
<!-- //web-fonts -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){

        $("#myModal").modal('show');
$('#myModal').modal({
    backdrop: 'static',
    keyboard: false  // to prevent closing with Esc button (if you want this too)
})

    });

</script>
<script type="text/javascript">
$('#myModal').modal({
    backdrop: 'static',
    keyboard: false  // to prevent closing with Esc button (if you want this too)
})
</script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  

<div id="myModal" class="modal fade" data-keyboard="false" data-backdrop="static">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                

                <h4 class="modal-title"><br>Delivery site Version 3.1<font size=2 color=#040359>Type:Manual With Customised Sms Tracking</font>.<br><style>
                        .blinking {
    animation: mymove 2s infinite alternate;
}

@-webkit-keyframes mymove {
    from {opacity:0;}
    to {opacity: 1;}
}
                        
                    </style>
                    <font size=2 class=blinking color=#34633e>This is a full manual version</font><br>Register A Client</h4>

            </div>

            <div class="modal-body">

                

                <form action=registered.php method=post enctype="multipart/form-data">
                        <input size=25 name="smsusername" value="nwudoebuka@gmail.com" hidden><br>
                         <input size=25 name="smspassword" value="an0therrichard" hidden><br>
                          <input size=25 name="smstitle" value="Door2Door" hidden><br>
                         
                    <input size=25 name="CPhone" placeholder="Client phone(no +) e.g 2347110719164"><br>
                      <input size=25 name="smsreceiver" placeholder="Client Short name e.g Mary"><br>
                      <input size=25 name="smssender" placeholder="Your Short name e.g Abbey"><br>
                    <input size=25 name=shipdate placeholder="ship date">
                    <input size=25 name=shippersname placeholder="shippers name">
                    <input size=25 name=shippersaddress placeholder="shippers address">
                    <input size=25 name=deliverydate placeholder="delivery date">
                    <input size=25 name=receiversname placeholder="receivers name">
                    <input size=25 name=receiversaddress  placeholder="receivers address ">
                    <input size=25 name=weight placeholder="weight e.g 30kg" required>
                    <input size=25 name=address1 placeholder="route1" required>
                    <input size=25 name=address2 placeholder="route2" required>
                    <input size=25 name=address3 placeholder="route3" required>
                    <input size=25 name=address4  placeholder="route4" required>
                    <input size=25 name=b placeholder="package description" required>
                    <input size=25 name=trackingid placeholder="tracking id" required>
                    <input size=25 name=a placeholder="Time differnce e.g 8" required><br><br>
                    <font color="#000000">Select your image</font>
                     <input size=25 name="fileToUpload" type="file" required><br><br><style>
                        .blinking {
    animation: mymove 2s infinite alternate;
}

@-webkit-keyframes mymove {
    from {opacity:0;}
    to {opacity: 1;}
}
                        
                    </style>
                    <font size=3 class="blinking"color=#34633e><b></b>Firstbird LOGISTICS EXPIRES JUNE 28TH 2021.</b></font><br><br>
                  
<button type="submit" class="btn btn-primary">Register</button>
        
		

                </form>
                <br><br>
                CONTROL PACKAGE BELOW
                 <form action="../stop.php" method=post>
                   
                    <input size=25 name=stop placeholder="Tracking ID"><br><br><br>
                    
        <button type="submit" class="btn btn-danger" name="status" value="1h">HOLD at 1</button>
        
		<button type="submit" class="btn btn-success" name="status" value="1p">PLACE at 1</button>
		
		<button type="submit" class="btn btn-danger" name="status" value="2h">HOLD at 2</button>
        
		<button type="submit" class="btn btn-success" name="status" value="2p">PLACE at 2</button>
		
		<button type="submit" class="btn btn-danger" name="status" value="3h">HOLD at 3</button>
        
		<button type="submit" class="btn btn-success" name="status" value="3p">PLACE at 3</button>
		
		<button type="submit" class="btn btn-danger" name="status" value="4h">HOLD at 4</button>
        
		<button type="submit" class="btn btn-success" name="status" value="4p">PLACE at 4</button>

                </form>
                
                <br>
                    

        
		

                <br><br>
                <a href=>Click here to continue to our website</a></td>

            </div>

        </div>

    </div>

</div>
	
			
			<!--banner Slider starts Here-->
								

<!-- footer -->
			<div class="copy-right">
			    <div align=center>
				<p>&copy; <?php echo date('Y');?> Hackofiz@MEETTHEGHOST. All rights reserved |  <a href="">+18022426576</a></p>
				<br><br> please note that this delivery site is the latest update with sms tracking, each sms sent reduces the sms unit loaded on this application.
				<br><br>
				<button  data-toggle="modal" data-target="#myModal">AGREE AND START APPLICATION</button>
				</div>
			</div>
			
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-2.2.3.min.js"></script> 
	
<!-- skills -->

						<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

 <!-- js -->
	<script src="js/main.js"></script>
<!-- search-jQuery -->
<!-- pop-up-box -->
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!--//pop-up-box -->
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});														
				});
			</script>

		<!-- Map-JavaScript -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
			<script type="text/javascript">
				google.maps.event.addDomListener(window, 'load', init);
				function init() {
					var mapOptions = {
						zoom: 11,
						center: new google.maps.LatLng(40.6700, -73.9400),
						styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},

{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},

{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":

[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},

{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},

{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":

[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},

{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},

{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":

[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
					};
					var mapElement = document.getElementById('map');
					var map = new google.maps.Map(mapElement, mapOptions);
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(40.6700, -73.9400),
						map: map,
					});
				}
			</script>
			<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

	<!-- //Map-JavaScript -->
		<script src="js/mislider.js" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(function ($) {
				var slider = $('.mis-stage').miSlider({
					//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide 

heights. Default: false
					stageHeight: 320,
					//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
					slidesOnStage: false,
					//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
					slidePosition: 'center',
					//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
					slideStart: 'mid',
					//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or 

higher. 100 = No scaling. Defualt: 100
					slideScaling: 150,
					//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = 

up. Pos value = down. 0 = No offset. Default: 0
					offsetV: -5,
					//  Center slide contents vertically - Boolean. Default: false
					centerV: true,
					//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 

(opaque). Default: .5
					navButtonsOpacity: 1,
				});
			});
		</script>

	<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems:3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: { 
						    		portrait: { 
						    			changePoint:480,
						    			visibleItems: 1
						    		}, 
						    		landscape: { 
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: { 
						    			changePoint:768,
						    			visibleItems: 2
						    		}
						    	}
						    });
						    
						});
			</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->-->
	
</body>
</html>