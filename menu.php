<!DOCTYPE html>
<html>
	<head>

		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/style.css">



	<title>foodsr</title>
	</head>
	<body>
		
		<!--session 0 strts here-->
		<div class="container">
			<!--navigation bar seccion start here-->
			<nav class="navigation-bar" id="myTopnav">
				<a href="#">
					<img class="logo" src="images/those logo1.jpg">
				</a>

				<a href="#" style="float: right;">
					<img class="user-logo" src="images/assets/cart.png">
				</a>
				<a class="tg_2" style="float: right;" href="#">User Account</a>
				<a href="#" style="float: right;">
					<img class="cart-logo" src="images/assets/usr.png">
				</a>

				<div class="search-container">
					<form style="background-color: #8998af;"action="#">
					  <input type="text" placeholder="Search.." name="search">
					  <button type="submit"><i style="background-color: transparent; padding-left: 40%" class="fa fa-search"></i></button></input>
					</form>
				</div>

				
				

				<a class="tg" href="index.php">Home</a>
				<a class="tg" href="#">Menu</a>
				<a class="tg" href="#">Stores</a>
				<a class="tg" href="#">Offers</a>
				<a class="tg" href="#">About Us</a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
  				  <i class="fa fa-bars"></i>
 				 </a>
			</nav>
			<!--navigation bar seccion end here-->
			
			
		</div>
		<!--session 0 ends here-->

		<!--session1 starts here-->
		<div class="container">
			<div class="menus">
				<div class="menuitem"><a  onclick="showTab(1);" id="tab-1" class="active">Foods</a></div>
				<div class="menuitem"><a  onclick="showTab(2);" id="tab-2" class="item">Drinks</a></div>
				<div class="menuitem"><a  onclick="showTab(3);" id="tab-3" class="item"><i></i>Desserts</a></div>
			</div>
		</div>


		


		<!--session1 starts here-->
		<div class="container show" id="tabcontent-1">
			<div class="board">
				<div class="row">
				
					<?php 
	
					require "php/connect.php";
	
	            	$sql1 = "SELECT * FROM items WHERE category='foods'";
	            	$result1 = mysqli_query($conn, $sql1);
	            
	            	if (mysqli_num_rows($result1) > 0) {
	            		$x = mysqli_num_rows($result1);

	              	// output data of each row
	              	while($row1 = mysqli_fetch_assoc($result1)) {
	              		$i++;
	            	?>
	            
	            
					<div class="column">	
						<div class="card">
  							<img src="images/<?php echo $row1["image_src"]; ?>" alt="Denim Jeans" style="width:100%; background-color: transparent;">
  							<div class="detail">
  								<div class="name">
  									<h1 style="margin-bottom:0px; margin-top: 15px; "><?php echo $row1["item_name"]; ?></h1>	
  								</div>
  								<div class="price" >
  									<p style="margin-bottom:0px; padding: 0 20%px;float: right;" ><?php echo $row1["price"] ?></p>
  								</div>
  							</div>
  							<p><button ><img style="background-color: transparent; padding-right: 5%; width: 15px;" src="images/assets/cart.png">Add to Cart</button></p>
						</div>
					</div>	              
	            <?php
	                  if ($i%3 == 0) {
	                    echo '</div>';
	                    echo '<div class="row">';
	                  }
	            
	              }
	            } else {
	              echo "0 results";
	            }
	            
	            
	            ?> 

     		</div>		 
     	</div>
     </div>

		<!--session2 starts here-->
		<div class="container hide" id="tabcontent-2">
			<div class="board">
				<div class="row">
				
					<?php 
	
					
	
	            	$sql2 = "SELECT * FROM items WHERE category='drinks'";
	            	$result2 = mysqli_query($conn, $sql2);
	            
	            	if (mysqli_num_rows($result2) > 0) {
	              	// output data of each row
	              	while($row2 = mysqli_fetch_assoc($result2)) {
	              		$j++;
	            	?>
	            
	            
					<div class="column">	
						<div class="card">
  							<img src="images/<?php echo $row2["image_src"]; ?>" alt="Denim Jeans" style="width:100%; background-color: transparent;">
  							<div class="detail">
  								<div class="name">
  									<h1 style="margin-bottom:0px; margin-top: 15px; "><?php echo $row2["item_name"]; ?></h1>	
  								</div>
  								<div class="price" >
  									<p style="margin-bottom:0px; padding: 0 20%px;float: right;" ><?php echo $row2["price"] ?></p>
  								</div>
  							</div>
  							<p><button ><img style="background-color: transparent; padding-right: 5%; width: 15px;" src="images/assets/cart.png">Add to Cart</button></p>
						</div>
					</div>	              
	            <?php
	                  if ($j%3 == 0) {
	                    echo '</div>';
	                    echo '<div class="row">';
	                  }
	            
	              }
	            } else {
	              echo "0 results";
	            }
	            
	            
	            ?> 

     		</div>		 
     	</div>
     </div>

		<!--session starts here-->
		<div class="container hide" id="tabcontent-3">
			<div class="board">
				<div class="row">
				
					<?php 
	
					
	
	            	$sql3 = "SELECT * FROM items WHERE category='desserts'";
	            	$result3 = mysqli_query($conn, $sql3);
	            
	            	if (mysqli_num_rows($result3) > 0) {
	              	// output data of each row
	              	while($row3 = mysqli_fetch_assoc($result3)) {
	              		$k++;
	            	?>
	            
	            
					<div class="column">	
						<div class="card">
  							<img src="images/<?php echo $row3["image_src"]; ?>" alt="Denim Jeans" style="width:100%; background-color: transparent;">
  							<div class="detail">
  								<div class="name">
  									<h1 style="margin-bottom:0px; margin-top: 15px; "><?php echo $row3["item_name"]; ?></h1>	
  								</div>
  								<div class="price" >
  									<p style="margin-bottom:0px; padding: 0 20%px;float: right;" ><?php echo $row3["price"] ?></p>
  								</div>
  							</div>
  							<p><button ><img style="background-color: transparent; padding-right: 5%; width: 15px;" src="images/assets/cart.png">Add to Cart</button></p>
						</div>
					</div>	              
	            <?php
	                  if ($k%3 == 0) {
	                    echo '</div>';
	                    echo '<div class="row">';
	                  }
	            
	              }
	            } else {
	              echo "0 results";
	            }
	            
	            
	            ?> 

     		</div>		 
     	</div>
     </div>

		<div class="container footer">
			<div class="footer_1">
				<p><b>Hours :</b></p>
				<br>
				<p>Mon-Fri: 8.00am - 9.00pm</p>
				<p>Sat : 8.00am - 6.00pm</p>
				<p>Sunday closed</p>
			
			</div>
			<div class="footer_1">
				<p><b>About :</b></p>
				<br>
				<a href="#">ABOUT US</a><br><br>
				<a href="#">FEEDBACK</a><br><br>
				<a href="#">HOTLINE</a><br><br>
				<a href="#">LOCATION</a>

			</div>
			<div class="footer_1">
				<p><b>Find us on Social Media :</b></p>
				<a href="#"><img src="images/assets/fb.png"></a>
				<a href="#"><img src="images/assets/skp.png"></a>
				<a href="#"><img src="images/assets/snp.png"></a>
				<a href="#"><img src="images/assets/whatsp.png"></a>
				<a href="#"><img src="images/assets/inst.jpeg"></a>
			</div>


		</div>



		<script>
			function myFunction() {
  				var x = document.getElementById("myTopnav");
 				if (x.className === "navigation-bar") {
    				x.className += " responsive";
 				} else {
    				x.className = "navigation-bar";
  				}
			}

			
		</script>
		<script>
			function showTab(tabNumber) {
	console.log(tabNumber);
	document.getElementsByClassName("show")[0].classList.add("hide");
	document.getElementsByClassName("show")[0].classList.remove("show");
	document.getElementById("tabcontent-" + tabNumber).classList.add("show");
	document.getElementById("tabcontent-" + tabNumber).classList.remove("hide");
	document.getElementsByClassName("active")[0].classList.remove("active");
	document.getElementById("tab-" + tabNumber).classList.add("active");

}


		</script>

	</body>
</html>
