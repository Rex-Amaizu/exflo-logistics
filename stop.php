<?php

include('db.php');


if (isset($_POST['stop'])){
    
$stop = $_POST['stop'];
$status = $_POST['status'];


    $sql = "SELECT * FROM tracking WHERE trackingid='$stop'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$receivers_email = "";
$route1 = "";
$route2 = "";
$route3 = "";
$route4 = "";
$cleared_text = '<font color="green"><b>Cleared</b></font>';
$onhold_text = '<font color="red"><b>Undergoing Investigation</b></font>';
$error = "On Hold Date Not Updated!";
$date = date('Y-m-d H:i:s');


  $result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
          $receivers_email = $row['receivers_email'];
          $route1 = $row['route1'];
          $route2 = $row['route2'];
          $route3 = $row['route3'];
          $route4 = $row['route4'];
}
 
$sql = "UPDATE tracking SET status='$status' WHERE trackingid='$stop'";
if ($conn->query($sql) === TRUE) {
   
   if ($_POST['status'] == "1p"){
       
$sql = "UPDATE tracking SET route1_date='$date', route1_text='$cleared_text' WHERE trackingid='$stop'";
      //send email update to client.

if ($conn->query($sql) === TRUE){
//send email update to client.
  //add recipient email
$to = $receivers_email;

//create Subject
$subject = "Package Update";


//set the mail headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: Exflo <noreply@exflologistics.com>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//constrcut message
$message = '<html>';
$message .= '<head>';
$message .= '<meta charset="UTF-8">';
$message .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$message .= '</head>';
$message .= '<body style="font-family: Arial; margin: 0;">';

$message .= '<div style="padding: 2px; text-align: center; background: #000000; color: 
     #ff9900; font-size: 20px;">';
 $message .= '<h1>EXFLO<font color="#999999">COURIER</font> </h1>';
 $message .= '<p>PACKAGE LOCATION!</p>';
$message .= '</div>';

$message .= '<div style="padding:60px;" align="center">';

$message .= '<p>"Your Package has been cleared at '.$route1.' Enroute '.$route2.' "</p>';
$message .= '<p>Confirm your cargo status with your Tracking Number at exflologistics.com.  </p>';
$message .= '<p><font color="black"><b>Exflo Logistics</b></font></p>';
$message .= '</div>';
$message .= '<div style="padding: 1px; left: 0; bottom: 0; background: #000000; color: #ff9900; text-align: center;">';

$message .= '<p>';
$message .= '<a href=""><img src="https://thekayword.files.wordpress.com/2011/07/facebook-icon-black-background.jpg?w=240" alt="" style="width:30px;height:20px;"></a>  ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gJ6BwHNprnG7ZuoH3k2K0xVKcNIqnMtyfw&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNTKD7JU_vWA-kxMIX6RQPE0xDiUILf5UcQ&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://wallpapercave.com/wp/wp7702506.jpg" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQufL8QCGUCMh208v3lsWZilwbdXr1aJQBpJQ&usqp=CAU" alt="" style="width:30px;height:20px;"> +888-888-8888 ';
$message .= 'Copyright | '.date('Y').' | ';
$message .=  '<a href="https://exflologistics.com/" target="_blank">exflologistics.com</a>';
$message .= '</p>';
$message .= '</div>';

$message .= '</body>';
$message .= '</html>';

$message = wordwrap($message, 72);


//send mail
mail($to, $subject, $message, $headers);
}else{
echo $error;
}
       
 }else if ($_POST['status'] == "1h"){
 

$sql = "UPDATE tracking SET route1_date='$date', route1_text='$onhold_text' WHERE trackingid='$stop'";

if ($conn->query($sql) === TRUE){
//send email update to client.
  //add recipient email
$to = $receivers_email;

//create Subject
$subject = "Package Update";


//set the mail headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: Exflo <noreply@exflologistics.com>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//constrcut message
$message = '<html>';
$message .= '<head>';
$message .= '<meta charset="UTF-8">';
$message .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$message .= '</head>';
$message .= '<body style="font-family: Arial; margin: 0;">';

$message .= '<div style="padding: 2px; text-align: center; background: #000000; color: 
     #ff9900; font-size: 20px;">';
 $message .= '<h1>EXFLO<font color="#999999">COURIER</font> </h1>';
 $message .= '<p>PACKAGE LOCATION!</p>';
$message .= '</div>';

$message .= '<div style="padding:60px;" align="center">';

$message .= '<p>"Your Package is undergoing investigation at '.$route1.' "</p>';
$message .= '<p>Contact support@exflologistics.com for more details.  </p>';
$message .= '<p><font color="black"><b>Exflo Logistics</b></font></p>';
$message .= '</div>';
$message .= '<div style="padding: 1px; left: 0; bottom: 0; background: #000000; color: #ff9900; text-align: center;">';

$message .= '<p>';
$message .= '<a href=""><img src="https://thekayword.files.wordpress.com/2011/07/facebook-icon-black-background.jpg?w=240" alt="" style="width:30px;height:20px;"></a>  ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gJ6BwHNprnG7ZuoH3k2K0xVKcNIqnMtyfw&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNTKD7JU_vWA-kxMIX6RQPE0xDiUILf5UcQ&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://wallpapercave.com/wp/wp7702506.jpg" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQufL8QCGUCMh208v3lsWZilwbdXr1aJQBpJQ&usqp=CAU" alt="" style="width:30px;height:20px;"> +888-888-8888 ';
$message .= 'Copyright | '.date('Y').' | ';
$message .=  '<a href="https://exflologistics.com/" target="_blank">exflologistics.com</a>';
$message .= '</p>';
$message .= '</div>';

$message .= '</body>';
$message .= '</html>';

$message = wordwrap($message, 72);


//send mail
mail($to, $subject, $message, $headers);
}else{
echo $error;
}

       
 }else if ($_POST['status'] == "2p"){

$sql = "UPDATE tracking SET route2_date='$date', route2_text='$cleared_text' WHERE trackingid='$stop'";
       
      //send email update to client.

if ($conn->query($sql) === TRUE){
//send email update to client.
  //add recipient email
$to = $receivers_email;

//create Subject
$subject = "Package Update";


//set the mail headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: Exflo <noreply@exflologistics.com>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//constrcut message
$message = '<html>';
$message .= '<head>';
$message .= '<meta charset="UTF-8">';
$message .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$message .= '</head>';
$message .= '<body style="font-family: Arial; margin: 0;">';

$message .= '<div style="padding: 2px; text-align: center; background: #000000; color: 
     #ff9900; font-size: 20px;">';
 $message .= '<h1>EXFLO<font color="#999999">COURIER</font> </h1>';
 $message .= '<p>PACKAGE LOCATION!</p>';
$message .= '</div>';

$message .= '<div style="padding:60px;" align="center">';

$message .= '<p>"Your Package has been cleared at '.$route2.' Enroute '.$route3.' "</p>';
$message .= '<p>Confirm your cargo status with your Tracking Number at exflologistics.com.  </p>';
$message .= '<p><font color="black"><b>Exflo Logistics</b></font></p>';
$message .= '</div>';
$message .= '<div style="padding: 1px; left: 0; bottom: 0; background: #000000; color: #ff9900; text-align: center;">';

$message .= '<p>';
$message .= '<a href=""><img src="https://thekayword.files.wordpress.com/2011/07/facebook-icon-black-background.jpg?w=240" alt="" style="width:30px;height:20px;"></a>  ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gJ6BwHNprnG7ZuoH3k2K0xVKcNIqnMtyfw&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNTKD7JU_vWA-kxMIX6RQPE0xDiUILf5UcQ&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://wallpapercave.com/wp/wp7702506.jpg" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQufL8QCGUCMh208v3lsWZilwbdXr1aJQBpJQ&usqp=CAU" alt="" style="width:30px;height:20px;"> +888-888-8888 ';
$message .= 'Copyright | '.date('Y').' | ';
$message .=  '<a href="https://exflologistics.com/" target="_blank">exflologistics.com</a>';
$message .= '</p>';
$message .= '</div>';

$message .= '</body>';
$message .= '</html>';

$message = wordwrap($message, 72);


//send mail
mail($to, $subject, $message, $headers);
}else{
echo $error;
}

 }else if($_POST['status'] == "2h"){

$sql = "UPDATE tracking SET route2_date='$date', route2_text='$onhold_text' WHERE trackingid='$stop'";
       
       //send email update to client.
if ($conn->query($sql) === TRUE){
//send email update to client.
  //add recipient email
$to = $receivers_email;

//create Subject
$subject = "Package Update";


//set the mail headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: Exflo <noreply@exflologistics.com>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//constrcut message
$message = '<html>';
$message .= '<head>';
$message .= '<meta charset="UTF-8">';
$message .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$message .= '</head>';
$message .= '<body style="font-family: Arial; margin: 0;">';

$message .= '<div style="padding: 2px; text-align: center; background: #000000; color: 
     #ff9900; font-size: 20px;">';
 $message .= '<h1>EXFLO<font color="#999999">COURIER</font> </h1>';
 $message .= '<p>PACKAGE LOCATION!</p>';
$message .= '</div>';

$message .= '<div style="padding:60px;" align="center">';

$message .= '<p>"Your Package is undergoing investigation at '.$route2.' "</p>';
$message .= '<p>Contact support@exflologistics.com for more details.  </p>';
$message .= '<p><font color="black"><b>Exflo Logistics</b></font></p>';
$message .= '</div>';
$message .= '<div style="padding: 1px; left: 0; bottom: 0; background: #000000; color: #ff9900; text-align: center;">';

$message .= '<p>';
$message .= '<a href=""><img src="https://thekayword.files.wordpress.com/2011/07/facebook-icon-black-background.jpg?w=240" alt="" style="width:30px;height:20px;"></a>  ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gJ6BwHNprnG7ZuoH3k2K0xVKcNIqnMtyfw&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNTKD7JU_vWA-kxMIX6RQPE0xDiUILf5UcQ&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://wallpapercave.com/wp/wp7702506.jpg" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQufL8QCGUCMh208v3lsWZilwbdXr1aJQBpJQ&usqp=CAU" alt="" style="width:30px;height:20px;"> +888-888-8888 ';
$message .= 'Copyright | '.date('Y').' | ';
$message .=  '<a href="https://exflologistics.com/" target="_blank">exflologistics.com</a>';
$message .= '</p>';
$message .= '</div>';

$message .= '</body>';
$message .= '</html>';

$message = wordwrap($message, 72);


//send mail
mail($to, $subject, $message, $headers);
}else{
echo $error;
}


 }else if ($_POST['status'] == "3p"){


$sql = "UPDATE tracking SET route3_date='$date', route3_text='$cleared_text' WHERE trackingid='$stop'";
       
      //send email update to client.

if ($conn->query($sql) === TRUE){
//send email update to client.
  //add recipient email
$to = $receivers_email;

//create Subject
$subject = "Package Update";


//set the mail headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: Exflo <noreply@exflologistics.com>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//constrcut message
$message = '<html>';
$message .= '<head>';
$message .= '<meta charset="UTF-8">';
$message .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$message .= '</head>';
$message .= '<body style="font-family: Arial; margin: 0;">';

$message .= '<div style="padding: 2px; text-align: center; background: #000000; color: 
     #ff9900; font-size: 20px;">';
 $message .= '<h1>EXFLO<font color="#999999">COURIER</font> </h1>';
 $message .= '<p>PACKAGE LOCATION!</p>';
$message .= '</div>';

$message .= '<div style="padding:60px;" align="center">';

$message .= '<p>"Your Package has been cleared at '.$route3.' Enroute '.$route4.' "</p>';
$message .= '<p>Confirm your cargo status with your Tracking Number at exflologistics.com.  </p>';
$message .= '<p><font color="black"><b>Exflo Logistics</b></font></p>';
$message .= '</div>';
$message .= '<div style="padding: 1px; left: 0; bottom: 0; background: #000000; color: #ff9900; text-align: center;">';

$message .= '<p>';
$message .= '<a href=""><img src="https://thekayword.files.wordpress.com/2011/07/facebook-icon-black-background.jpg?w=240" alt="" style="width:30px;height:20px;"></a>  ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gJ6BwHNprnG7ZuoH3k2K0xVKcNIqnMtyfw&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNTKD7JU_vWA-kxMIX6RQPE0xDiUILf5UcQ&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://wallpapercave.com/wp/wp7702506.jpg" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQufL8QCGUCMh208v3lsWZilwbdXr1aJQBpJQ&usqp=CAU" alt="" style="width:30px;height:20px;"> +888-888-8888 ';
$message .= 'Copyright | '.date('Y').' | ';
$message .=  '<a href="https://exflologistics.com/" target="_blank">exflologistics.com</a>';
$message .= '</p>';
$message .= '</div>';

$message .= '</body>';
$message .= '</html>';

$message = wordwrap($message, 72);


//send mail
mail($to, $subject, $message, $headers);
}else{
echo $error;
}
       
 }else if($_POST['status'] == "3h"){

$sql = "UPDATE tracking SET route3_date='$date', route3_text='$onhold_text' WHERE trackingid='$stop'";
       
       //send email update to client.

if ($conn->query($sql) === TRUE){
//send email update to client.
  //add recipient email
$to = $receivers_email;

//create Subject
$subject = "Package Update";


//set the mail headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: Exflo <noreply@exflologistics.com>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//constrcut message
$message = '<html>';
$message .= '<head>';
$message .= '<meta charset="UTF-8">';
$message .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$message .= '</head>';
$message .= '<body style="font-family: Arial; margin: 0;">';

$message .= '<div style="padding: 2px; text-align: center; background: #000000; color: 
     #ff9900; font-size: 20px;">';
 $message .= '<h1>EXFLO<font color="#999999">COURIER</font> </h1>';
 $message .= '<p>PACKAGE LOCATION!</p>';
$message .= '</div>';

$message .= '<div style="padding:60px;" align="center">';

$message .= '<p>"Your Package is undergoing investigation at '.$route3.' "</p>';
$message .= '<p>Contact support@exflologistics.com for more details.  </p>';
$message .= '<p><font color="black"><b>Exflo Logistics</b></font></p>';
$message .= '</div>';
$message .= '<div style="padding: 1px; left: 0; bottom: 0; background: #000000; color: #ff9900; text-align: center;">';

$message .= '<p>';
$message .= '<a href=""><img src="https://thekayword.files.wordpress.com/2011/07/facebook-icon-black-background.jpg?w=240" alt="" style="width:30px;height:20px;"></a>  ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gJ6BwHNprnG7ZuoH3k2K0xVKcNIqnMtyfw&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNTKD7JU_vWA-kxMIX6RQPE0xDiUILf5UcQ&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://wallpapercave.com/wp/wp7702506.jpg" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQufL8QCGUCMh208v3lsWZilwbdXr1aJQBpJQ&usqp=CAU" alt="" style="width:30px;height:20px;"> +888-888-8888 ';
$message .= 'Copyright | '.date('Y').' | ';
$message .=  '<a href="https://exflologistics.com/" target="_blank">exflologistics.com</a>';
$message .= '</p>';
$message .= '</div>';

$message .= '</body>';
$message .= '</html>';

$message = wordwrap($message, 72);


//send mail
mail($to, $subject, $message, $headers);
}else{
echo $error;
}
       
 }else if($_POST['status'] == "4p"){


$sql = "UPDATE tracking SET route4_date='$date', route4_text='$cleared_text' WHERE trackingid='$stop'";
       
       //send email update to client.
if ($conn->query($sql) === TRUE){
//send email update to client.
  //add recipient email
$to = $receivers_email;

//create Subject
$subject = "Package Update";


//set the mail headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: Exflo <noreply@exflologistics.com>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//constrcut message
$message = '<html>';
$message .= '<head>';
$message .= '<meta charset="UTF-8">';
$message .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$message .= '</head>';
$message .= '<body style="font-family: Arial; margin: 0;">';

$message .= '<div style="padding: 2px; text-align: center; background: #000000; color: 
     #ff9900; font-size: 20px;">';
 $message .= '<h1>EXFLO<font color="#999999">COURIER</font> </h1>';
 $message .= '<p>PACKAGE LOCATION!</p>';
$message .= '</div>';

$message .= '<div style="padding:60px;" align="center">';

$message .= '<p>"Your Package has been cleared at '.$route4.'."</p>';
$message .= '<p>Contact support@exflologistics.com for home delivery.  </p>';
$message .= '<p><font color="black"><b>Exflo Logistics</b></font></p>';
$message .= '</div>';
$message .= '<div style="padding: 1px; left: 0; bottom: 0; background: #000000; color: #ff9900; text-align: center;">';

$message .= '<p>';
$message .= '<a href=""><img src="https://thekayword.files.wordpress.com/2011/07/facebook-icon-black-background.jpg?w=240" alt="" style="width:30px;height:20px;"></a>  ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gJ6BwHNprnG7ZuoH3k2K0xVKcNIqnMtyfw&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNTKD7JU_vWA-kxMIX6RQPE0xDiUILf5UcQ&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://wallpapercave.com/wp/wp7702506.jpg" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQufL8QCGUCMh208v3lsWZilwbdXr1aJQBpJQ&usqp=CAU" alt="" style="width:30px;height:20px;"> +888-888-8888 ';
$message .= 'Copyright | '.date('Y').' | ';
$message .=  '<a href="https://exflologistics.com/" target="_blank">exflologistics.com</a>';
$message .= '</p>';
$message .= '</div>';

$message .= '</body>';
$message .= '</html>';

$message = wordwrap($message, 72);


//send mail
mail($to, $subject, $message, $headers);
}else{
echo $error;
}
       
 }else if($_POST['status'] == "4h"){


$sql = "UPDATE tracking SET route4_date='$date', route4_text='$onhold_text' WHERE trackingid='$stop'";
       
       //send email update to client.


if ($conn->query($sql) === TRUE){
//send email update to client.
  //add recipient email
$to = $receivers_email;

//create Subject
$subject = "Package Update";


//set the mail headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: Exflo <noreply@exflologistics.com>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//constrcut message
$message = '<html>';
$message .= '<head>';
$message .= '<meta charset="UTF-8">';
$message .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$message .= '</head>';
$message .= '<body style="font-family: Arial; margin: 0;">';

$message .= '<div style="padding: 2px; text-align: center; background: #000000; color: 
     #ff9900; font-size: 20px;">';
 $message .= '<h1>EXFLO<font color="#999999">COURIER</font> </h1>';
 $message .= '<p>PACKAGE LOCATION!</p>';
$message .= '</div>';

$message .= '<div style="padding:60px;" align="center">';

$message .= '<p>"Your Package is undergoing investigation at '.$route4.' "</p>';
$message .= '<p>Contact support@exflologistics.com for more details.  </p>';
$message .= '<p><font color="black"><b>Exflo Logistics</b></font></p>';
$message .= '</div>';
$message .= '<div style="padding: 1px; left: 0; bottom: 0; background: #000000; color: #ff9900; text-align: center;">';

$message .= '<p>';
$message .= '<a href=""><img src="https://thekayword.files.wordpress.com/2011/07/facebook-icon-black-background.jpg?w=240" alt="" style="width:30px;height:20px;"></a>  ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gJ6BwHNprnG7ZuoH3k2K0xVKcNIqnMtyfw&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNTKD7JU_vWA-kxMIX6RQPE0xDiUILf5UcQ&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://wallpapercave.com/wp/wp7702506.jpg" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQufL8QCGUCMh208v3lsWZilwbdXr1aJQBpJQ&usqp=CAU" alt="" style="width:30px;height:20px;"> +888-888-8888 ';
$message .= 'Copyright | '.date('Y').' | ';
$message .=  '<a href="https://exflologistics.com/" target="_blank">exflologistics.com</a>';
$message .= '</p>';
$message .= '</div>';

$message .= '</body>';
$message .= '</html>';

$message = wordwrap($message, 72);


//send mail
mail($to, $subject, $message, $headers);
}else{
echo $error;
}
       
 }


  echo '<script>
      alert("CHANGES MADE SUCESSFULLY");

  </script>
  </script> <script>window.location = 

  "https://exflologistics.com/index2.php"</script>';

}else{

  echo '<script>

    alert("Failed To Update Status!");

</script>
</script> <script>window.location = 

"https://exflologistics.com/register"</script>';
exit();
    
}
    
}else{
      echo '<script>

    alert("Wrong Tracking ID, Crosscheck");

</script>
</script> <script>window.location = 

"https://exflologistics.com/register"</script>';
exit();
    
}
    
}else{
    
    echo '<script>

    alert("Missing Token");

</script>
</script> <script>window.location = 

"https://exflologistics.com/index2.php"</script>';
exit();
}

?> 