<?php


$tkey =$_REQUEST['k1'];
$pkey =$_REQUEST['k2'];


$lkey = md5($pkey.$tkey);


$res= json_encode($lkey);
echo $res;
     
 

?>