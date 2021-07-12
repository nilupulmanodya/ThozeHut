				<?php 
				require "php/connect.php";
	
					
	
	            	$sql1 = "SELECT * FROM cart WHERE user_name= '$username' ";
					$result1 = mysqli_query($conn, $sql1);
					?>

	<div class="maindiv">
		
					<h1 class="title1">
						My Cart 
					</h1>
			
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
											<p><b><?php echo $row2["price"]; ?></b></p>
										</td>
										<td>
											<p><b>Quentity</b></p><input class="table_input" gittype="text" placeholder="4">
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
	            

	            	


                    ----------
                    <?php
	session_start();
        if (isset($_SESSION['username'])) {
			$username = $_SESSION['username'];
            echo "$username";
                    
            }else{
				echo "nooo:";
			}
			?>