<?php
	$oid=$_GET['oid'];

	$con=mysqli_connect('localhost','root','','movie nation');

	$query="delete from offers where id =$oid";

	mysqli_query($con,$query);

	header('location:Admin Delete Offer Menu.php');

?>