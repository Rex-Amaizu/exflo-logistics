<?php

include('db.php');
$stop = $_POST['stop'];
$status = $_POST['status'];
if (isset($_POST['stop'])){
    
    $sql = "SELECT * FROM tracking WHERE trackingid='$stop'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
$sql = "SELECT * FROM tracking WHERE trackingid = '$stop'";
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
          $statusfromserver = $row['status'];
          $smssender = $row['smssender'];
           $smsreceiver = $row['smsreceiver'];
           $clientphone = $row['clientphone'];
           $reg_date = $row['reg_date'];
           date_default_timezone_set('UTC');
           $date = date('d-m-Y H:m:s');
$now = time("$date"); // or your date as well
$your_date = strtotime("$reg_date");
$hourdiff = round((strtotime($date) - $your_date)/3600, 1);

           
}
  

    
        $sql = "UPDATE tracking SET status='$status' WHERE trackingid='$stop'";
if ($conn->query($sql) === TRUE) {
   
   if ($_POST['status'] == "1p"){
       
       $postdata = http_build_query(

    array(
        'username' => "nwudoebuka@gmail.com",
        'password' => "an0therrichard",
  'message' => "Hello ".$smsreceiver.", your package just left ".$address1.", track it online for verification",
  'mobiles' => "".$clientphone."",
  'sender' => "Door2Door",
    )
);
       
 }else if ($_POST['status'] == "1h"){
       
       $postdata = http_build_query(

    array(
        'username' => "nwudoebuka@gmail.com",
        'password' => "an0therrichard",
  'message' => "Hello ".$smsreceiver.", your package was suspended at ".$address1." contact us for clarification",
  'mobiles' => "".$clientphone."",
  'sender' => "Door2Door",
    )
);
       
 }else if ($_POST['status'] == "2p"){
       
       $postdata = http_build_query(

    array(
        'username' => "nwudoebuka@gmail.com",
        'password' => "an0therrichard",
  'message' => "Hello ".$smsreceiver.", your package just left ".$address2.", track it online for verification",
  'mobiles' => "".$clientphone."",
  'sender' => "Door2Door",
    )
);
       
 }else if($_POST['status'] == "2h"){
       
       $postdata = http_build_query(

    array(
        'username' => "nwudoebuka@gmail.com",
        'password' => "an0therrichard",
  'message' => "Hello ".$smsreceiver.", your package was suspended at ".$address2." contact us for clarification",
  'mobiles' => "".$clientphone."",
  'sender' => "Door2Door",
    )
);
       
 }else if ($_POST['status'] == "3p"){
       
       $postdata = http_build_query(

    array(
        'username' => "nwudoebuka@gmail.com",
        'password' => "an0therrichard",
  'message' => "Hello ".$smsreceiver.", your package just left ".$address3.", track it online for verification",
  'mobiles' => "".$clientphone."",
  'sender' => "Door2Door",
    )
);
       
 }else if($_POST['status'] == "3h"){
       
       $postdata = http_build_query(

    array(
        'username' => "nwudoebuka@gmail.com",
        'password' => "an0therrichard",
  'message' => "Hello ".$smsreceiver.", your package was suspended at ".$address3." contact us for clarification",
  'mobiles' => "".$clientphone."",
  'sender' => "Door2Door",
    )
);
       
 }
   
   
   

//prepare a http post request
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);
//craete a stream to communicate with betasms api
$context  = stream_context_create($opts);
//get result from communication
$result = file_get_contents('http://login.betasms.com/api/', false, $context);
//return result to client, this will return the appropriate respond code
echo $result;
   
 
    	
    	// Process your response here
    echo '<script>
    alert("CHANGES MADE SUCESSFULLY");

</script>
</script> <script>window.location = 

"http://www.doortodoorexservices.com"</script>';
exit();
}
    
}else{
      echo '<script>

    alert("Wrong Tracking ID, Crosscheck");

</script>
</script> <script>window.location = 

"http://www.track..doortodoorexservices.com/register.php"</script>';
exit();
    
}
    
}else{
    
    echo '<script>

    alert("Missing Token");

</script>
</script> <script>window.location = 

"http://www.doortodoorexservices.com"</script>';
exit();
}

?> 