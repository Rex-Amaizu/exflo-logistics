<?php
session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">
    <?php
// Set session variables
$_SESSION["trackingid"] = "" . $_SESSION["trackingid"] . "";

?>
<head>

<title>INEXPRESS LOGISTICS </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="rent appartment, rent 2 bedroom flat, rent 2 bedroom flat portharcourt, rent 2 bedroom flat lagos, 
rent 2 bedroom flat warri, rent 2 bedroom flat Oweri, rent 2 bedroom flat Abuja, rent 2 bedroom flat Calabar, rent 2 bedroom flat benin, rent self con portharcourt,buy land, buy house, rent shop" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<style>
 #cloud{
        width:180px;
        padding-left:30px;
        opacity:0.7;
        animation:slide 10s infinite;
        -moz-animation:slide 10s infinite;//Firefox
        -webkit-animation:slide 10s infinite;//chrome and safari
        -o-animation: slide 10s infinite;//Opera   
}

@keyframes slide{
    0%   {-transform: translate(0px, 0px); }
        100% {-transform: translate(500px,0px); }
}    

@-moz-keyframes spin{
    0%   {-moz-transform: translate(0px, 0px); }
    100% {-moz-transform: translate(500px, 0px); }
}

@-webkit-keyframes slide{
         0%   {-webkit-transform: translate(0px, 0px); }
        100% {    -webkit-transform: translate(500px,0px); }
    }

@-o-keyframes slide{
    0%   {-o-transform: translate(0px, 0px); }
    100% {-o-transform: translate(500px, 0px); }
}
    </style>
</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  

<div id="myModal" class="modal fade" data-keyboard="false" data-backdrop="static">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

<?php

$shipdate = $_POST['shipdate'];
$shippersname = $_POST['shippersname'];
$shippersaddress = $_POST['shippersaddress'];
$deliverydate = $_POST['deliverydate'];
$receiversname = $_POST['receiversname'];
$receiversaddress = $_POST['receiversaddress'];
$weight = $_POST['weight'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$address3 = $_POST['address3'];
$address4 = $_POST['address4'];
$trackingid = $_POST['trackingid'];
$status = $_POST['status'];
$a = $_POST['a'];
// if ($_SESSION["trackingid"] == ""){
//      echo '
// </script> <script>window.location = 

// "http://inexpresslogistics.com"</script>';
// exit();
    
// }

include('db.php');
$sql = "SELECT * FROM tracking WHERE trackingid = '".$_GET["trackingid"]."'";
$result = $conn->query($sql);
if ($result->num_rows == 1 ) {
$sql = "SELECT * FROM tracking WHERE trackingid = '".$_GET["trackingid"]."'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
          $shipdate = $row['shipdate'];
           $shippersname = $row['shippersname'];
            $shippersaddress = $row['shippersaddress'];
             $deliverydate = $row['deliverydate'];
           $receiversname = $row['receiversname'];
            $receiversaddress = $row['receiversaddress'];
             $weight = $row['weight'];
           $address1 = $row['address1'];
            $address2 = $row['address2'];
             $address3 = $row['address3'];
             $address4 = $row['address4'];
           $atrackingid = $row['trackingid'];
          $status = $row['status'];
           $reg_date = $row['reg_date'];
           date_default_timezone_set('UTC');
           $date = date('d-m-Y H:m:s');
$now = time("$date"); // or your date as well
$your_date = strtotime("$reg_date");
$hourdiff = round((strtotime($date) - $your_date)/3600, 1);

           
}
  
}else{
    
    echo '
</script> <script>window.location = 

"http://doortodoorexservices.com"</script>';
exit();
}
 
$conn->close();
?> 	<script language="Javascript" type="text/javascript">

function downloaddata(){
marqueedata.startDownload(externalmarquee.src,displaydata)
}

function displaydata(data){
externalmarquee.innerHTML=data
}

if (document.all)
window.onload=downloaddata

