
<?php
   
    $con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
    if(!$con){
        die (mysqli_connect_error . " this is connection error");
    }
    $sql = "SELECT category,no FROM categorytable ";
    $data = mysqli_query($con, $sql);
    $len = mysqli_num_rows($data);
    
    if($len > 0){
        while($row = mysqli_fetch_assoc($data)){
          $cat[]= $row['category'];
          $cat_id[]= $row['no'];
        }
    }
/* notiifcation */
    $sql = "SELECT*FROM notificationtable ";
    $data = mysqli_query($con, $sql);
    $len = mysqli_num_rows($data);
    
    if($len > 0){
        while($row = mysqli_fetch_assoc($data)){
          $notification= $row['notification'];
      
        }
    }
/* notiifcation */
  

/* bannner */
$sql = "SELECT*FROM bannertable ";
$data = mysqli_query($con, $sql);
$len = mysqli_num_rows($data);
$temp_banner = 0;

if($len > 0){
    while($row = mysqli_fetch_assoc($data)){
      $eventName[]= $row['eventname'];
      $eventDetails[]= $row['eventdetails'];
      $eventLink[]= $row['eventlink'];
  
    }
}
/* banner */

    ?>