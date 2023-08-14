<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <style>
      body {
          display: flex;
          justify-content: center;
          
      }
      .receipt_body {
          margin-left: auto;
          margin-right: auto;
          width: 800px;
          height: auto;
          align-items: center;
      }
      
      .header {
          width: 100%;
          height: 40px;
          background-color: #990000;
          margin-left: auto;
          margin-right: auto;
      }
      .main-header {
          display: flex;
          flex-direction: row;
          gap: 50px;
          background-color: #f2f2f2;
          padding-left: 20px;
          padding-right: 20px;
          padding-top: 10px;
      }
      
      .logo-image {
          display: flex;
          flex-direction: row;
      }
      
      .logo-imageBody {
          
          p{
              font-size: 5px;
          }
      }
      
      .main-headerBody {
          
      }
      .allData {
          display: flex;
          flex-direction: column;
          gap: 0px;
  
      }
      .senders-data {
          display: flex;
          flex-direction: column;
          gap: 0px;
      }
      .data {
          display: flex;
          flex-direction: column;
      }
      .dataValue {
          margin-top: 10px;
          display: flex;
          flex-direction: row;
          gap: 0px;
      }
      .dataValue1 {
          width: 400px;
      }
      .demarcation {
          width: 100%;
          height: 40px;
          background-color: #990000;
          display: flex;
          justify-content: center;
          padding-bottom: 10px;
      }
      .footer {
          width: 100%;
          height: 20px;
          background-color: #990000;
          margin-left: auto;
          margin-right: auto;
      }
      hr {
         border:solid 1px black;
        width: 100%;
        color: black;
        background-color: #8c8c8c;
        height: 1px;
      }
    </style>
</head>

<body>
    
    <?php

$newtrack = $_SESSION["tracknow"];
$hold1 = "1h";
$place1 = "1p";
$hold2 = "2h";
$place2 = "2p";
$hold3 = "3h";
$place3 = "3p";
$hold4 = "4h";
$place4 = "4p";
$package_status = "";
$route1_color = "";
$route2_color = "";
$route3_color = "";
$route4_color = "";
$daysdiff1 = "";
$daysdiff2 = "";
$daysdiff3 = "";
$rem_day1 = "";
$rem_day2 = "";
$rem_day3 = "";
$remaining_days = "";
$hold_days = "0";
$intransit = '<font color="#ffcc00">In Transit</font>';
$onhold = '<font color="red">On Hold</font>';
$registered = "Package registered";
$arrived = '<font color="green">Ready for pick up</font>';
$routeMarqueeintransitcol = "#ffcc00";
$routeMarqueeclearcol = "green";
$routeMarqueeholdcol = "red";




include('db.php');
$sql = "SELECT * FROM tracking WHERE trackingid = '$newtrack'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {

$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
          $senders_name = $row['senders_name'];
          $receivers_name = $row['receivers_name'];
          $receivers_address = $row['receivers_address'];
          $receivers_email = $row['receivers_email'];
          $receivers_phone = $row['receivers_phone'];
          $dpstring = $row['dp'];
          $shipping_date = $row['shipping_date'];
          $delivery_date = $row['delivery_date'];
          $delivery_time = $row['delivery_time'];
          $cargo_description = $row['cargo_description'];
          $weight = $row['weight'];
          $route1 = $row['route1'];
          $route2 = $row['route2'];
          $route3 = $row['route3'];
          $route4 = $row['route4'];
          $route1_text = $row['route1_text'];
          $route2_text = $row['route2_text'];
          $route3_text = $row['route3_text'];
          $route4_text = $row['route4_text'];
          $route1_date = $row['route1_date'];
          $route2_date = $row['route2_date'];
          $route3_date = $row['route3_date'];
          $route4_date = $row['route4_date'];
          $status = $row['status'];
          $tracking_id = $row['trackingid'];
          $reg_date = $row['reg_dateauto'];
           date_default_timezone_set('UTC');
           $date = date('d-m-Y H:m:s');
