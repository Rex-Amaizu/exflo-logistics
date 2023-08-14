<?php
include('../db.php');
$phone = $_POST['CPhone'];
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
$smsreceiver = $_POST["smsreceiver"];
$smssender = $_POST["smssender"];
$trackingid = $_POST['trackingid'];
//include_once("../Apis/SmsApi.php");
// $smsClass = new Name();
// $smsClass->sendSMS($phone,"Hello $receiversname, you have a package from '.$shippersname.'. track this package on our site","Inexpress");
$status = '0';
$a = $_POST['a'];
date_default_timezone_set('UTC');
$date = date('d-m-Y H:m:s');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 	trackingid FROM tracking WHERE 	trackingid='$trackingid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<script>

    alert("Tracking ID EXISTS TRY ANOTHER ONE");

</script>
</script> <script>window.location = 

"https://firstbirdlogistics.com"</script>';
exit();
    }
}else { 
    
 //upload image
$target_dir = "uploads/";
$dpi = "http://track.firstbirdlogistics.com/register/uploads/";
$newname = rename($_FILES["fileToUpload"]["name"], $_POST['trackingid']);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$dpshow = $dpi. $trackingid;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       $uploadOk = 1;
              echo '<script>
    alert("File is an image - " . $check["mime"] . ".");

</script>
</script> <script>window.location = 

"http://track.firstbirdlogistics.com/register"</script>';
exit();
    } else {
       $uploadOk = 0;
        echo '<script>
    alert("File is not an image....");

</script>
</script> <script>window.location = 

"http://track.firstbirdlogistics.com/register"</script>';
exit();
    }
}
// Check if file already exists
if (file_exists($target_file)) {
   
   echo '<script>
    alert("Sorry, your image already exists...");

</script>
</script> <script>window.location = 

"http://track.firstbirdlogistics.com/register"<in/script>';
exit();
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  
  echo '<script>
    alert("Sorry, your image is too large..");

</script>
</script> <script>window.location = 

"http://track.firstbirdlogistics.com/register"</script>';
exit();
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 
         echo '<script>
    alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");

</script>
</script> <script>window.location = 

"http://track.firstbirdlogistics.com/register"</script>';
exit();
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  
      echo '<script>
    alert("Sorry, your image was not uploaded..");

</script>
</script> <script>window.location = 

"http://track.firstbirdlogistics.com/register"</script>';
exit();
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"uploads/" . $trackingid."."."jpg")) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        
            
    
$sql = "INSERT INTO tracking (shipdate, shippersname, shippersaddress, deliverydate, receiversname, receiversaddress, weight, address1, address2, address3, address4, trackingid, a, status,smssender,smsreceiver,dp,clientphone)
VALUES ('$shipdate', '$shippersname', '$shippersaddress', '$deliverydate', '$receiversname', '$receiversaddress', '$weight', '$address1', '$address2', '$address3', '$address4', '$trackingid', '$a', '$status','$smssender','$smsreceiver','$dpshow',$phone)";
  // send sms.
 // Account details
    // 	$apiKey = urlencode('Px74TYkN/n4-UuLClOY7GJfVDkZ0ftnAL41eL8KrRu');
    // 	$customised="Good day,$receiversname.your package is being processed.Thank you for Choosing dtodlogistics";
    // 	// Message details
    // 	$numbers = array($phone);
    // 	$sender = urlencode('Desire');
    // 	$message = rawurlencode($customised);
     
    // 	$numbers = implode(',', $numbers);
     
    // 	// Prepare data for POST request
    // 	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    // 	// Send the POST request with cURL
    // 	$ch = curl_init('https://api.txtlocal.com/send/');
    // 	curl_setopt($ch, CURLOPT_POST, true);
    // 	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    // 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // 	$response = curl_exec($ch);
    // 	curl_close($ch);

if ($conn->query($sql) === TRUE) {
   
     echo '<script>
    alert("CLIENT REGISTRATION SUCCESSFULL");

</script>
</script> <script>window.location = 

"http://firstbirdlogistics.com"</script>';
// class SmaApi
// {
// public function send($from,$subject,$message,$to){
    header("Access-Control-Allow-Origin: *");
    // public $name;
    // public function showName()
    // {
    //     /**
    //     Put your database code here to extract from database.
    //     **/
    //     return($this->name);
    // }
    // public function enterName($TName)
    // {
    //     $this->name = $TName;
    //     /**
    //     Put your database code here.
    //     **/
    // }

//allow remote access to this script, replace the * to your domain e.g http://www.example.com if you wish to recieve requests only from your server

//rebuild form data
$postdata = http_build_query(

    array(
        'username' => isset($_POST["smsusername"])? $_POST["smsusername"]: $_GET["smsusername"],
        'password' => isset($_POST["smspassword"])?$_POST["smspassword"]: $_GET["smspassword"],
  'message' => "".$_POST["smsreceiver"].", we recieved a package for you from ".$_POST["smssender"]."",
  'mobiles' => isset($_POST["CPhone"])?$_POST["CPhone"]: $_GET["CPhone"],
  'sender' => isset($_POST["smstitle"])?$_POST["smstitle"]: $_GET["smstitle"],
    )
);
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

$postdata = http_build_query(

    array(
        'username' => isset($_POST["smsusername"])? $_POST["smsusername"]: $_GET["smsusername"],
        'password' => isset($_POST["smspassword"])?$_POST["smspassword"]: $_GET["smspassword"],
  'message' => "Hi ".$_POST["smsreceiver"]." you can now track your package on firstbirdlogistics.com with the ID ".$_POST['trackingid']."",
  'mobiles' => isset($_POST["CPhone"])?$_POST["CPhone"]: $_GET["CPhone"],
  'sender' => isset($_POST["smstitle"])?$_POST["smstitle"]: $_GET["smstitle"],
    )
);
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

// }

// }
    	
    	// Process your response here
    echo '<script>
    alert("CLIENT REGISTRATION SUCCESSFULL");

</script>
</script> <script>window.location = 

"http://firstbirdlogistics.com"</script>';
exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






    } else {
        echo '<script>
    alert("Sorry, there was an error uploading your file.");

</script>
</script> <script>window.location = 

"http://track.firstbirdlogistics.com/register"</script>';
exit();
    }
}
 //upload image ends
    

}
$conn->close();
?> 