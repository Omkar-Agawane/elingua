<?php require 'header.php';

$course_id = $_GET['id'];
$coursename = $_GET['title'];
$amt = $_GET['amt'];
$opted_user = $_REQUEST['opted_user'];
if(!isset($_SESSION['user'])){
    echo "<script> location.href='./register.php'; </script>";
    exit;
}

$temp = $_SESSION['user'];
$username = $_SESSION['userName'];
    require './fetch/paymentfetch.php';
?>
<div class="payment container">
    <p> You have opted for below course, please make a payment & enjoy learning</p> <br>
    <h1><?php echo $coursename; ?></h1><br>
    <button id="rzp-button1" class="secondary-btn"type="submit">Pay</button>
</div>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
 username = "<?php echo $email; ?>"; 
 courseid = "<?php echo $course_id; ?>"; 
 coursename = "<?php echo $coursename; ?>"; 
 opted = "<?php echo $opted_user; ?>"; 
 amt = "<?php echo $amt; ?>";
var options = {
    "key": "rzp_live_UXJRhtjcdNLfXA", // Enter the Key ID generated from the Dashboard
    "amount": "500", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Elinguahub",
    "description": "Course Payment",
    "image": "https://localhost/elinguahub/res/logo.svg",
    "handler": function (response){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "paymentconfirmation.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("payment="+response.razorpay_payment_id+"&username="+username+"&courseid="+courseid+"&coursename="+coursename+"&opted="+opted+"&amt="+amt);
        alert("Payment done, Thank you!");
        window.location.href = "./user.php";
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9999999999"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#e69113"
    }
};
options.amount = amt*100;
options.prefill.name = "<?php echo $temp; ?>";
options.prefill.email =  "<?php echo $email; ?>";
options.prefill.contact =    "<?php echo $phone; ?>";


var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

<?php require 'footer.php'; ?>