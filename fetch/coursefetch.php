<?php
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
     die (mysqli_connect_error . " this is connection error");
}
$sql = "SELECT * FROM coursetable WHERE id='$course_id' ";
$data = mysqli_query($con, $sql);
$len = mysqli_num_rows($data);
if($len >0){
    while($row =mysqli_fetch_assoc($data) ){
        $title = $row['title'];
        $price = $row['price'];
        $description = $row['description'];
        $opted_user = $row['opted_user'];
        $image2 = $row['image2'];
        $tutor = $row['tutor'];
        $image = $row['image'];  
        $details = $row['details']; 

    }
}


 
 $sql2 = "SELECT * FROM commenttable WHERE id='$course_id'";
 $data2 = mysqli_query($con, $sql2);
 $len2 = mysqli_num_rows($data2);
 
 if($len2 > 0){
     while($row = mysqli_fetch_assoc($data2)){
       $name[] = $row['name'];
       $comment[] = $row['comment'];  
     }
 }
 $temp2 = 0;






mysqli_close($con);

?>