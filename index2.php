<?php
// if ($_SERVER['HTTP_HOST'] == "inexpresslogistics.com")
// {
//   $url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//   header("Location: $url");
// } 

// if ($_SERVER['HTTP_HOST'] == "http://inexpresslogistics.com/")
// {
//   $url = "https://inexpresslogistics.com";
//   header("Location: $url");
// }

// ?>
<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Exflo Logistics</title>
    <link href="images/merg.png" rel="shortcut icon" style="font-size: 50px;">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
    
  </head>
  <body>
  

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   <?php include('header.php');?>

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

          <!--  <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Firstbird Cargo</h1>-->
            <p><a href="#" class="btn btn-primary py-3 px-5 text-white" data-toggle="modal" data-target="#trackingModal">Track Now!</a></p>

          </div>
        </div>
      </div>
    </div>  

    <div class="container">
      <div class="row align-items-center no-gutters align-items-stretch overlap-section">
        <div class="col-md-4">
          <div class="feature-1 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-dollar"></span>
            </div>
            <h2 class="my-4 heading">World Wide</h2>
            <p>Exflo Logistics is well known for it's mark in the courier services as a leading Logistics company that delivers to any point in the Universe. .</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">check all packages in your name</h2>
            <form method="post">
              <div class="form-group">
                <label for="fq_name">Name</label>
                <input type="text" class="form-control btn-block" id="fq_name" name="fq_name" placeholder="Enter Name" required>
              </div>
              <div class="form-group mb-4">
                <label for="fq_email">Email</label>
                <input type="text" class="form-control btn-block" id="fq_email" name="fq_email" placeholder="Enter Email" required>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="Send">  
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-phone"></span>
            </div>
            <h2 class="my-4 heading">24/7 Support</h2>
            <p>We are available 24/7 to answer your calls,reply your mails or attend to your request.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="mb-0 text-primary">What We Offer</h2>
            <p class="color-black-opacity-5">Exflo Logistics simply delivers.</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
              <div>
                <h3>Air Freight</h3>
                <p>we have jet aircrafts ready to move round the world delivering expressly needed packages.</p>
                <!--<p class="mb-0"><a href="#">Learn More</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span></div>
              <div>
                <h3>Ocean Freight</h3>
                <p>is the package so heavy?, dont worry we will still deliver through our freight logistics system.</p>
                <!--<p class="mb-0"><a href="#">Learn More</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
              <div>
                <h3>Ground Shipping</h3>
                <p>our ground system is what finalizes our goal to deliver packages to your door step.</p>
                <!--<p class="mb-0"><a href="#">Learn More</a></p>-->
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  <!-- Modal -->
  <br><br><br><br><br><br>
<div id="trackingModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <br><br><br><br><br><br>
    <div class="modal-content">
      <div class="modal-header">
     
       <font size=2>check package status</font>
      </div>
      <div class="modal-body">
        <p>
            
            <form action="" method="Post">
                
                <input name="trackingid" placeholder="Enter Tracking ID" required>
                
          
            
        </p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary text-white" type="submit" id="button-addon2">Go</button>
          </form>
      </div>
    </div>

  </div>
