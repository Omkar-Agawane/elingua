<?php require 'header.php' ; 
?> 
 <div class="container-login">
 <img src="../res/logo.svg"  alt="">
 <h3>Log in to the site manager </h3>
<p class="alert"> </p>
                <form method="post" onsubmit="getLogin(event)">
                    <div class="">
                        <div class="icontainer">
                            <i class="fa fa-user icon"></i> 
                            <input class="" placeholder="Login Id" name="username" required>        
                        </div>  
                        <div class="icontainer">
                            <i class="fa fa-eye icon" id="showpass"></i> 
                            <input type="password" class="" placeholder="Passw*rd" id="pass" name="password" required>
                        </div>                   
                    <button class="login" style="float:right" id="btn" type="submit">Log in</button>               
                  </div>                 
                </form>  
                </div>
              
              <?php require 'footer.php'; ?>
 
        <script>
          islogin().then((res)=>{
                if(res== false){

                }
                else{
                    location.href= './dashboard.php';
                }
             });
          
        const getLogin = (e)=>{
            e.preventDefault();
            const formData = new FormData(e.target);
 
            fetch("./login.php",{
                method: "POST",
                mode: "same-origin",
                body:formData
            }).then((res) =>{
                return res.json();
            } ).then((data)=>{
                if(data == "err"){
                    alert("Wrong creds, try again");
                }
                else{
                    sessionStorage.setItem("key1", data.key1);
                    sessionStorage.setItem("key2", data.key2);
                    sessionStorage.setItem("key3", data.key3);
                    location.href= "./dashboard.php";
                }
            })
        }

       


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
</script>