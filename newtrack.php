<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Exflo | Track</title>
    <link href="images/merg.png" rel="shortcut icon" style="font-size: 50px;">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
fieldset
{
  background-color: #ffffff;
  max-width: 1200px;
  padding:16px;	
  margin: auto;
  position: absolute;
 
}

.legend1
{
  margin-bottom:0px;
  margin-left:16px;
}

h1
{
background-color: #ffffff;
margin: 0px;
}

body
{

	background-color: #e6e6e6;
}

hr.new1 {
  border: 1px solid white;
}

hr.new2 {
  border: 1px solid #ccc;
}


.route-all {
    display: flex;
    flex-direction: row;
    gap: 15px;
    background: white;
    border-radius: 6px;
    width: auto;
    a{
        color: white;
    }
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
<a href="https://welfexcourier.com/"><img src="images/logosite.png" alt="" width="250" height="60"></a>
	<div class="col-xs-6" style="padding-top: 20px; float: right !important; text-align: right;">
<!--<style type="text/css">
                        #yt-widget {
                            z-index: 99999;
                        }
                        #yt-widget .yt-listbox__col {
                            display: block !important; /* display: inline-block; */
                            list-style: none;
                            vertical-align: top;
                            /**/
                            max-width: 90% !important;
                        }
                        .yt-listbox {
                            min-width: 200px !important;
                            max-width: 500px !important;
                            max-height: 500px !important;
                            padding: 10px 10px !important;
                            overflow: auto !important;
                        }
                        #yt-widget.yt-state_bottom .yt-listbox {
                            bottom: unset !important;
                        }
                        .yt-listbox li {
                            display: block !important; 
                        }
                        .yt-servicelink {
                            display: none !important;
                        }
                    </style>
<div id="ytWidget">

