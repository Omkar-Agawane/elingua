<?php require 'header.php';?>
<div class=" index">
    <div class="container sign-container">
        <section>
            <form onsubmit="getLogin(event)">
            <h3 class="middle">Sign In</h3>
           
            <div class="icontainer">
            <i class="fa fa-user icon"></i> 
                <input placeholder="Email/Username" name="username" type="email" >
           
            </div>
            <div class="icontainer">
                 <i class="fa fa-eye icon" id="showpass"></i>
                <input placeholder="passw*rd" name="password" type="password" id="pass">
                <a class="alt-link" href="<?php echo WEBSITE; ?>/forgotpassword.php">Forgot password</a>
            </div>
                <button class="sign-btn"type="submit">Sign in</button>
            
            </form>
            <p style="width:50%;text-align:center;margin:auto">If you dont have account </p><br>
    
            <hr style="width:50%;text-align:center;margin:auto">
            <br>
            <p style="width:50%;text-align:center;margin:auto"><a href="register.php">Register</a></p>
    
        </section>
    </div>
</div>


<?php require 'footer.php' ; ?>

<script>




let showpass = document.querySelector('#showpass');
            showpass.addEventListener('click' , function(){
            let passInput=document.querySelector('#pass'); 
                if(passInput.type=="password"){
                    passInput.setAttribute('type', 'text'); 
                    }
                else{
                        passInput.setAttribute('type', 'password'); 
                    }
        
            });






       const user = islogin().then((res)=>{
        if(res == false){
    }
    else{
        location.href = "./user.php";
    }
    });
</script>