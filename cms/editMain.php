<?php include './config.php' ;?>
<?php

$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);


$course_id = $_REQUEST['id'];


$filename   = $course_id;

$target_dir = "upload/";

if( basename($_FILES["fileToUpload"]["name"])!= '' ){
  $target_file = $target_dir . $filename.basename($_FILES["fileToUpload"]["name"]);

}
else{
  $target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
}
if( basename($_FILES["fileToUpload2"]["name"])!= '' ){
  $target_file2 = $target_dir . $filename.basename($_FILES["fileToUpload2"]["name"]);

}
else{
  $target_file2 = $target_dir.basename($_FILES["fileToUpload2"]["name"]);

}




$target_name=basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$uploadOk2 = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



$erro_msg1 ="";
$erro_msg2 ="";
$erro_msg3 ="";
$erro_msg4 ="";
$erro_msg5 ="";

// Check if image file is a actual image or fake image




// Check if file already exists
if (file_exists($target_file) ) {
  $target_file = $session =$_REQUEST['thumbImage'];
  if(basename($_FILES["fileToUpload"]["name"])!= ''){
    $erro_msg1 = "Course thumbnail image name already exist, please change image or name.";
    $err =true;
  }
  $uploadOk = 0;
}
if (file_exists($target_file2)) {
  $target_file2 = $session =$_REQUEST['thumbImage2'];
  if(basename($_FILES["fileToUpload2"]["name"])!= ''){
    $erro_msg2 = "Tutor profile image already exist, please change image or name.";
    $err =true;
  }
  $uploadOk2 = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000 || $_FILES["fileToUpload"]["size"] > 1000000 ) {
  $erro_msg3 = "One of the image size too large, please optimzed your image before uploading";
  $err =true;
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "webp" ) {
  echo "<script>
     </script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0 ) {

// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {

  }
}



if ($uploadOk2 == 0 ) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
    echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
  } else {

  }
}
















$title=mysqli_real_escape_string($con, $_REQUEST['title']);
$details= mysqli_real_escape_string($con, $_REQUEST['body2']);
$description =mysqli_real_escape_string($con,$_REQUEST['body']);
$material =mysqli_real_escape_string($con,$_REQUEST['material']);
$material_link =mysqli_real_escape_string($con,$_REQUEST['material_link']);
$category =mysqli_real_escape_string($con,$_REQUEST['cat1']);
$type =mysqli_real_escape_string($con,$_REQUEST['type']);
$session =$_REQUEST['session'];
$video_link =$_REQUEST['link'];
$duration =$_REQUEST['duration'];
$price =$_REQUEST['price'];
$tutor =$_REQUEST['tutor'];

$date=  date("jS F Y");
$uniq_text = substr($title ,0 ,3);
/*$id = uniqid().$uniq_text;*/

if(!$con){
    die("Connection error".mysqli_connect_error());
}



$sql = "UPDATE `coursetable` SET `title`='$title',`description`='$description',`category`='$category',`image`='$target_file',`image2`='$target_file2',
`type`='$type',`material_link`='$material_link', `material`='$material' , `details`='$details',
`price`='$price',`tutor`='$tutor' WHERE id='$course_id'";


if(count($session)>0 && $session[0]!='session'){
foreach($session as $key => $value){
    $sql2 = "INSERT INTO sessiontable (`no` , `id` , `title` , `session` , `video_link` , `session_time`)
    VALUE (NULL   ,  '$course_id' , '$title' , '$value' , '$video_link[$key]' , '$duration[$key]')";
        mysqli_query($con, $sql2);
}
}

//$sql="DELETE FROM chapter";

    if (mysqli_query($con, $sql) ) {
      if($err ==true){
        echo "<script>
          alert('Errors\\n.$erro_msg1.\\n.$erro_msg2.\\n.$erro_msg3.');
        </script>";
      }
      else{
        echo "<script>
          alert('Updated');
        </script>";
      }
        ?>


    <?php }

    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
        echo "<script>alert('Connection error'); </script>";
        }

mysqli_close($con);
?>

<script>
   window.location.href = "<?php echo WEBSITE; ?>/cms/edit.php?id=<?php echo $course_id;?>";
</script>