<style>
    @-webkit-keyframes yt-spin {
        0% {
            -webkit-transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @-moz-keyframes yt-spin {
        0% {
            -moz-transform: rotate(0deg);
        }
        100% {
            -moz-transform: rotate(360deg);
        }
    }

    @-o-keyframes yt-spin {
        0% {
            -o-transform: rotate(0deg);
        }
        100% {
            -o-transform: rotate(360deg);
        }
    }

    @keyframes yt-spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    #yt-widget,
    #yt-widget * {
        clip: auto;
        font: 14px Arial, Helvetica, sans-serif;
        float: none;
        width: auto;
        color: #222;
        height: auto;
        margin: 0;
        border: 0;
        opacity: 1;
        z-index: auto;
        padding: 0;
        outline: 0;
        position: static;
        overflow: visible;
        direction: ltr;
        box-shadow: none;
        text-align: left;
        background: none;
        visibility: visible;
        text-indent: 0;
        text-shadow: none;
    	word-spacing: normal;
        border-radius: 0;
        text-transform: none;
        letter-spacing: normal;
        vertical-align: baseline;
        text-decoration: none;

        -webkit-transform: none;
           -moz-transform: none;
            -ms-transform: none;
             -o-transform: none;
                transform: none;

        -webkit-transition: none;
           -moz-transition: none;
             -o-transition: none;
                transition: none;

        -webkit-box-sizing: content-box;
           -moz-box-sizing: content-box;
                box-sizing: content-box;
    }

    #yt-widget:after,
    #yt-widget:before,
    #yt-widget *:after,
    #yt-widget *:before {
        display: none;
    }

    #yt-widget {
        display: inline-block;
        white-space: nowrap;

        -webkit-user-select: none;
           -moz-user-select: none;
                user-select: none;

        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    #yt-widget.yt-state_mobile * {
        font-size: 16px;
    }

    #yt-widget .yt-button {
        height: 34px;
        cursor: pointer;
        border: 1px solid #d5d5d5;
        padding: 0 8px;
        display: inline-block;
        position: relative;
        background: #fff;
        line-height: 34px;
        border-radius: 3px;
        vertical-align: middle;
    }

    #yt-widget .yt-button:active {
        background: #f6f5f3;
    }

    #yt-widget .yt-button_type_left {
        padding: 0 8px 0 36px;
        border-radius: 3px 0 0 3px;
    }

    #yt-widget .yt-button_type_right {
        padding: 0 34px 0 8px;
        margin-left: -1px;
        border-radius: 0 3px 3px 0;
    }

    #yt-widget .yt-button_type_close {
        top: 5px;
        right: 5px;
        width: 34px;
        border: none;
        display: none;
        padding: 0;
        position: fixed;
    }

    #yt-widget.yt-state_mobile .yt-button_type_close {
        display: block;
    }

    #yt-widget .yt-button__icon {
        top: 0;
        width: 34px;
        height: 34px;
        display: block;
        position: absolute;
        background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiBmaWxsPSJub25lIiB3aWR0aD0iMTcwIiBoZWlnaHQ9IjY4IiBzdHJva2U9IiNmZmYiPjxkZWZzPjxzeW1ib2wgaWQ9ImEiPjxwYXRoIGQ9Ik0xMSAxNGw2IDYgNi02Ii8+PC9zeW1ib2w+PHN5bWJvbCBpZD0iYyI+PHBhdGggZD0iTTkgMTUuNWw2IDYgMTAtMTAiLz48L3N5bWJvbD48c3ltYm9sIGlkPSJiIj48cGF0aCBkPSJNMTAgMTBsMTQgMTRtMC0xNEwxMCAyNCIvPjwvc3ltYm9sPjxzeW1ib2wgaWQ9ImQiPjxjaXJjbGUgY3g9IjE3IiBjeT0iMTciIHI9IjciLz48cGF0aCBkPSJNMTcgMTN2NW0wIDN2LTIiLz48L3N5bWJvbD48L2RlZnM+PGcgZmlsbD0iI2ZmZiIgc3Ryb2tlPSJub25lIj48Y2lyY2xlIGN4PSIyMS4xMjUiIGN5PSIxMi44NzUiIHI9IjcuODc1IiBmaWxsPSIjMzgzODM4Ii8+PHBhdGggZD0iTTIxLjE4NSAxNS4yMzNjLS4yODctLjU5LS41NjYtMS4zMS0uNzc3LTIuMTU4LjY0Ny0uMjYzIDEuMzEzLS40MDMgMS45My0uNDAzLjE0IDAgLjI4LjAwNy40MTQuMDItLjI1OC43MS0uNjY3IDEuNTA0LTEuMzEzIDIuMjY3LS4wOS4wOS0uMTcuMTgtLjI2LjI3em0tMy4xNjguOWMtLjI4Ni0uNjcuMzM0LTEuNzYzIDEuMzQ0LTIuNDkyLjI2LjkzLjU4IDEuNzIuOTEgMi4zNi0uNjIuNDEtMS4yNS42My0xLjcyLjU1LS4yNi0uMDQtLjQyLS4xNi0uNTMtLjQxem02LjMyNC01LjUwNGgtMS4xNWMtLjAxLjIxLS4wNC41My0uMTEuOTMtLjktLjE0LTEuOTItLjAxLTIuODkuMzUtLjExLS42NS0uMTctMS4yNi0uMjEtMS43OSAzLjQ3LS4yIDUuNTItMS4wNSA1LjYxLTEuMDlsLS40NC0xLjA4Yy0uMDIuMDEtMS45Ni44LTUuMjEuOTktLjAwNS0uODEuMDUtMS4zLjA1LTEuMzJoLTEuMTdjLS4wMi4yMi0uMDUyLjctLjA1IDEuMzZoLS4xMDRjLTEuMDM1IDAtMi0uMDgtMi4yMjYtLjF2MS4xN2MuMzQuMDMgMS4xNjIuMDkzIDIuMDk3LjA5M2guMjg1Yy4wNDUuNjY0LjEzIDEuNDMuMjg2IDIuMjYtMS41NC45Mi0yLjc1NiAyLjcxLTIuMTM1IDQuMTY1LjI2LjYxLjc2NyAxLjAwMiAxLjQyIDEuMTAyLjExLjAxNS4yMjMuMDIzLjM0LjAyMy42NiAwIDEuNDE4LS4yNyAyLjE0LS43My40Ny43MS44NSAxLjA4Ny44OSAxLjEybC43OS0uODVjLS4wMS0uMDA1LS4zNDYtLjMzNS0uNzctLjk4My4xOS0uMTc2LjM3NC0uMzYuNTQ0LS41Ni43Ny0uOTA4IDEuMjQ4LTEuODUgMS41NDYtMi42OS4yNi4xNTIuNTIuMzguNjUyLjcyLjQ2IDEuMTYtLjIwMyAyLjUtLjgzIDMuMDgzbC43OS44NTRjMS4wMzUtLjk3IDEuNzUtMi43OCAxLjExNS00LjM3NS0uMjUtLjYzLS43My0xLjEyLTEuNDAzLTEuNDMuMTEtLjU0LjE0Ni0uOTcuMTYtMS4yNnoiLz48Y2lyY2xlIGN4PSIxMi44NzUiIGN5PSIyMS4xMjUiIHI9IjcuODc1IiBmaWxsPSJyZWQiLz48cGF0aCBkPSJNMTQuMzEgMjEuNTk1aC0yLjg3bDEuNDM1LTMuNjd6bS0uODE1LTUuNjAyaC0xLjI0TDguNCAyNS4zNjNoMS41NzdsLjk0OC0yLjQ5M2gzLjlsLjk0OCAyLjQ5M2gxLjU3N3oiLz48L2c+PGcgb3BhY2l0eT0iLjUiPjx1c2UgeGxpbms6aHJlZj0iI2EiIHg9IjM0IiBzdHJva2U9IiMwMDAiLz48dXNlIHhsaW5rOmhyZWY9IiNhIiB4PSIzNCIgeT0iMzQiLz48dXNlIHhsaW5rOmhyZWY9IiNiIiB4PSI2OCIgc3Ryb2tlPSIjMDAwIi8+PHVzZSB4bGluazpocmVmPSIjYiIgeD0iNjgiIHk9IjM0Ii8+PC9nPjxnIHN0cm9rZS13aWR0aD0iMiI+PHVzZSB4bGluazpocmVmPSIjYyIgeD0iMTAyIiBzdHJva2U9IiNmYzAiLz48dXNlIHhsaW5rOmhyZWY9IiNjIiB4PSIxMDIiIHk9IjM0Ii8+PHVzZSB4bGluazpocmVmPSIjZCIgeD0iMTM2IiBzdHJva2U9IiNmZjczNzMiLz48dXNlIHhsaW5rOmhyZWY9IiNkIiB4PSIxMzYiIHk9IjM0Ii8+PC9nPjwvc3ZnPgo=") no-repeat;
    }

    #yt-widget .yt-button__icon_type_left {
        left: 0;
    }

    #yt-widget .yt-button__icon_type_right {
        right: 0;
        background-position: -34px 0;
    }

    #yt-widget .yt-button_type_close > .yt-button__icon {
        background-position: -68px 0;
    }

    #yt-widget.yt-state_busy .yt-button__icon_type_left {
        background: none;
    }

    #yt-widget.yt-state_busy .yt-button__icon_type_left:after {
        top: 50%;
        left: 50%;
        clip: rect(auto, auto, 8px, auto);
        color: #fc0;
        width: 16px;
        height: 16px;
        margin: -8px 0 0 -8px;
        content: "";
        display: block;
        position: absolute;
        box-shadow: 0 0 0 2px inset;
        border-radius: 50%;

        -webkit-animation: yt-spin 0.8s infinite linear;
           -moz-animation: yt-spin 0.8s infinite linear;
             -o-animation: yt-spin 0.8s infinite linear;
                animation: yt-spin 0.8s infinite linear;
    }

    #yt-widget.yt-state_done .yt-button__icon_type_left {
        background-position: -102px 0;
    }

    #yt-widget.yt-state_error .yt-button__icon_type_left {
        background-position: -136px 0;
    }

    #yt-widget.yt-state_active .yt-button__icon_type_right {
        background-position: -68px 0;
    }

    #yt-widget.yt-state_invalid .yt-button_type_left * {
        opacity: 0.4;
    }

    #yt-widget.yt-state_expanded .yt-button_type_right {
        background-color: #f6f5f3;
    }

    #yt-widget .yt-button_type_right > .yt-button__text {
        text-transform: uppercase;
    }

    #yt-widget .yt-wrapper {
        position: relative;
    }

    #yt-widget .yt-wrapper_align_right {
        text-align: right;
        margin-top: 3px;
    }

    #yt-widget .yt-listbox {
        border: 1px solid #d5d5d5;
        z-index: 999999;
        position: absolute;
        margin-top: 5px;
        background: #fff;
        box-shadow: 0 10px 20px -4px rgba(0, 0, 0, 0.1);
    }

    #yt-widget .yt-listbox[hidden] {
        display: none;
    }

    #yt-widget.yt-state_right .yt-listbox {
        right: 0;
    }

    #yt-widget.yt-state_bottom .yt-listbox {
        bottom: 100%;
        margin: 0 0 5px;
    }

    #yt-widget.yt-state_mobile .yt-listbox {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: 0;
        border: none;
        position: fixed;
        overflow-y: auto;
        box-shadow: none;

        -webkit-overflow-scrolling: touch;
    }

    #yt-widget .yt-listbox__col {
        display: inline-block;
        list-style: none;
        vertical-align: top;
    }

    #yt-widget.yt-state_mobile .yt-listbox__col {
        display: block;
    }

    #yt-widget .yt-listbox__text,
    #yt-widget .yt-listbox__label {
        display: block;
    }

    #yt-widget .yt-listbox__text {
        cursor: pointer;
        padding: 0 8px;
        line-height: 34px;
    }

    #yt-widget.yt-state_mobile .yt-listbox__text {
        line-height: 44px;
    }

    #yt-widget .yt-listbox__input {
        position: absolute;
        visibility: hidden;
    }

    #yt-widget .yt-listbox__input:checked ~ .yt-listbox__text {
        font-weight: bold;
        background-color: #f6f5f3;
    }

    #yt-widget .yt-listbox__text:hover,
    #yt-widget .yt-listbox__input:checked ~ .yt-listbox__text:hover {
        background-color: #ffeba0;
    }

    #yt-widget .yt-servicelink {
        color: #000;
        display: inline-block;
        font-size: 12px;
    }

    #yt-widget.yt-state_mobile .yt-servicelink {
        font-size: 14px;
    }

    #yt-widget .yt-servicelink:hover,
    #yt-widget .yt-servicelink:first-letter {
        color: #f00;
    }

    /* Dark theme */

    #yt-widget[data-theme="dark"],
    #yt-widget[data-theme="dark"] * {
        color: #fff;
    }

    #yt-widget[data-theme="dark"] .yt-button,
    #yt-widget[data-theme="dark"] .yt-listbox {
        border-color: #999;
        background-color: #777;
    }

    #yt-widget[data-theme="dark"] .yt-servicelink,
    #yt-widget[data-theme="dark"] .yt-servicelink:first-letter {
        color: rgba(255, 255, 255, 0.5);
    }

    #yt-widget[data-theme="dark"] .yt-servicelink:hover,
    #yt-widget[data-theme="dark"] .yt-servicelink:hover:first-letter {
        color: #fff;
    }

    #yt-widget[data-theme="dark"] .yt-button:active,
    #yt-widget[data-theme="dark"] .yt-listbox__text:hover,
    #yt-widget[data-theme="dark"].yt-state_expanded .yt-button_type_right,
    #yt-widget[data-theme="dark"] .yt-listbox__input:checked ~ .yt-listbox__text {
        background-color: #656565;
    }

    #yt-widget[data-theme="dark"] .yt-button__icon_type_right {
        background-position: -34px -34px;
    }

    #yt-widget[data-theme="dark"].yt-state_busy .yt-button__icon_type_left:after {
        color: #fff;
    }

    #yt-widget[data-theme="dark"].yt-state_done .yt-button__icon_type_left {
        background-position: -102px -34px;
    }

    #yt-widget[data-theme="dark"].yt-state_error .yt-button__icon_type_left {
        background-position: -136px -34px;
    }

    #yt-widget[data-theme="dark"].yt-state_active .yt-button__icon_type_right,
    #yt-widget[data-theme="dark"].yt-state_mobile .yt-button_type_close > .yt-button__icon {
        background-position: -68px -34px;
    }
