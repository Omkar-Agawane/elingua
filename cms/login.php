<?php
 $error = "";
     
require_once 'config.php';
require 'connect.php';

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



$sql= "SELECT * FROM admintable WHERE username='$username' and password='$password'";

$data = mysqli_query($con,$sql);
$len = mysqli_num_rows($data);



if($len==1){
    //$_SESSION["login"]="$username";
  $resArray = array('key1'=>$tkey, 'key2'=> $pkey, 'key3'=> $lkey); 
    $res= json_encode($resArray);
    echo $res;
    //echo "<script> window.location.href = './dashboard.php'</script>";
}
else {  
          $res = "err";
          $res= json_encode($res);
          echo $res;
     }
     
 

?>