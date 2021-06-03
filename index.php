<!DOCTYPE html>
<html>
	<head>
		<title>ThozeHut</title>
		<!-- Link to CSS file -->
		<link rel="stylesheet" href="css/style.css">

		<!--This link needed only for nav bar in home page when inserting nav bar to another file link must include-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>

		</style>

	</head>
	<body>

		<!--session 0 strts here-->
		<div class="container">
			<!--navigation bar seccion start here-->
			<div class="navigation-bar" id="myTopnav">
				<a href="#">
					<img class="logo" src="images/those logo1.jpg">
				</a>
				<div class="search-container">
					<form style="background-color: #8998af;"action="#">
					  <input type="text" placeholder="Search.." name="search">
					  <button type="submit"><i style="background-color: #8998af;" class="fa fa-search"></i></button>
					</form>
				</div>

				<a class="tg" href="index.html">Home</a>
				<a class="tg" href="menu.html">Menu</a>
				<a class="tg" href="#">Stores</a>
				<a class="tg" href="#">Locations</a>
				<a class="tg" href="aboutus.html">About Us</a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars dd"></i>
				</a>

				<a href="#" style="float: right;">
					<img class="user-logo" src="">
				</a>
				<a class="tg_2" style="float: right;" href="login.html">User Account</a>
				<a href="#" style="float: right;">
					<img class="cart-logo" src="images/assets/usr.png">
				</a>
				

			</div>
			<!--navigation bar seccion end here-->
			
			
		</div>
		<!--session 0 ends here-->

		<!-- Session 1 starts here -->
		<div class="container session1">
			<div class = "session1_1"></div>
			<div class = "session1_2">
				<a href="">
					<img src="images/rider.png" alt="Delivery bicycle image">
				</a>
			</div>
		</div>
		

		<!-- Session 1 ends here -->

		<!-- Session 2 starts here-->
		<div class="container session2">
			<div class = "session2_1">
				<p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin-left: 20px;">Find Healthy And Favourite Foods Near You </p>
			</div>
			<div class = "session2_2">
				<a href="#"><img src="images/assets/Group 1191.png" alt="GooglePlay"></a>
				<a href="#"><img src="images/assets/Group 1192.png" alt="Appstore"></a>
			</div>
		</div>

		<!-- Session 2 endss here-->

		<!-- Session 3 starts here-->
		<div class="container session3">
			<div class="session3_0">
				<img src="images/assets/Group 1188.png" style="width: 105%; height: 100%;">
			
			</div>
			<div class="session3_0">
				<img src="images/assets/Group 1189.png" style="width: 100%; height: 102%;">
			</div>
			<div class="session3_0">
				<img src="images/assets/Group 1190.png" style="width: 108%; height: 100%;">
			</div>


		</div>
		<!-- Session 3 ends here-->

		<!-- footer starts here-->

		<div class="container footer">
			<div class="footer_1">
				<p><b>Hours :</b></p>
				
				<p>Mon-Fri: 8.00am - 9.00pm</p>
				<p>Sat : 8.00am - 6.00pm</p>
				<p>Sunday closed</p>
			
			</div>
			<div class="footer_1">
				<p><b>About :</b></p>
				
				<a href="#">ABOUT US</a><br>
				<a href="#">FEEDBACK</a><br>
				<a href="#">HOTLINE</a><br>
				<a href="#">LOCATION</a>

			</div>
			<div class="footer_1">
				<p><b>Find us on Social Media :</b></p>
				<a href="#"><img src="images/assets/social media.png"></a>

			</div>


		</div>

		<!--Footer ends here-->

		<script>
			/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
			function myFunction() {
			  var x = document.getElementById("myTopnav");
			  if (x.className === "navigation-bar") {
				x.className += " responsive";
			  } else {
				x.className = "navigation-bar";
			  }
			} 
			
			</script>

	</body>
</html>