</style>
<div id="yt-widget" class="yt-widget yt-state_invalid" tabindex="-1" translate="no" data-theme="light">
    <div class="yt-wrapper" unselectable="on">
        <span class="yt-button yt-button_type_left" unselectable="on">
            <span class="yt-button__icon yt-button__icon_type_left" unselectable="on"></span>
            <span class="yt-button__text" unselectable="on">Translate</span>
        </span><span class="yt-button yt-button_type_right" unselectable="on">
            <span class="yt-button__text" unselectable="on">en</span>
            <span class="yt-button__icon yt-button__icon_type_right" unselectable="on"></span>
        </span>
        <form class="yt-listbox" unselectable="on" hidden="">
            <span class="yt-button yt-button_type_close"><span class="yt-button__icon"></span></span>
            <ul class="yt-listbox__col" unselectable="on">
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="af" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Afrikaans</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="sq" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Albanian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="am" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Amharic</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ar" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Arabic</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="hy" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Armenian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="az" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Azerbaijani</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ba" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Bashkir</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="eu" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Basque</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="be" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Belarusian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="bn" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Bengali</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="bs" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Bosnian</span></label></li>
                    
                
                    
                    
                        </ul><ul class="yt-listbox__col" unselectable="on">
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="bg" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Bulgarian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="my" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Burmese</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ca" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Catalan</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ceb" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Cebuano</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="zh" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Chinese</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="cv" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Chuvash</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="hr" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Croatian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="cs" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Czech</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="da" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Danish</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="nl" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Dutch</span></label></li>
                    
                
                    
                
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="en" class="yt-listbox__input" checked="checked"><span class="yt-listbox__text" unselectable="on">English</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="eo" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Esperanto</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="et" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Estonian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="fi" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Finnish</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="fr" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">French</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="gl" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Galician</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ka" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Georgian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="de" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">German</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="el" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Greek</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="gu" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Gujarati</span></label></li>
                    
                
                    
                    
                        </ul><ul class="yt-listbox__col" unselectable="on">
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ht" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Haitian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="he" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Hebrew</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="mrj" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Hill Mari</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="hi" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Hindi</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="hu" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Hungarian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="is" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Icelandic</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="id" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Indonesian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ga" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Irish</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="it" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Italian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ja" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Japanese</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="jv" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Javanese</span></label></li>
                    
                
                    
                    
                        </ul><ul class="yt-listbox__col" unselectable="on">
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="kn" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Kannada</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="kk" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Kazakh</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="kazlat" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Kazakh (Latin)</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="km" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Khmer</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ko" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Korean</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ky" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Kyrgyz</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="lo" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Lao</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="la" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Latin</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="lv" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Latvian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="lt" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Lithuanian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="lb" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Luxembourgish</span></label></li>
                    
                
                    
                    
                        </ul><ul class="yt-listbox__col" unselectable="on">
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="mk" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Macedonian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="mg" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Malagasy</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ms" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Malay</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ml" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Malayalam</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="mt" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Maltese</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="mi" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Maori</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="mr" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Marathi</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="mhr" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Mari</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="mn" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Mongolian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ne" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Nepali</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="no" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Norwegian</span></label></li>
                    
                
                    
                    
                        </ul><ul class="yt-listbox__col" unselectable="on">
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="pap" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Papiamento</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="fa" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Persian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="pl" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Polish</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="pt" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Portuguese</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="pa" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Punjabi</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ro" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Romanian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ru" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Russian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="gd" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Scottish Gaelic</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="sr" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Serbian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="si" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Sinhalese</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="sk" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Slovak</span></label></li>
                    
                
                    
                    
                        </ul><ul class="yt-listbox__col" unselectable="on">
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="sl" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Slovenian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="es" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Spanish</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="su" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Sundanese</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="sw" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Swahili</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="sv" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Swedish</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="tl" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Tagalog</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="tg" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Tajik</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ta" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Tamil</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="tt" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Tatar</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="te" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Telugu</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="th" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Thai</span></label></li>
                    
                
                    
                    
                        </ul><ul class="yt-listbox__col" unselectable="on">
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="tr" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Turkish</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="udm" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Udmurt</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="uk" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Ukrainian</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="ur" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Urdu</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="uz" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Uzbek</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="uzbcyr" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Uzbek (Cyrillic)</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="vi" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Vietnamese</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="cy" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Welsh</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="xh" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Xhosa</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="sah" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Yakut</span></label></li>
                    
                
                    
                    
                    <li class="yt-listbox__cell" unselectable="on"><label class="yt-listbox__label" unselectable="on"><input type="radio" name="yt-lang" value="yi" class="yt-listbox__input"><span class="yt-listbox__text" unselectable="on">Yiddish</span></label></li>
                    
                
            </ul>
        </form>-->
         <div id="google_translate_element"></div>
        <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
    
