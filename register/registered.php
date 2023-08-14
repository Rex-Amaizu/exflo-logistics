<?php
include('../db.php');
$senders_name = $_POST['senders_name'];
$receivers_name = $_POST['receivers_name'];
$receivers_address = $_POST['receivers_address'];
$receivers_email = $_POST['receivers_email'];
$receivers_phone = $_POST['receivers_phone'];
$dp = $_POST['dp'];
$shipping_date = $_POST['shipping_date'];
$delivery_date = $_POST['delivery_date'];
$delivery_time = $_POST['delivery_time'];
$cargo_description = $_POST['cargo_description'];
$weight = $_POST['weight'];
$route1 = $_POST['route1'];
$route2 = $_POST['route2'];
$route3 = $_POST['route3'];
$route4  = $_POST['route4'];
$trackingid = $_POST['trackingid'];
//include_once("../Apis/SmsApi.php");
// $smsClass = new Name();
// $smsClass->sendSMS($phone,"Hello $receiversname, you have a package from '.$shippersname.'. track this package on our site","Inexpress");
$status = '0';
date_default_timezone_set('UTC');
$date = date('d-m-Y H:m:s');
/*// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
*/


$sql = "SELECT 	trackingid FROM tracking WHERE 	trackingid='$trackingid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
        echo '<script>

    alert("Tracking ID EXISTS TRY ANOTHER ONE");

</script>
</script> <script>window.location = 

"https://exflologistics.com/index2.php"</script>';
exit();
}

//uploading photo
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["dp"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["dp"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

/*// Check file size
if ($_FILES["dp"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
*/
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["dp"]["tmp_name"], $target_file)) {
    echo "success";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
//end of file upload
           
$sql = "INSERT INTO tracking (senders_name, receivers_name, receivers_address, receivers_email, receivers_phone, dp, shipping_date, delivery_date, delivery_time, cargo_description, weight, route1, route2, route3, route4, status,trackingid)
VALUES ('$senders_name', '$receivers_name', '$receivers_address', '$receivers_email', '$receivers_phone', '$dp, '$shipping_date', '$delivery_date', '$delivery_time', '$cargo_description', '$weight', '$route1', '$route2', '$route3', '$route4', '$status','$trackingid')";
 

if ($conn->query($sql) === TRUE) {
   
     echo '<script>
    alert("CLIENT REGISTRATION SUCCESSFULL");

</script>
</script> <script>window.location = 

"https://exflologistics.com/index2.php"</script>';

    	
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?> 