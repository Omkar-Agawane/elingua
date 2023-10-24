<?php 
$sql = "SELECT * FROM usertable WHERE username='$username'";
$data = mysqli_query($con, $sql);
$len = mysqli_num_rows($data);

if($len > 0){
    while( $row = mysqli_fetch_assoc($data)){
        $name = $row['name'];
        $phone = $row['phone'];
        $email =  $row['email'];

    }
}

mysqli_close($con);

?>