</div>

</div>
</div>
</div>
</div>
</div>

<hr class="new2">
</h1>

<fieldset>
	<div class="legend1"> Shipping result summary for tracking number: <b><?php echo $newtrack;?></b> 
	<div align="right"><img src=<?php echo "\"register/".$dpstring."\""; ?> width="50px" height="50px" class="img-circle" alt=""></div>
	</div>
	<hr>
<div class="jumbotron text-center">   
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    	Tracking Number
      <p><b><small><?php echo $newtrack;?></small></b></p>
    </div>
    <div class="col-sm-4">
    	Origin/Departure
      <p><b><small><?php echo $route1;?></small></b></p>
    </div>
    <div class="col-sm-4">
    	Destination     
      <p><b><small><?php echo $route4;?></small></b></p>
    </div>
  </div>
<hr class="new1">
  <div class="row">
    <div class="col-sm-4">
    	Sender
      <p><b><small><?php echo $senders_name;?></small></b></p>
    </div>
    <div class="col-sm-4">
    	Status
      <p><b><small><?php echo $package_status; ?></small></b></p>
    </div>
    <div class="col-sm-4">
    	Receiver      
      <p><b><small><?php echo $receivers_name;?></small></b></p>
    </div>
  </div>
<hr class="new1">
<div class="row">
    <div class="col-sm-4">
    	Receiver's Number
      <p><b><small><?php echo $receivers_phone;?></small></b></p>
    </div>
    <div class="col-sm-4">
    	Receiver's Email
      <p><b><small><?php echo $receivers_email;?></small></b></p>
    </div>
    <div class="col-sm-4">
    	Receiver's Address     
      <p><b><small><?php echo $receivers_address;?></small></b></p>
    </div>
  </div>
