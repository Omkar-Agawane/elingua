<?php require 'header.php' ; 

 $course_id = $_REQUEST['id'];
 require './fetch/usercoursefetch.php';

?>
        
        

<div class=" index" style="background-color:#E2E2E3 ;">
    <div class="container" >
    <p class="custom-title"><?php echo $title; ?></p>
            <div class="teaf-row">

                <div class="">
                   <img src="./cms/<?php echo $image; ?>" class="thumbnail-userlivegroup" alt="sdf">
                   <!-- <iframe  class="iframe-user"id="iframe"src="https://www.youtube.com/embed/dyCyj9iS044" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                </div>
                <div class="live-session-card ">
                    
                    <p style="text-align: center;margin-top: 10px;margin-bottom: 30px;">Live Class Links</p>
                    <hr class="hr1">
                    <?php while($temp1 < $len1){ ?>
                    <div class="timeline">
                        <a  onclick="open('<?php echo $video_link[$temp1];?>')"><?php echo $session[$temp1]; ?></a>
                        <h4><?php echo $session_time[$temp1]; ?> min</h4>
                    </div>
                    <?php $temp1++;} ?>
                    
                </div>

            </div>
            <p class="custom-title">Lesson Material</p> 
            <div class="teaf-card">
                <div class="card-content">
                    <div class="card-menu">
                        <a class="active  toggle-submenu" id="details_anchor" onclick = "show('details',event)" >Details &nbsp;| &nbsp;</a>
                        <a class="toggle-submenu"id="material_anchor" onclick = "show('material',event)">Material &nbsp; | &nbsp;</a>
                        <a class="toggle-submenu"id="certificate_anchor" onclick = "show('certificate',event)">Request Certificate &nbsp; | &nbsp;</a>
                       
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

        
<?php require 'footer.php' ; ?>
