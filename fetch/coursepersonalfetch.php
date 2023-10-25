<?php
 
 $sql = "SELECT * FROM coursetable WHERE type='Personal'";
 $data = mysqli_query($con, $sql);
 $len = mysqli_num_rows($data);
 
 if($len > 0){
     while($row = mysqli_fetch_assoc($data)){
         $members[]= $row['opted_user'];
         $id[]= $row['id'];
         $title[] = $row['title'];
         $description[] = $row['description'];
         $details[] = $row['details'];
         $category[] = $row['category'];        
         $image[] = $row['image'];        
         $price[] = $row['price'];        
         $type[] = $row['type'];        
     }
 }
 $temp = 0;
 mysqli_close($con);






 ?>