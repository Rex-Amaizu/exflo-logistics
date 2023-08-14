<?php
include_once("../Apis/SmsApi.php");
$smsClass = new Name();
$smsClass->sendSMS($phone,"Hello $receiversname, you have a package from '.$shippersname.'. track this package on our site","Inexpress");

?>