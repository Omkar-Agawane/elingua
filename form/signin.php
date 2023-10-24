<?php
 $error = "";
require_once 'config.php';
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);

$username = $_POST['username'];
$password = $_POST['password'];

$timeVal = microtime(false);
$timeVal =str_replace(".", "", $timeVal);
$timeVal =str_replace(" ", "", $timeVal);
$Val = $timeVal;

$password = md5($password);

$tkey = md5($Val);
$pkey = $password;
$lkey = md5($pkey.$tkey);



$sql= "SELECT * FROM usertable WHERE username='$username' and password='$password'";

$data = mysqli_query($con,$sql);
$len = mysqli_num_rows($data);


if($len==1){
  while($row = mysqli_fetch_assoc($data)){
    $fname = $row['name'];
    $lname = $row['surname'];
    $phone = $row['phone'];
    $addr = $row['city'];
    $id = $row['userid'];
  }
    //$_SESSION["login"]="$username";
  $resArray = array('fname'=>$fname ,'key1'=>$tkey, 'key2'=> $pkey, 'key3'=> $lkey); 
    $res= json_encode($resArray);
    echo $res;
    //echo "<script> window.location.href = './dashboard.php'</script>";
}
else {  
          $res1 = "err";
          $res= json_encode($res1);
          echo $res;
     }
     
 

?>