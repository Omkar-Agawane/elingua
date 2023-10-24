<?php include './config.php' ;?>
<?php

$timeVal = microtime(false);
$timeVal =str_replace(".", "", $timeVal);
$timeVal =str_replace(" ", "", $timeVal);

$str = microtime(false);
$str =str_replace(".", "", $str);
$stri =str_replace(" ", "", $str);

$unique = trim($stri);

$target_dir = "upload/";
$target_file = $target_dir.$unique.basename($_FILES["fileToUpload"]["name"]);
$target_file2 = $target_dir.$unique.basename($_FILES["fileToUpload2"]["name"]);
$target_name=basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$uploadOk2 = 1;
$duplicateFile = 0;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
      echo "<script>
             alert('File is not an image.');
     </script>";
    $uploadOk = 0;
    $duplicateFile = 1;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "";
    echo "<script>
             alert('Sorry, file already exists.');

     </script>";
  $uploadOk = 0;
  $duplicateFile = 1;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo"<script>
             alert('Sorry, file size is too large.');

     </script>";
  $uploadOk = 0;
  $duplicateFile = 1;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "<script>
             alert('Invalid file format');

     </script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
/*if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "<script>
             alert('Uploading error.');

     </script>";
  }
}*/




$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

$title=mysqli_real_escape_string($con, $_REQUEST['title']);
$details= mysqli_real_escape_string($con, $_REQUEST['body2']);
$description =mysqli_real_escape_string($con,$_REQUEST['body']);
$material =mysqli_real_escape_string($con,$_REQUEST['material']);
$material_name =mysqli_real_escape_string($con,$_REQUEST['material_name']);
$category =mysqli_real_escape_string($con,$_REQUEST['cat1']);
$type =mysqli_real_escape_string($con,$_REQUEST['type']);
$session =$_REQUEST['session'];
$video_link =$_REQUEST['link'];
$duration =$_REQUEST['duration'];
$price =$_REQUEST['price'];
$tutor =$_REQUEST['tutor'];

$date=  date("jS F Y");
$uniq_text = substr($title ,0 ,3);
$id = uniqid().$uniq_text;

if(!$con){
    die("Connection error".mysqli_connect_error());
}

$sql="INSERT INTO `coursetable` (`no`,`id`, `title`, `description`, `opted_user`, `category`, `tag`, `image`, `image2`,`date`, `type`, `material_link`, `material`, `details`, `price`,`tutor`) VALUES (NULL, '$id', '$title', '$description', '0', '$category', '0', '$target_file', '$target_file2','0', '$type', '$material', '$material_name', '$details' , '$price', '$tutor') ";




//$sql="DELETE FROM chapter";
if($duplicateFile == 0){

  if (mysqli_query($con, $sql) ) {
      if ($uploadOk2 == 0) {
        // echo "Sorry, your file was not uploaded.";
       // if everything is ok, try to upload file
       } else {
         if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
          // echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
         } else {
           echo "<script>
                    alert('Uploading error.');
            </script>";
         }
         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
          echo "<script>
                   alert('Uploading error.');
      
           </script>";
        }
       }
    foreach($session as $key => $value){
      $sql2 = "INSERT INTO sessiontable (`no` , `id` , `title` , `session` , `video_link` , `session_time`) VALUE (NULL   ,  '$id' , '$title' , '$value' , '$video_link[$key]' , '$duration[$key]')";
      mysqli_query($con, $sql2);
    }
    echo "<script>
    alert('New Course Created');
  </script>";

  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
      echo "<script>alert('Connection error'); </script>";
      }
}
    

mysqli_close($con);
?>

<script>
   window.location.href = "<?php echo WEBSITE?>/cms/delete.php";


</script>