<?php 
        require 'header.php';
        require 'sidebar.php';
        require './fetch/fetchdashboard.php';
?>
<div class="container">
    <h2>Dashboard</h2>
    <p class="">Welcome to elinguahub cms, you can manage your website from here.</p>
    <hr class="hr1">
    <div class="spacer-50"></div>
    <h4 class=""><strong>Metrices</strong></h4>
    <div class=dashboard-info>
        <div class="box">
            <h1 class="success h1"><?php echo $len;?></h1>
            <p>Total Courses</p>
        </div>
        <div class="box">
            <h1  class="success h1">₹ <?php echo $sum;?></h1>
            <p>Total Sales</p>
        </div>
        <div class="box">
            <h1  class="success h1"><?php echo $len3;?></h1>
            <p>Total Users</p>
        </div>
    </div>
    <div class="spacer-50"></div>
    <h4 class="">Quick Links</h4>
    <div class=dashboard-info>
        <a href="https://elinguahub.com:2096/" target="_blank"><div class="box2">
            <p>WebMail</p>
            </div></a>
        <a target="_blank" href="https://accounts.google.com/ServiceLogin/signinchooser?elo=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><div class="box2">
            <p>Google Analytics</p>
        </div>
            </a>
        <a target="_blank" href="https://www.google.com/intl/en_in/business/"><div class="box2">
            <p>Google My Business</p>
            </div></a>
        <a target="_blank" href="https://search.google.com/search-console/about"><div class="box2">
            <p>Google Search Console</p>
        </div>
            </a>
       <a target="_blank" href="https://ads.google.com/intl/en_in/getstarted/?subid=in-en-ha-aw-bk-c-hr0!o3~EAIaIQobChMImZ6RuJyl8AIV0H8rCh3g-QiKEAAYASAAEgL0yPD_BwE~81594331641~aud-780873439192:kwd-12340353~6491163288~498745325409&gclid=EAIaIQobChMImZ6RuJyl8AIV0H8rCh3g-QiKEAAYASAAEgL0yPD_BwE&gclsrc=aw.ds"> <div class="box2">
            <p>Google Adwords</p>
        </div>
            </a>
    </div>
</div>
<?php 
require 'footer.php';
?>