<hr class="new1">
  <div class="row">
    <div class="col-sm-4">
    	Description
      <p><b><small><?php echo $cargo_description;?></small></b></p>
    </div>
    <div class="col-sm-4">
    	Departure Date
      <p><b><small><?php echo $shipping_date;?></small></b></p>
    </div>
    <div class="col-sm-4">
    	Arrival Date   
      <p><b><small><?php echo $delivery_date;?></small></b></p>
    </div>
  </div>
</div>
</div>
<hr>

<div class="text-center">
<h5 style="">
This shipment is expected to be delivered in 
<span style="font-size: 19px; color: red;" id="countdown-time">
<i class="fa fa-clock-o"></i><span>0<?php echo $remaining_days; ?></span><small class="text-muted"> days</small>
</span> depending on <b>Current Status</b>.
</h5>

<div class="text-center1">
<h3>Shipment Travel History / Delivery Progress </h3>
</div> 
<div class="route-all">
    <marquee direction="right" height="20px">
    <div class="route-all">
    <font color=<?php echo $route1_color;?> size="3"><strong><?php echo $route1;?></strong></font> >>>>>> <font color=<?php echo $route2_color;?> size="3"><?php echo $route2;?></strong></font> >>>>>> <font color=<?php echo $route3_color;?> size="3"><?php echo $route3;?></strong></font> >>>>>> <font color=<?php echo $route4_color;?> size="3"><?php echo $route4;?></strong></font>
    </div>
        </marquee>
