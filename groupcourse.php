<?php require 'header.php' ; 
    require './fetch/coursegroupfetch.php';
    $pagination_var = $_GET['nextpage'];
    $page = $pagination_var;
    if($page <=0){
        $page = 0;
        $pagination_var=0;
    }
?>
<div class=" index product">
    <br>
    <div class="container product-header">
        <h6>Group Live Classes</h6>
        <hr>
    </div>
    <div class="container">
        <div class="course-display">
            <?php 
            if(isset($pagination_var)==false){
               $pagination_var = 0;
            }
            else{
                $temp = $pagination_var*4;
                $pagination_var = ($pagination_var+1)*4;
                if($pagination_var > $len){
                    $pagination_var = $len;
                }
            }
            while( $temp < $pagination_var ){ ?>
            <div class="card">
            <a href="./course.php?course_id=<?php echo $id[$temp]; ?>">
            <div >
             <img src="./cms/<?php echo $image[$temp];?>" alt="" width="100%">
                <div class="card-title">
                    <h3><?php echo $title[$temp]; ?></h3>
                     <small class=""> <?php echo $type[$temp];?> </small>
                     <small class="limit-line-2"><?php echo  $details[$temp];?></small>
                </div>
                <div class="card-description">
                    <br>
                     <h4>₹<?php echo $price[$temp];?>/-</h4><br>
                     <small class=""><?php echo $members[$temp];?> Students taken this course</small>
                </div>
            </div>
            </a>
            </div>
            <?php $temp++;} ;?>
        </div>



        <div class="pagination">
        <?php if($page != 0){ ?>
            <span><a href="./groupcourse.php?nextpage=<?php echo $page-1;?>">&#8592;Previous Page </a></span>
            &nbsp;&nbsp;&nbsp;&nbsp;
        <?php } ?>
        <?php if($pagination_var < $len){ ?>
            <span> <a href="./groupcourse.php?nextpage=<?php echo $page+1;?>">Next Page&#8594; </a></span>
        <?php } ?>
        </div>
    </div>

</div>




































<script>
</script>
<?php require 'footer.php' ; ?>