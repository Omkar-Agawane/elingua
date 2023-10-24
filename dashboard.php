<?php
require 'header.php';
?>



<h1><?php echo $_SESSION["name"];  ?></h1>
<div class="container">
        <div class="dash">            
       <a href="new.php"> <button class="button-dash">New Bill</button></a>
        <button class="button-dash">New Quotation</button>
        <button class="button-dash">Pending Bills</button>
        <button class="button-dash">New Customer</button>
        <button class="button-dash">Customer</button>
        <button class="button-dash">Settings</button>
        </div>
        
    </div>
   

<script>


</script>
<?php require 'footer.php' ; ?>
