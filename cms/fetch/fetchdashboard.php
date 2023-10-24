<?php
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
     die (mysqli_connect_error . " this is connection error");
}



$sql = "SELECT * FROM coursetable";
$data = mysqli_query($con, $sql);
$len = mysqli_num_rows($data);



 
 $sql2 = "SELECT * FROM purchasetable";
 $data2 = mysqli_query($con, $sql2);
 $len2 = mysqli_num_rows($data2);
 
 if($len2 > 0){
     while($row = mysqli_fetch_assoc($data2)){
       $val[] = $row['value'];
     }
 }
 $sum=0;
 $i=0;
while($i< $len2){
    $sum =  $sum + $val[$i];    
    $i++;
}
 

$sql3 = "SELECT * FROM usertable";
$data3 = mysqli_query($con, $sql3);
$len3 = mysqli_num_rows($data3);




mysqli_close($con);

?>