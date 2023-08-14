

<?php if(isset($_POST['trackingid'])){
   
   if($_POST['trackingid'] == "blacky"){ 
      echo '
</script> <script>window.location = 

"http://firstbirdlogistics.com"</script>';

exit();
}else{
//   echo '
// </script> <script>window.location = 

// "http://track.doortodoorexservices.com/tracking2.php/?trackingid='.$_POST['trackingid'].'"</script>';

// exit();



include('db.php');
$sql = "SELECT * FROM tracking WHERE trackingid = '".$_POST['trackingid']."'";
$result = $conn->query($sql);
if ($result->num_rows == 1 ) {
$sql = "SELECT * FROM tracking WHERE trackingid = '".$_POST['trackingid']."'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
          $shipdate = $row['shipdate'];
           $shippersname = $row['shippersname'];
            $shippersaddress = $row['shippersaddress'];
             $deliverydate = $row['deliverydate'];
      $receiversfullname = $row['receiversname'];
                  $receiversname = $row['smsreceiver'];
            $receiversaddress = $row['receiversaddress'];
             $weight = $row['weight'];
           $address1 = $row['address1'];
            $address2 = $row['address2'];
             $address3 = $row['address3'];
             $address4 = $row['address4'];
           $atrackingid = $row['trackingid'];
          $status = $row['status'];
          $dp = $row['dp'];
          $dp = $dp."."."jpg";
           $reg_date = $row['reg_date'];
           date_default_timezone_set('UTC');
           $date = date('d-m-Y H:m:s');
$now = time("$date"); // or your date as well
$your_date = strtotime("$reg_date");
$hourdiff = round((strtotime($date) - $your_date)/3600, 1);

           
}
 $_SESSION["registered"] = "true";
   

  
}else{
    
    $_SESSION["unregistered"] = "true";
   
  
    // echo "does not exist";
    // exit();
}
 
$conn->close();
}
    include('db.php');
    
//     $trackingid = $_POST['trackingid'];
    
//     $sql = "SELECT * FROM tracking WHERE trackingid = '$trackingid'";
// $result = $conn->query($sql);
// if ($result->num_rows == 0 ) {
//       echo '<script>window.alert("Tracking ID Does Not Exist!");
// </script> <script>window.location = 

// "http://inexpresslogistics.com"</script>';
// exit();
// }else{
//     $_SESSION["trackingid"] = "$trackingid";
//       session_write_close();
//     sleep(2);
// // echo "Favorite animal is " . $_SESSION["trackingid"] . ".";
// //     exit();
//  echo '
// </script> <script>window.location = 

// "https://inexpresslogistics.com/tracking.php/?trackingid='.$tracking.'"</script>';

// exit();
    
// }
   
    
// }
}
?> 
    <header class="site-navbar py-3" role="banner" style="z-index:1">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="" class="text-white h2 mb-0">Logistics</a></h1>
<div id="google_translate_element"></div>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <!--<li class="has-children">-->
                <!--  <a href="services.html">Services</a>-->
                <!--  <ul class="dropdown">-->
                <!--    <li><a href="#">Air Freight</a></li>-->
                <!--    <li><a href="#">Ocean Freight</a></li>-->
                <!--    <li><a href="#">Ground Shipping</a></li>-->
                <!--    <li><a href="#">Warehousing</a></li>-->
                <!--    <li><a href="#">Storage</a></li>-->
                <!--  </ul>-->
                <!--</li>-->
                <li><a  data-toggle="modal" data-target="#trackingModal">Track Package</a></li>
                <!--<li><a href="blog.php">Blog</a></li>-->
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
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
                
                <input name="trackingid" placeholder="Enter Tracking ID">
                
          
            
            
            
        </p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary text-white" type="submit" id="button-addon2">Go</button>
          </form>
      </div>
    </div>

  </div>
</div>


 
