<?php require 'header.php';
require 'sidebar.php'; ?>
<?php include 'newfetch.php';?>
         
  
    <div class="container-2" >
    <h3>Top Notification Bar</h3>
    <p>Overwrites previous notification</p>
    <hr class="hr">
    <br>
       <br>
            <form method="post" action="<?php echo WEBSITE;?>/cms/notificationInsert.php"   enctype="multipart/form-data">
                <p class="input-lable">Notification Message</p>
                <input class="#" name="notification" id="header" placeholder="Enter Your Message">   
                <br>
                <br>
                <button class="btnR"type="submit" name="submit">Submit</button>    
            </form>
    </div>


 <script type="text/javascript">        
            function teaf_open(){
                document.getElementById("sidebar").style.display="block";
                
            }
             function teaf_close(){
                document.getElementById("sidebar").style.display="none";
                 
            }
       
</script>
                     

