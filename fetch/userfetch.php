<?php 

require_once 'config.php';
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);

$user_name = $_GET['username'];


 
$sql = "SELECT*FROM purchasetable WHERE username = '$user_name'";
$data = mysqli_query($con, $sql);
$len = mysqli_num_rows($data);
if($len > 0){
    $i=0;
    while($row = mysqli_fetch_assoc($data)){
        $resAraay[$i]['courseid'] = $row['courseid'];
        $resAraay[$i]['coursename'] = $row['coursename'];
        $i++;
    }
 
    $res =json_encode($resAraay);
    echo $res;
    $i=0;
}


mysqli_close($con);


?>