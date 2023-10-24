<?php require 'header.php' ; 
 require './form/forgotpassword.php';
?>
<div class=" index">
    <div class="container sign-container">
    <?php 
            if(isset($_REQUEST['error'])){
            if($_REQUEST['error']=='yes'){ ?>
            <p class="alert">Username does not exist</p>
        <?php }};?>
        <form method="post" action="">
            <input placeholder="Email/Username" name="username" type="email" >
            <button class="sign-btn"type="submit">Submit</button>
        </form>
    </div>
    
</div>
     
        
        
        
        
        
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        







<script>
</script>
<?php require 'footer.php' ; ?>
