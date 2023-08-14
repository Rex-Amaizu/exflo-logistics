<?php

if(isset($_POST['firstname'])){
    $fullname = ''.$_POST['firstname'].' '.$_POST['lastname'].'';
    $email = $_POST['email'];
    $subjectpost = $_POST['subject'];
    $message = $_POST['message'];
    $to      = 'info@doortodoorexservices.com';
$subject = 'Blacky YOU HAVE A MESSAGE FROM A CLIENT';
$message = 'below are the details of client who contacted you directly from the website' . "\r\n" .'NAME:'.$fullname.'' . "\r\n" .'EMAIL:'.$email.''  . "\r\n" .'SUBJECT:'.$subjectpost.''   . "\r\n" .'MESSAGE:'.$message.'' ;
$headers = 'From: ebuka@ghost.com' . "\r\n" .
    'Reply-To: ebuka@ghost.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
$message = "message recieved !";
echo "<script type='text/javascript'>alert('$message');</script>";
// $_SESSION["success"] = "message sent, we will reply shortly";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Contact Us</h1>
            <p class="breadcrumb-custom"><a href="index.html">Home</a> <span class="mx-2">&gt;</span> <span>Contact</span></p>
//           <?php
//             if (isset($_SESSION["success"])){
//                 echo '<div class="alert alert-success" role="alert">
//  we have received your message and will reply shortly.
// </div>';
// // remove all session variables
// session_unset(); 

// // destroy the session 
// session_destroy(); 
// }
// ?>
          </div>
        </div>
      </div>
    </div>  

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="" class="p-5 bg-white" method=post>
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" name="firstname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" name="lastname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" name="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">88 floor International Commerce Centre  	1 Austin Road West, Kowloon 	Hong Kong China</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+441618505526</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">info@doortodoorexservices.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Contact us through the form or write us a mail directly, you can also give us a call, and be assured we will respond in no time.</p>
              <!--<p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>-->
            </div>

          </div>
        </div>
      </div>
    </div>
    
   <?php include('footer.php');?>
   
   
   

<?php if (isset($_SESSION['unregistered'])) { ?>


<!-- Modal -->
  <div class="modal fade" id="myModalunregister" role="dialog">
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
  </div>

<script type="text/javascript">
    $(window).load(function () {
        $('#myModalunregister').modal('show');
    });
</script>

<?php unset($_SESSION['unregistered']);} ?>

<?php if (isset($_SESSION['registered'])) { ?>


<style>
    .head {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}
.roundimg {
  border-radius: 50%;
}
</style>
<!-- Modal -->
  <div class="container">
  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
            </div>
             <p style="text-align:left;">
<div align=left class="head">Hello <b><?php echo $receiversname?></b> below is the status of your package</div>
<span style="float:right;"></span>
</p>
      
      
        <div class="modal-body">
         
          <p style="text-align:left;">
<b>Sender:</b> <?php echo $shippersname?>

<span style="float:right;"><img class="roundimg" src="<?php echo $dp;?>" alt="Smiley face" height="80" width="80"/></span>
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
              <td><b>Receiver's name:</b></td><td><?php echo $receiversfullname?></td>
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
		     
		     echo ''.$address1.'<font color=green><strong></strong></font>&#9654;'.$address2.'<font color=red><strong></strong></font>&#9654;'.$address3.'&#9654;'.$address4.'&#9654;'.$address5.'';
		   
		     }
		     
		      if($status == '1p'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address2.'<font color=red><strong></strong></font>&#9654;'.$address3.'&#9654;'.$address4.'&#9654;'.$address5.'';
		   
		     }
		     
		      if($status == '1h'){
		     
		     echo ''.$address1.'<font color=red><strong>(ON HOLD)</strong></font>&#9654;'.$address2.'<font color=red><strong></strong></font>&#9654;'.$address3.'&#9654;'.$address4.'&#9654;'.$address5.'';
		   
		     }
		     
		      if($status == '2p'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address2.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address3.'&#9654;'.$address4.'&#9654;'.$address5.'';
		   
		     }
		     
		      if($status == '2h'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address2.'<font color=red><strong>(ON HOLD)</strong></font>&#9654;'.$address3.'&#9654;'.$address4.'&#9654;'.$address5.'';
		   
		     }
		     
		     if($status == '3p'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address2.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address3.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address4.'&#9654;'.$address5.'';
		   
		     }
		     
		      if($status == '3h'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address2.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address3.'<font color=red><strong>(ON HOLD)</strong></font>&#9654;'.$address4.'&#9654;'.$address5.'';
		   
		     }
		     
		      if($status == '4p'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address2.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address3.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address4.'<font color=green><strong>(CLEARED)</strong></font>>&#9654;'.$address5.'';
		   
		     }
		     
		     if($status == '4h'){
		     
		     echo ''.$address1.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address2.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address3.'<font color=green><strong>(CLEARED)</strong></font>&#9654;'.$address4.'<font color=red><strong>(ON HOLD)</strong></font>&#9654;'.$address5.'';
		   
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
        <td width="120" class="auto-style1"><font color=red>Package is suspended at ' .$address1. '</font>';
             
             
             
             
             
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
<script type="text/javascript">
    $(window).load(function () {
        $('#myModal').modal('show');
    });
</script>

<?php unset($_SESSION['registered']);} ?>
  </div>

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