<![endif]-->

</script>

                <h4 class="modal-title">Welcome <?php echo $receiversname;?> </h4>
                

            </div>

            <div class="modal-body">

                

                <form>

        <tr>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top" bgcolor="#EDEDED"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="3%">&nbsp;</td>
        <td width="61%" valign="top"><h1 class="body"> Track Result</h1>
		<table border="0" cellspacing="0" cellpadding="0" style="width: 89%">
  <tr>
	<td height="100%" valign="top" class="auto-style3">
<table border="0" width="100%" id="table1" cellspacing="5" cellpadding="5" class="style17" style="height: 35px">
	<tr>
		<td class="auto-style1" style="width: 115px; height: 10; font-size: small; background-color: #FF9900; color: #000000;"><strong>Shipping Information</strong></td>
		<td class="auto-style1" style="width: 115px; height: 10; font-size: small; background-color: #FFCC00; color: #000000;"><strong>Delivery Information	</strong></td>
	</tr>
</table>
<table border="0" id="table5" cellpadding="5" class="auto-style4" cellspacing="5" style="height: 36; width: 100%;">
	<tr>
        <td class="auto-style2" style="width: 115px; height: 10; background-color: #FFFFFF;"><strong>Ship Date :&nbsp;</strong></td>
        <td width="157" class="auto-style1" style="height: 10; font-size: small; background-color: #FFFFFF;"><?php echo $shipdate;?>&nbsp;</td>
        	
		<td class="auto-style2" style="width: 115px; height: 10; background-color: #FFFFFF;"><strong>Delivery Date  :&nbsp;</strong></td>

        <td width="160" class="auto-style1" style="height: 10; font-size: small; background-color: #FFFFFF;"><?php echo $deliverydate;?></td>
	</tr>
	<tr>
        <td class="auto-style2" style="width: 115px; height: 10; background-color: #FFFFFF;"><strong>Shippers Name :&nbsp;</strong></td>
        <td width="157" class="auto-style1" style="height: 10; font-size: small; background-color: #FFFFFF;"><?php echo $shippersname;?>&nbsp;</td>
        	
		<td class="auto-style2" style="width: 115px; height: 10; background-color: #FFFFFF;"><strong>Receivers Name  :&nbsp;</strong></td>

		<span class="auto-style31">:</span></span></span></span></strong></td>
        <td width="160" class="auto-style1" style="height: 10; font-size: small; background-color: #FFFFFF;"><?php echo $receiversname;?></td>
	</tr>
	<tr>
        <td class="auto-style2" style="width: 115px; height: 20; background-color: #FFFFFF;"><strong><span class="style17">
		<span class="auto-style28"><span class="auto-style4">
		<span class="auto-style31">Address  
		:</span></span></span></span></strong></td>
        <td width="157" class="auto-style1" style="height: 20; font-size: small; background-color: #FFFFFF;"><?php echo $shippersaddress;?></td>
        <td class="auto-style2" style="width: 91px; height: 20; background-color: #FFFFFF;"><strong><span class="style17">
		<span class="auto-style31"><span class="auto-style4">
		<span class="auto-style28">Address 
		:</span></span></span></span></strong></td>
        <td width="160" class="auto-style1" style="height: 20; font-size: small; background-color: #FFFFFF;"><?php echo $receiversaddress;?>		<br></td>

	</tr>
	</table>