$now = time("$date"); // or your date as well
$your_date = strtotime("$reg_date");
$hourdiff = round((strtotime($date) - $your_date)/3600, 1);
       
}

}else{

	echo '<script>

    alert("Failed Tracking ID is not recognized!");

</script>
 <script>window.location = 

"https://exflologistics/index2.php"</script>';
    
}


if ($status == $place1) {
	$package_status = $intransit;
}elseif ($status == $hold1) {
	$package_status = $onhold;
}elseif ($status == $place2) {
	$package_status = $intransit;
}elseif ($status == $hold2) {
	$package_status = $onhold;
}elseif ($status == $place3) {
	$package_status = $intransit;
}elseif ($status == $hold3) {
	$package_status = $onhold;
}elseif ($status == $place4) {
	$package_status = $arrived;
}elseif ($status == $hold4) {
	$package_status = $onhold;
}else{
	$package_status = $registered;
}

$daysdiff1 = ($delivery_time/1);
$daysdiff2 = ($delivery_time/2);
$daysdiff3 = ($delivery_time/3);
$rem_day1 = round($daysdiff1);
$rem_day2 = round($daysdiff2);
$rem_day3 = round($daysdiff3);

if ($status == $place1) {
	$remaining_days = $rem_day1;
}elseif ($status == $hold1) {
	$remaining_days = $hold_days;
}elseif ($status == $place2) {
	$remaining_days = $rem_day2;
}elseif ($status == $hold2) {
	$remaining_days = $hold_days;
}elseif ($status == $place3) {
	$remaining_days = $rem_day3;
}elseif ($status == $hold3) {
	$remaining_days = $hold_days;
}elseif ($status == $place4) {
	$remaining_days = $hold_days;
}elseif ($status == $hold4) {
	$remaining_days = $hold_days;
}else{
	$remaining_days = $delivery_time;
}

