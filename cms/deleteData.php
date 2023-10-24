<?php
require 'config.php';

$id = $_GET['id'];
    
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
    die (mysqli_connect_error . " this is connection error");
}

$sql = "DELETE FROM coursetable WHERE id='$id'";
$sql2 = "DELETE FROM sessiontable WHERE id='$id'";
$sql3 = "DELETE FROM purchasetable WHERE courseid = '$id'";

if(mysqli_query($con, $sql) && mysqli_query($con, $sql2)) {
  mysqli_query($con,$sql3);
  echo "Record deleted successfully";

} else {
  echo "Error deleting record: " . mysqli_error($con);
}





mysqli_close($con);

//$appRes = array('msg'=> 'delete success');
$appRes = "Success";



$myJSON = json_encode($appRes);

echo $myJSON;



?>
