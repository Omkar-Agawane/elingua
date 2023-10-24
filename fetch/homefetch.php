<?php
 

    $sql1 = "SELECT * FROM coursetable ORDER BY opted_user";
    $data1 = mysqli_query($con, $sql1);
    $len1 = mysqli_num_rows($data1);
    
    if($len1 > 0){
        while($row = mysqli_fetch_assoc($data1)){
            $members[]= $row['opted_user'];
            $id[]= $row['id'];
            $title[] = $row['title'];
            $decscription[] = $row['description'];
            $category[] = $row['category']; 
            $details[] = $row['details'];          
            $price[] = $row['price'];          
            $image[] = $row['image'];          
            $type[] = $row['type'];          
        }
    }
    $sql2 = "SELECT * FROM coursetable";
    $data2 = mysqli_query($con, $sql2);
    $len2 = mysqli_num_rows($data2);
    
    if($len2 > 0){
        while($row = mysqli_fetch_assoc($data2)){
            $members1[]= $row['opted_user'];
            $id1[]= $row['id'];
            $title1[] = $row['title'];
            $decscription1[] = $row['description'];
            $category1[] = $row['category'];  
            $details1[] = $row['details'];        
            $price1[] = $row['price'];  
            $image1[] = $row['image'];  
            $type1[] = $row['type'];  
        }
    }



    $temp=$len1;
    $temp1=$len2;
    mysqli_close($con);






    ?>