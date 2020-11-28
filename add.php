<?php 
	 $con = mysqli_connect('127.0.0.1','root','','dodo');
	$text_vstav = "INSERT INTO foods (name,img,price) VALUES ('{$_GET["name"]}','{$_GET["img"]}','{$_GET["price"]}')";

	 $zapros_vstav = mysqli_query($con, $text_vstav);
	 if ($con==false) {
	 	echo "ne podclucheno";
	 }
	 if ($zapros_vstav==false) {
	 	echo "ne podclucheno";
	 }
	 header("Location: index.php");
 ?>