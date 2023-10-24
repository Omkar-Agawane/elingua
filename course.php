<?php
    $course_id = $_GET['course_id'];
    require 'header.php' ;
    require './fetch/coursefetch.php';
?>


<div class=" index product">

    <div class="container">
        <div class="title1">
            <div>
                <div class="flex">
                <img class="thumbnail-course" src="./cms/<?php echo $image;?>" alt="">
                    <div class="v-flex course-dec">
                        <h2 class="title-large"><?php echo $title; ?></h2>
                        <p class="limit-line-2"><?php echo  $details;?></p>
                        <div>
                            <img src="./cms/<?php echo $image2;?>" class="profile-pic" alt="tutor profile">
                            <p class=""><?php echo $tutor;?></p>
                        </div>
                        <h3 class=""><b>₹
                                <?php echo $price; ?>
                            </b></h3><br>
                        <a href="./payment.php?id=<?php echo $course_id;?>&title=<?php echo $title; ?>&amt=<?php echo $price; ?>&opted_user=<?php echo $opted_user; ?> ">
                            <button class=" secondary-btn">Enroll Now</button></a>
                    </div>

                </div>


            </div>
        </div>
        <hr>
        <div class="c" id="c">
            <?php echo $description ; ?>
        </div>
        <br>
        <div>
            <hr class="hr1">
            <?php if(isset($_SESSION['user'])){ ?>
            <form class="review-form" method="post" action="./form/comment.php?name=<?php echo $_SESSION['user'];?>">
                <input required class="" placeholder="Write Your Review" name="comment">
                <button class="secondary-btn" type="submit">Submit</button>
            </form>
            <?php }?>
            <br>
            <h4 class="yellow">What People experienced</h4><br>
            <div class="comments">
                <?php while($temp2 < $len2){ ?>
                <p><strong><?php echo $name[$temp2]; ?></strong></p>
                <p><?php echo $comment[$temp2]; ?></p>
                <Br>
                <?php $temp2++; }?>
            </div>
            </details>
        </div>


    </div>




































    <script>
    </script>
    <?php require 'footer.php' ; ?>