<?php   
    $con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
    if(!$con){
        die (mysqli_connect_error . " this is connection error");
    }
    $sql = "SELECT * FROM coursetable WHERE id='$id'";
    $data = mysqli_query($con, $sql);
    $len = mysqli_num_rows($data);
    
    if($len > 0){
        while($row = mysqli_fetch_assoc($data)){
            $id = $row['id'];
            $title = $row['title'];
            $syllabus = $row['description'];
            $category = $row['category'];
            $type = $row['type'];
            $material_link =  $row['material_link'];
            $material =   $row['material'];
            $details = $row['details'];
            $price  =  $row['price'];
            $image  =  $row['image'];
            $image2  =  $row['image2'];
            $tutor  =  $row['tutor'];
           
          
        }
    }
    
    $sql = "SELECT * FROM categorytable";
    $data = mysqli_query($con, $sql);
    $len2 = mysqli_num_rows($data);
    if($len2 > 0){
        while($row = mysqli_fetch_assoc($data)){
            $cat_all[] =$row['category'];
            
          
        }
    }
    $sql = "SELECT * FROM sessiontable WHERE id='$id'";
    $data = mysqli_query($con, $sql);
    $len2 = mysqli_num_rows($data);
    if($len2 > 0){
        while($row = mysqli_fetch_assoc($data)){
            $session[] =$row['session'];
            $duration[] = $row['session_time'];
            $link[] = $row['video_link'];
            $session_id[] = $row['no'];
            
          
        }
    }
    $temp=0;
    
    
    
    mysqli_close($con);
    
    ?>