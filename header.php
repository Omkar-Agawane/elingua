<?php
require './fetch/config.php';
require './fetch/headerfetch.php';
?>
<!doctype >
<html lang="en">
<head>
<!-- SEO Content -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Elinguahub - Language learning online platform for sankrit, french, german.</title>
    <meta name="description" content="We, at elinguahub, provide language related e-courses. Especially , Languages like Sanskrit & German in an easy and innovative way. We also aim to provide language centric information!">
    <meta name="keywords" content="elinguahub,Sanskrit,German,language,e-courses,Sanskrit courses, website developement services,literature">
    <link rel="icon" href="https://elinguahub.com/res/logo24X24.png" sizes="24x24">

    <meta property="og:site_name" content="Elinguahub">
    <meta property="og:title" content="elinguahub The E-learning Classroom Hub" />
    <meta property="og:description" content="We, at E-Lingua Hub, provide language related e-courses. Especially , Languages like Sanskrit & German in an easy and innovative way. We also aim to provide language centric information!" />
   <meta property="og:image" itemprop="image"content="https://elinguahub.com/res/logo.jpg">

    <meta property="og:type" content="website" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-NWHBFSKTBG"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'G-NWHBFSKTBG');
	</script>

     <!-- SEO Content-->
        <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.min.css"
        type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;200&display=swap" rel="stylesheet"
        type="text/css">




        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">




       <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <link rel="stylesheet" href="./project.css">
        <link rel="stylesheet" href="./teafweb.css">




    <style>
        #homeSlider {
            display: none;
        }
        body{
            overflow: hidden;
        }
    </style>


</head>

<body onclick="myFunction(event)">
    <div class="preloader">
        <div class="center">
            <img src="./res/Book.gif" class="">

        </div>
    </div>

    <header style="background-color:#fff">
    <div class="sidebar" id="sidebar" style="display:none" >
                <span id="close">&#10006;</span>
                <a  href="./"><i class="fa fa-home"></i>Home</a>
                <a  href="./groupcourse.php?nextpage=0"><i class="fa fa-female"></i>Live Personal Class</a>
                <a  href="./personalcourse.php?nextpage=0"><i class="fa fa-group"></i>Live Group Class</a>
                <a  href="./onlineclass.php?nextpage=0"><i class="fa fa-male"></i>Online Course</a>
                <a href="./product.php"><i class="fa fa-shopping-basket"></i>Product</a>
                <a href="./about.php"><i class="fa fa-quote-left"></i>About</a>
                <a href="./signin.php"><i class="fa fa-sign-in"></i>Sign In</a>
                <a href="./register.php"><i class="fa fa-vcard"></i>Register</a>
            </div>
            <div class="menu" id="menu-mob" > <p>&#9776;</p> </div>


        <div class="container logo-bar">
            <div class="logo-box">
                <a href="./"><img src="res/logo.svg" class="logo"> </a>
            </div>
            <div class="menu-bar">
                <section class="" style="display:inline-block">
                    <div  class="modal"   data-modal-type="modal">
                        <li class="modal li pointer" data-modal-type="modal" >Course <span data-modal-type="modal" class="fa fa-caret-down"></span></li>
                    </div>
                    <div class="dropdown" id="dropdownmenu">
                   <a  href="./groupcourse.php?nextpage=0"><i class="fa fa-users" aria-hidden="true"></i> &nbsp;Live Group Course</a>
                        <hr>
                        <a  href="./personalcourse.php?nextpage=0"><i class="fa fa-user" aria-hidden="true"></i> &nbsp;Live Personal Course</a>
                        <hr>
                        <a  href="./onlineclass.php?nextpage=0"><i class="fa fa-desktop" aria-hidden="true"></i> &nbsp;Online Course</a>
                    </div>

                </section>
                <a href="./product.php">
                    <li class="li">Products</li>
                </a>
                <a href="./about.php">
                    <li class="li">About</li>
                </a>
                <a href="./signin.php">
                    <li class="li">Sign In</li>
                </a>
                <a href="./register.php">
                    <li class="li">Register</li>
                </a>

                <a href="https://www.facebook.com/E-Lingua-Hub-108423700903004/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://instagram.com/elinguahub?igshid=1mt9op1cyzrtb" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/elinguahub?s=08" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/E-Lingua-Hub-108423700903004/" target="_blank"><i class="fa fa-youtube"></i></a>



            </div>
        </div>
        <div class="notification-bar">
            <p><?php echo $notification; ?></p>
        </div>
        <div class="home-slider" id="homeSlider">
            <br><br>
            <?php while($temp_banner < $len){ ?>
            <div class="container slider">
                <div class="event-content">
                    <h1 class="animate__animated animate__backinLeft">
                        <?php echo $eventName[$temp_banner]; ?>
                     </h1>
                     <p class="animate__animated animate__backinDown">
                        <?php echo $eventDetails[$temp_banner]; ?>
                    </p>
                    <br>
                    <a href="<?php echo $eventLink[$temp_banner]; ?>"><button class="primary-btn ">Know more &#8594</button></a>
                </div>
            </div>
            <?php $temp_banner++; } ?>
        </div>

        <div class="submenu">
            <div class="container">
                <div class="submenu-content">

                    <?php foreach($cat as $value){ ?>
                    <li class="li">
                       <a href="categorycourses.php?cat=<?php echo $value;?>&nextpage=0"> <?php echo ucfirst($value);?></a>
                    </li>
                    <?php };?>
                   <li class="li" style="float:right">
                        <?php if(isset($_SESSION['user'])== false ){ ?>
                       <a href="./signin.php" id="userIcon"><i class="fa fa-user" aria-hidden="true"></i> <span class="mobile_hide">Hello Guest!</span></a>
                <?php
            }
            else{ ?>
            <a href="./user.php"> <i class="fa fa-user" aria-hidden="true"></i>
                <span class="mobile_hide"><?php
                echo " Hello, ". ucfirst($_SESSION['user']);?></span>
</a>
       <?php     } ;?>
                    </li>
                </div>
            </div>
        </div>




    </header>