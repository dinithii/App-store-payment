<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href = "IWT/src/styles/stylesDev.css" rel = "stylesheet">

<title> App developer profile </title>

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
            </div>
        </div><br>


<div class="profile-container">
        <h3>Profile details</h3>
		<hr>
        <div class="profile-picture">
            <img src="/IWT/src/images/photodev.jpg" alt="Profile Picture">
        </div>
        <div class="profile-details">
		<label for="name"><b>Name 			:</b></label> <label for ="dname">Dinithi Perera</label><br><br>
	
	<label class for="email"><b>Email			:</b></label> <label for ="demail">din112@gmail.com</label><br><br>
		
	<label for="bday"><b>Date of Birth 		:</b></label> <label for ="dbday">10-09-1995</label><br><br>
	
	<label for="address"><b>Address 		:</b></label> <label for ="dadress">No. 553,Temple Road, Kadawatha</label><br><br>
		
	<label for="cno"><b>Contact No 		:</b></label> <label for ="dcno">0719856475</label><br><br>
			
			<button onclick ="document.getElementById('id01').style.display='block'" style="width:auto;" class ="edit" >Edit Profile Details</button>
<button class = "change22" onclick = "location.href = 'security.html'">  Change Password </button><br>
            
        </div>
    </div>






	<div id = "id01" class = "modal">
	<form class = "modal-content" name = "myform" onsubmit='return validate()' method = "POST">
	<div class="container">
			<h2>Profile Details</h2>
			<p>Update your profile details</p>
			
			<hr>

			<label for="name2">Name :</label><br>
			<input type ="text" placeholder="Enter your name" name="fname" class = "tt" id ="fname"  >
			<br>
			<br>

			<label for="email2">Email :</label><br>
			<input type ="email" placeholder="Enter your email" name="email" class = "tt" id ="email">
			<br>
			<br>
			
			<label for="bday2">Date of Birth :</label><br>
			<input type ="text" placeholder="Enter your birthday" name="bday" class = "tt" id ="bday">
			<br>
			<br>
			
			<label for="address">Address :</label><br>
			<input type ="text" placeholder="Enter your current address" name="address1" class = "tt" id ="address1">
			<br>
			<br>
			
			<label for="cno">Contact No :</label><br>
			<input type ="text"  placeholder="Enter your work phone number" name="contact" class = "tt" id ="contact"maxlength = "10">
			<br>
			<br>

			<br>
			<div class="clearfix">
			
			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			
			<button type="submit" class="save2">Save</button>
			
			
		</div>
		</form>
		</div>


		<footer>
		<hr>
            <h3 >Pixelmarket</h3></th> 
	</footer>
</html>