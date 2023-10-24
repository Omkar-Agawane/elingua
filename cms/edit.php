<?php require 'header.php';
require 'sidebar.php';
$id = $_GET['id'];
 include './fetch/editfetch.php';?>


<div class="container-2">
        <div class="flex-justify"> 
            
            <h3><?php echo $title; ?></h3>
            <p class="hover" data-btn-type="back"> <i class="fa fa-arrow-left"></i> Back</p>  
           
       
        </div>
        <hr class="hr">
    <br>

    <img id="thumbnail" src="<?php echo WEBSITE;?>/cms/<?php echo $image;?>" alt="Thumbnail" class="thumbnail">
    <form method="post" action="<?php echo WEBSITE;?>/cms/editMain.php?id=<?php echo $id;?>"
        enctype="multipart/form-data">

        <section id="uploadImage">
            <input type="file" name="fileToUpload" id="fileToUpload" class="custom-file-input" >
            <br>
            <input type="text" name="thumbImage" id="" class="custom-file-input hide" onchange=""
                value="<?php echo $image;?>">
        </section>


<p class="input-lable">Basic Details</p>
<section class="inner-container">


        <p class="input-lable">Title</p>
        <input class="#" name="title" id="header" value="<?php echo $title; ?>" placeholder="<?php echo $title; ?>"minlength="4" maxlength="35" size="35">

       <div class="grid-2">
        <div>
        <p class="input-lable">Course Category</p>
            <select class="select" id="category" name="cat1">
                <option value="<?php echo  $category; ?>"><?php echo  $category; ?></option>
                <?php foreach($cat_all as $item){ ?>
                <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
        <p class="input-lable">Type of Course</p>
            <select class="select " id="category" name="type">
                <option value="<?php echo $type; ?> "><?php echo $type; ?></option>
                <option value="Group">Group live class</option>
                <option value="Personal">Personal live class</option>
                <option value="Online">Online course</option>
            </select>
        </div>

       </div>
       <p class="input-lable">Course Price</p>
        <input class="#" name="price" id="#" placeholder="00" value="<?php echo $price; ?>">


        </section>

<p class="input-lable">Course Sessions</p>
<section class="inner-container">
<?php  while($temp < $len2){ ?>
        <h4 style="display:inline-block"> <?php echo $session[$temp]; ?></h4>
        <a
            href="<?php echo WEBSITE; ?>/cms/sessionDelete.php?id=<?php echo $session_id[$temp];?>&course_id=<?php echo $id;?>">
            <p style="display:inline-block;margin-left:30px">Delete</p>
        </a>
        <hr class="hr">
        <?php $temp++;  } ?>
        <table id="table">
            <tr>

            </tr>

            <tr>
                <td><input class="" name="session[]" type="text" value="session"></td>
                <td><input class="" name="duration[]" value="duration"></td>
                <td><input class="" name="link[]" value="link"></td>
                <td><input class="" name="add" type="button" id="add" value="Add"></td>
            </tr>

        </table>
</section>

        <p class="input-lable">Course Preface (250 character only)</p>

        <textarea name="body2" class="details-textarea" maxlength="250"
            placeholder="Enter Course Details"><?php echo $details;?></textarea>
            <br>

        <p class="input-lable">Course Syllabus</p>
        <textarea name="body" placeholder="Enter Syllabus/General Description"
            id="syllabus"><?php echo $syllabus;?></textarea><br><br>

            <section class="grid-2">
                <div>
                <p class="input-lable">Course Material Name</p>
        <input class="#" name="material" placeholder="Presentation file(ppt)" value="<?php echo $material;?>">
                </div>
                <div>
                <p class="input-lable">Course Material Link</p>
        <input class="#" name="material_link" placeholder="https://example.com"
            value="<?php echo $material_link;?>">
                </div>
            </section>


<p class="input-lable">Tutor Details</p>
<section class="inner-container">
<p class="input-lable">Name: Qualification, Experience</p>
<input class="#" name="tutor" id="#" placeholder="Tutor name" value="<?php echo $tutor; ?>"><br>

<img id="thumbnail2"  class="bracket" src="<?php echo WEBSITE;?>/cms/<?php echo $image2;?>" alt="author profile picture">

<section id="uploadImage">

    <input type="file" name="fileToUpload2" id="fileToUpload2" class="custom-file-input">
    <input type="text" name="thumbImage2" id="" class="custom-file-input hide" value="<?php echo $image2;?>"><br>

</section>

</section>
<button class="btnR" type="submit" name="submit">Save Changes</button>


    </form>
</div>
<span style="display:none" id="cont"><?php echo $syllabus;?></span>

<?php 
require 'footer.php';
?>


<script>

    CKEDITOR.replace('body');
    CKEDITOR.replace('body2');



    let inputFile = document.querySelector('#fileToUpload');
    let preview = document.querySelector('#thumbnail')

    inputFile.addEventListener('change', ()=>{
        let file = inputFile.files[0];

        let reader = new FileReader();
  reader.addEventListener("load", () => {
    // convert image file to base64 string
    preview.src = reader.result;
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }

    })


    let inputFile2 = document.querySelector('#fileToUpload2');
    let preview2 = document.querySelector('#thumbnail2')
    inputFile2.addEventListener('change', ()=>{
        let file2 = inputFile2.files[0];

        let reader2 = new FileReader();
  reader2.addEventListener("load", () => {
    // convert image file to base64 string
    preview2.src = reader2.result;
  }, false);

  if (file2) {
    reader2.readAsDataURL(file2);
  }

    })




    /*file.addEventListener('change', ()=>{
        console.log(":Sdfs");
       let reader  = new FileReader();
    reader.addEventListener("load", function(){
       let previewImage = document.querySelector('#thumbnail')
        previewImage.setAttribute("src", reader.result);
    });

    reader.readAsDataURL(file);


    document.querySelector('#uploadLable').innerText = document.querySelector('#fileToUpload').files[0].name +
        ' Image replaced, confirm by submiting';


    })*/





</script>







<script type="text/javascript">
    function teaf_open() {
        document.getElementById("sidebar").style.display = "block";
    }
    function teaf_close() {
        document.getElementById("sidebar").style.display = "none";
    }

    function updateThumb2() {
        document.querySelector('#thumbnail2').src = document.querySelector('#fileToUpload2').files[0].name;
        document.querySelector('#uploadLable2').innerText = document.querySelector('#fileToUpload2').files[0].name +
            ' Image replaced, confirm by submiting';
    }





    /*
             document.getElementById('fileToUpload').onchange=function() {fileName()};

             function fileName(){
                  var x=document.getElementById('fileToUpload').value;
                  document.getElementById('uploadLable').innerHTML=x;

             }*/

    document.getElementById("syllabus").value = document.getElementById("cont").innerHTML;
</script>


<script type="text/javascript">
    var html =
        '<tr><td><input class="" name="session[]" type="text" ></td> <td><input class="" name="duration[]"></td><td><input class="" name="link[]"></td><td><input class="" name="remove" type="button" id="remove" value="Remove"></td></tr>';
    document.querySelector('#add').addEventListener('click', function () {
        $('#table').append(html);
    });
    $('#table').on('click', '#remove', function () {
        $(this).closest('tr').remove();
    });
</script>



</body>
            </html>