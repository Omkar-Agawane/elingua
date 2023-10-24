<?php require 'header.php';
require 'sidebar.php'; 
require './fetch/bannerfetch.php';?>
    <div class="container-2" >
    <h3>Home Banner</h3>
    <small>Home-page top banner setting</small>
    <hr class="hr">
       <br>
            <form method="post" action="<?php echo WEBSITE;?>/cms/bannerInsert.php"   enctype="multipart/form-data">
                <p class="input-lable">Banner slide title </p>
                <input class="#" name="eventname" id="#" placeholder="Title" required>   <br>
                <p class="input-lable">Banner Short  Subtitle</p>
                <textarea class="details-textarea" name="eventdetails" id="#" placeholder="Event Details" required>   </textarea> 
                <input class="#" name="eventlink" id="#" placeholder="Banner Link(Optional)">   
                <br>
                <button class="btnR"type="submit" name="submit">Add</button>    
            </form>

            <br>
            <h3>Banner Slides (max 3)</h3>
            <hr>
            <div class="delete">
            <?php while($len>0){ ?>
                    <h4 style="display:inline-block"> <?php echo $event[$len-1]; ?></h4> 
                    <a href="<?php echo WEBSITE; ?>/cms/bannerDelete.php?id=<?php echo $id[$len-1];?>"><p style="display:inline-block;margin-left:30px">Delete</p></a>    
            <hr class="hr">
            <?php  $len--; }?> 
            
        
        </div>



    </div>




 <script type="text/javascript">        
            function teaf_open(){
                document.getElementById("sidebar").style.display="block";
                
            }
             function teaf_close(){
                document.getElementById("sidebar").style.display="none";
                 
            }
       
</script>
                     

