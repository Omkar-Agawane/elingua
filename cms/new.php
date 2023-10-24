<?php require 'header.php';
require 'sidebar.php'; ?>
<?php include 'newfetch.php';?>
<div class="container-2">
    <h3>Create New Course</h3>
    <hr class="hr">
    <br>
    <form method="post" action="newMain.php" enctype="multipart/form-data">
        <section id="uploadImage">
            <img id="thumbnail" src="../res/edit_image.png" alt="">
            <input type="file" name="fileToUpload" id="fileToUpload" class="custom-file-input" required>

        </section>
        <p class="input-lable">Basic Details</p>
        <section class="inner-container">
            <p class="input-lable">Course Name</p>
            <input class="input" name="title" id="header" placeholder="Title of the online/live course " minlength="10"
                maxlength="150" size="150" required>

            <div class="grid-2">
                <div>
                    <p class="input-lable">Course Category (Only for Online Course)</p>
                    <select class="select " id="category" name="cat1"
                        style="padding:15px;background-color:rgba(0,0,0,0.1);border:none;">
                        <option value="">Select Category</option>
                        <?php foreach($cat_all as $item){ ?>
                        <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                        <?php } ?>
                    </select>

                </div>

                <div>
                    <p class="input-lable">Course Type</p>
                    <select class="select " id="category" name="type"
                        style="padding:15px;background-color:rgba(0,0,0,0.1);border:none;">
                        <option value="">Select Type</option>
                        <option value="Group">Group live class</option>
                        <option value="Personal">Personal live class</option>
                        <option value="Online">Online course</option>

                    </select>


                </div>

            </div>
            <p class="input-lable">Course Price</p>
            <input class="#" name="price" id="#" placeholder="00"><br>
        </section>

        <p class="input-lable">Course Sessions</p>
        <section class="inner-container">
            <table id="table">
                <tr>
                    <th class=" input-lable">Session Name</th>
                    <th class="input-lable">Sesssion Duration</th>
                    <th class="input-lable"> Session's youtube/zoom Link</th>
                </tr>
                <tr>
                    <td><input class="" name="session[]" type="text" placeholder="eg: Introduction and briefing"></td>
                    <td><input class="" name="duration[]" placeholder="eg: 30 min"></td>
                    <td><input class="" name="link[]" placeholder="eg: https://meeting.example.com"></td>
                </tr>
            </table>
            <br><br>
            <input id="add" type="button" value="Add more sessions">



        </section>




        <p class="input-lable">Course Details</p>
        <textarea name="body2" class="details-textarea"> </textarea>
        <br>

        <p class="input-lable">Course Syllabus</p>
        <textarea name="body">

                    <p><strong><big>Short Description&nbsp;</big></strong><br />
                        <br />
                        Learning a new language improves the memory of a learner. It helps children in problem-solving and critical-thinking skills. It enhances concentration, enables children to multitask, and improves listening skills. These courses are designed in such a way that children will learn a new language in a good and playful environment.<br />
                        <br />
                        <strong>Type of Course</strong><br />
                        Cohort<br />
                        <br />
                        <strong>Credits</strong><br />
                        2 credits of 30 hours &nbsp; &nbsp;<br />
                        <br />
                        <strong>Duration&nbsp;</strong><br />
                        30 hours<br />
                        <br />
                        <strong>Medium of Instruction</strong><br />
                        English<br />
                        <br />
                        <strong>Delivery&nbsp;</strong><br />
                        Online through E-Lingua Hub Learning Portal</p>


                </textarea><br><br>

        <div class="grid-2">
            <div>
                <p class="input-lable">Course Material Name</p>
                <input class="#" name="material_name" placeholder="Presentation file(ppt)"><br>
            </div>
            <div>
                <p class="input-lable">Course Material Link</p>
                <input class="#" name="material" id="header" placeholder="https://example.com"><br>
            </div>
        </div>






        <!--<section id="uploadImage">
                      <input type="file" name="fileToUpload" id="fileToUpload" class="custom-file-input">
                      <label for="fileToUpload" id="uploadLable">Choose Image To Upload
                        </label>
                </section><br><br>-->





        <p class="input-lable">Tutor Details</p>
        <section class="inner-container">
            <input class="#" name="tutor" id="#" placeholder="Tutor name" required><br>
            <section id="uploadImage">
                <img id="thumbnail2" src="../res/profile.png" alt="">
                <input type="file" name="fileToUpload2" id="fileToUpload2" class="custom-file-input" required>
            </section>
        </section>
        <button class="btnR" type="submit" name="submit">Submit</button>
    </form>
</div>



<script>
    CKEDITOR.replace('body');
    CKEDITOR.replace('body2');



    let inputFile = document.querySelector('#fileToUpload');
    let preview = document.querySelector('#thumbnail')

    inputFile.addEventListener('change', () => {
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
    inputFile2.addEventListener('change', () => {
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




    function teaf_open() {
        document.getElementById("sidebar").style.display = "block";

    }

    function teaf_close() {
        document.getElementById("sidebar").style.display = "none";

    }

    function updateThumb() {
        document.querySelector('#uploadLable').innerHTML = 'Image Uploaded, confirm by submiting';
    }

    /*document.getElementById('fileToUpload').onchange=function() {fileName()};
    function fileName(){
        var x=document.getElementById('fileToUpload').value;
        document.getElementById('uploadLable').innerHTML=x;
        }*/
</script>