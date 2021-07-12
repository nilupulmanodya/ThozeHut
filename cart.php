<?php
session_start();
        if (isset($_SESSION['username'])) {
			$username = $_SESSION['username'];
            /*echo "$username";
                    
            }else{
				echo "nooo:";*/
			}
			?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>View Cart</title>

</head>
<body>




	
<!--session 0 strts here-->
<div class="container">
<?php
include_once 'includes/navbar.php';
?>
	
</div>
<!--session 0 ends here-->








	
	
	<div class="maindiv">
		
		<h1 class="title1">
			My Cart 
		</h1>

		<div>
			<form method="post">
				<table class="center table_1">

			
				<?php 
				require "php/connect.php";
	
					
	
	            	$sql1 = "SELECT * FROM cart WHERE user_name= '$username' ";
					$result1 = mysqli_query($conn, $sql1);
					?>


					<div>
						<form method="post">
							<table class="center table_1">
					<?php
					
					if (mysqli_num_rows($result1) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result1)) {
							
							$item_id = $row["item_id"];

							$sql2 = "SELECT * FROM items WHERE item_id= $item_id";
							$result2 = mysqli_query($conn, $sql2);

							if (mysqli_num_rows($result1) > 0) {


								// output data of each row
								while($row2 = mysqli_fetch_assoc($result2)) {
									?>

									<tr>
										<td>
										<img class="tbl_img"src="images/food/<?php echo $row2["image_src"]; ?>" alt="No image forund">
										</td>	
										<td>
											<p><b><?php echo $row2["item_name"];?></b></p>
										</td>
										<td>
											<p><b>Rs.<?php echo $row2["price"]; ?></b></p>
										</td>
										<td>
											<p><b>Quentity</b></p><input class="table_input" gittype="text" placeholder="1">
										</td>
									</tr>
									
									
									
									
									<?php
								}

								}else{
									echo "no connects to cart items";
								}
							
						}
					
					}else{
						echo "no user in cart";
					}
							?>
	            
					
					


				</table>
				<br>

				<div style="text-align:center;">
					<!--Calculation-->
					<input type="submit" value="Check Price" >
					<br><br>
					<form>
						<table class="center">
							<tr>
								<td>
									<b>
									Sub Total
									</b>
								</td>
								<td><b>
									Rs.100
									</b>
								</td>
							</tr>
							<tr>
								<td>
									<b>
									Delivery Fee
									</b>
								</td>
								<td>
									<b>
									Rs.50
									</b>
								</td>
							</tr>
							<tr>
								<td>
									<b>
									Total Price
									</b>
								</td>
								<td>
									<b>
									Rs.150
									</b>
								</td>
							</tr>
							<tr>
								<td>
									
								</td>
								<td>
									
								</td>
							</tr>
							<tr>
								<td>
									<b>
									Enter Your Location
									</b>
								</td>
								<td >
									<textarea style="height: 100px;">
										
									</textarea>
									
								</td>
							</tr>
							<tr>
								<td>
									<b>
									Contact Number
									</b>
								</td>
								<td>
									<input type="text">
									
								</td>
							</tr>


						</table>
						<br>
							<input type="submit" value="Order Now" >
					</form>
					

		
				</div>
				
			</form>
		</div>
		<br>
		<br>
		
</div>
<?php
include_once 'includes/footer.php';
?>


</body>
</html>
?>