<br>
<table border="0" width="100%" id="table6" cellspacing="0" cellpadding="0" class="style27">
	<tr>
		<td width="418" class="auto-style4">
		<table border="0" id="table10" cellpadding="5" class="auto-style4" cellspacing="5" style="height: 36; width: 100%; font-size: small;">
			<tr>
        <td class="auto-style2" style="width: 302px"><strong><span class="auto-style4">
		<span class="auto-style28">Package Content/Description 
		<span class="auto-style31">:</span></span></span></strong></td>
        <td class="auto-style2" style="width: 166px"><strong><span class="auto-style4">
		<span class="auto-style28">Weight 
		<span class="auto-style31">:</span></span></span></strong></td>
			</tr>
			<tr>
        <td class="auto-style1" style="width: 302px; font-size: x-small;"><?php echo $b;?></td>
        <td width="304" class="auto-style1"><?php echo $weight;?></td>
			</tr>
		</table>
		<br><table border="0" id="table10" cellpadding="5" class="auto-style4" cellspacing="5" style="height: 36; width: 100%; font-size: small;">
			<tr>
        <td class="auto-style2" style="width: 302px"><strong><span class="auto-style4">
		<span class="auto-style28">Package Status 
		<span class="auto-style31">:</span></span></span></strong></td>
        <td class="auto-style2" style="width: 166px"><strong><span class="auto-style4">
		<span class="auto-style28">Service Type 
		<span class="auto-style31">:</span></span></span></strong></td>
			</tr>
			<tr>
			    <style>
                        .blinking {
    animation: mymove 2s infinite alternate;
}

@-webkit-keyframes mymove {
    from {opacity:0;}
    to {opacity: 1;}
}
                        
                    </style>
        <td class="auto-style1" style="width: 302px; font-size: small;"><font color=red><?php /*if ($c == "1"){ echo "On Hold";}*/?></font><font color=blue><?php if ($status == '0'){echo '<font color=blue class="blinking"><b>Processing</B><?FONT>';}else{if ($status == '1p'){echo '<font color=blue class="blinking"><b>Processing</B><?FONT>';}else{if ($status == '2p'){echo '<font color=blue class="blinking"><b>Processing</B><?FONT>';}else{if ($status == '3p'){echo '<font color=blue class="blinking"><b>Processing</B><?FONT>';}else{if ($status == '4p'){echo '<font color=blue class="blinking"><b>Processing</B><?FONT>';}else{echo '<font color=red class="blinking"><b>ON HOLD</B><?FONT>';}}}}}?></font></td>
        <td width="304" class="auto-style1">Diplomatic</td>
			</tr>
		</table>
</td>
	</tr>
</table>
<table border="0" width="100%" id="table3" cellspacing="0" cellpadding="0" class="style31">
	<tr>
		<td class="style26">
<table border="0" width="100%" id="table11" cellspacing="5" cellpadding="5" class="style17" style="height: 20">
	<tr>
		<td class="auto-style1" style="width: 115px; height: 10; font-size: small; background-color: #FF9900;"><strong></strong></td>
		<td class="auto-style1" style="width: 115px; height: 10; font-size: small; background-color: #FFCC00;"><strong></strong></td>
	</tr>
</table>
		</td>
	</tr>
	<tr>
		<td>
		<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" class="auto-style8">
	<tr>
        <td align="center" style="height: 19px; width: 923px">
		<p align="left" class="auto-style3"><font color="#000000"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></font></td>
	</tr>
	<tr>
        <td align="center" style="height: 19px; width: 923px" class="auto-style31">
		<table style="width: 100%" cellpadding="5" class="auto-style3" cellspacing="5">
		    <tr>
			 <td class="auto-style2" style="width: 302px"><strong><span class="auto-style4">
		<span class="auto-style28">Moving Through
		<span class="auto-style31">:</span></span></span></strong></td></tr>

		 <td class="auto-style1" style="width: 100%; font-size: small;"><b><font color=blue></b><marquee onmouseover=this.stop() onmouseout=this.start()