</div>
<hr>
</div>

<div class="row0">
<div class="col-md-9 col-md-offset-3">
<style type="text/css">
										/* history
										-------------------------------------------------------------- */
										.history {
											margin: 0;
											padding: 0;
											list-style: none;
											margin-bottom: 50px;
										}
										.history li {
											position: relative;
											display: inline-block;
											width: 100%;
											margin-bottom: 50px;
											padding-left: 50px;
										}
										.history li:last-child {
											margin-bottom: 0;
										}
										.history li:last-child:before {
											display: none;
										}
										.history li:after {
											content: "";
											width: 15px;
											height: 15px;
											position: absolute;
											border: 2px solid #6EBE4F;
											left: 0;
											top: 3px;
											-webkit-border-radius: 100%;
											   -moz-border-radius: 100%;
												-ms-border-radius: 100%;
												 -o-border-radius: 100%;
													border-radius: 100%;
										}
										.history li:before {
											width: 1px;
											content: "";
											position: absolute;
											left: 7px;
											top: 23px;
											bottom: -48px;
											background: rgba(0, 0, 0, 0.1);
										}
										.history li .title {
											margin: 0 0 15px 0;
											font-size: 20px;
	
										}
										.history li .year {
											margin-right: 15px;
											color: #fff;
											text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
											padding: 2px 15px 0 15px;
											background-color: #6EBE4F;
											position: relative;
										}
										.history li .year:after {
											content: "";
											position: absolute;
											width: 14px;
											height: 14px;
											left: -7px;
											top: 50%;
											background-color: #6EBE4F;
											margin-top: -7px;
											-webkit-transform: rotate(-45deg);
												-ms-transform: rotate(-45deg);
													transform: rotate(-45deg);
										}
										.history li:last-child .year:after,
										.history li:last-child .year {
											background-color: #6EBE4F;
										}
										.history li:last-child:after {
											background-color: #fff;
										}
										.history li:first-child:after {
											background-color: #6EBE4F;	
											
											/** Below for Image Icon, remove below block to disable it */
																						
											width: 0px;
											height: 0px;
											border: none;
											left: -18px;
											top: -5px;
											content: url(images/tracking_transit.png);
											
										}
										/* History style1 */
										.history.style1 {
											padding-bottom: 50px;
											margin-bottom: 50px;
											border-bottom: 1px solid #EBEBEB;
										}
									</style>
<ul class="history">
<li>
<h4 class="title"><?php echo $route1;?>.</h4>
<strong><?php echo $route1_date; ?></strong><br>
<p><?php echo $route1_text; ?></p>
</li>
<li>
<h4 class="title"><?php echo $route2;?>.</h4>
<strong><?php echo $route2_date; ?></strong><br>
<p><?php echo $route2_text; ?></p>
</li>
<li>
<h4 class="title"><?php echo $route3;?>.</h4>
<strong><?php echo $route3_date; ?></strong><br>
<p><?php echo $route3_text; ?></p>
</li>
<li>
<h4 class="title"><?php echo $route4;?>.</h4>
<strong><?php echo $route4_date; ?></strong><br>
<p><?php echo $route4_text; ?></p>
</li>
</ul>
</div>
</div>
<br>
</div>

<div class="col-12 mb-2 mt-2" align="center">
	<a a href="index2.php" class="btn btn-success btn-lg">Track Another Shipment</a>
<a type="print" class="btn btn-danger btn-lg" track="4410615823" onclick="window.print()">Print</a> 
</div>


</div>
<hr>
</fieldset>
        
        <script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>