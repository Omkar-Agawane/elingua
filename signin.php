<?php require 'header.php';
?>

<div class=" index">
    <div class="container sign-container">
        <section>

            <form onsubmit="getLogin(event)">
            <h3 class="middle">Sign In</h3>
                <input placeholder="Email/Username" name="username" type="email" >
                <input placeholder="passw*rd" name="password" type="password">
                <a class="alt-link" href="<?php echo WEBSITE; ?>/forgotpassword.php">Forgot password</a>
                <button class="sign-btn"type="submit">Sign in</button>
            </form>
        </section>
    </div>

</div>




<?php require 'footer.php' ; ?>

<script>
       const user = islogin().then((res)=>{
        if(res == false){
    }
    else{
        location.href = "./user.php";
    }
    });
</script>