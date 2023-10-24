<?php require 'header.php' ; 

 $course_id = $_REQUEST['id'];
 require './fetch/usercoursefetch.php';

 if($type != 'Online' ){
     echo $type;
     /*echo  "<script>
            window.location.href= './personalcourserequest.php?id=$course_id';
            </script>";*/
 }

else {
    ?>

<div class=" index" style="">
    <div class="container" >
        <br>
    <h2 class=""><?php echo $title; ?></h2>
            <div class="flex">
                <div class="ifrmae">
                    <iframe  class="iframe-user"id="iframe"src="https://www.youtube.com/embed/dyCyj9iS044" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="session-card ">
                    <h4 style="text-align:center;margin-top:10px;margin-bottom: 30px;">Course Timeline</h4>
                    <?php while($temp1 < $len1){ ?>
                    <div class="timeline">
                        <a onclick="play('<?php echo $video_link[$temp1];?>')"><?php echo $session[$temp1]; ?></a>
                        <p><?php echo $session_time[$temp1]; ?> min</p>
                    </div><hr>
                    <?php $temp1++;} ?>
                    
                </div>

            </div>
            <div class="teaf-card">
                <div class="card-content">
                    <div class="card-menu">
                        <a class="active toggle-submenu" id="details_anchor" onclick = "show('details',event)" >Details &nbsp;| &nbsp;</a>
                        <a class="toggle-submenu"id="material_anchor" onclick = "show('material',event)">Material &nbsp; | &nbsp;</a>
                        <a class="toggle-submenu" id="certificate_anchor" onclick = "show('certificate',event)">Request Certificate &nbsp; | &nbsp;</a>
                       
                    </div>
                    <hr>
                    <div id="details">
                        <p><?php echo $details; ?></p>
                    </div>
                    <div id="material" style = "display:none">
                    <p><?php echo $material; ?></p>
                        <a href="<?php  echo $material_link;?>"><button class="secondary-btn">Download</button></a>
                    </div>
                    <div id="certificate" style = "display:none">
                        <form action="./form/certificate.php?email=<?php echo  $_SESSION['userName']; ?>" method="post">
                            <input required type="text"placeholder="your Message" name="comment"> 
                            <input type="text"placeholder="" name="name"> 
                           <button class="secondary-btn"type="submit">Request</button> 
                        </form>
                    </div>
                    
                </div>
            </div>
            
    </div>
    
</div>
     
        
        <?php } ?>
        
        
        
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        







<script>
</script>
<?php require 'footer.php' ; ?>