</div>



    <div class="site-section block-13">
      <!-- <div class="container"></div> -->


      <div class="owl-carousel nonloop-block-13">
        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Storage</h3>
              <p class="px-5">Exflo Logistics has a state of the art storage facility for all kind of package.</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Air Transports</h3>
              <p class="px-5">our jets fly all over the globe, making sure delivery time is met.</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Cargo Transports</h3>
              <p class="px-5">you do not need to bring your SUV to our office to pick up heavy packages, let our trucks drop them off for you.</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Cargo Ship</h3>
              <p class="px-5">heavy goods are delivered across countries using our reliable shipping department.</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_5.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Ware Housing</h3>
              <p class="px-5">this is our storage mechanism to ensure packages are delivered safe and undammaged.</p>
            </div>
          </a>
        </div>


      </div>
    </div>


    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Our Extras</h2>
            <p class="color-black-opacity-5">We Still Offer The Following Services</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-barn"></span></div>
              <div>
                <h3>Warehousing</h3>
                <p>do you have a need to keep a package for a while? we have just the right facilities for you.</p>
                <!--<p><a href="#">Learn More</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-platform"></span></div>
              <div>
                <h3>Storage</h3>
                <p>Exflo Logistics offers storage services for goods that need preservations.</p>
                <!--<p><a href="#">Learn More</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-car"></span></div>
              <div>
                <h3>Delivery Van</h3>
                <p>our well equipd delivery van keeps your goods in it's needed preservation condition till it gets to its desitination.</p>
                <!--<p><a href="#">Learn More</a></p>-->
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

   <!--  <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(images/hero_bg_2.jpg); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
            <a href="https://www.youtube.com/watch?v=OUqWjGQvA10" class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
            <h2 class="text-white font-weight-light mb-5 h1">View Our Services By Watching This Short Video</h2>
            
          </div>
        </div>
      </div>
    </div>   -->
    
    <div class="site-section border-bottom">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Testimonials</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                <p>Peter Schlaber</p>
              </figure>
              <blockquote>
                <p>&ldquo;I am a Soldier who works in remote countries , I am able to send packages to my loved ones from any where around the world.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                <p>Christine Miguella</p>
              </figure>
              <blockquote>
                <p>&ldquo;I have been using Exflo Logistics and they always always put smiles on my face.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                <p>Robert Richards</p>
              </figure>
              <blockquote>
                <p>&ldquo;All i can say is that Exflo Logistics is really amazing, infact I switched from DHL and relied on Firtbird Services.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                <p>Bruce Ken</p>
              </figure>
              <blockquote>
                <p>&ldquo;Exflo Logistics has been delivering my goods for years and i always rely on them.&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Our Blog</h2>
            <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Warehousing Your Packages</a></h2>
              <div class="meta mb-4">by Theresa Oman <span class="mx-2">&bullet;</span> March 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Exflo Logistics has launched more way house facility in other to accomodate the number of goods at hand.</p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/blog_2.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">More new Jets</a></h2>
              <div class="meta mb-4">by Bruce Winston <span class="mx-2">&bullet;</span> march 25, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>we have added 7 more jets to our fleet to serve our customers better.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--<div class="site-section border-top">-->
    <!--  <div class="container">-->
    <!--    <div class="row text-center">-->
    <!--      <div class="col-md-12">-->
    <!--        <h2 class="mb-5 text-black">Try Our Services</h2>-->
    <!--        <p class="mb-0"><a href="booking.html" class="btn btn-primary py-3 px-5 text-white">Get Started</a></p>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
   


<?php include('footer.php');?>



<?php if (isset($_POST["trackingid"])) {
  include('db.php');
$tracking_id = $_POST["trackingid"];
$_SESSION["tracknow"] = $tracking_id;


$sql = "SELECT * FROM tracking WHERE trackingid = '$tracking_id'";
$result = $conn->query($sql);
if ($result->num_rows == 0){
  //<!-- Modal -->
 echo '<div class="modal fade" id="myModalunregister" role="dialog">
    <div class="modal-dialog">
     <br><br><br><br><br><br>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title">Failed</h4>
        </div>
        <div class="modal-body">
          <p>Tracking ID does not exist.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary text-white" data-dismiss="modal">Ok</button>
        </div>
      </div>
      
    </div>
  </div>';

echo '<script type="text/javascript">';
echo   "$(window).load(function () {
        $('#myModalunregister').modal('show');
    })";
echo '</script>';

}else{

echo '<script type="text/javascript">
           window.location = "https://exflologistics.com/newtrack.php"
                 </script>';

}
}
?>




  

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	
    
  </body>
</html>