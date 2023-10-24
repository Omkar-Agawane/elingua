<?php 
$sql = "SELECT*FROM coursetable WHERE id ='$course_id'";
$data = mysqli_query($con, $sql);
$len = mysqli_num_rows($data);
if($len > 0){
    while($row = mysqli_fetch_assoc($data)){
        $title = $row['title'];
        $details = $row['details'];
        $material_link = $row['material_link'];
        $material = $row['material'];
        $type = $row['type'];
        $image = $row['image'];
    }
    $temp=0;
}



$sql1 = "SELECT*FROM sessiontable WHERE id = '$course_id'";
$data1 = mysqli_query($con, $sql1);
$len1 = mysqli_num_rows($data1);
if($len1 > 0){
    while($row = mysqli_fetch_assoc($data1)){
        $session[] = $row['session'];
        $video_link[] = $row['video_link'];
        $session_time[] = $row['session_time'];
    }
    $temp1 = 0;
}


mysqli_close($con);

?>