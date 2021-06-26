<?php 

session_start();

if ($_SESSION['status']) {
	if ($_SESSION['status'] == "Block") {
		header("Location:../login.php?error=blocked");
	}
}