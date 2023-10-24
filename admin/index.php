<?php require 'header.php' ; 
require 'login.php';

?>
    <div class="container index">
        <div class="row">
            <div class="col-bg-8">
             <img src="res/laptop.png">
        </div> 
            <div class="col-bg-4 form">
                <form method="post" action="">
                    <div class="inputcontainer">
                         <i class="fa fa-user icon"></i> 
                        <input class="" placeholder="Login Id" name="username"> 
                    </div>
                    <div class="inputcontainer">
                         <i class="fa fa-eye icon" id="showpass1"></i> 
                        <input type="password" class="" placeholder="Passw*rd" id="pass" name="password">
                    </div>
                     <a href="./forget.php"><p class="sub" >Forget password</p></a>
                    <button class="login" id="btn" type="submit">Log in</button>  
                   
                </form>  
            </div>
       
        
        </div>
        <div class="error">
             <h2><?php echo $error; ?> </h2>
        </div>
        
        
    </div>

<script>
    
    
</script>

<?php require 'footer.php' ; ?>