scrollAmount=1 direction=left width="210" height=150>
		     
		     <?php 
		     
		     if($status == '0'){
		     
		     echo ''.$address1.'<font color=green><strong></strong></font>>>>>'.$address2.'<font color=red><strong></strong></font>>>>>'.$address3.'>>>>'.$address4.'>>>>'.$address5.'';
		   
		     }
		     
		      if($status == '1p'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address2.'<font color=red><strong></strong></font>>>>>'.$address3.'>>>>'.$address4.'>>>>'.$address5.'';
		   
		     }
		     
		      if($status == '1h'){
		     
		     echo ''.$address1.'<font color=red><strong>(ON HOLD)</strong></font>>>>>'.$address2.'<font color=red><strong></strong></font>>>>>'.$address3.'>>>>'.$address4.'>>>>'.$address5.'';
		   
		     }
		     
		      if($status == '2p'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address2.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address3.'>>>>'.$address4.'>>>>'.$address5.'';
		   
		     }
		     
		      if($status == '2h'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address2.'<font color=red><strong>(ON HOLD)</strong></font>>>>>'.$address3.'>>>>'.$address4.'>>>>'.$address5.'';
		   
		     }
		     
		     if($status == '3p'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address2.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address3.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address4.'>>>>'.$address5.'';
		   
		     }
		     
		      if($status == '3h'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address2.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address3.'<font color=red><strong>(ON HOLD)</strong></font>>>>>'.$address4.'>>>>'.$address5.'';
		   
		     }
		     
		      if($status == '4p'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address2.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address3.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address4.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address5.'';
		   
		     }
		     
		     if($status == '4h'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address2.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address3.'<font color=green><strong>(CLEARED)</strong></font>>>>>'.$address4.'<font color=red><strong>(ON HOLD)</strong></font>>>>>'.$address5.'';
		   
		     }
		   
		     
		   ?>  
		     </marquee></div></font></b></td>
		   
        <?php
        if($status == "0"){
             
             echo '
			<tr>
				<td class="auto-style4" style="width: 161">
				<strong class="auto-style5">Shipment Progress</strong></td>
				<td class="auto-style4">&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td style="width: 923px">
		<table id="table9" class="auto-style4" style="width: 100%" cellspacing="1">
			<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>27hr(after Ship Time) / 02:17GMT</strong></td>
			</tr>
			<tr>
        <td class="auto-style1" style="width: 259px">The Shipment Has Been Picked Up At ' .$address1. '</td>
			</tr>
			<tr>
        <td class="auto-style6" style="width: 259">&nbsp;</td>
			</tr>
<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>41hr(after Ship Time) / 16:03GMT</strong></td>
			</tr>
			
<tr>
        <td width="120" class="auto-style1"><font color=green>Awaiting clarification at ' .$address1. '</font>';
             
             
             
             
             
         }
         
         
          if($status == "1p"){
             
             echo '
			<tr>
				<td class="auto-style4" style="width: 161">
				<strong class="auto-style5">Shipment Progress</strong></td>
				<td class="auto-style4">&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td style="width: 923px">
		<table id="table9" class="auto-style4" style="width: 100%" cellspacing="1">
			<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>27hr(after Ship Time) / 02:17GMT</strong></td>
			</tr>
			<tr>
        <td class="auto-style1" style="width: 259px">The Shipment Has Been Picked Up At ' .$address1. '</td>
			</tr>
			<tr>
        <td class="auto-style6" style="width: 259">&nbsp;</td>
			</tr>
<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>41hr(after Ship Time) / 16:03GMT</strong></td>
			</tr>
			
<tr>
        <td width="120" class="auto-style1"><font color=green>Cleared at ' .$address1. '</font>';
             
             
             
             
             
         }
         
          if($status == "1h"){
             
             echo '
			<tr>
				<td class="auto-style4" style="width: 161">
				<strong class="auto-style5">Shipment Progress</strong></td>
				<td class="auto-style4">&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td style="width: 923px">
		<table id="table9" class="auto-style4" style="width: 100%" cellspacing="1">
			<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>27hr(after Ship Time) / 02:17GMT</strong></td>
			</tr>
			<tr>
        <td class="auto-style1" style="width: 259px">The Shipment Has Been Picked Up At ' .$address1. '</td>
			</tr>
			<tr>
        <td class="auto-style6" style="width: 259">&nbsp;</td>
			</tr>
<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>41hr(after Ship Time) / 16:03GMT</strong></td>
			</tr>
			
<tr>
        <td width="120" class="auto-style1"><font color=red>Held at ' .$address1. ' contact us through inexpresslogistics@gmail.com</font>';
             
             
             
             
             
         }
         
         
           if($status == "2p"){
             
             echo '
			<tr>
				<td class="auto-style4" style="width: 161">
				<strong class="auto-style5">Shipment Progress</strong></td>
				<td class="auto-style4">&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td style="width: 923px">
		<table id="table9" class="auto-style4" style="width: 100%" cellspacing="1">
			<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>27hr(after Ship Time) / 02:17GMT</strong></td>
			</tr>
			<tr>
        <td class="auto-style1" style="width: 259px">The Shipment Arrived At ' .$address2. '</td>
			</tr>
			<tr>
        <td class="auto-style6" style="width: 259">&nbsp;</td>
			</tr>
<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>41hr(after Ship Time) / 16:03GMT</strong></td>
			</tr>
			
<tr>
        <td width="120" class="auto-style1"><font color=green>Cleared at ' .$address2. '</font>';
             
             
             
             
             
         }
         
          if($status == "2h"){
             
             echo '
			<tr>
				<td class="auto-style4" style="width: 161">
				<strong class="auto-style5">Shipment Progress</strong></td>
				<td class="auto-style4">&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td style="width: 923px">
		<table id="table9" class="auto-style4" style="width: 100%" cellspacing="1">
			<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>27hr(after Ship Time) / 02:17GMT</strong></td>
			</tr>
			<tr>
        <td class="auto-style1" style="width: 259px">The Shipment Has Arrived At ' .$address2. '</td>
			</tr>
			<tr>
        <td class="auto-style6" style="width: 259">&nbsp;</td>
			</tr>
<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>41hr(after Ship Time) / 16:03GMT</strong></td>
			</tr>
			
<tr>
        <td width="120" class="auto-style1"><font color=red>Held at ' .$address2. ' contact us through inexpresslogistics@gmail.com</font>';
             
             
             
             
             
         }
         
         
          if($status == "3p"){
             
             echo '
			<tr>
				<td class="auto-style4" style="width: 161">
				<strong class="auto-style5">Shipment Progress</strong></td>
				<td class="auto-style4">&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td style="width: 923px">
		<table id="table9" class="auto-style4" style="width: 100%" cellspacing="1">
			<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>27hr(after Ship Time) / 02:17GMT</strong></td>
			</tr>
			<tr>
        <td class="auto-style1" style="width: 259px">The Shipment Arrived At ' .$address3. '</td>
			</tr>
			<tr>
        <td class="auto-style6" style="width: 259">&nbsp;</td>
			</tr>
<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>41hr(after Ship Time) / 16:03GMT</strong></td>
			</tr>
			
<tr>
        <td width="120" class="auto-style1"><font color=green>Cleared at ' .$address3. '</font>';
             
             
             
             
             
         }
         
          if($status == "3h"){
             
             echo '
			<tr>
				<td class="auto-style4" style="width: 161">
				<strong class="auto-style5">Shipment Progress</strong></td>
				<td class="auto-style4">&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td style="width: 923px">
		<table id="table9" class="auto-style4" style="width: 100%" cellspacing="1">
			<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>27hr(after Ship Time) / 02:17GMT</strong></td>
			</tr>
			<tr>
        <td class="auto-style1" style="width: 259px">The Shipment Has Arrived At ' .$address3. '</td>
			</tr>
			<tr>
        <td class="auto-style6" style="width: 259">&nbsp;</td>
			</tr>
<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>41hr(after Ship Time) / 16:03GMT</strong></td>
			</tr>
			
<tr>
        <td width="120" class="auto-style1"><font color=red>Held at ' .$address3. ' contact us through inexpresslogistics@gmail.com</font>';
             
             
             
             
             
         }
         
         
         
          if($status == "4p"){
             
             echo '
			<tr>
				<td class="auto-style4" style="width: 161">
				<strong class="auto-style5">Shipment Progress</strong></td>
				<td class="auto-style4">&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td style="width: 923px">
		<table id="table9" class="auto-style4" style="width: 100%" cellspacing="1">
			<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>27hr(after Ship Time) / 02:17GMT</strong></td>
			</tr>
			<tr>
        <td class="auto-style1" style="width: 259px">The Shipment Arrived At ' .$address4. '</td>
			</tr>
			<tr>
        <td class="auto-style6" style="width: 259">&nbsp;</td>
			</tr>
<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>41hr(after Ship Time) / 16:03GMT</strong></td>
			</tr>
			
<tr>
        <td width="120" class="auto-style1"><font color=green>Cleared at ' .$address4. '</font>';
             
             
             
             
             
         }
         
          if($status == "4h"){
             
             echo '
			<tr>
				<td class="auto-style4" style="width: 161">
				<strong class="auto-style5">Shipment Progress</strong></td>
				<td class="auto-style4">&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td style="width: 923px">
		<table id="table9" class="auto-style4" style="width: 100%" cellspacing="1">
			<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>27hr(after Ship Time) / 02:17GMT</strong></td>
			</tr>
			<tr>
        <td class="auto-style1" style="width: 259px">The Shipment Has Arrived At ' .$address4. '</td>
			</tr>
			<tr>
        <td class="auto-style6" style="width: 259">&nbsp;</td>
			</tr>
<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong>41hr(after Ship Time) / 16:03GMT</strong></td>
			</tr>
			
<tr>
        <td width="120" class="auto-style1"><font color=red>Held at ' .$address4. ' contact us through inexpresslogistics@gmail.com</font>';
             
             
             
             
             
         }
         
         
         
        
         
         
        ?>
        
        <!--<br><br><a href=https://www.dtodxlogistics.com>Click here to continue to our website</a></td>-->
			</tr>
