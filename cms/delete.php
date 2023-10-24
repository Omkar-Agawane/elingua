<?php require 'header.php';
require 'sidebar.php';
require './fetch/deleteFetch.php';
?>

  <div class="container">
    <h3 class="">All courses (<?php echo $len?>)</h3>
    <hr class="hr1">
        <div class="" >     
            <div class="delete">
                    <?php while($len>0){ ?>
                       <div class="dashboard-info">
                        <a href="<?php echo WEBSITE; ?>/cms/edit.php?id=<?php echo $id[$len-1];?>">
                             <img src="<?php echo WEBSITE;?>/cms/<?php echo $image[$len-1];?>" alt="ras" class="bracket" width="150px">
                        </a>
                       <div>
                       <a href="<?php echo WEBSITE; ?>/cms/edit.php?id=<?php echo $id[$len-1];?>">
                            <h4> <?php echo $title[$len-1]; ?></h4> 
                    </a>
                            <div class="flex">
                                <a href=""><small style="display:inline-block" onclick="delete_sure(event);" id="<?php echo $id[$len-1];?>"><i class="fa fa-trash"> </i> </small></a>
                                <a href="<?php echo WEBSITE; ?>/cms/edit.php?id=<?php echo $id[$len-1];?>"><small style="display:inline-block"><i class="fa fa-edit"> </i> </small></a>
                                <a href="<?php echo WEBSITE; ?>/cms/comment.php?id=<?php echo $id[$len-1];?>"><small style="display:inline-block"> Add Comments </small></a>
                                
                            </div>
                           
                       </div>
                     
                       </div>
                       <hr class="hr">
                            <?php  $len--; }?> 
            </div>
        </div>
    </div>   
                 <script type="text/javascript">                 
                   async function delete_sure(e){
                    e.preventDefault();

                   let id = event.target.id;
                   let confirm_msg = confirm("Are you sure?");
                   if(confirm_msg == true){
                        await fetch(`http://localhost/elinguahub.com/cms/deleteData.php?id=${id}`)
                            .then((res) => {
                                return res.text();
                                })
                            .then((data)=>{
                                window.location.reload();
                            });
                   }
                   }
            function teaf_open(){
                document.getElementById("sidebar").style.display="block";
                
            }
             function teaf_close(){
                document.getElementById("sidebar").style.display="none";
                 
            }
                    
                    
                     
        </script>
                     
