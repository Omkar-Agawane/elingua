<?php require 'header.php' ; 
require './fetch/userfetch.php';
$id= $_REQUEST['id'];
?>

<div class=" index" style="background-color:#E2E2E3 ;">
    <div class="container" >
        <div class="teaf-card">
                <div class="card-content">    
                    <hr>
                    <div class="container">
                   
                    <form  class="container"method="post" action="./form/personalrequest.php?id=<?php echo $id;?>&user=<?php echo $_SESSION['userName']?>">
                    <lable class="lable">Date Preferance for one to one learning</lable>
                    <br> <br> 
                        <div class="half">
                            <input  placeholder="From" name="start" onfocus="(this.type='date')" required>
                            <input  placeholder="upto" name="end" onfocus="(this.type='date')" required>
                         </div>        
                            <input  placeholder="Your Message" name="message" type="text" required>
                        
                <br>
                <button class="sign-btn"  type="submit">Send Request</button>
                    
        </form>
        <br> <br> <br>

                    </div>
                               
            </div>
         </div>
    
          
    </div>
    
</div>
     

        
        
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        







<script>
</script>
<?php require 'footer.php' ; ?>
