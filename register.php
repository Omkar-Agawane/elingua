<?php require 'header.php';
?>

<div class="index">
    <div class="container form  sign-container">
        <h3 class="middle">SignUp</h3>
        <p class="middle">Welcome to E-lingua hub!</p>
        <form onsubmit="registerUser(event)">
            <div class="half">
                    <input required  placeholder="First Name" name="username" type="text" >
                    <input required  placeholder="Surname" name="surname" type="text">
           </div>
                    <input required  placeholder="Email" name="email" type="email" >
                    <input required  placeholder="Address" name="addr" type="text" >
                    <input required  placeholder="Phone" name="phone" type="tel"   pattern="[0-9]{10}">
            <div class="half">
                    <input required  placeholder="City" name="city" type="text">
                    <input required  placeholder="Pin code" name="pin" require type="text">
           </div>
                <br>
                <button class="sign-btn" type="submit">Register</button>

        </form>
    </div>

</div>

<?php require 'footer.php' ; ?>


<script>
</script>
