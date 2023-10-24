<?php        
require './config.php';
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
    die (mysqli_connect_error . " this is connection error");
}


$notification_message = $_REQUEST['notification'];

$sql = "UPDATE `notificationtable` SET `notification`='$notification_message' WHERE 1";
if (mysqli_query($con, $sql)) {
 echo "<script>
             alert('submitted'); 
          
             
     </script>";  
}
mysqli_close($con);

?>

<script>
    window.location.href = "<?php echo WEBSITE?>/cms/notification.php";


</script>