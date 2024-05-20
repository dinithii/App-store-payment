<?php
//Linking the configuration file
include 'config.php';

$cNumber = isset($_POST['cardNumber']) ? $_POST['cardNumber'] : '';
$name = isset($_POST['cardName']) ? $_POST['cardName'] : '';
$exDate = isset($_POST['expDate']) ? $_POST['expDate'] : '';
$cvv = isset($_POST['cvv']) ? $_POST['cvv'] : '';

	// Insert the payment information into the database
	$sql = "INSERT INTO payment(`number`,`name`,`date`,`cvv`) VALUES ('$cNumber','$name','$exDate','$cvv')";
		if($conn->query($sql)){
            header('location:/crud/Payment_admin.php');
		}
		else{
			echo "Error:".$conn->error;
		}

$conn->close(); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Card payment page</title>
	<link rel="stylesheet" href="IWT/src/styles/styles.css">
	<script src="/crud/IWT/src/js/myScript"></script>
</head>
<body>
<link href="https://fonts.cdnfonts.com/css/circular-std" rel="stylesheet">
        <style>
            @import url('https://fonts.cdnfonts.com/css/circular-std');
        </style>
        
        <div id="naviBar">
            <table class="tbl1">
                <tr>
                    <th><h2>Pixelmarket</h2></th>
                    <th><a href="index.html">Home</a></th>
                    <th><a href="pages/allApps.html">Explore</a></th>
                    <th><a href="pages/contactUs.html">Contact Us</a></th>
                    <th><a href="index.html">Settings</a></th>
                    <th id="login"><a href="index.html">Login | Register</a></th>  
                </tr>
            </table>
        </div>
        
        
        <div class="appBanner">
            <div class="appBannerChild">
                <h2>Pixelmarket Online App Store</h2>
                <p>Welcome to our online app store, where you can discover a world of <br>incredible applications for all 
                    your devices. Our website provides a seamless platform to explore and <br>download a wide range of apps 
                    that cater to your various needs and interests.</p>
            </div>
        </div><br>
    <center>
	<h3>Add credit card or debit card details</h3><br>
    </center>
	<div class="form1">
	<h3>Accepted cards</h3><br>



	<button>
    <img src="IWT/src/images/visaCARD.png" alt="Payment methods" width="100" height="60" />
    </button> 
	<button class="cardIcon">
    <img src="IWT/src/images/MasterCARD.png" alt="Payment methods"  width="100" height="60">
    </button>
	<button class="cardIcon">
    <img src="IWT/src/images/amexCARD.png" alt="Payment methods"  width="100" height="60">
    </button>
	<button class="cardIcon">
    <img src="IWT/src/images/DiscoverCARD.png" alt="Payment methods" width="100" height="60">
    </button><br><br>

	<form id="paymentForm" name="paymentForm" onsubmit="return validateForm(event)" method="POST">
	
	<label for="cNumber">Card number</label><br>
	<input type="text" id="cNumber" name="cardNumber" placeholder="Card Number" required><br><br>
	
	<label for="cname">Cardholder's name</label><br>
	<input type="text" id="cname" name="cardName" placeholder="Cardholder's name" required><br><br>
	
	<label for="expDate">Expiry date</label><br>
	<input type="text" id="expDate" name="expDate" placeholder="MM/YY" required><br><br>
	
	<label for="cvv">CVV</label><br>
	<input type="text" id="cvv" name="cvv" placeholder="CVV" required><br><br><br>
	
	<input type="checkbox" id="check1" name="check1">
	<label for="check1">Save card details for future purchases.</label><br>
	<input type="checkbox" id="check2" name="check2">
	<label for="check2">I agree to the Terms of Services. The privacy notice describes how your data is handled.</label><br><br>
	
	<button class="cnclBtn" type="button">Cancel</button>
	<input type="submit" name="subBtn" value="Pay now">
	
	</form>
	</div>
    
<footer>
            <table class="tbl1">
                <tr>
                    <th><h3 >Pixelmarket</h3></th> 
                    <th><h3>Find Us On</h3></th>
                </tr>
                <tr height="px | %">
                    <th><a class="footertext" href="pages/contactUs.html">Contact Us</a></th>
                    <th></th>
                </tr>
                <tr>
                    <th><a class="footertext" href="pages/contactUs.html">Manage your account</a></th>
                </tr>
                <tr>
                    <th><a class="footertext" href="pages/contactUs.html">Newsroom</a></th>
                </tr>
                <tr>
                    <th><a class="footertext" href="pages/contactUs.html">Report a bug</a></th>
                </tr>
                <tr>
                    <th><a class="footertext" href="pages/contactUs.html">Privacy</a></th>
                </tr>
                <tr>
                    <th><a class="footertext" href="pages/contactUs.html">Payment Security</a></th>
                </tr>
            </table>
        </footer>
	</body>
</html>