<tr>
        <td width="120" class="auto-style6">&nbsp;</td>
			</tr>
			<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong></strong></td>
			</tr>
			<tr>
        <td width="120" class="auto-style1"></td>
			</tr>
			<tr>
        <td width="120" class="auto-style6">&nbsp;</td>
			</tr>
			<tr>
        <td class="auto-style1" style="width: 259px; font-size: x-small; background-color: #FF9900; color: #000000;">
		<strong></strong></td>
			</tr>
			<tr>
        <td width="120" class="auto-style1"></td>
        	</tr>
			<tr>
        <td class="auto-style6" style="width: 259; font-size: small;">&nbsp;</td>
			</tr>
			<tr>
        <td width="120" class="auto-style1"></td>
			</tr>
	</table>&nbsp;</td>
		<td>
		&nbsp;</td>
	</tr>
</table></td>
	</tr>
</table>
</td>
&nbsp;</td>
    <td width="34">&nbsp;</td>
  </tr>
</table><br />
</td>
        <td width="4%">&nbsp;</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>             <div class="form-group">

                </form>

            </div>

        </div>

    </div>

</div>
	
			
			<!--banner Slider starts Here-->
								

<!-- footer -->
			<div class="copy-right">
				<p>&copy; <?php $date = date('Y'); echo $date;?> Inexpress services. All rights reserved |  <a href="http://inexpresslogistics.com/">Inexpress Services</a></p>
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
						styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
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
					//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
					stageHeight: 320,
					//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
					slidesOnStage: false,
					//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
					slidePosition: 'center',
					//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
					slideStart: 'mid',
					//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
					slideScaling: 150,
					//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
					offsetV: -5,
					//  Center slide contents vertically - Boolean. Default: false
					centerV: true,
					//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
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