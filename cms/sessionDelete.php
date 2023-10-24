
<?php
require 'config.php';

$id = $_GET['id'];
$course_id = $_GET['course_id'];
    
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
    die (mysqli_connect_error . " this is connection error");
}

$sql = "DELETE FROM sessiontable WHERE no=$id  ";



if (mysqli_query($con, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}


mysqli_close($con);


    


?>
<script>
    window.location.href = "<?php echo WEBSITE?>/cms/edit.php?id=<?php echo $course_id;?>";


</script>