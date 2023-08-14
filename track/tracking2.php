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
          $dp = $row['dp'];
          $dp = $dp."."."jpg";
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
?>
<html>
    <head>
        <title>
           <?php echo $receiversname?>
        </title>
      
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    </head>
    <style>
      
body{height:100%;
   width:100%;
   background-image:url(images/hero_bg_1.jpg);/*your background image*/  
   background-repeat:no-repeat;/*we want to have one single image not a repeated one*/  
   background-size:cover;/*this sets the image to fullscreen covering the whole screen*/  
   /*css hack for ie*/     
   filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.image.jpg',sizingMethod='scale');
   -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.jpg',sizingMethod='scale')";
}

.modal {
  overflow-y:auto;
}
    </style>
    <body>
 
      <div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal show" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
         <h5 class="modal-title">Hello <?php echo $receiversname?> below is the status of your package</h5>
        </div>
        <div class="modal-body">
         
          <p style="text-align:left;">
<b>Sender:</b> <?php echo $shippersname?>
<span style="float:right;"><img src="<?php echo $dp;?>" alt="Smiley face" height="42" width="42"/></span>
</p>
<div class="table-responsive">
  <table class="table">
    <thead>
            <th> </th><th> </th>
          </thead>
          <tbody>
            <tr>
              <td><b>Ship date:</b></td><td> <?php echo $shipdate?></td>
            </tr>
            <tr>
              <td><b>Receiver's name:</b></td><td><?php echo $receiversname?></td>
            </tr>
            <tr>
              <td><b>Receiver's address:</b></td><td><?php echo $receiversaddress?></td>
            </tr>
          </tbody>
  </table>
  <br>
  	    <style>
                        .blinking {
    animation: mymove 2s infinite alternate;
}

@-webkit-keyframes mymove {
    from {opacity:0;}
    to {opacity: 1;}
}
                        
                    </style>
    <font size=2 color=#00145b>Service type:</font> <font color=blue size=2>Diplomatic</font><br>
  <font size=2 color=#00145b>Package status:</font> <font color=red><?php /*if ($c == "1"){ echo "On Hold";}*/?></font><font color=blue><?php if ($status == '0'){echo '<font color=blue class="blinking"><b>Processing</B><?FONT>';}else{if ($status == '1p'){echo '<font color=blue class="blinking"><b>Processing</B><?FONT>';}else{if ($status == '2p'){echo '<font color=blue class="blinking"><b>Processing</B><?FONT>';}else{if ($status == '3p'){echo '<font color=blue class="blinking"><b>Processing</B><?FONT>';}else{if ($status == '4p'){echo '<font color=blue class="blinking"><b>Processing</B><?FONT>';}else{echo '<font color=red class="blinking"><b>ON HOLD</B></FONT> contact us (info@doortodoorexservices.com) ';}}}}}?></font><br><br>
  
   <font size=3 color=#00145b>Moving through:</font><br>
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
		     </marquee></font></b></td>


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
        <td width="120" class="auto-style1"><font color=red>Held at ' .$address1. ' contact us through info@doortodoorexservices.com</font>';
             
             
             
             
             
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
        <td width="120" class="auto-style1"><font color=red>Held at ' .$address2. ' contact us through info@doortodoorexservices.com</font>';
             
             
             
             
             
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
        <td width="120" class="auto-style1"><font color=red>Held at ' .$address3. ' contact us through info@doortodoorexservices.com</font>';
             
             
             
             
             
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
        <td width="120" class="auto-style1"><font color=red>Held at ' .$address4. ' contact us through info@doortodoorexservices.com</font>';
             
             
             
             
             
         }
         
         
         
        
         
         
        ?>


        </div>
        <div class="modal-footer">

  <a class="btn btn-default" href="http://www.doortodoorexservices.com">Back</a>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</div>


    </body>
</html>