if ($status == $place1) {
	$route1_color = $routeMarqueeclearcol;
	$route2_color = $routeMarqueeintransitcol;
	$route3_color = $routeMarqueeintransitcol;
	$route4_color = $routeMarqueeintransitcol;
}elseif ($status == $hold1) {
	$route1_color = $routeMarqueeholdcol;
	$route2_color = $routeMarqueeintransitcol;
	$route3_color = $routeMarqueeintransitcol;
	$route4_color = $routeMarqueeintransitcol;
}elseif ($status == $place2) {
	$route1_color = $routeMarqueeclearcol;
	$route2_color = $routeMarqueeclearcol;
	$route3_color = $routeMarqueeintransitcol;
	$route4_color = $routeMarqueeintransitcol;
}elseif ($status == $hold2) {
	$route1_color = $routeMarqueeclearcol;
	$route2_color = $routeMarqueeholdcol;
	$route3_color = $routeMarqueeintransitcol;
	$route4_color = $routeMarqueeintransitcol;
}elseif ($status == $place3) {
	$route1_color = $routeMarqueeclearcol;
	$route2_color = $routeMarqueeclearcol;
	$route3_color = $routeMarqueeclearcol;
	$route4_color = $routeMarqueeintransitcol;
}elseif ($status == $hold3) {
	$route1_color = $routeMarqueeclearcol;
	$route2_color = $routeMarqueeclearcol;
	$route3_color = $routeMarqueeholdcol;
	$route4_color = $routeMarqueeintransitcol;
}elseif ($status == $place4) {
	$route1_color = $routeMarqueeclearcol;
	$route2_color = $routeMarqueeclearcol;
	$route3_color = $routeMarqueeclearcol;
	$route4_color = $routeMarqueeclearcol;
}elseif ($status == $hold4) {
	$route1_color = $routeMarqueeclearcol;
	$route2_color = $routeMarqueeclearcol;
	$route3_color = $routeMarqueeclearcol;
	$route4_color = $routeMarqueeholdcol;
}else{
	$route1_color = $routeMarqueeintransitcol;
	$route2_color = $routeMarqueeintransitcol;
	$route3_color = $routeMarqueeintransitcol;
	$route4_color = $routeMarqueeintransitcol;
}

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->

    <div class="receipt_body">
        <div class="header">
            <div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <a type="print" class="btn btn-danger btn-lg" track="4410615823" onclick="window.print()">Print</a> 
        </div>
    </div>
    </div>
        <div class="main-header">
            <div class="logo-image">
               <img src="images/logosite.png" alt="" width="120px" height="80px"/>
               <div class="logo-imageBody">
                   <h6>Head Office: <font size="2">144 Main Rd,Sundridge, Sevenoaks TN14 6ET, UK.</font></h6>
                    <h6>Registered Office: <font size="2">UN military hospital camp, Damascus Tower, floor 16, No. 16-17 Marjeh Square, P.O Box 11777, Damascus, Syria.</font></h6>
                    <h6>Registered Office: <font size="2">UN military hospital camp, Ali Abdul Moghri Street, P.O Box (312), Sana'a 1993, Yemen.</font></h6>
                   
               </div>
           
            </div>
            <div class="main-headerBody">
                <h1>Invoice</h1>
                <p><b>Invoice No: exflo68628383</b></p>
            </div>
        </div>
        <div class="receipt-mainBody">
            <div align="center">
            <h5><i><font color="#999999">INTERNATIONAL LOGISTICS SERVICE</font></i></h5>
            </div>
            <div class="allData">
                <div class="senders-data">
                    <div align="center">
                        <h5>Sender's Info</h5>
                    </div>
                    <div class="data">
                        <div class="dataValue">
                            <div class="dataValue1">
                            <h6><b>Sender's Name:</b>  &nbsp&nbsp&nbsp<?php echo $senders_name; ?></h6>
                            </div>
                            <h6><b>Departure:</b>  &nbsp&nbsp&nbsp<?php echo $route1; ?></h6>
                        
                        </div>
                        <hr/>
                        <div class="dataValue">
                            <div class="dataValue1">
                            <h6><b>Description:</b>  &nbsp&nbsp&nbsp<?php echo $cargo_description; ?></h6>
                            </div>
                            <h6><b>Departure Date:</b> &nbsp&nbsp&nbsp<?php echo $shipping_date; ?></h6>
                        </div>
                       <hr/>
                        <div class="dataValue">
                            <div class="dataValue1">
                            <h6><b>Tracking ID:</b>  &nbsp&nbsp&nbsp<?php echo $tracking_id; ?></h6>
                            </div>
                            <h6><img src="images/exflostampmain.png" alt="" width="300px" height="100px"/></h6>
                        </div>
                        <hr/>
                    </div>
                </div>
                <div class="demarcation">
                 <div class="dataValue">
                    <div class="dataValue1">
                            <h6><b><font color="white">Delivery Fee: $1850.00</font></b></h6>
                            </div>
                            <h6><b><font color="white">Payment:</font></b> <i>Paid</i></h6>
                 </div>
                </div>
                <div class="senders-data">
                    <div align="center">
                        <h5>Receiver's Info</h5>
                    </div>
                    <div class="data">
                        <div class="dataValue">
                          <div class="dataValue1">
                            <h6><b>Receiver's Name:</b>  &nbsp&nbsp&nbsp<?php echo $receivers_name; ?></h6>
                            </div>
                            <h6><b>Destination:</b>  &nbsp&nbsp&nbsp<?php echo $route4; ?></h6>
                        </div>
                        <hr/>
                        <div class="dataValue">
                            <div class="dataValue1">
                            <h6><b>Receiver's No:</b>  &nbsp&nbsp&nbsp<?php echo $receivers_phone; ?></h6>
                            </div>
                            <h6><b>Receiver's Email:</b>  &nbsp&nbsp&nbsp<?php echo $receivers_email; ?></h6>
                        </div>
                        <hr/>
                        <div class="dataValue">
                            <div class="dataValue1">
                            <h6><b>Receiver's Address:</b>  &nbsp&nbsp&nbsp<?php echo $receivers_address; ?></h6>
                            </div>
                            <h6><b>Arrival Date:</b>  &nbsp&nbsp&nbsp<?php echo $delivery_date; ?></h6>
                        </div>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer"></div>
        </div>
        
    </div>
<script> $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });</script>
</body>
</html>