 <?php require './fetch/homefetch.php'; ?>
 <div class="container">
     <br>
     <div class="title1" style="margin-top:5px">
         <h1>Popular Courses</h1>
         <hr>
     </div>
 </div>
 <div class="container">
     <div class="course-display-home">
         <?php while($temp > $len1-4){ ?>
            <div class="card">
                 <a href="./course.php?course_id=<?php echo $id[$temp-1]; ?>">
                 <img src="./cms/<?php echo $image[$temp-1];?>" alt="<?php echo $title[$temp-1]; ?>">
                 <div class="card-title">
                 <h3 class="title-small cc limit-line-2 grayscale"><?php echo $title[$temp-1]; ?></h3>
                     <small class="limit-line-2"><?php echo  $details[$temp-1];?></small>  <br>
                         <h4 class="grayscale" >₹ <?php echo $price[$temp-1];?></h4><br>
                     <div class="flex-bet">
                         <small class=""> <?php echo $type[$temp-1];?>Courses </small>
                         <small class=""><?php echo $members[$temp-1];?> Students</small>
                     </div>
                 </div>
             </div>
         </a>
         <?php $temp--; }?>
     </div>
 </div>
 <div class="container">
     <div class="title1">
         <h1>Latest Courses</h1>
         <hr>
     </div>
 </div>
 <div class="container">
     <div class="course-display-home">
         <?php while($temp1 > $len2-4 ){ ?>

         <div class="card">
             <a href="./course.php?course_id=<?php echo $id1[$temp1-1]; ?>">
                 <img src="./cms/<?php echo $image1[$temp1-1];?>" alt="">
                 <div class="card-title">
                     <h3 class="title-small cc limit-line-2 grayscale"><?php echo $title1[$temp1-1]; ?></h3>
                     <small class="limit-line-2"><?php echo  $details1[$temp1-1];?></small>  <br>
                         <h4 class="grayscale" >₹ <?php echo $price1[$temp1-1];?></h4><br>
                     <div class="flex-bet">
                         <small class=""> <?php echo $type1[$temp1-1];?>Courses </small>
                         <small class=""><?php echo $members1[$temp1-1];?> Students</small>
                     </div>
                 </div>

             </a>
         </div>

         <?php $temp1--; }?>
     </div>
 </div>

 <div class="middle-banner">
     <div class="container-background">
         <h3>Sanskrit Studies to the Next Level</h3><br>
         <div class="middle-slider-content animate__animated animate__bounceInLeft">
             <h2>Academic Sankrit Classes</h2>
         </div>
         <div class="middle-slider-content animate__animated animate__bounceInLeft">
             <h2>Sanskrit for Lil Champs</h2>
         </div>
         <div class="middle-slider-content animate__animated animate__bounceInLeft">
             <h2>Conversational Sanskrit</h2>
         </div>
         <br>
         <br>
         <a href="./personalcourse.php?nextpage=0"><button class="secondary-btn">Take Live Class</button></a>
         <br>
         <br>
     </div>

 </div>

 <div class="container">
     <div class="popular-categories">
         <div class="content">
             <img src="res/undraw_online_test_gba7%201.svg" class="img-size1">
             <br><br>
             <h3>Live one to one sessions</h3>
             <p>Personalise online session, one to one interaction and learning experience.</p>
         </div>
         <div class="content">
             <img src="res/undraw_video_influencer_9oyy%201.svg" class="img-size1"> <br><br>
             <h3>Group Live classes</h3>
             <p>Live group classes give vibes of live classrom with other students.</p>
         </div>
         <div class="content">
             <img src="res/undraw_book_reading_kx9s%201.svg" class="img-size1"> <br><br>
             <h3>Online Course</h3>
             <p>Take course and learn as per your conveniet timing from pre-recorded videos</p>
         </div>
     </div>
 </div>

 <div class="about-home" id="about">
     <div class="container">
         <h5>Who are we?</h5>
         <p>E-Lingua Hub brings boldness and strength to students by using high quality and highly engaging online
             video tutorials, one to one Skype-based classes and live and interactive group sessions. Along with other
             language classes and video tutorials, E-Lingua Hub also has a bunch of courses for Students who has a
             curiosity and passion for the history and knowledge.</p>
     </div>
 </div>

 <div class="container" style="margin-top:50px">
     <div class="video-home">


         <div class="container">
             <hr>
             <p>
                 काक चेष्टा, बको ध्यानं, स्वान निद्रा तथैव च।<br>
                 अल्पहारी, गृहत्यागी, विद्यार्थी पंच लक्षणं।।
             </p>
             <hr>
         </div>



     </div>