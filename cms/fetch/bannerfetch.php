
<?php
    
    $con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
    if(!$con){
        die (mysqli_connect_error . " this is connection error");
    }
    
    $sql = "SELECT *  FROM bannertable";
    $data = mysqli_query($con,$sql);
    $len = mysqli_num_rows($data);
    
    
    
    if($len>0){
        while($row = mysqli_fetch_assoc($data)){
            $event[]= $row['eventname'];
            $id[]= $row['no'];
        }
    }
    
    
    mysqli_close($con);
    
    ?>