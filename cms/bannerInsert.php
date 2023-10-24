<?php        
require './config.php';
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
    die (mysqli_connect_error . " this is connection error");
}


$eventName = $_REQUEST['eventname'];
$eventDetails = $_REQUEST['eventdetails'];
$eventLink = $_REQUEST['eventlink'];
$sql = "INSERT INTO bannertable (`no` , `eventname` , `eventdetails` , `eventlink` ) VALUE (NULL, '$eventName' , '$eventDetails' , '$eventLink')";

if (mysqli_query($con, $sql)) {
 echo "<script>alert('Submitted');</script>"; 
 echo "<script>window.location.href = './banner.php';</script> ";
}
else{ 
echo "<script>alert('Connection error'); </script>";
echo "<script>window.location.href = './banner.php';</script> ";
}
    mysqli_close($con);
?>
