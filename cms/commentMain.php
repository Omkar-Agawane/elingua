<?php include './config.php' ;?>
<?php

$course_id = $_REQUEST['id'];

$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

$name=mysqli_real_escape_string($con, $_REQUEST['name']);
$comment= mysqli_real_escape_string($con, $_REQUEST['comment']);

/*$id = uniqid().$uniq_text;*/

if(!$con){
    die("Connection error".mysqli_connect_error());
}



$sql = "INSERT INTO commenttable(`no`,`id`,`name`,`comment`) VALUE(NULL,'$course_id','$name','$comment')";
//$sql="DELETE FROM chapter";
    
    if (mysqli_query($con, $sql) ) {
        echo "<script>
             alert('Your post submitted'); 
     </script>";?>
    <?php } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
        echo "<script>alert('Connection error'); </script>";
        }
mysqli_close($con);
?>
<script>
   window.location.href = "<?php echo WEBSITE; ?>/cms/delete.php";
</script>