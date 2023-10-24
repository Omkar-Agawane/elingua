<?php include 'header.php';?>
         
  
    <div class="container" >
           
       <br>
       <br>
       <br>
            <form method="post" action="<?php echo WEBSITE;?>/cms/bannerInsert.php"   enctype="multipart/form-data">
                <p class="input-lable">Event Banner 1</p>
                <input class="#" name="eventname" id="#" placeholder="Event Name">   <br><br>
                <p class="input-lable">Event Short  Details</p>
                <textarea class="details-textarea" name="eventdetails" id="#" placeholder="Event Details">   </textarea>
                
                <input class="#" name="eventlink" id="#" placeholder="Event Link">   
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
                     

