<?php require 'header.php';
if(isset($_SESSION['name'])){
require 'sidebar.php'; ?>
         
<?php $id = $_GET['id'];?>


  
    <div class="container" >     
       <br>
       <br>
       <br>
       <form method="post" action="<?php echo WEBSITE;?>/cms/commentMain.php?id=<?php echo $id;?>" enctype="multipart/form-data">
            <p class="input-lable">Add Comments</p>
                <input class="#" name="name" id="header"  placeholder="Name" minlength="4" maxlength="20" size="20"><br> <br>
                <input class="#" name="comment"  placeholder="Comments" ><br>
                
                <br>
                <br>
                <button class="btnR"type="submit" name="submit">Submit</button>     
            </form>  
    </div>
           
           

<?php }?>



            <script>
                        CKEDITOR.replace( 'body' );
                </script>               
                 <script type="text/javascript">




            function teaf_open(){
                document.getElementById("sidebar").style.display="block";
                
            }
             function teaf_close(){
                document.getElementById("sidebar").style.display="none";
                 
            }