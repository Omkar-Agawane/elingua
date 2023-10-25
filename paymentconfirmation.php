<?php  

require './fetch/config.php';
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
if(!$con){
    die (mysqli_connect_error . " this is connection error");
}

$payment_id = $_REQUEST['payment'];
$username = $_REQUEST['username'];
$courseid = $_REQUEST['courseid'];
$coursename = $_REQUEST['coursename'];
$amt = $_REQUEST['amt'];
$opted_user = $_REQUEST['opted'];
$opted = $opted_user+1;

$sql = "INSERT INTO purchasetable(`no`,`username`,`courseid`,`coursename`,`paymentid`,`value`) VALUES(NULL,'$username','$courseid','$coursename','$payment_id','$amt')";
$sql1 = "UPDATE `coursetable` SET `opted_user`=$opted WHERE id='$courseid'";
 

mysqli_query($con, $sql);
mysqli_query($con, $sql1);


mysqli_close($con);



?>