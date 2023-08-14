<?php
?>
<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<?php if (isset($_POST["trackingid"])) {
  include('db.php');
$tracking_id = $_POST["trackingid"];
$_SESSION["tracknow"] = $tracking_id;


$sql = "SELECT * FROM tracking WHERE trackingid = '$tracking_id'";
$result = $conn->query($sql);
if ($result->num_rows == 0){
  //<!-- Modal -->
 echo '<div class="modal fade" id="myModalunregister" role="dialog">
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
  </div>';

echo '<script type="text/javascript">';
echo   "$(window).load(function () {
        $('#myModalunregister').modal('show');
    })";
echo '</script>';

}else{

echo '<script type="text/javascript">
           window.location = "https://exflologistics.com/receipt.php"
                 </script>';

}
}
?>


<div class="modal-body">
        <p>
            
            <form action="" method="Post">
                
                <input name="trackingid" placeholder="Enter Tracking ID" required>
                
          
            
        </p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary text-white" type="submit" id="button-addon2">Go</button>
          </form>
      </div>
      
    
  </body>
</html>      