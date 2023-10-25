<?php
 
 $sql = "SELECT * FROM coursetable WHERE type='Group'";
 $data = mysqli_query($con, $sql);
 $len = mysqli_num_rows($data);
 
 if($len > 0){
     while($row = mysqli_fetch_assoc($data)){
         $members[]= $row['opted_user'];
         $id[]= $row['id'];
         $title[] = $row['title'];
         $description[] = $row['description'];
         $category[] = $row['category'];     
         $details[] = $row['details'];    
         $price[] = $row['price'];    
         $image[] = $row['image'];    
         $type[] = $row['type'];    
     }
 }
 $temp = 0;
 mysqli_close($con);






 ?>