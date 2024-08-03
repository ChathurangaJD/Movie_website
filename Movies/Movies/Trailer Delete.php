<?php
	$vid=$_GET['vid'];

	$con=mysqli_connect('localhost','root','','movie nation');

	$query="delete from video where id = $vid";

	mysqli_query($con,$query);

	header('location:Admin Delete Trailer Menu.php');

?>